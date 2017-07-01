<?php
namespace Home\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController {
    public function index(){
    	$product_model = D('product');
    	$product_tuijian = $product_model->where(array('stick'=>1))->limit(4)->select();
    	//调用Model中的方法：
    	$product_shuigu1= D('IndexProduct')->get_index_product(1,1,4);
    	$product_shuigu2= D('index_product')->get_index_product(1,2,3);
  		$product_rou=D('index_product')->get_index_product(2,1,3);
  		$product_rou2=D('index_product')->get_index_product(2,2,3);
  		$product_lingshi1=D('index_product')->get_index_product(3,1,2);
  		$product_lingshi2=D('index_product')->get_index_product(3,2,3);
  		$product_lingshi3=D('index_product')->get_index_product(3,3,3);
  		$product_liangyou1=D('index_product')->get_index_product(4,1,2);
  		$product_liangyou2=D('index_product')->get_index_product(4,2,2);
  		$product_liangyou3=D('index_product')->get_index_product(4,3,2);
  		$product_liangyou4=D('index_product')->get_index_product(4,4,2);
  		$product_chaye2=D('index_product')->get_index_product(5,2,3);
  		$product_chaye3=D('index_product')->get_index_product(5,3,4);
  		$product_chaye4=D('index_product')->get_index_product(5,4,3);
  		
  		
  		//assign
  		
  		$this->assign('a',$product_tuijian);
		$this->assign('c',$product_shuigu1);
		$this->assign('d',$product_shuigu2);
		$this->assign('r1',$product_rou);
		$this->assign('r2',$product_rou2);
		$this->assign('ls1',$product_lingshi1);
		$this->assign('ls2',$product_lingshi2);
		$this->assign('ls3',$product_lingshi3);
		$this->assign('ly1',$product_liangyou1);
		$this->assign('ly2',$product_liangyou2);
		$this->assign('ly3',$product_liangyou3);
		$this->assign('ly4',$product_liangyou4);
		$this->assign('cy2',$product_chaye2);
		$this->assign('cy3',$product_chaye3);
		$this->assign('cy4',$product_chaye4);
		//网站渲染
		$this->display();
    }
    //获取类的所有子类
    public function get_category_order($arr,$id){
    	$new_arr = array();
    	foreach($arr as $val){
    		if($val['pid'] == $id){
    			$val['child'] = $this->get_category_order($arr,$val['id']);
    			$new_arr[$val['id']] = $val;
    		}
    	}
    	return $new_arr;
    }
public function login(){
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		$this->redirect(U('Home/Index/index'),array(),0,'已登录');
	}
		
	if(isset($_POST['username']) && isset($_POST['password'])){
		$url = I('post.referer');
		$psd=md5($_POST['password']);
		$user=D('User')->where(array('username'=>$_POST['username']))->find();
		
		if ($user){
			if($psd==$user['password']){
				$_SESSION['user_id']=$user['id'];
				$_SESSION['username']=$user['username'];
				$this->success('登录成功',$url);
				}else{
					$this->error('密码错误',U('Index/login'));}
		}else {$this->error('用户名错误',U('Index/login'));}
	}
	
	//echo $user->getLastSql();die;
	
	
	

	$this->display();
}    
// 注册
public  function register(){
	//dump($_POST);die;
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		$this->redirect(U('Home/Index/index'),array(),0,'已登录');
	}
	$user=D('User');//dump($user);die;
	if(isset($_POST['txtname'])){
		$data['username']=$_POST['txtname'];		
		
			$data['password']=$_POST['txtpwd1'];
			$data['txtpwd2']=$_POST['txtpwd2'];
			if(!$user->create($data) ){
				$this->error('注册失败'.$user->getError(),U('Index/register'));
			}else{
				$user->add();
			//	echo $user->getLastSql();die;
				$_SESSION['user_id']=$user['id'];
				$_SESSION['username']=$user['username'];
				$this->success('注册成功',U('Index/index'));
			}
	
		}	
	
	$this->display();
}

public function check_username(){
	$name= I("post.name");
	$username = I("post.param");
	$user = D('user')->where(array('username'=>$username))->find();
	if($user!=false){
		$return = array(
				'status' => 'n',
				'info'   => '用户名已存在',
		);
	}else{
		$return = array(
				'status' => 'y',
				'info'   => '可以注册',
		);
	}
	echo json_encode($return);
}

public  function logout(){

	session_destroy();
$this->success('退出成功',$_SERVER['HTTP_REFERER']);


//$this->display();

}


}
