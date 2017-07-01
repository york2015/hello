<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	protected $tableName = "user";
	     protected $_auto = array ( 
	         array('status','1'),  // 新增的时候把status字段设置为1
	         array('create_time','time',3,'function'), // 对update_time字段在更新的时候写入当前时间戳
	         array('sex',0),
     	);
	     
	     protected $_validate=array(
	      array('username','require','用户名必须填写',3),
	     		array('username','/[A-Za-z0-9_]+/','用户名必须为字母数字或者下划线'),
	     		array('username','','用户名已存在',1,'unique',3),
	     		array('password','require','密码必须填写'),
	     		array('password','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
	     		array('txtpwd2','password','确认密码不一致',1,'confirm',1),
	     
	     );
}