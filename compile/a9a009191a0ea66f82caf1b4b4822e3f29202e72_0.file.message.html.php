<?php
/* Smarty version 3.1.30, created on 2017-03-09 02:00:48
  from "E:\wamp\www\mvc\mvc\template\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0a9405c2b33_90186469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9a009191a0ea66f82caf1b4b4822e3f29202e72' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\mvc\\template\\admin\\message.html',
      1 => 1489021174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0a9405c2b33_90186469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/message.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/message.css">

</head>
<body>
  <div class="box">
      <div class="title">
          提示信息
      </div>
      <div class="con">
           <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

          <span>3</span>秒后返回首页<br>
          没有跳转，请 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击</a>
      </div>
  </div>
</body>
</html><?php }
}
