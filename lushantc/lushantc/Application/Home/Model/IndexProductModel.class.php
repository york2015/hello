<?php
namespace Home\Model;
use Think\Model;
class IndexProductModel extends Model{
	protected $tableName = 'index_product';
	public function get_index_product($cateid,$floor,$limit){
		$product_shuigu= $this->where(array('cate_id'=>$cateid,'floor'=>$floor))->limit($limit)->select();
		return $product_shuigu;
	}

}