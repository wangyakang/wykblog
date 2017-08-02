<?php
/* Smarty version 3.1.30, created on 2017-03-17 17:05:33
  from "E:\wamp\www\mvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc094d37e475_27935849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f23232a15227934b4d10f569d7ee355f229dafe9' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\index\\header.html',
      1 => 1489766732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cc094d37e475_27935849 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
</head>
<style>
    body{
        color: #48535f;
    }
</style>
<body>

<div class="top">
    <div class="content">
        <span class="left"><a href="index.php"><img src="<?php echo IMG_PATH;?>
/logo.png" alt=""></a></span>
        <div class="right">
            <?php if (!empty($_smarty_tpl->tpl_vars['indexLogin']->value)) {?>
            <span class="list-inline">
                  欢迎 <?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
回来
            </span>
            <span class="list-inline">
                <a href="index.php?m=index&f=my&a=init" class="list-inline">个人中心</a>
                <a href="index.php?m=index&f=login&a=logout" class="list-inline">退出</a>
              </span>
            <?php } else { ?>
            <a href="index.php?m=index&f=login&a=init" class="list-inline btn">登陆</a>
            <a href="index.php?m=index&f=login&a=reg" class="list-inline btn">注册</a>
            <?php }?>
            <a href="index.php?m=index&f=art&a=show" class="list-inline btn" style="color: #444; border: 1px solid #ddd;">发表文章</a>
        </div>
    </div>
</div><?php }
}
