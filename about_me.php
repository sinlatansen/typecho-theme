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
    <!-- github热力图 -->
    <script type="text/javascript" src="//d3js.org/d3.v3.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/cal-heatmap/3.3.10/cal-heatmap.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/cal-heatmap/3.3.10/cal-heatmap.css" />

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

#content-inner h1::before,
#content-inner h2::before,
#content-inner h3::before,
#content-inner h4::before {
    content: "" !important;
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

#cal-heatmap-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding: 20px;
}

#cal-heatmap {
    /* 确保热力图适应其容器 */
    max-width: 100%;
    /* 防止热力图超出容器宽度 */
    margin: auto;
    /* 居中显示 */
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px #b7b2a9;
}


#heatmapinfo .I2 {
    font-family: Silkscreen, sans-serif;
    font-size: 40px;
    font-weight: 700;
    text-align: center;
    margin-top: 80px;
}

.graph-label {
    font-size: 14px;
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
        font-size: 15px;
        font-family: "IBM Plex Mono", SimSun, STFangsong;
        font-weight: 600;
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
            <p>来自江城武汉<img src="/usr/themes/butterfly/img/wuhan.svg" class="svg-icon" alt="SVG图标">，热干面人柱力。</p>

            <p>目前在<span id='buaa'>BUAA</span>混学历，专业是电子信息工程。</p>
            <p>热爱分享生活，但是比较讨厌微信朋友圈，会给同一条朋友圈点赞还会触发通知，这一点。</p>
            <p>平时的爱好是看动漫，听音乐，Rice和<del> 配环境 </del>。</p>
            <p>喜欢折腾浪费时间的东西，这种极客精神的启蒙是初一时候爷爷偷偷给我买的那部红米NOTE。那时候的精神家园是小米贴吧，现在是<img
                    src="/usr/themes/butterfly/img/reddit.svg" class="svg-icon" style="height:40px;" alt="SVG图标">。</p>
            <p>技术栈比较杂，又或者说是什么都不会。</p>
            <p>但是很享受这种，只是单纯求知欲去探索的状态，而不是为了靠这些知识通过考试或者拿到工作。</p>
            <p>希望在这块小天地记录一下生活，输出一下想法。</p>
        </div>


        <?php
        $dataFile = __DIR__ . '/public/githubData.json';

        // 确保文件存在
        if (file_exists($dataFile)) {
            // 读取并解码数据
            $commitsData = json_decode(file_get_contents($dataFile), true);

            // 转换数据为 Cal-HeatMap 所需格式
            $transformedData = [];
            foreach ($commitsData as $date => $count) {
                // 转换日期为时间戳（秒）
                $timestamp = strtotime($date);
                $transformedData[$timestamp] = $count;
            }

            // 准备嵌入到页面的 JSON 数据
            $jsonDataForCalHeatMap = json_encode($transformedData);
        } else {
            echo "数据文件不存在。";
            $jsonDataForCalHeatMap = '{}'; // 确保前端有一个空对象处理
        }
        ?>
        <div id="heatmapinfo">
            <div class="I2">My github heatmap</div>
        </div>
        <div id="cal-heatmap-container">
            <div id="cal-heatmap"></div>
        </div>

        <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var cal; // 定义 cal 变量，但不在这里初始化

            function initCalHeatMap() {
                cal = new CalHeatMap(); // 在函数内部初始化 cal

                var width = window.innerWidth || document.documentElement.clientWidth || document.body
                    .clientWidth;
                var cellSize = 15; // 默认单元格大小
                var range = 6; // 默认范围
                var domainGutter = 15; // 默认间距

                // 如果屏幕宽度小于1054px，调整参数
                if (width <= 1054) {
                    cellSize = 15; // 缩小单元格大小
                    range = 3; // 缩小显示范围
                    domainGutter = 10; // 减小间距
                }

                cal.init({
                    itemSelector: "#cal-heatmap",
                    domain: "month",
                    subDomain: "day",
                    data: <?= $jsonDataForCalHeatMap ?>, // 使用 PHP 变量
                    start: new Date(new Date().getFullYear(), new Date().getMonth() - 5, 1),
                    cellSize: cellSize,
                    range: range,
                    domainGutter: domainGutter,
                    legend: [1, 3, 5, 7, 9, 11],
                    tooltip: true,
                    cellRadius: 5,
                    legendColors: {
                        min: "#efefef", // 没有提交的天（灰色）
                        max: "steelblue", // 根据你的需求调整
                        empty: "#efefef" // 确保未提交的天也以灰色显示
                    },
                    legendHorizontalPosition: 'right',
                    legendVerticalPosition: 'center',
                    legendOrientation: 'vertical',
                    subDomainTitleFormat: {
                        empty: '{date}没有提交🎈',
                        filled: ' {date}进行了{count}次提交！🎉',
                    },
                });
            }

            initCalHeatMap(); // 首次页面加载时初始化热力图

            window.addEventListener('resize', function() {
                if (cal) {
                    cal.destroy(); // 销毁旧的热力图实例
                }
                initCalHeatMap(); // 重新初始化
            });
        });
        </script>
    </div>
</main>

<?php require_once('public/rightside.php'); ?>
<?php $this->need('footer.php'); ?>