<?php
  class index extends indexMain {
      function __construct(){
          parent::__construct();
          $this->db=new db("shows");
      }

      function init(){

          if($this->session->get("indexLogin")=="yes"){
              $this->session->set("welcome","yes");
          }
          //显示通过的文章
          $result=$this->db->select("select * from shows,category where statu=3 and shows.cid=category.cid ");
          $this->smarty->assign("result",$result);
          //查询点击排行
          $result1=$this->db->where("statu=3")->limit("0,6")->order("hits desc")->select();
          $this->smarty->assign("result1",$result1);
          //查询阅读分类
          $resultRead=$this->db->select("select * from category where pid=0");
          $this->smarty->assign("resultRead",$resultRead);
          $this->smarty->display("index/index.html");
      }
      function fenlei(){
          $cid=$_GET["id"];
          $result=$this->db->select("select * from shows,category where statu=3 and shows.cid=category.cid and shows.cid=".$cid);
          $this->smarty->assign("result",$result);
          $this->smarty->display("index/fenlei.html");
      }
  }
?>