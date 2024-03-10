<?php if (!defined('__TYPECHO_ROOT_DIR__'))
    exit; ?>
<?php if (!$this->page404()) : ?>
    <footer id="footer">
        <div id="footer-wrap">
            <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
            <script>
                const confetti = new JSConfetti();
                let lastTriggerTime = 0;

                function showConfetti() {
                    const currentTime = Date.now();
                    // Check if 3 seconds have passed since the last trigger
                    if (currentTime - lastTriggerTime > 2000) {
                        confetti.addConfetti({
                            emojis: ['🎅', '🏃‍♂️', '🤞', '🎉', '🏀', '🀄', '🍔', '🌀'],
                            emojiSize: 60,
                            confettiNumber: 40,
                        });
                        lastTriggerTime = currentTime;
                    }
                }
                document.getElementById('footer-wrap').onmouseover = showConfetti;
            </script>
            <script>
                var siteCreateTime = <?php echo strtotime(Helper::options()->buildtime) * 1000; ?>;

                function updateRunTime() {
                    var now = new Date().getTime(); // 获取当前时间（毫秒）
                    var timeElapsed = now - siteCreateTime; // 计算运行时间（毫秒）

                    var days = Math.floor(timeElapsed / (1000 * 60 * 60 * 24)); // 计算天数
                    var hours = Math.floor((timeElapsed % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); // 计算小时数
                    var minutes = Math.floor((timeElapsed % (1000 * 60 * 60)) / (1000 * 60)); // 计算分钟数
                    var seconds = Math.floor((timeElapsed % (1000 * 60)) / 1000); // 计算秒数

                    // 更新页面上显示的时间
                    document.getElementById('runTimeDisplay').innerHTML = days + " 天 " + hours + " 小时 " + minutes + " 分钟 " +
                        seconds + " 秒";
                }

                // 每秒调用 updateRunTime 函数一次
                setInterval(updateRunTime, 1000);
            </script>
            <div class="footer-container">
                <div class="copyright">
                    © <?php echo date('Y'); ?> By <?php $this->author(); ?>
                </div>
                <div class="beian-info">
                    <a href="http://www.beian.miit.gov.cn" target="_blank">鄂ICP备2024037645号</a>
                    <a href="https://beian.mps.gov.cn/#/query/webSearch?code=42011702000772" target="_blank">
                        <img src="https://beian.mps.gov.cn/web/assets/logo01.6189a29f.png" alt="备案图标" style="margin-right:8px;">
                        鄂公网安备42011702000772
                    </a>
                </div>
            </div>
            <span>小站已经成功运行</span>
            <div id="runTimeDisplay" style="display: inline-block;"></div>
            <span>啦！</span>
            <div id="activity" style="display: inline-block; vertical-align: middle;"></div>
            <script>
                let animation = lottie.loadAnimation({
                    container: document.getElementById('activity'), // 动画容器
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: '/usr/themes/butterfly/img/activity.json' // 动画JSON文件的路径
                });
            </script>
            <div class="additional-links">
                <a target="_blank" href="https://typecho.org/" title="博客框架为Typecho_v1.2.1"><img src="/usr/themes/butterfly/img/1.svg"></a>
                <a target="_blank" href="https://github.com/wehaox/Typecho-Butterfly" title="主题魔改自wehaox大佬移植的Typecho-Butterfly"><img src="/usr/themes/butterfly/img/2.svg"></a>
                <a target="_blank" href="https://cloud.tencent.com/" title="本站托管于腾讯云服务器"><img src="/usr/themes/butterfly/img/3.svg"></a>
                <a target="_blank" href="https://github.com/sinlatansen" title="网站源码储存于Github仓库"><img src="/usr/themes/butterfly/img/4.svg"></a>
                <a target="_blank" href="https://giscus.app/zh-CN" title="评论系统为Giscus"><img src="/usr/themes/butterfly/img/5.svg"></a>
            </div>
        </div>
        <style>
            #activity {
                width: 30px;
                /* 调整动画容器的宽度 */
                height: 30px;
                /* 调整动画容器的高度 */
            }

            .footer-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                /* padding: 10px; */
                /* 调整为适合网站主题的颜色 */
                color: #fff;
            }

            .additional-links {
                padding-top: 8px;
            }

            .additional-links a {
                text-decoration: none;
                margin-right: 20px;
            }

            .footer-container a:hover {
                text-decoration: underline;
            }

            .beian-info {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                /* 调整备案信息与图标之间的间隙 */
            }

            .beian-info img {
                width: 20px;
                /* 调整备案图标的尺寸 */
                height: auto;
            }

            @media (max-width: 600px) {
                .footer-container {
                    padding: 20px;
                }

                .beian-info {
                    flex-direction: column;
                    gap: 15px;
                }

                .beian-info img {
                    width: 25px;
                }

                .additional-links a {
                    display: block;
                    margin-bottom: 10px;
                }
            }
        </style>
        <div class="footer_custom_text">
            <?php $this->options->Customfooter() ?>
        </div>
        </div>
        </div>
    </footer>
<?php endif ?>
<?php $this->footer(); ?>
<style type="text/css" data-typed-js-css="true">
    .typed-cursor {
        opacity: 1;
    }

    .typed-cursor.typed-cursor--blink {
        animation: typedjsBlink 0.7s infinite;
        -webkit-animation: typedjsBlink 0.7s infinite;
        animation: typedjsBlink 0.7s infinite;
    }

    @keyframes typedjsBlink {
        50% {
            opacity: 0.0;
        }
    }

    @-webkit-keyframes typedjsBlink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0.0;
        }

        100% {
            opacity: 1;
        }
    }
</style>
<?php if ($this->options->showFramework == 'off') : ?>
    <style>
        .framework-info {
            display: none
        }
    </style>
<?php endif; ?>
<?php if ($this->options->CursorEffects !== 'off' && $this->options->CursorEffects == 'heart') : ?>
    <script id="click-heart" src="<?php cdnBaseUrl() ?>/js/click-heart.min.js" async="async" mobile="false"></script>
<?php elseif ($this->options->CursorEffects !== 'off' && $this->options->CursorEffects == 'fireworks') : ?>
    <canvas class="fireworks"></canvas>
    <script id="fireworks" src="<?php cdnBaseUrl() ?>/js/fireworks.min.js" async="async" mobile="false"></script>
<?php endif; ?>
<?php if ($this->options->ShowLive2D !== 'off' && !isMobile()) : ?>
    <script src="<?php cdnBaseUrl() ?>/js/autoload.js"></script>
<?php endif; ?>
<!-- 作者防伪措施 -->
<!-- <script type="text/javascript" src="<?php $this->options->themeUrl('js/custom.main.js'); ?>"></script> -->
<script>
    <?php $this->options->CustomScript() ?>
</script>
<?php $this->options->CustomBodyEnd() ?>


<?php require_once('public/rightside.php'); ?>
<!--pjax-->
<?php if ($this->options->EnablePjax === 'on') : ?>
    <link rel="stylesheet" href="<?php cdnBaseUrl() ?>/css/nprogress.css">
    <script src="<?php cdnBaseUrl() ?>/js/pjax.min.js"></script>
    <script src="<?php cdnBaseUrl() ?>/js/nprogress.js"></script>
    <script>
        let pjaxSelectors = ["title", "#body-wrap", "#rightside-config-hide", "#rightside-config-show", ".js-pjax"];
        var pjax = new Pjax({
            elements: 'a:not([target="_blank"])',
            selectors: pjaxSelectors,
            cacheBust: !1,
            analytics: !1,
            scrollRestoration: !1
        });
        document.addEventListener("pjax:send", (function() {
                if (window.removeEventListener("scroll", window.tocScrollFn), window.removeEventListener("scroll",
                        scrollCollect), "object" == typeof preloader && preloader.initLoading(), window.aplayers)
                    for (let e = 0; e < window.aplayers.length; e++) window.aplayers[e].options.fixed || window
                        .aplayers[e].destroy();
                "object" == typeof typed && typed.destroy();
                const e = document.body.classList;
                e.contains("read-mode") && e.remove("read-mode")
                NProgress.start();
            })),
            document.addEventListener("pjax:complete", (function() {
                <?php if ($this->options->hcaptchaSecretKey !== "" && $this->options->hcaptchaAPIKey !== "") : ?>
                    hcaptcha.render('h-captcha', {
                        sitekey: '<?php $this->options->hcaptchaSecretKey() ?>'
                    });
                <?php endif ?>
                <?php $this->options->PjaxCallBack() ?>
                NProgress.done();
                window.refreshFn(),
                    document.querySelectorAll("script[data-pjax]").forEach(e => {
                        const t = document.createElement("script"),
                            o = e.text || e.textContent || e.innerHTML || "";
                        Array.from(e.attributes).forEach(e => t.setAttribute(e.name, e.value)), t.appendChild(
                            document.createTextNode(o)), e.parentNode.replaceChild(t, e)
                    }),
                    GLOBAL_CONFIG.islazyload && window.lazyLoadInstance.update(), "function" == typeof chatBtnFn &&
                    chatBtnFn(), "function" == typeof panguInit && panguInit(), "function" == typeof gtag && gtag(
                        "config", "", {
                            page_path: window.location.pathname
                        }),
                    "object" == typeof _hmt && _hmt.push(["_trackPageview", window.location.pathname]),
                    "function" == typeof loadMeting && document.getElementsByClassName("aplayer").length &&
                    loadMeting(),
                    "object" == typeof Prism && Prism.highlightAll(), "object" == typeof preloader && preloader
                    .endLoading()
                coverShow()
            })),
            document.addEventListener("pjax:error", e => {
                // 404 === e.request.status && pjax.loadUrl("/404");
                if (e.request.status === 404) {
                    window.location = "/404";
                }
                if (e.request.status === 403) {
                    window.location = e.request.responseURL
                }
            })
    </script>
<?php endif ?>
<!--pjax end-->
<!-- AI摘要机器人 -->
<!-- <script>
  let tianliGPT_postSelector = '#post #article-container';
  let tianliGPT_wordLimit = 1000;
  // let tianliGPT_postURL = "*/archives/*.html";
  let tianliGPT_key = '3841b0be5627b3d67830';
</script>
<script src="https://cdn1.tianli0.top/gh/zhheo/Post-Abstract-AI@0.15.2/tianli_gpt.min.js"></script> -->
<!-- AOS动画库 -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        AOS.init();
        console.log('aos init!');
    });
</script>
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
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        console.log('开始初始化');
        console.log(CalHeatMap);
        var cal = new CalHeatMap();
        cal.init({
            itemSelector: "#cal-heatmap",
            domain: "month",
            subDomain: "day",
            data: <?= $jsonDataForCalHeatMap ?>, // 使用 PHP 变量
            start: new Date(new Date().getFullYear(), new Date().getMonth() - 5, 1),
            cellSize: 20,
            range: 6,
            domainGutter: 10,
            legend: [1, 5, 10, 15]
        });
        console.log("热力图初始化成功");
    });
</script>


</body>

</html>