<?php
	class HuodongModel extends RelationModel{
		protected $_auto=array(
			array('time','time',1,'function'),
			array('uid','getId',1,'callback'),
			array('name','getName',1,'callback'),
			array('hdtime','getTime',1,'callback'),
			array('hdtimeend','getTime',1,'callback'),
			
			
		);
		protected $_link=array(
			'User'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'User',
			'foreign_key'=>'uid',
			'mapping_name'=>'user',
			'mapping_fields'=>'username',
			'as_fields'=>'username',
			// 定义更多的关联属性
       
			),
			'Column'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'Column',
			'foreign_key'=>'type',
			'mapping_name'=>'Colums',
			'mapping_fields'=>'c_name',
			'as_fields'=>'c_name',
			// 定义更多的关联属性
       
			),
			
			'Love'=> array(
			'mapping_type'=>HAS_MANY,
			'class_name'=>'Love',
			'foreign_key'=>'hdid',
			'mapping_name'=>'loves',
			//'mapping_fields'=>'id',
			//'as_fields'=>"count('love') as uuid",
			//'as_fields'=>'count(love) as pcount',
			// 定义更多的关联属性
			),
		);
		

		protected function getId(){
			return $_SESSION['id'];
		}
		protected function getName(){
			return $_SESSION['username'];
		}
		protected function getTime($hdtime){
			 $datetime = strtotime($hdtime);
			 return $datetime ;
		}
	}
?>