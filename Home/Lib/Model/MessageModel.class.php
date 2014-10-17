<?php
	class MessageModel extends RelationModel{
		protected $_auto=array(
			array('time','time',1,'function'),
			
		);
		protected $_link=array(
		'Userdetail'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'Userdetail',
			'foreign_key'=>'fromid',
			'mapping_name'=>'userdetail',
			//'mapping_fields'=>'image',
			//'as_fields'=>'tx',
			// 定义更多的关联属性
       
			),
			'User'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'User',
			'foreign_key'=>'fromid',
			'mapping_name'=>'user',
			'mapping_fields'=>'username',
			'as_fields'=>'username',
			// 定义更多的关联属性
       
			),
		);
	
	
		
	}
?>