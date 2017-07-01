<?php
namespace Home\Controller;
use Common\Controller\CommonController;
class CategoryController extends CommonController{
	public function index(){
	if(IS_GET){
	$wds=I('get.wd');
	$cid=I('get.cid');
	$where=array();
	if($wds){
		$where['p_name'] = array('like',"%$wds%");
	}
	if($cid){
		$where['cate_id'] = $cid;
	}
	$_COOKIE['words'] = $wds;
	$order = I('get.order','');
	$sort = I('get.sort','');
	$order_str = 'p_id desc';
	if(!empty($order) && !empty($sort)){
		$order_str = $order.' '.$sort;
	}
	$total=D('product')->where($where)->count();
	$Page=new \Think\Page($total,4);
	
	$wd=D('product')->where($where)->order($order_str)->limit($Page->firstRow.','.$Page->listRows)->select();	
	
	$show=$Page->show();
	$this->assign('page',$show);
	$this->assign('get',$_GET);
	$this->assign('wds',$wd);
	$this->assign('zz',$wds);
	}
	
	
	$this->display();	
	}
	public function search_category(){//头部分类搜索
		
		
		
		
		
		
		
		
		
		
	$this->display('index');	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}	