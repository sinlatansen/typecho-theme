<?php $this->need('header_com.php'); ?>
<!--加载进度条插件-->
<?php Typecho_Plugin::factory('Process')->render(); ?>

<body style="zoom: 1;">
    <div id="web_bg"></div>
    <div class="page" id="body-wrap">
        <?php if (is_array($this->options->beautifyBlock) && in_array('ShowTopimg', $this->options->beautifyBlock)) : ?>
        <header class="full_page" id="page-header" style="background-image: url(<?php $this->options->headerimg() ?>)">
            <script>
            var bg = document.documentElement.getAttribute('data-theme');
            console.log(bg);
            var imgHeader = document.getElementById('page-header');
            if (bg === 'light') {
                imgHeader.style.backgroundImage = "url(<?php $this->options->headerimg() ?>)";
            } else {
                imgHeader.style.backgroundImage = "url(<?php $this->options->headerblackimg() ?>)";
            }
            </script>
            <div id="site-info">
                <h1 id="site-title">求知无坦途。</h1>
                <!-- <h1 id="site-title"><?php $this->options->description() ?></h1> -->
                <!--注释掉副标题
            <div id="site-subtitle">
                <span id="subtitle"></span>
            </div>-->
            </div>
            <div id="scroll-down"><i class="fas fa-angle-down scroll-down-effects"></i></div>
            <?php else : ?>
            <header class="not-top-img" id="page-header">
                <?php endif; ?>
                <?php $this->need('public/nav.php'); ?>
            </header>