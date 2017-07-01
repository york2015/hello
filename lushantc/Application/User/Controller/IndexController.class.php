<?php
namespace User\Controller;
use Think\Controller;
class IndexController extends Controller{
	public function index(){
		
		/* if($id==0){
		$a=D('order')->where(array('uid'=>$_SESSION['user_id'],))->select();
		foreach($a as $key=>$b){
			$c[$b['sn']]=D('order_detail')->where(array('order_sn'=>$b['sn']))->select();
			}
		}else{
		$a=D('order')->where(array('uid'=>$_SESSION['user_id'],'status'=>I('get.statusid')))->select();
		foreach($a as $key=>$b){
			$c[$b['sn']]=D('order_detail')->where(array('order_sn'=>$b['sn']))->select();
		}
		} */
		$id=I('get.statusid',0);
		$where = array('uid'=>$_SESSION['user_id'],'delete'=>0);
		
		if($id>0){
			$where['status'] = I('get.statusid');
		}
		//获取要显示的总记录
		$total = D('order')->where($where)->count();
		$Page=new \Think\Page($total,2);
		$a = D('order')->where($where)->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
		$show       = $Page->show();// 分页显示输出
		foreach($a as $key=>$b){
		$c[$b['sn']]=D('order_detail')->where(array('order_sn'=>$b['sn']))->select();
		}
		$count['zong']=D('order')->where(array('uid'=>$_SESSION['user_id'],'delete'=>0,))->count();
		$count['pay'] = D('order')->where(array('uid'=>$_SESSION['user_id'],'delete'=>0,'status'=>1))->count();
		$count['fahuo'] = D('order')->where(array('uid'=>$_SESSION['user_id'],'delete'=>0,'status'=>3))->count();
		$count['receive'] = D('order')->where(array('uid'=>$_SESSION['user_id'],'delete'=>0,'status'=>4))->count();
		//dump($c['14917299176512']);die;
	
		$this->assign('count',$count);
		$this->assign('dingdan',$a);
		$this->assign('page',$show);// 赋值分页输出
		$this->assign('chanpin',$c);
		$this->assign('statusid',$id);
		$this->display();
		/* $Page       = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板 */
	}
	public function order_detail(){//订单详情页面
		$order_dsn=I('get.number');
		$od=D('order')->where(array('sn'=>$order_dsn))->find();	
		/* echo  D('order')->getLastSql();die;	 */
		$odps=D('order_detail')->where(array('order_sn'=>$order_dsn))->select();	
		$addr=D('user_address')->where(array('id'=>$od['address_id']))->find();
		/* echo  D('order_detail')->getLastSql();die;
		dump($odps);die; */
		$pro=D('provinces')->where(array('provinceid'=>$addr['province']))->find();
		$cit=D('cities')->where(array('cityid'=>$addr['city']))->find();
		$are=D('areas')->where(array('areaid'=>$addr['region']))->find();
		$this->assign('uad',$addr);
		$this->assign('sheng',$pro)	;
		$this->assign('shi',$cit);
		$this->assign('qu',$are);
		$this->assign('od',$od)	;
		$this->assign('odp',$odps);
		$this->display();
	}
	public function address(){
		$umsg=D('user_address')->where(array('uid'=>$_SESSION['user_id']))->select();
		foreach ($umsg as $dz)
		$pro=D('provinces')->where(array('provinceid'=>$dz['province']))->find();
		$cit=D('cities')->where(array('cityid'=>$dz['city']))->find();
		$are=D('areas')->where(array('areaid'=>$dz['region']))->find();// 显示地址
		
		$this->assign('sheng',$pro)	;
		$this->assign('shi',$cit);
		$this->assign('qu',$are);
		$this->assign('umsg',$umsg);
		$this->display();
	}
	
	public function address_delete(){
		if(IS_POST){
			$id = I('get.id',0);
			if($id>0){
				$status=1;
				$msg='删除单个记录成功';
				$get_id=I('get.id');
				D('user_address')->where(array('id'=>$get_id,'uid'=>$_SESSION['user_id']))->delete();
				echo json_encode(array('status'=>1,'msg'=>$msg,'url'=>'/User/Index/address'));die;
			}else{
				$id_array=I('post.chkID');
				$msg="";
				if(is_array($id_array)){
					$status=1;
					$msg="删除多个地址成功";
					$ids=implode(',', $id_array);
					D('user_address')->where(array('id'=>array('in',$ids),'uid'=>$_SESSION['user_id']))->delete();
				}
				
				if(count($id_array)==0)	{
					$status=0;
					$msg='没有选中任何地址，删除失败';
				}
				echo json_encode(array('status'=>$status,'msg'=>$msg,'url'=>$_SERVER['HTTP_REFERER']));die;
			}
		}
	}
	
	public function address_edit(){
		$post_id = I('post.id');
		if(empty($post_id)){
		if (IS_POST&&I('post.ddlProvinceID')>0){
			if($_SESSION['check_id'] !=I('post.check_id')){
				$this->error('不得重复提交',U('User/Index/address_edit'));
			}
			unset($_SESSION['check_id']);
		$addr['uid']=$_SESSION['user_id'];
		$addr['deliver']=I('post.txtName');
		$addr['mobile']=I('post.txtMoblie');
		$addr['province']=I('post.ddlProvinceID');
		$addr['city']=I('post.ddlCityID');
		$addr['region']=I('post.ddlCountryID');//区
		$addr['area']=I('post.txtShortAddress');//街道地址
		$addr['tel']=I('post.txtTel');
		$addr['default']=I('post.rblIsDefault');
		$addr['postcode']=I('post.txtPostCode');
		if($addr['default']==1){
			//更新条件是default = 1的这个条记录的default=0并且UID=46
			//$data = array('default'=>0);
			$data['default'] = 0;
			D('user_address')->where(array('default'=>1,'uid'=>$addr['uid']))->save($data);
		}
		
		D('user_address')->add($addr);
		
		redirect('address_edit', 0, '页面跳转中...');
		
		}//添加地址信息
	}else{
		if (IS_POST){//修改地址
			/* if($_SESSION['check_id'] !=I('post.check_id')){
				$this->error('不得重复提交',U('User/Index/address_edit'));
			} */
			//unset($_SESSION['check_id']);
			$addr['uid']=$_SESSION['user_id'];
			$addr['deliver']=I('post.txtName');
			$addr['mobile']=I('post.txtMoblie');
			$addr['province']=I('post.ddlProvinceID');
			$addr['city']=I('post.ddlCityID');
			$addr['region']=I('post.ddlCountryID');//区
			$addr['area']=I('post.txtShortAddress');//街道地址
			$addr['tel']=I('post.txtTel');
			$addr['default']=I('post.rblIsDefault');
			$addr['postcode']=I('post.txtPostCode');
			if($addr['default']==1){
				//更新条件是default = 1的这个条记录的default=0并且UID=46
				//$data = array('default'=>0);
				$data['default'] = 0;
				D('user_address')->where(array('default'=>1,'uid'=>$addr['uid']))->save($data);
			}
				
			D('user_address')->where(array('id'=>I('post.id')))->save($addr);;//用户修改地址信息
			//echo D('user_address')->getLastSql();
			
			header("Content-Type:text/html;charset=utf8");
			redirect('address', 2, '修改成功,页面跳转中...');
		}
	}
		$pid=I('get.id');
		if(!empty($pid)){
		
		$xg=D('user_address')->where(array('id'=>$pid))->find();
		$this->assign('xg',$xg);
		
		$cit=D('cities')->where(array('provinceid'=>$xg['province']))->select();
		$qu=D('areas')->where(array('cityid'=>$xg['city']))->select();
		$this->assign('shi',$cit);
		$this->assign('qu',$qu);
		}
		$pro=D('provinces')->select();
		$this->assign('sheng',$pro);
		$this->assign('pid',$pid);
		
		$this->display();

	}	
	
	/* public function address_update(){
		
		$pro=D('provinces')->select();
		$this->assign('sheng',$pro);
		$this->display('address_edit');
	
	}  */
	

	
}