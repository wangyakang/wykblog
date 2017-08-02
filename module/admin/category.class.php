<?php
class category extends main{

    function __construct(){
        parent::__construct();
        $this->db=new db("category");
    }

    function del(){
        $cid=$_GET["id"];
        if($this->db->where("cid=".$cid)->del()>0){
            $this->jump("index.php?m=admin&f=category&a=show","删除成功");
        }else{
            $this->jump("index.php?m=admin&f=category&a=show","删除失败");
        }
    }

    function show(){
        $obj=new infinite();
        $str=$obj->table(0,0,$this->db->connect,"category");
        $this->smarty->assign("str",$str);
        $this->smarty->display("admin/categoryshow.html");
    }
    function add(){
        $pid=P("pid");
        $cname=P("cname");
        if($this->db->insert("pid={$pid};cname='$cname'")>0){
            $this->jump("index.php?m=admin&f=category&a=showadd","添加成功");
        }else{
            $this->jump("index.php?m=admin&f=category&a=showadd","添加失败");
        }
    }

    function showadd(){
        $obj=new infinite();
        $obj->tree(0, 0, $this->db->connect, "category");
        $this->smarty->assign("tree",$obj->str);
        $this->smarty->display("admin/showadd.html");
    }
    function edit(){
        $pid=$_POST["pid"];
        $cid=$_GET["id"];
        $cname=$_POST["cname"];
        if($this->db->update("update category set pid='$pid',cname='$cname' where cid=".$cid)
        >0){
            $this->jump("index.php?m=admin&f=category&a=show","编辑成功");
        }else{
            $this->jump("index.php?m=admin&f=category&a=show","编辑失败");
        }
    }
    function showedit(){
        $obj=new infinite();
        $cid=$_GET["id"];
        $obj->tree(0,0,$this->db->connect,"category",$cid);
        $this->smarty->assign("tree",$obj->str);
        $result=$this->db->where("cid=".$cid)->select("");
        $this->smarty->assign("result",$result);
        $this->smarty->assign("cid",$cid);
        $this->smarty->display("admin/showedit.html");
    }
}