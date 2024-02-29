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
    background-image: url("https://images4.alphacoders.com/966/966314.jpg");
    /* background-image: url("https://images.alphacoders.com/128/1281557.jpg"); */
    background-size: cover; /* 背景图片覆盖整个body */
    background-position: center; /* 背景图片居中显示 */
    background-attachment: fixed; /* 背景图片固定，不随滚动条滚动 */
}

[data-theme="dark"] body{
    background-image: url("https://images6.alphacoders.com/112/1123556.png");
}

#content-inner.layout{
    padding-top: 20px!important;
}

#page {
    /* 应用毛玻璃效果 */
    backdrop-filter: blur(5px);
    
    /* 为了更好的效果，通常还会加上一层透明度 */
    background-color: rgba(255, 255, 255, 0.5);
}

[data-theme="dark"] #page {
    background-color: rgba(0, 0, 0, 0.5);
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
    line-height: 1.5;

}

#enginfo .I1{
    font-size: 64px;
    font-weight: 700;
    margin: -3px 0;
}

#enginfo .I2{
    font-size: 40px;
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
        
    </div>

</div>
</main>

<?php require_once('public/rightside.php'); ?>
<?php $this -> need('footer.php'); ?>