<?php
/* Smarty version 3.1.30, created on 2017-08-01 12:27:41
  from "E:\wamp\www\mvcce\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5980579dcab0c1_92228930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25dc9c635ed579c60944fb6b15a625e20a661ffe' => 
    array (
      0 => 'E:\\wamp\\www\\mvcce\\template\\index\\login.html',
      1 => 1489408873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5980579dcab0c1_92228930 (Smarty_Internal_Template $_smarty_tpl) {
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
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/back.js"><?php echo '</script'; ?>
>
</head>
<body>
<canvas id="Mycanvas"></canvas>
<!--<div class="box">-->
    <!--<h3>登录页</h3>-->
    <!--<form action="index.php?m=index&f=login&a=check" method="post">-->
        <!--用户名:<input type="text" name="uname" autocomplete="off"><br><br>-->
        <!--密&nbsp;&nbsp;&nbsp;码:<input type="text" name="upass" autocomplete="off"><br><br>-->


        <!--<input type="text" name="code" size="10" >-->
        <!--<img src="index.php?m=admin&f=index&a=code" alt="" width="100" height="30" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" style="vertical-align:middle"><br><br>-->
        <!--<input type="submit" value="登陆">-->
    <!--</form>-->

    <!--没有用户名？请<a href="index.php?m=index&f=login&a=reg">注册</a>-->
    <!--<a href="index.php">返回主页</a>-->
<!--</div>-->
<div class="box">
    <h3 style="margin-bottom: 20px">登录页</h3>
    <form class="form-horizontal" role="form" action="index.php?m=index&f=login&a=check" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">用户名:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail3" placeholder="请输入用户名" name="uname" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">密码:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword3" placeholder="请输入您的用户密码" name="upass" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="text" name="code" size="10">
                <img src="index.php?m=admin&f=index&a=code" alt="" width="100" height="30" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" style="vertical-align:middle"><br><br>
                <input type="submit" class="btn btn-default" value="登录"></input>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                没有用户名？请<a href="index.php?m=index&f=login&a=reg">注册</a>
                <a href="index.php">返回主页</a>
            </div>
        </div>
    </form>


</div>
</body>
</html><?php }
}
