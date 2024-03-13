<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**  
 * 关于
 *  
 * @package custom  
 */
//$this->need('page_header.php');
?>

<?php $this->need('header_com.php'); ?>
<header class="not-top-img" id="page-header">
    <?php $this->need('public/nav.php'); ?>
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
    background-size: cover;
    /* 背景图片覆盖整个body */
    background-position: center;
    /* 背景图片居中显示 */
    background-attachment: fixed;
    /* 背景图片固定，不随滚动条滚动 */
}

[data-theme="dark"] body {
    background-image: url("https://images6.alphacoders.com/112/1123556.png");
}

#content-inner.layout {
    padding-top: 20px !important;
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


#introduce {
    position: relative;
    width: 100%;
    /* height: 100vh; */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 70px;
}

@font-face {
    font-family: "Silkscreen";
    src: url(/usr/themes/butterfly/css/Silkscreen-Regular.ttf) format("truetype");
}


#enginfo {
    max-width: 600px;
    line-height: 1.5;
    font-family: Silkscreen, sans-serif;
}

#enginfo .I1 {
    font-size: 64px;
    font-weight: 700;
    margin: -3px 0;
}

#enginfo .I2 {
    font-size: 40px;
    font-weight: 700;
}

.infoImg {
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


#cninfo {
    padding-left: 60px;
    padding-right: 60px;
    font-size: 25px;
    font-family: "IBM Plex Mono", SimSun, STFangsong;
    font-weight: 600;
}


#cninfo p {
    margin: 10px 0;
    text-indent: 2em;
}

#cninfo .I0 {
    font-size: 35px;
}

#cninfo a {
    text-decoration: underline;
}

[data-theme="dark"] {
    #cninfo a {
        color: #99a9bf;
    }

    #cninfo a:hover {
        color: #49b1f5;
    }
}


/* 新增 SVG 样式 */
.svg-icon {
    height: 50px;
    /* SVG 高度 */
    vertical-align: middle;
    /* 垂直居中 */
    padding-bottom: 7px;
}

#buaa {
    color: #49b1f5;
}

#heatmapinfo .I2 {
    font-family: Silkscreen, sans-serif;
    font-size: 50px;
    font-weight: 700;
    text-align: center;
    margin-top: 60px;
    line-height: 1.2;
}


.imgContainer {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.imgContainer img {
    width: 80%;
    max-width: 100%;
    /* 设置图片的最大宽度为容器的宽度 */
    max-height: 100%;
    /* 设置图片的最大高度为容器的高度 */
    object-fit: contain;
    /* 保证图片始终适合容器 */
}



/* 移动端适配 */
@media (max-width: 600px) {
    #introduce {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 0;
    }

    .infoImg img {
        margin-right: 0;
        margin-top: 70px;
        margin-bottom: 30px;
    }

    #enginfo .I1 {
        font-size: 50px;
        font-weight: 650;
        margin: 0;
    }

    #enginfo .I2 {
        font-size: 30px;
        font-weight: 600;
    }

    #cninfo {
        padding-left: 30px;
        padding-right: 30px;
        font-size: 20px;
        font-family: "IBM Plex Mono", SimSun, STFangsong;
        font-weight: 600;
    }


    #heatmapinfo .I2 {
        font-size: 35px;
        font-weight: 700;
        text-align: center;
        margin-top: 25px;
    }

    .imgContainer img {
        width: 100%;
    }

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
            <div class="I0"># 个人简介</div>
            <p>来自江城武汉<img src="/usr/themes/butterfly/img/wuhan.svg" class="svg-icon" alt="SVG图标">，热干面人柱力。</p>
            <p>目前在<span id='buaa'>BUAA</span>混学历，专业是电子信息工程。</p>
            <p>热爱分享生活，但是比较讨厌微信朋友圈，会给同一条朋友圈点赞还会触发通知，这一点。</p>
            <p>平时的爱好是看动漫，听音乐，Rice和<del> 配环境 </del>。</p>
            <p>喜欢折腾浪费时间的东西，这种极客精神的启蒙是初一时候爷爷偷偷给我买的那部红米NOTE。那时候的精神家园是小米贴吧，现在是<a href="https://www.reddit.com/r/unixporn"
                    title="r/unixporn"><img src="/usr/themes/butterfly/img/reddit.svg" class="svg-icon"
                        style="height:40px;" alt="SVG图标"></a>。</p>
            <p>技术栈比较杂，又或者说是什么都不会。</p>
            <p>但是很享受这种，只是单纯求知欲去探索的状态，而不是为了靠这些知识通过考试或者拿到工作。</p>
            <p>希望在这块小天地记录一下生活，输出一下想法。</p>
            <hr>
            <div class="I0"># 一些平台</div>
            <p>* BiliBili: <a href="https://space.bilibili.com/84508966" title="前往B站主页">-fugu-</a> </p>
            <p>* Bangumi: <a href="https://bgm.tv/user/862549" title="前往Bangumi主页">fugu</a> </p>
            <p>* GitHub: <a href="https://github.com/sinlatansen" title="前往GitHub主页">sinlatansen</a> </p>
            <p>* Reddit: <a href="https://www.reddit.com/user/Broad_Connection_551/" title="前往Reddit主页">Fuguuuuuuu</a>
            </p>
            <p>* Email: lllzzzyyy@buaa.edu.cn </p>
            <hr>

        </div>
        <div id="heatmapinfo">
            <div class="I2">My github heatmap</div>
        </div>
        <div class="imgContainer">
            <img src="https://ghchart.rshah.org//sinlatansen" />
        </div>

    </div>
</main>

<?php require_once('public/rightside.php'); ?>
<?php $this->need('footer.php'); ?>