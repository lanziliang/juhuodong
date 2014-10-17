<?php

import("@.Components.AdminAction");
//栏目管理控制器
class ColumnAction extends AdminAction{
    public function showlist(){
        $model=D("Column");
        //获取栏目信息
        $info=$model->select();
        $info=$model->getTree($info,0);
        //show_bug($info);
        $this->assign('info',$info);
        $this->display();
    }
    
    //添加栏目
    public function add(){
        //判断表单是否提交数据
        if(!empty($_POST)){
            //show_bug($_POST);
            $model=D("Column");
            $model->create();
            $rst = $model->add();
            if($rst){
                $this->success("添加成功",U("Column/showlist"));
            }
        }else{
            //获取顶级栏目信息
            $info=D("Column")->where('p_id=0')->select();
            

            //获取栏目名称
            $c_info=array();
            foreach ($info as $kk => $vv){
                $c_info[$vv['c_id']] = $vv['c_name'];
            }

            $this->assign('c_info',$c_info);
            $this->display();
        }
    }
    
    //栏目编辑
    public function edit($c_id){
        //判断表单是否提交数据
        if(!empty($_POST)){
            //show_bug($_POST);
            $model=D("Column");
            $model->create();
            $rst = $model->where("c_id='$c_id'")->save();
            if($rst){
                $this->success("修改成功",U("Column/showlist"));
            }
        }else{
            //获取所有顶级栏目信息
            $info=D("Column")->where('p_id=0')->select();
            $info1=D("Column")->getByC_id($c_id);
            $c_name=$info1['c_name'];
            $p_id=$info1['p_id'];
            //获取栏目名称
            $c_info=array();
            foreach ($info as $kk => $vv){
                $c_info[$vv['c_id']] = $vv['c_name'];
            }
            
            $this->assign('c_name',$c_name);
            $this->assign('p_id',$p_id);
            $this->assign('c_info',$c_info);
            $this->display();
        }
    }
    
    //栏目移除
    public function delete($c_id){
        //获取将要移除的栏目的p_id值
        $info = D("Column")->getByC_id($c_id);
        $p_id = $info['p_id'];
        
        //如果将要移除的栏目是顶级栏目，则将其所有子栏目一起移除
        if($p_id == 0){
            $sql = "delete from tp_column where c_id=".$c_id." or p_id=".$c_id;
            $rst = M()->execute($sql);
            if($rst)
                $this->success ("删除成功",U('Column/showlist'));
        }else{
            $sql = "delete from tp_column where c_id=".$c_id;
            $rst = M()->execute($sql);
            if($rst)
                $this->success ("删除成功",U('Column/showlist'));
        }
    }
}

