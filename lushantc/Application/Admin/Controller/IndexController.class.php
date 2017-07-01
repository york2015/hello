<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
	//判断是否登录，没登录则跳到登录页面
	public function is_login(){
		if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])){
			return true;
		}else{
			$this->redirect(U('Admin/Index/login'),array(),0,'请登录');
		}
	}
	
    public function index(){
    	$this->is_login();
		//网站渲染
		$this->display();
    }
    //获取类的所有子类
   
public function login(){
	if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])){
		$this->redirect(U('Admin/Index/index'),array(),0,'已登录');
	}
		
	if(isset($_POST['username']) && isset($_POST['password'])){
		$url = I('post.referer');
		$psd=md5($_POST['password']);
		$user=D('User')->where(array('username'=>$_POST['username'],'status'=>2))->find();
		if ($user){
			if($psd==$user['password']){
				$_SESSION['admin_id']=$user['id'];
				$_SESSION['adminusername']=$user['username'];
				$this->success('登录成功',U('Index/index'));die;
				}else{
					$this->error('密码错误',U('Index/login'));}die;
		}else {$this->error('用户名错误',U('Index/login'));die;}
	}
	
	//echo $user->getLastSql();die;
	
	
	

	$this->display();
}    


public  function logout(){

	session_destroy();
$this->success('退出成功',$_SERVER['HTTP_REFERER']);


//$this->display();

}


}
