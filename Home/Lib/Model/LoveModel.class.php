<?php
	class LoveModel extends RelationModel{
	
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
			'Userdetail'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'Userdetail',
			'foreign_key'=>'uid',
			'mapping_name'=>'userdetail',
			//'mapping_fields'=>'image',
			//'as_fields'=>'tx',
			// 定义更多的关联属性
       
			),
			'Huodong'=> array(  
			'mapping_type'=>BELONGS_TO,
			'class_name'=>'Huodong',
			'foreign_key'=>'hdid',
			'mapping_name'=>'huodong',
			//'mapping_fields'=>'username',
			//'as_fields'=>'username',
			// 定义更多的关联属性
       
			),
		
		);
		
	}
?>