<?php

class ColumnModel extends Model{
    //获取栏目子孙树
    public function getTree($arr,$id=0,$lev=0){
            $tree=array();

            foreach($arr as $v){
                    if($v['p_id']==$id){
                            $v['lev']=$lev;
                            $tree[]=$v;
                            $tree=array_merge($tree,$this->getTree($arr,$v['c_id'],$lev+1));
                    }
            }

            return $tree;
    }
}
