<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php   
/**  
    * 关于
    *  
    * @package custom  
    */ 
// $this->need('header_com.php');
 ?>

<?php  $this->need('header_com.php'); ?>
<header class="not-top-img" id="page-header">
    <?php  $this->need('public/nav.php'); ?>
</header>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    min-height: 100vh;
    background-color: var(--global-bg);
}
</style>

<main class="layout" id="content-inner">


    Hey!
    I'm fugu.
    Wclcome to my place.

    来自江城武汉，热干面人柱力。
    目前BUAA EE硕士在读。
    热爱分享生活，但是讨厌微信朋友圈给同一条朋友圈点赞还会触发通知。
    平时的爱好是看动漫，听音乐和rice。
    喜欢折腾浪费时间的东西，这种极客精神的启蒙是初一那部红米NOTE，那时候的精神家园是小米贴吧，现在是r/unixpron。
    技术栈比较杂，又或者说是什么都不会。
    但是很享受这种，只是单纯求知欲去探索的状态，而不是为了
    希望在这块小天地记录一下生活，输出一下知识。


</main>

<?php require_once('public/rightside.php'); ?>
<?php $this -> need('footer.php'); ?>