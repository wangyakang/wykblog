<?php
class user extends main{

    function __construct(){
        parent::__construct();
        $this->db=new db("user");
    }

    //查询所有用户
    function select(){
         $result=$this->db->select();
         $this->smarty->assign("result",$result);
         $this->smarty->display("admin/usershow.html");
    }

    //删除用户名

    function del(){
        $uid=$_GET["id"];
        if($this->db->where("uid=".$uid)->del()>0){
            $this->jump("index.php?m=admin&f=user&a=select","删除成功");
        }else{
            $this->jump("index.php?m=admin&f=user&a=select","删除失败");
        }
    }
//    function editshow(){
//        $uid=$_GET["id"];
//        $result=$this->db->where("uid=".$uid)->select("");
//        $this->smarty->assign("result",$result);
//        $this->smarty->assign("uid",$uid);
//        $this->smarty->display("admin/usereditshow.html");
//    }
    //添加用户
    function addshow(){
        $this->smarty->display("admin/useraddshow.html");
    }
    function add(){
        $uname=P("uname");
        $upass=md5(P("upass"));
        if($this->db->insert("uname='{$uname}';upass='$upass'")>0){
            $this->jump("index.php?m=admin&f=user&a=select","添加成功");
        }else{
            $this->jump("index.php?m=admin&f=user&a=addshow","添加失败");
        }
    }
}

?>