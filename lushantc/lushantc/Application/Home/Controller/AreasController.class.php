<?php
namespace Home\Controller;
use Think\Controller;
class AreasController extends Controller{
	
	public function getProvince(){
		$pro=D('provinces')->select();
	
		return $pro;
	}
	
	public function getCity(){
		
		$cit=D('cities')->where(array('provinceid'=>$_GET['province_id']))->select();
		$msg = '';
		//echo D('cities')->getLastSql();die;
		
		foreach($cit as $val){
			$msg .='<option value='.$val['cityid'].'>'.$val['city'].'</option>';
		}
		echo json_encode(array('msg'=>$msg));
	
	}
	
	public function getArea(){
		$are=D('areas')->where(array('cityid'=>$_GET['city_id']))->select();
		$msg='';
		foreach ($are as $v){
			$msg.='<option value='.$v['areaid'].'>'.$v['area'].'</option>';
		}
		echo json_encode(array('msg'=>$msg));
	}
	public function show_addr(){
		$sa=D('user_address')->where(array('uid'=>$_SESSION['user_id']))->select();
		foreach($sa as $key=>$saa){
		
			$province = M('provinces')->where('provinceid='.$saa['province'])->field('province')->find();
			$sa[$key]['province'] = $province['province'];
			$city=M('cities')->where('cityid='.$saa['city'])->field('city')->find();
			$sa[$key]['city']=$city['city'];
			$area=M('areas')->where('areaid='.$saa['region'])->field('area')->find();
			$sa[$key]['region']=$area['area'];
			
			if($saa['default']==1){
				$default_addres_id =  $saa['id'];
			}
		}
		
		//1
		$sa['default_address_id'] = $default_addres_id;
		//2
		
		return $sa;

	}
	

}