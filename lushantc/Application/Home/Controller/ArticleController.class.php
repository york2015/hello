<?php
namespace Home\Controller;
use Common\Controller\CommonController;
class ArticleController extends CommonController {
    public function index(){
    	$id = I('get.id');
    	$article = D('article')->find($id);
		$this->assign('article',$article);
		//网站渲染
		$this->display();
    }
  


}
