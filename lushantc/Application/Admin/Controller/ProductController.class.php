<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
	//判断是否登录，没登录则跳到登录页面
	public function is_login(){
		if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])){
			return true;
		}else{
			$this->redirect(U('Admin/Index/login'),array(),0,'请登录');
		}
	}
	
	public function __construct(){
		parent::__construct();
		$this->is_login();
	}
	
   
public function index(){
	$limit =10;
	$count = D('product')->count();
	$Page = new \Think\Page($count,$limit);
	$show = $Page->show();
	$data = D('product')->limit($Page->firstRow.",".$Page->listRows)->order('p_id desc')->select();
	
	$this->assign('data',$data);
	$this->assign('page',$show);
	$this->assign('total',$count);
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


public  function add(){
	if(IS_POST){
		$uploadPath = '/Upload/product/thumb/';
		$arr = I('post.');
		if(empty($arr['p_id'])){
			//添加操作
			unset($arr['p_id']);
			if(!empty($_FILES['thumbnail']['name'])){
				$ext = explode('.',$_FILES['thumbnail']['name']);
				$ext = $ext[count($ext)-1];
				$filename = time().rand(100,999).".".$ext;
				move_uploaded_file($_FILES['thumbnail']['tmp_name'],".".$uploadPath.$filename);
					
				$arr['thumb'] = $uploadPath.$filename;
			}
			
			$url = I('post.referer');
			$insert_id = D('product')->add($arr);
			
			
			
			
			if ($insert_id){
				$this->success('添加成功',U('product/index'));die;
			}else {$this->error('添加失败',$url);die;}
		}else{
			//修改操作
			//如果又上传新图片，上传，并删除旧的图片
			if(!empty($_FILES['thumbnail']['name'])){
				$ext = explode('.',$_FILES['thumbnail']['name']);
				$ext = $ext[count($ext)-1];
				$filename = time().rand(100,999).".".$ext;
				move_uploaded_file($_FILES['thumbnail']['tmp_name'],".".$uploadPath.$filename);
				if(file_exists(".".$arr['thumb'])){
					@chmod(".".$arr['thumb'],0777);
					@unlink(".".$arr['thumb']);
				}	
				$arr['thumb'] = $uploadPath.$filename;
			}
		}
		//更新操作
		$req  = D('product')->where(array('p_id'=>$arr['p_id']))->save($arr);
		if ($req){
			//查询indexProduct是否存在这个ID
			$indexData = D('index_product')->where(array('p_id'=>$arr['p_id']))->find();
			if($indexData){
				$newData = array(
						'p_id' => $arr['p_id'],
						'name' => $arr['p_name'],
						'thumb' => $arr['thumb'],
						'price' => $arr['price'],
						'sale_price' => $arr['sale_price'],
						'cate_id' => $arr['cate_id'],
				);
				D('index_product')->where(array('p_id'=>$arr['p_id']))->save($newData);
			}
			
			$this->success('修改成功',U('product/index'));die;
		}else {$this->error('修改失败',$url);die;}
	}
	//是编辑还是添加id是否有值
	$id = I('get.id','');
	if($id){
		$data = D('product')->find($id);
		$this->assign('data',$data);
	}
	$cates = D('category')->select();
	$cates = $this->get_category_order($cates,0);
	$this->assign('cates',$cates);
 	$this->display();

}

public function del(){
	$id = I('get.id','');
	if($id){
		$data = D('product')->field('thumb')->find($id);
		$req = D('product')->where(array('p_id'=>$id))->delete();
		if($req){
			if(file_exists(".".$data['thumb'])){
				@chmod(".".$data['thumb'],0777);
				@unlink(".".$data['thumb']);
			}
			$this->success('删除成功',U('product/index'));die;
		}else{
			$this->error('删除失败',U('product/index'));die;
		}
	}
}



}
