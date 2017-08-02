<?php
/* Smarty version 3.1.30, created on 2017-03-09 04:14:36
  from "E:\wamp\www\mvc\template\admin\showadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0c89c045563_35918725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0639ee5abcf81bd225fe5a5cda9b3a2d7c92720d' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\showadd.html',
      1 => 1489029274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0c89c045563_35918725 (Smarty_Internal_Template $_smarty_tpl) {
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

</head>
<body>
<form action="index.php?m=admin&f=category&a=add" method="post">
    <div class="form-group">
        <label for="pid">选择分类</label>
        <select class="form-control" name="pid" id="pid">
            <option value="0">一级分类</option>
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </select>
    </div>


    <div class="form-group">
        <label for="cname">分类名称</label>
        <input type="text" class="form-control" id="cname" name="cname" placeholder="标题">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html><?php }
}
