<?php
/* Smarty version 3.1.30, created on 2017-03-09 02:00:45
  from "E:\wamp\www\mvc\mvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0a93d250f87_38768310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dcf777ba4692b24dfe8b9745c832f0c6dc6e287' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\mvc\\template\\index\\header.html',
      1 => 1489021174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0a93d250f87_38768310 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
</head>
<body>

<div class="top">
    <div class="content">
        <span class="left"><a href="index.php">欢迎来到xx博客</a></span>

        <div class="right">
            <?php if (!empty($_smarty_tpl->tpl_vars['indexLogin']->value)) {?>
            <span>
                  欢迎 <?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
回来
                  <a href="index.php?m=index&f=login&a=logout">退出</a>
              </span>
            <span>
                  <a href="index.php?m=index&f=my&a=init">个人中心</a>
              </span>
            <?php } else { ?>
            <a href="index.php?m=index&f=login&a=init">登陆</a>
            <a href="index.php?m=index&f=login&a=reg">注册</a>
            <?php }?>

            <a href="index.php?m=index&f=art&a=show">发表文章</a>
        </div>
    </div>
</div><?php }
}
