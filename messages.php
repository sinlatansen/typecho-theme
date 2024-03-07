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
    <!-- 评论区 -->
<div id="giscus-container"></div>

<script>
  const currentTheme = document.documentElement.getAttribute('data-theme');
  (function() {
      const script = document.createElement('script'); // 创建script元素
      script.src = 'https://giscus.app/client.js';
      script.async = true;
      script.setAttribute('data-repo', 'sinlatansen/typecho-theme');
      script.setAttribute('data-repo-id', 'R_kgDOLQA-Ow');
      script.setAttribute('data-category', 'Announcements');
      script.setAttribute('data-category-id', 'DIC_kwDOLQA-O84CdlEp');
      script.setAttribute('data-mapping', 'pathname');
      script.setAttribute('data-strict', '0');
      script.setAttribute('data-reactions-enabled', '1');
      script.setAttribute('data-emit-metadata', '0');
      script.setAttribute('data-input-position', 'top');
      script.setAttribute('data-lang', 'zh-CN');
      script.setAttribute('data-loading', 'lazy');
      script.crossOrigin = 'anonymous';

      // 设置data-theme属性根据当前网站主题
      const theme = (currentTheme === 'dark') ? 'dark' : 'light';
      script.setAttribute('data-theme', theme);

      // 将script元素插入到页面中
      document.getElementById('giscus-container').appendChild(script); // 这里改为将script添加到giscus-container中
  })();
</script>
</div>
</main>

<?php require_once('public/rightside.php'); ?>
<?php $this -> need('footer.php'); ?>