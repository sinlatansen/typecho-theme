<nav id="nav" class="show">
    <span id="blog-info">
        <a href="<?php $this->options->siteUrl(); ?>">
            <!-- <?php if (!empty($this->options->SiteLogo)) : ?>
                <img src="<?php $this->options->SiteLogo() ?>" width="95px" />
            <?php else : ?>
                 <span class="site-name"><?php $this->options->title() ?></span> 
            <?php endif ?> -->
            <span class="site-name">fugu</span>
        </a>
    </span>
    <div id="menus">
        <div id="toggle-menu"><a class="site-page"><i class="fas fa-bars fa-fw"></i></a></div>
        <div class="menus_items">
            <!-- 这里的一切改动记得带上header_com.php -->
            <style>
            #nav .menus_items .menus_item .menus_item_child li:hover {
                background-color: lightskyblue !important;
            }

            #nav .menus_items .menus_item .menus_item_child li:first-child {
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }

            #nav .menus_items .menus_item .menus_item_child li:last-child {
                border-bottom-right-radius: 5px;
                border-bottom-left-radius: 5px;
            }
            </style>
            <div class="menus_items">
                <div class="menus_item">
                <a class="site-page dark-light-nav" title="深/浅">
                   <i class="fas fa-adjust">
                    </i>
                   <span style="font-weight:600;"></span> 
                </a>
            </div>
            <script>
                // const firstMode = document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
                let secondSpanElement = document.querySelector('.dark-light-nav span');
                if(firstMode === 'light'){
                    secondSpanElement.textContent = 'Light';
                }else{
                    secondSpanElement.textContent = 'Dark';
                }
                document.querySelector('.dark-light-nav').addEventListener('click', function() {
                    const nowMode = document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
                    let spanElement = this.querySelector('span');
                    if (nowMode === 'light') {
                        spanElement.textContent = 'Dark';
                        activateDarkMode();
                        saveToLocal.set('theme', 'dark', 2);
                        GLOBAL_CONFIG.Snackbar !== undefined && btf.snackbarShow(GLOBAL_CONFIG.Snackbar.day_to_night);
                        
                    } else {
                        spanElement.textContent = 'Light';
                        activateLightMode();
                        saveToLocal.set('theme', 'light', 2);
                        GLOBAL_CONFIG.Snackbar !== undefined && btf.snackbarShow(GLOBAL_CONFIG.Snackbar.night_to_day);
                        
                    }
                    // handle some cases
                    typeof utterancesTheme === 'function' && utterancesTheme();
                    typeof changeGiscusTheme === 'function' && changeGiscusTheme();
                    typeof FB === 'object' && window.loadFBComment();
                    window.DISQUS && document.getElementById('disqus_thread').children.length && setTimeout(() => window.disqusReset(), 200);
                    typeof runMermaid === 'function' && window.runMermaid();
                });
            </script>
            <div class="menus_item">
                <a class="site-page" title="首页" href="/">
                    <i class="fas fa-home-alt"></i>
                    <span>首页</span>
                </a>
            </div>
            <div class="menus_item">
                <a class="site-page search-form-input" title="搜索">
                    <i class="fa-fw fas fa-search"></i>
                    <span>搜索</span>
                </a>
            </div>
            <div class="menus_item">
                <a class="site-page group" href="javascript:void(0);" rel="external nofollow noreferrer">
                    <i class="fas fa-blog"></i>
                    <span>文章</span>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="menus_item_child">

                    <li>
                        <a class="site-page child" href="/archive.html">
                            <i class="fa-fw fas fa-archive"></i>
                            <span>归档</span></a>
                    </li>
                    <li>
                        <a class="site-page child" href="/tags.html">
                            <i class="fa-fw fas fa-tags"></i>
                            <span>标签</span></a>
                    </li>
                    <li>
                        <a class="site-page child" href="/category-list.html">
                            <i class="fa-fw fas fa-folder-open"></i>
                            <span>分类</span></a>
                    </li>
                </ul>
            </div>
            <div class="menus_item">
                <a class="site-page" title="留言板" href="/messages.html">
                    <i class="fas fa-sticky-note"></i>
                    <span>留言板</span>
                </a>
            </div>
            <div class="menus_item">
                <a class="site-page" title="关于" href="/about-me.html">
                    <i class="fas fa-address-card"></i>
                    <span>关于这一切</span>
                </a>
            </div>
        </div>
    </div>
</nav>