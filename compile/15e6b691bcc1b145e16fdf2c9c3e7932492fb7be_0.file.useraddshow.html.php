<?php
/* Smarty version 3.1.30, created on 2017-03-09 07:58:03
  from "E:\wamp\www\mvc\template\admin\useraddshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0fcfb2c44d5_70509765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e6b691bcc1b145e16fdf2c9c3e7932492fb7be' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\useraddshow.html',
      1 => 1489042657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0fcfb2c44d5_70509765 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
</head>
<body>
<form action="index.php?m=admin&f=user&a=add" method="post">
    <div class="form-group">
        用户名:
        <input type="text" class="form-control" name="uname">
    </div>
    <div class="form-group">
        密码:
        <input type="text" class="form-control" name="upass">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html><?php }
}
