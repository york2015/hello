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
		//获得自己和子类ID
		$cids = $this->search_category($cid);
		
		$where['cate_id'] = array('in',$cids);
	}
	$_COOKIE['words'] = $wds;
	$order = I('get.order','');
	$sort = I('get.sort','');
	$order_str = 'p_id desc';
	if(!empty($order) && !empty($sort)){
		$order_str = $order.' '.$sort;
	}
	$total=D('product')->where($where)->count();
	$Page=new \Think\Page($total,12);
	
	$wd=D('product')->where($where)->order($order_str)->limit($Page->firstRow.','.$Page->listRows)->select();	
	
	$show=$Page->show();
	$this->assign('page',$show);
	$this->assign('get',$_GET);
	$this->assign('wds',$wd);
	$this->assign('zz',$wds);
	}
	
	
	$this->display();	
	}
	public function search_category($cid){//头部分类搜索
		$cates = D('Category')->where(array('pid'=>$cid))->select();
		$arr = array($cid);
		if(count($cates)>0){
			foreach($cates as $val){
				$arr[] = $val['id'];
				$cateson =  D('Category')->where(array('pid'=>$val['id']))->select();
				if(count($cateson)){
					foreach($cateson as $valson){
						$re = $this->search_category($valson['id']);
						$arr = array_merge($arr,$re);
					}
				}
			}
		}
		
		return $arr;
		
		
		
		
		
		
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}	