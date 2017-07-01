<?php
namespace Home\Controller;
use Common\Controller\CommonController;
class ItemController extends CommonController{
	public function index(){
		$id = $_GET['id'];
		
		//产品记录
		$product_model = D('product');
		$product_title=$product_model->where(array('p_id'=>$id))->find(); 
		//滚动图
		$product_model2 = D('product_scroll');
		$LR = $product_model2->where(array('pid'=>$id,))->select();
		if(count($LR)==0){
			$LR = array(array('pic'=>$product_title['thumb']));
		}else{
			foreach($LR as $key=>$val){
				$LR[$key]['pic'] = '/Upload/product/'.$val['pic'];
			}
		}
		//产品属性
		$product_model3=D('attrbute');
		$sx=$product_model3->where(array('p_id'=>$id))->select();
		
		
		$cate_id = $product_title['cate_id'];
		//获取位置
		do{
			$cateData = D('category')->find($cate_id);
			$a[] = $cateData['name'];
			
			$cate_id = $cateData['pid'];
		}while($cate_id>0);
			$b = array_reverse($a);
		$this->assign('cate_postion',$b);
		
		
		
		$this->assign('larou',$LR);
		$this->assign('shuxing',$sx);
		$this->assign('zhongliang',$product_title);
		
		$this->display();
	}
}

