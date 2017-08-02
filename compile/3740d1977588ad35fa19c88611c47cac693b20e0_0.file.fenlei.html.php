<?php
/* Smarty version 3.1.30, created on 2017-08-01 12:28:59
  from "E:\wamp\www\mvcce\template\index\fenlei.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598057ebcc9902_34832367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3740d1977588ad35fa19c88611c47cac693b20e0' => 
    array (
      0 => 'E:\\wamp\\www\\mvcce\\template\\index\\fenlei.html',
      1 => 1489774648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_598057ebcc9902_34832367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<style>
    body,li,ul,a{
        padding: 0;margin: 0;
        text-decoration: none;
        list-style: none;
    }
    .box-main{
        margin: 0 auto;
        padding-top: 100px;
        width: 1200px;
    }
    .box-left{
        float: left;
        width: 60%;
    }
    .box-right{
        float: right;
        width: 40%;
    }
    .height-li{
        height: 50px;
        line-height: 50px;
    }
</style>
<div class="box-main">
    <div class="box-left">
        <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li class="height-li"><a href="index.php?m=index&f=scon&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></li>
            <hr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
    <div class="box-right">

    </div>

</div>

</body>
</html><?php }
}
