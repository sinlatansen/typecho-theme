<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php   
/**  
    * 关于
    *  
    * @package custom  
    */ 
//$this->need('page_header.php');
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

#introduce{
    position: relative;
    width: 100%;
    /* height: 100vh; */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 70px;
}

#enginfo{
    max-width: 600px;
}

#enginfo .I1{
    font-size: 56px;
    font-weight: 700;
    margin: -3px 0;
}

#enginfo .I2{
    font-size: 32px;
    font-weight: 700;
}

.infoImg{
    display: flex;
    justify-content: center;
}

.infoImg img {
    max-width: 200px;
    border-radius: 50%;
    margin-right: 50px;
    box-shadow: 0 0 20px #b7b2a9;
    opacity: 0;
    animation: zoomIn 1s ease forwards, floatImage 4s ease-in-out infinite;
    animation-delay: 0.2s, 1.2s;
}
@keyframes zoomIn {
    0% {
        transform: scale(0);
    }

    100% {
        transform: scale(1);
        opacity: 1;
    }
}
@keyframes floatImage {
    0% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-24px);
    }

    100% {
        transform: translateY(0);
    }
}

#content-inner h1::before,
#content-inner h2::before,
#content-inner h3::before,
#content-inner h4::before{
    content:""!important;
}
</style>

<main class="layout" id="content-inner">
<div id="page" style="width:100%;min-height: 100vh;">
    <div id="introduce">
        <div id="enginfo">
            <div class="I2">Hey!</div>
            <div class="I1">I'm fugu.</div>
            <div class="I2">Welcome to my place.</div>
        </div>
        <div class="infoImg">
            <img src="https://s2.loli.net/2024/02/03/WGmzlLj7vdes5wD.jpg" alt="">
        </div>
        
    </div>
     
    <div id="cninfo">
        来自江城武汉，热干面人柱力。
        目前BUAA EE硕士在读。
        热爱分享生活，但是讨厌微信朋友圈给同一条朋友圈点赞还会触发通知。
        平时的爱好是看动漫，听音乐和rice。
        喜欢折腾浪费时间的东西，这种极客精神的启蒙是初一那部红米NOTE，那时候的精神家园是小米贴吧，现在是r/unixpron。
        技术栈比较杂，又或者说是什么都不会。
        但是很享受这种，只是单纯求知欲去探索的状态，而不是为了
        希望在这块小天地记录一下生活，输出一下知识。
    </div>


<!-- <article class="post-content" id="article-container">
      <?php
      $db = Typecho_Db::get();
      $sql = $db->select()->from('table.comments')
        ->where('cid = ?', $this->cid)
        ->where('mail = ?', $this->remember('mail', true))
        ->limit(1);
      $result = $db->fetchAll($sql);
      if ($this->user->hasLogin() || $result) {
        $content = preg_replace("/\[hide\](.*?)\[\/hide\]/sm", '<div class="reply-content">$1</div>', $this->content);
      } else {
        $content = preg_replace("/\[hide\](.*?)\[\/hide\]/sm", '<p class="need-reply">此处内容 <a href="#comments">回复</a> 可见</p>', $this->content);
      }
      echo $content;
      ?>
</article>  -->

</div>
</main>

<?php require_once('public/rightside.php'); ?>
<?php $this -> need('footer.php'); ?>