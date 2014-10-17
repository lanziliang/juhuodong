<?php
import("@.Components.AdminAction");
//活动管理控制器
class HuodongAction extends AdminAction{
    //活动列表
    public function showlist(){
        $hd_model = D("Huodong");
        
        
        //1 引入分页类
        import("@.Components.Page");
        
        //2 计算当前记录总数目
        $total=$hd_model->where("is_delete=0")->count();
        $per=13;
        
        //3 实例化分页类对象
        $page=new Page($total,$per);
        
        //4 制作一条sql语句获得每页信息
        $sql="select * from tp_huodong where is_delete=0 ".$page->limit;
        $info=$hd_model->query($sql);
        
        //5 获得页面列表
        $page_list=$page->fpage();
        
        
        $this->assign('info',$info);
        $this->assign('page_list',$page_list);
        $this->display();
    }
    
    //回收列表
    public function trashlist(){
        $hd_model = D("Huodong");
        
        
        //1 引入分页类
        import("@.Components.Page");
        
        //2 计算当前记录总数目
        $total=$hd_model->where("is_delete=1")->count();
        $per=13;
        
        //3 实例化分页类对象
        $page=new Page($total,$per);
        
        //4 制作一条sql语句获得每页信息
        $sql="select * from tp_huodong where is_delete=1 ".$page->limit;
        $info=$hd_model->query($sql);
        
        //5 获得页面列表
        $page_list=$page->fpage();
        
        
        $this->assign('info',$info);
        $this->assign('page_list',$page_list);
        $this->display();
    }


    //活动详情
    public function detail($id){
        $info=D('Huodong')->getById($id);
        //show_bug($info);
        $this->assign('info',$info);
        $this->display();
    }
    //通过审核
    public function check($id){
        $sql="update tp_huodong set checked=1 where id=".$id;
        $rst=M()->execute($sql);
        if($rst){//给用户发邮件提醒活动已通过审核
            $info=D("Huodong")->getById($id);
            $uid=$info['uid'];
            $hdtitle=$info['title'];
            $sql1="insert into tp_usermail (uid,fromid,content,time,sign) values (".$uid.",1,'您发布的活动《".$hdtitle."》已经通过审核！',".time().",0)";
            M()->execute($sql1);
            $this->success("审核成功！",U("Huodong/showlist"));
        }
    }

    
    //把活动加入回收站
    public function trash($id){
        $hd_model=D("Huodong");
        $hd_model->id=$id;
        $hd_model->is_delete=1;
        $rst=$hd_model->save();
        if($rst){
            $this->success("已加入回收站！",U("Huodong/showlist"));
        }
    }
    
    //活动还原
    public function resume($id){
        $hd_model=D("Huodong");
        $hd_model->id=$id;
        $hd_model->is_delete=0;
        $rst=$hd_model->save();
        if($rst){
            $this->success("还原成功！",U("Huodong/trashlist"));
        }
    }
    
    
    //彻底删除活动及活动留言和对活动感兴趣表中的数据
    public function delete($id){
        $rst=D("Huodong")->delete($id);
        if($rst){
            $sql1="delete from tp_message where tohdid=".$id;
            $rst1=M()->execute($sql1);
            $sql2="delete from tp_love where hdid=".$id;
            $rst2=M()->execute($sql2);
            $this->success("删除成功！",U("Huodong/trashlist"));
        }
    }
}

