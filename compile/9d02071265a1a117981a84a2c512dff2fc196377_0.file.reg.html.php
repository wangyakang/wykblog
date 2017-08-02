<?php
/* Smarty version 3.1.30, created on 2017-08-01 14:07:25
  from "E:\wamp\www\mvcce\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59806efd903793_67908551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d02071265a1a117981a84a2c512dff2fc196377' => 
    array (
      0 => 'E:\\wamp\\www\\mvcce\\template\\index\\reg.html',
      1 => 1501589244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59806efd903793_67908551 (Smarty_Internal_Template $_smarty_tpl) {
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
/login.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.metadata.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/reg.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/back.js"><?php echo '</script'; ?>
>
</head>
<body>
<!--<div class="box">-->
    <!--<h3>注册页</h3>-->
    <!--<form action="index.php?m=index&f=login&a=addReg" method="post" id="myform">-->
        <!--用户名:<input type="text" name="uname" autocomplete="off"><br><br>-->
        <!---->


        <!--<input type="text" name="code" size="10">-->
        <!--<img src="index.php?m=admin&f=index&a=code" alt="" width="100" height="30" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" style="vertical-align:middle"><br><br>-->

        <!--<input type="submit" value="注册">-->
    <!--</form>-->

    <!--已有用户名？请<a href="index.php?m=index&f=login&a=init">登陆</a>-->

    <!--<a href="index.php">返回主页</a>-->
<!--</div>-->
<canvas id="Mycanvas"></canvas>
<div class="box">
    <h3 style="margin-bottom: 20px">注册页</h3>
    <form class="form-horizontal" role="form" action="index.php?m=index&f=login&a=addReg" method="post" id="myform">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">用户名:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" placeholder="请输入用户名" name="uname" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-4 control-label">密码:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control"  placeholder="请输入您的用户密码" name="upass" autocomplete="off" id="pass">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword4" class="col-sm-4 control-label">确认密码:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword4" placeholder="请确认密码" name="upass2" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="text" name="code" size="10">
                <img src="index.php?m=admin&f=index&a=code" alt="" width="100" height="30" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" style="vertical-align:middle"><br><br>
                <input type="submit" class="btn btn-default" value="注册"></input>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                已有用户名？请<a href="index.php?m=index&f=login&a=init">登陆</a>
                <a href="index.php">返回主页</a>
            </div>
        </div>
    </form>


</div>
</body>
</html><?php }
}
