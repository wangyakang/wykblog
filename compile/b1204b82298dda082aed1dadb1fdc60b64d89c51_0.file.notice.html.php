<?php
/* Smarty version 3.1.30, created on 2017-05-09 07:54:03
  from "E:\wamp\www\mvcce\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5911597be33536_75563335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1204b82298dda082aed1dadb1fdc60b64d89c51' => 
    array (
      0 => 'E:\\wamp\\www\\mvcce\\template\\index\\notice.html',
      1 => 1489021174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5911597be33536_75563335 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .notice-login{
        padding:30px 0;
        width:200px;
        background: #ccc;
        border-radius: 10px;
        text-align: center;
        line-height: 20px;
        position: fixed;
        left:0;top:40%;right:0;bottom: 40%;
        margin:auto;
        display: none;
    }
</style>
<div class="notice-login">
    请先 <a href="index.php?m=index&f=login&a=init">登陆</a>
    再进行操作<br>
    <a href="javascript:;" class="btn btn-danger quxiao" style="margin-top:5px;">取消登陆</a>
</div><?php }
}
