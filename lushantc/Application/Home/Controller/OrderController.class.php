<?php
namespace Home\Controller;
use Common\Controller\CommonController;
class OrderController extends CommonController{
	public function __construct(){
		parent::__construct();
		$this->is_login();
	}
	
	public function order_submit(){
		
		//dump($_SESSION);die;
		$area = new \Home\Controller\AreasController;
		$pro = $area->getProvince();
		$sa=$area->show_addr();
		$b = $sa['default_address_id'];
		unset($sa['default_address_id']);
		$cd=$area->get_default;
		if(IS_POST){
			$id1=$_POST['chkcart'];
			$id2=implode(',', $id1);
			$_SESSION['cart_ids'] = $id2;
		}elseif (IS_GET){
			$id2=I('get.id');	
			$_SESSION['cart_ids']=$id2;
			$_SESSION['cart_ids_num']=I('get.count');
			}
		else{ 
			$id2 = $_SESSION['cart_ids'];
		}
		
		if(!isset($_SESSION['cart_ids'])){
			header("Content-type: text/html; charset=utf-8");
			redirect('/', 3, '参数错误，页面跳转中...');
		} 
		//dump($id2);die;
		if (IS_GET){
			$num=I('get.count');
			$product = M('product')->find($id2);
			$product['num']=$num;
			$tp = $product['sale_price']*$num;
			
			$jie = array($product);
		}
		else {
		$jie=$this->get_cart_products();
		
		//dump($id2);die;
		$tp = 0;
		foreach($jie as $val){
		$tp =$tp+$val['num']*$val['price'];	
		}
		}
		$this->assign('b',$b);
		$this->assign('tpt',$tp);
		$this->assign('jiesuan',$jie);
		$this->assign('p',$pro);
		$this->assign('ep',$sa);
		$this->display();
	}
	//插入地址	
	public function get_addr(){ 
		$addr['uid']=$_SESSION['user_id'];
		$addr['deliver']=$_POST['txtName'];
		$addr['mobile']=$_POST['txtMobile'];
		$addr['province']=$_POST['selProvince'];
		$addr['city']=$_POST['selCity'];
		$addr['region']=$_POST['selCountry'];//区
		$addr['area']=$_POST['txtAddress'];//街道地址
		
		//$addr['town']=$_POST['selTown'];
		$addr['tel']=$_POST['txtTel'];
		$addr['default']=$_POST['chkIsDefult'];
		$addr['postcode']=$_POST['txtPostCode'];
		if($addr['default']==1){
			//更新条件是default = 1的这个条记录的default=0并且UID=46
			//$data = array('default'=>0);
			$data['default'] = 0;
			D('user_address')->where(array('default'=>1,'uid'=>$addr['uid']))->save($data);
		}
		
		D('user_address')->add($addr);
		$url = $_SERVER['HTTP_REFERER'];
		redirect("$url", 0, '页面跳转中...');
	}

		public function add_order(){
			//dump($_SESSION);die;
			
			if(IS_POST){
			 $a=$this->get_cart_products();
				 if(count($a)==0){
			 		header("Content-type: text/html; charset=utf-8");
			 		redirect('/', 3, '参数错误，页面跳转中...');
			 	}
				$ca=I('post.address_id');
				$sn=time().rand(1000, 9999);
				$arr=array('uid'=>$_SESSION['user_id'],'address_id'=>$ca,
						'status'=>1,'delete'=>0,'sn'=>$sn,'create_time'=>time(),'total'=>I('post.total_product_price'));
				D('order')->add($arr);//用户订单添加
				foreach ($a as $b){
				$arr1=array('p_name'=>$b['p_name'],'pid'=>$b['pid'],'num'=>$b['num'],'price'=>$b['price'],
						'order_sn'=>$sn,'thumb'=>$b['thumb']);
			//dump($arr1);die;
			
				D('order_detail')->add($arr1);	}	//订单详情
			//echo D('order_detail')->getLastSql();die;
			//删除购物车	
		D('cart')->where(array('uid'=>$_SESSION['user_id'], 'id'=> array('in',$_SESSION['cart_ids'])))->delete();
			$_SESSION['cart_ids'] = 0;$_SESSION['cart_ids_num'] = 0;
				unset($_SESSION['cart_ids'],$_SESSION['cart_ids_num']);
				header("Content-type: text/html; charset=utf-8");
				redirect('/home/Order/order_payment?id='.$sn, 0, '页面跳转中...');
			}
		}
		
		public function order_payment(){
				$order_sn = I('get.id');
				$opd=D('order')->where(array('sn'=>$order_sn))->find();
				$this->assign('p',$opd);
				$this->display();
			
		}
		
		public function get_cart_products(){
			if(isset($_SESSION['cart_ids_num']) && $_SESSION['cart_ids_num']>0){
				$a=D('cart')->where(array('uid'=>$_SESSION['user_id'], 'id'=> array('in',$_SESSION['cart_ids'])))->select();
			}else{
				$product = M('product')->find($_SESSION['cart_ids']);
				$product['num'] = $_SESSION['cart_ids_num'];
				$a  = array($product);
			}
			
			return $a;
		}
		
		public function order_cancel(){
			$sn_get=I('get.id');
			$del['status']=6;
			$msg = '';
			D('order')->where(array('sn'=>$sn_get))->save($del);
			//echo D('order')->getLastSql();die;
			
			
			echo json_encode(array('status'=>1,'msg'=>'订单取消成功','url'=>$_SERVER['HTTP_REFERER']));
		}
		
		public function order_confirm_batch(){
			$ids = I('post.chkNumber');
			$idstr = implode(',',$ids);
			if(empty($idstr)){
				$status = 0;//?
				$msg = '请至少选择一项订单';
				echo json_encode(array('status'=>$status,'msg'=>$msg,'url'=>$_SERVER['HTTP_REFERER']));
				exit;
			}
			$sn_post=D('order')->where(array('sn'=>array('in',$idstr)))->select();
			
			$weifukuang = '';
			foreach($sn_post as $spo){
				if($spo['status']>2){
					$spo['status']=5;
					D('order')->where(array('sn'=>$spo['sn']))->save($spo);
					
				}else{
						$weifukuang = $weifukuang.$spo['sn'].',';
						}
			
			}
			
			$weifukuang = substr($weifukuang,0,-1);
			$status = 1;
			$msg = '收货成功';
			if(!empty($weifukuang)){
				$msg = $msg.'其中订单'.$weifukuang.'未付款不做处理';
			}
			if($weifukuang == $idstr){
				$status = 0;
				$msg = '全部订单未付款';
			}
				//echo D('order')->getLastSql();die;
			//$msg = '收货成功';
				
			echo json_encode(array('status'=>$status,'msg'=>$msg,'url'=>$_SERVER['HTTP_REFERER']));
		}
	
		
}       