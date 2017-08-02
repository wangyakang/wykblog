<?php
/* Smarty version 3.1.30, created on 2017-05-09 07:53:40
  from "E:\wamp\www\mvcce\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5911596455ae62_32289038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7caa9584fb5bfb18586b5165b95f3f6cbd082dfd' => 
    array (
      0 => 'E:\\wamp\\www\\mvcce\\template\\index\\index.html',
      1 => 1489772622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_5911596455ae62_32289038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">-->
<!--<ul  style="width: 1000px">-->
    <!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>-->
    <!--<li>-->
        <!--&lt;!&ndash;<h1>&ndash;&gt;-->
            <!--&lt;!&ndash;<a href="index.php?m=index&f=scon&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>&ndash;&gt;-->

        <!--&lt;!&ndash;</h1>&ndash;&gt;-->
        <!--<ul class="mui-table-view">-->
            <!--<li class="mui-table-view-cell mui-media">-->
                <!--<a href="javascript:;">-->
                    <!--<img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">-->
                    <!--<div class="mui-media-body">-->
                        <!--<a href="index.php?m=index&f=scon&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>-->
                        <!--<p class="mui-ellipsis">能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？</p>-->
                    <!--</div>-->
                <!--</a>-->
            <!--</li>-->
        <!--</ul>-->
    <!--</li>-->
    <!--<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
-->

<!--</ul>-->
<style>
    .box-pad{
        padding: 20px 0;
    }
    a{
        padding: 0;
    }
</style>
<div class="widewrapper main">
    <div class="container box-pad">
        <div class="row">
            <div class="col-md-8 blog-main">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <div class="col-md-6 col-sm-6">
                        <article class=" blog-teaser box">
                            <header>
                                <h3> <a href="index.php?m=index&f=scon&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a></h3>
                                <span class="meta"><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</span>
                                <hr>
                            </header>
                            <div class="clearfix">
                                分类：<span><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</span>
                                <a href="index.php?m=index&f=scon&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" class="btn" style="color: #444; border: 1px solid #ddd;">更多</a>
                            </div>
                        </article>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <!--<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
-->
            </div>
            <aside class="col-md-4 blog-aside">

                <div class="aside-widget">
                    <header>
                        <h3>阅读排行</h3>
                    </header>
                    <div class="body">
                        <ul class="clean-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                <li><a href="index.php?m=index&f=scon&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" style="padding: 0"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a> <span style="float: right;margin-right: 20px;font-size: 13px;color:#48535f;">点击量：<?php echo $_smarty_tpl->tpl_vars['v']->value['hits'];?>
</span></li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                    </div>
                </div>
                <div class="aside-widget">
                    <header>
                        <h3>阅读分类</h3>
                    </header>
                    <div class="body clearfix">
                        <ul class="tags">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultRead']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <li><a href="index.php?m=index&f=index&a=fenlei&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a></li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                    </div>
                </div>
                <div class="aside-widget">
                    <header>
                        <h3>友情链接</h3>
                    </header>
                    <div class="body">
                        <ul class="clean-list">
                            <li><a href="http://www.imooc.com/">慕课网</a></li>
                            <li><a href="http://www.bootcss.com/">bootstrap</a></li>
                            <li><a href="http://www.cnblogs.com/">博客园</a></li>
                            <li><a href="http://www.w3school.com.cn/">W3SCHOOL</a></li>
                            <li><a href="http://www.runoob.com/">RUNOOB.COM</a></li>
                            <li><a href="http://www.cnblogs.com/qshting/p/5304988.html">论坛、博客推荐</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

</body>
</html><?php }
}
