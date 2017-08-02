<?php
/* Smarty version 3.1.30, created on 2017-05-09 07:55:17
  from "E:\wamp\www\mvcce\template\index\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591159c51961d4_44149936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab3be6b065445fe503218eec524200f9519114a0' => 
    array (
      0 => 'E:\\wamp\\www\\mvcce\\template\\index\\home.html',
      1 => 1489773952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_591159c51961d4_44149936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">-->
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/home.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/ajax_upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/home.js"><?php echo '</script'; ?>
>
<!--

a.
   skajdks      sid=10
   dsakhdjksa
                   id pid       sid
   b.  b留言        1  0         10
     c.  c回复b     c id  pid
     b.  b回复c      5   1
                    b id   pid
                     10   5
     a.  回复
   c.  c留言         id   pid
                     2    0
      d. d回复




  1.  留言是给谁留的  双方
  2.  留言给哪一篇文章留的
  3.  留言的时间
  4.  留言之间的关系



-->
<div class="up-box">
    <div class="shangchuan">
        <div class="modal-header">
            <div class="close" data-dismiss="modal">×</div>
            <h4 class="modal-title" id="avatar-modal-label">Change Logo Picture</h4>
        </div>
        <div class="modal-body">
            <div class="avatar-body">
                <input type="hidden" value="" name="hidden" class="hidden">
                <input class="tijiao btn col-md-9 file" id="avatarInput" name="file" multiple="multiple" type="file">
                <div class="col-md-3">
                    <button class="btn  baocun" type="submit" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"> 保存修改</button>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="" alt="" class="avatar-wrapper aa">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="notice"></div>
<div class="container main">
    <div class="row">
        <div class="col-sm-8 main-left">

            <!--头像部分-->
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-sm-4 touxiang">+
                         <img src="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['photo'];?>
" alt="" class="photo-head">
                     </div>
                      <div class="col-sm-2">
                          关注数量 <span><?php echo count($_smarty_tpl->tpl_vars['resultFoucu']->value);?>
</span>
                      </div>
                     <div class="col-sm-2">
                         粉丝数量 <span><?php echo count($_smarty_tpl->tpl_vars['resultFans']->value);?>
</span>
                     </div>
                     <div class="col-sm-2">
                         文章数量 <span><?php echo count($_smarty_tpl->tpl_vars['resultTiy']->value);?>
</span>
                     </div>
                     <div class="col-sm-2">
                         留言数量 <span><?php echo count($_smarty_tpl->tpl_vars['resultLiuyan']->value);?>
</span>
                     </div>
                 </div>
            </div>

            <hr>
            <!--菜单部分-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        收藏的内容
                    </div>
                    <div class="col-sm-4">
                        发表的内容
                    </div>
                    <div class="col-sm-4">
                        xxx的内容
                    </div>
                </div>
            </div>

            <!--&lt;!&ndash;具体的内容&ndash;&gt;-->

            <!--<ul class="mui-table-view">-->
                <!--<li class="mui-table-view-cell mui-media">-->
                    <!--<a href="javascript:;">-->
                        <!--<img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">-->
                        <!--<div class="mui-media-body">-->
                            <!--幸福-->
                            <!--<p class="mui-ellipsis">能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？</p>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="mui-table-view-cell mui-media">-->
                    <!--<a href="javascript:;">-->
                        <!--<img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">-->
                        <!--<div class="mui-media-body">-->
                            <!--木屋-->
                            <!--<p class="mui-ellipsis">想要这样一间小木屋，夏天挫冰吃瓜，冬天围炉取暖.</p>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li class="mui-table-view-cell mui-media">-->
                    <!--<a href="javascript:;">-->
                        <!--<img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">-->
                        <!--<div class="mui-media-body">-->
                            <!--CBD-->
                            <!--<p class="mui-ellipsis">烤炉模式的城，到黄昏，如同打翻的调色盘一般.</p>-->
                        <!--</div>-->
                    <!--</a>-->
                <!--</li>-->
            <!--</ul>-->


        <!--</div>-->
        <!--<div class="col-sm-4 main-right">-->
            <!--<div class="list-group">-->
                <!--<a href="#" class="list-group-item active">-->
                    <!--浏览排行榜-->
                <!--</a>-->
                <!--<a href="#" class="list-group-item">Dapibus ac facilisis in</a>-->
                <!--<a href="#" class="list-group-item">Morbi leo risus</a>-->
                <!--<a href="#" class="list-group-item">Porta ac consectetur ac</a>-->
                <!--<a href="#" class="list-group-item">Vestibulum at eros</a>-->
            <!--</div>-->


            <!--<div class="list-group">-->
                <!--<a href="#" class="list-group-item active">-->
                    <!--关注排行榜-->
                <!--</a>-->
                <!--<a href="#" class="list-group-item">Dapibus ac facilisis in</a>-->
                <!--<a href="#" class="list-group-item">Morbi leo risus</a>-->
                <!--<a href="#" class="list-group-item">Porta ac consectetur ac</a>-->
                <!--<a href="#" class="list-group-item">Vestibulum at eros</a>-->
            <!--</div>-->
        </div>
    </div>
</div>

</body>
<?php echo '<script'; ?>
>
<?php echo '</script'; ?>
>
</html><?php }
}
