<?php
/* Smarty version 3.1.30, created on 2017-05-09 07:59:37
  from "E:\wamp\www\mvcce\template\index\artShow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59115ac954b029_08545660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ca014f53e2c011c1b41fa7275af7cc16c510348' => 
    array (
      0 => 'E:\\wamp\\www\\mvcce\\template\\index\\artShow.html',
      1 => 1489021174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_59115ac954b029_08545660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<?php echo '<script'; ?>
 src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<!--
 分类表

 cid  name  pid
 内容表
 id  title con  img cid time hits good  posid author
-->
<form action="index.php?m=index&f=art&a=add" method="post">

    <div class="form-group">
        <label for="cid">选择分类</label>
        <select class="form-control" name="cid" id="cid">
            <option value="0">一级分类</option>
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>


        </select>
    </div>


    <div class="form-group">
        <label for="stitle">文章标题</label>
        <input type="text" class="form-control" id="stitle" name="stitle" placeholder="标题">
    </div>

    <div class="form-group">
        <label for="scon">文章内容</label>
        <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:1024px;height:500px;" name="scon"><?php echo '</script'; ?>
>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
