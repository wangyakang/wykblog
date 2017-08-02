<?php
/* Smarty version 3.1.30, created on 2017-03-09 02:00:45
  from "E:\wamp\www\mvc\mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0a93d1cc8b8_62577112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e70e4851eb3e9d38ea2472aadbba9a45d2b2c52b' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\mvc\\template\\index\\index.html',
      1 => 1489021174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c0a93d1cc8b8_62577112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <li>
        <h1>
            <a href="index.php?m=index&f=con&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>

        </h1>
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</ul>


</body>
</html><?php }
}
