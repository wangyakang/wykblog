<?php
/* Smarty version 3.1.30, created on 2017-03-09 03:31:50
  from "E:\wamp\www\mvc\template\admin\categoryshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0be96d46aa6_37430177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04573ef25128ee2f27c338ac3c16040fbb3f6612' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\categoryshow.html',
      1 => 1489026708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0be96d46aa6_37430177 (Smarty_Internal_Template $_smarty_tpl) {
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
<table class="table table-bordered text-center">
    <tr>
        <th class="text-center">id</th>
        <th class="text-center">分类名称</th>
        <th class="text-center">分类父级</th>
        <th class="text-center">操作</th>
    </tr>

    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>


</table>
</body>
</html><?php }
}
