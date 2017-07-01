<?php
namespace Home\Controller;
use Common\Controller\CommonController;
class CartController extends CommonController{
	public function index(){

		$this->is_login();
		$b=D('cart')->where(array('uid'=>$_SESSION['user_id']))->select();
		$this->assign('g',$b);
	
		
		
		
		
		$this->display();
	}
	public function add(){
		$flag = 0;
		$msg = '';
		if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
			echo json_encode(array('flag'=>0,'msg'=>"请先登录再进行操作"));exit;
		}
		//1接受GET参数
		$data['pid'] = I('get.id');
		$data['num']=I('get.count');
		$data['uid']=$_SESSION['user_id'];
		
		$val=D('product')->where(array('p_id' =>$data['pid']))->find();
		$data['price']=$val['price'];
		$data['thumb']=$val['thumb'];
		$data['p_name']=$val['p_name'];
		//先查是否有相同的记录，如果有，则执行更新操作，没有则插入
		$sav=D('cart')->where(array('pid'=>$data['pid']))->find();
		
		if($sav){
		    $ss=D('cart')->where(array('id'=>$sav['id']))->save(array('num'=>$data['num']));
		    $flag = 1;
		}else{
			//2插入数据到表cart
			$result=D('cart')->add($data);
			if($result){
				$flag=1;
			}else{
				$flag=0;
				$msg = '加入购物车失败!';
			}
		}
		
		echo json_encode(array('flag'=>$flag,'msg'=>$msg));
	}
	
	public function update_cart(){
		//1获取product_id ,cart_id,count,uid
		$cart['pid']=I('get.product_id');
		$cart['id']=I('get.cart_id');
		$cart['num']=I('get.count');
		$cart['uid']=$_SESSION['user_id'];
		//2更新表cart对应的产品 数量
		$a=D('cart')->where(array('pid'=>$cart['pid'],'uid'=>$cart['uid'],'id'=>$cart['id']))
		->save(array('num'=>$cart['num']));
		
		$msg = '';
		//3返回值
		if($a){
			$status=1;
		}else{
			$status=0;
			$msg = '更新失败';
		}
		
		echo json_encode(array('status'=>$status,'msg'=>$msg));
	}
	//删除单个
	public function cart_del(){
		$cart_id = I('get.cart_id');
		D('cart')->where(array('id'=>$cart_id))->delete();
		echo json_encode('');
	
	}
	//删除多个$cart_id = 23,46,25
	public function cart_del_muti(){
		$cart_ids = I('get.cart_id');
		
		D('cart')->where('id in ('.$cart_ids.')')->delete();
		echo json_encode(array('status'=>1));
	}

}
				