<?php
namespace Common\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function __construct(){
		//头部分类导航
		parent::__construct();
		$categorys = get_category();
		$this->assign('categories',$categorys['cate']);
		$this->assign('cate_words',$categorys['word']);
	}
	
	//判断是否登录，没登录则跳到登录页面
	public function is_login(){
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
			return true;
		}else{
			$this->redirect(U('Home/Index/login'),array(),0,'请登录');
		}
	}
}