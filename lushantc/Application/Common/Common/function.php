<?php 
//获取所有分类
function get_category(){
		$arr = D('Category')->select();
  		$category = get_category_order($arr,0);
  		
  		$arr_words = array();
  		foreach($category as $key=>$val){
  			foreach($val['child'] as $key1=>$val1){
  				foreach($val1['child'] as $key2=>$val2){
  					if(count($arr_words[$key])<3){
  						$arr_words[$key][] = array('name'=>$val2['name'],'cid'=>$val2['id']);
  					}else{
  						continue;
  					}
  				}
  			}
  		}
  		$categorys = array(
  			'cate' => 	$category,
  			'word' =>   $arr_words,
  		);
  		return $categorys;
}

//获取类的所有子类
function get_category_order($arr,$id){
	$new_arr = array();
	foreach($arr as $val){
		if($val['pid'] == $id){
			$val['child'] = get_category_order($arr,$val['id']);
			$new_arr[$val['id']] = $val;
		}
	}
	return $new_arr;
}