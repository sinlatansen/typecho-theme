<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php   
/**  
    * 留言板
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
    background-image: url("https://images4.alphacoders.com/966/966314.jpg");
    /* background-image: url("https://images.alphacoders.com/128/1281557.jpg"); */
    background-size: cover; /* 背景图片覆盖整个body */
    background-position: center; /* 背景图片居中显示 */
    background-attachment: fixed; /* 背景图片固定，不随滚动条滚动 */
}

[data-theme="dark"] body{
    background-image: url("https://images6.alphacoders.com/112/1123556.png");
}

#title{
    color: white; /* 设置字体颜色为白色 */
    font-size: 45px; /* 增加字体大小 */
    padding-top: 20vh;
    text-align: center;
    height: 50vh; /* 使主内容区域至少为视窗的高度 */
}

.info{
    margin-top: 50px;
    text-align: center; /* 确保文本居中 */
    margin-bottom: 100px;
    font-size: 30px;
}

</style>

<div id="title">留言板</div>
<main class="layout" id="content-inner">
<div id="page" style="width:100%;min-height: 100vh;">
<div class="info">
    欢迎留下你的足迹。
</div>
<script src="https://giscus.app/client.js"
    data-repo="sinlatansen/typecho-theme"
    data-repo-id="R_kgDOLQA-Ow"
    data-category="Announcements"
    data-category-id="DIC_kwDOLQA-O84CdlEp"
    data-mapping="pathname"
    data-strict="0"
    data-reactions-enabled="1"
    data-emit-metadata="0"
    data-input-position="top"
    data-theme="transparent_dark"
    data-lang="zh-CN"
    data-loading="lazy"
    crossorigin="anonymous"
    async>
</script>
</div>
</main>

<?php require_once('public/rightside.php'); ?>
<?php $this -> need('footer.php'); ?>