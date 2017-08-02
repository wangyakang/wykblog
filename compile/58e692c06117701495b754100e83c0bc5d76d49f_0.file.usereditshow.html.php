<?php
/* Smarty version 3.1.30, created on 2017-03-09 08:24:30
  from "E:\wamp\www\mvc\template\admin\usereditshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c1032e6d7550_24691210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e692c06117701495b754100e83c0bc5d76d49f' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\usereditshow.html',
      1 => 1489044267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c1032e6d7550_24691210 (Smarty_Internal_Template $_smarty_tpl) {
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
        <input type="text" class="form-control" name="uname" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uname'];?>
">
    </div>
    <div class="form-group">
        密码:
        <input type="text" class="form-control" name="upass" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['upass'];?>
">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html><?php }
}
