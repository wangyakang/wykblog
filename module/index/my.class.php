<?php
  class my extends indexMain{
      function __construct(){
          parent::__construct();
          $this->db=new db("user");
      }

      function init(){
          $uname=$this->session->get("uname");
          $uid=$this->session->get("uid");
          $indexLogin=$this->session->get("indexLogin");
          $this->smarty->assign("uname",$uname);
          $this->smarty->assign("uid",$uid);
          $this->smarty->assign("indexLogin",$indexLogin);
          //用户信息：头像
          $result=$this->db->where("uid=".$uid)->select();
          $this->smarty->assign("result",$result);
          //关注别人数量
          $resultFoucu=$this->db->select("select * from guanzhu WHERE uid1=".$uid);
          $this->smarty->assign("resultFoucu",$resultFoucu);
          //被关注数量
          $resultFans=$this->db->select("select * from guanzhu where uid2=".$uid);
          $this->smarty->assign("resultFans",$resultFans);
          //发布文章数量
          $resultTiy=$this->db->select("select * from shows where uid=".$uid);
          $this->smarty->assign("resultTiy",$resultTiy);
          //留言数量
          $resultLiuyan=$this->db->select("select * from message where uid1=".$uid);
          $this->smarty->assign("resultLiuyan",$resultLiuyan);
          $this->showCon();
      }
      function showCon(){
          $this->smarty->display("index/home.html");
      }
      function upload(){
          $fileInfo=$_FILES["file"];
          date_default_timezone_set('PRC');
          $dirName=date("Ymd");//创建文件夹名字
          $imgName=date("Ymdhis");//创建图片名字
          if(!file_exists("upload")){
              mkdir("upload",0777,true);
          }
          if(!file_exists("upload/".$dirName)){
              mkdir("upload/".$dirName,0777,true);
          }
          if(is_uploaded_file($fileInfo["tmp_name"])){
              $path="upload/".$dirName."/".$imgName.$fileInfo["name"];
              move_uploaded_file($fileInfo["tmp_name"],$path);
          }
          echo HTTP_URL."/upload/".$dirName."/".$imgName.$fileInfo["name"];
      }
      function uploadPersonImg(){
//          echo "yes";
          $uid=G("uid");
          $picture=G("picture");
          if($this->db->update("update user set photo='$picture' WHERE uid=".$uid)>0){
              echo "yes";
          }else{
              echo "no";
          }
      }
  }
?>