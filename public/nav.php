<nav id="nav" class="show">
    <span id="blog-info">
        <a href="<?php $this->options->siteUrl(); ?>">
            <?php if (!empty($this->options->SiteLogo)) : ?>
                <img src="<?php $this->options->SiteLogo() ?>" width="95px" />
            <?php else : ?>
                <span class="site-name"><?php $this->options->title() ?></span>
            <?php endif ?>
        </a>
    </span>
    <div id="menus">
        <!-- <div id="search-button">
                      <a class="site-page social-icon search">
                      <i class="fas fa-search fa-fw"></i>
                      <?php if (is_array($this->options->beautifyBlock) && in_array('showNoAlertSearch', $this->options->beautifyBlock)) : ?>
                      <form method="post" action="<?php $this->options->siteUrl(); ?>" role="search" id="dSearch">
                        <input type="text" placeholder="搜索" id="dSearchIn" name="s" required="required">
                      </form>
                      <?php else : ?>
                        <span> 搜索</span>
                      <?php endif ?>
                      </a> 
                      </div> -->
        <div id="toggle-menu"><a class="site-page"><i class="fas fa-bars fa-fw"></i></a></div>
        <div class="menus_items">
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
            <!-- <div class="menus_item">
                <a class="site-page group" href="javascript:void(0);" rel="external nofollow noreferrer">
                    <i class="far fa-file-alt"></i>
                    <span>主题文档</span>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="menus_item_child">
                    <li>
                        <a class="site-page child" href="/archives/typecho-butterfly.html">
                            <i class="fas fa-map-signs"></i>
                            <span>使用说明</span></a>
                    </li>
                    <li>
                        <a class="site-page child" href="/archives/tagplugins.html">
                            <i class="fas fa-tag"></i>
                            <span>标签外挂</span></a>
                    </li>
                </ul>
            </div> -->
            <!-- <div class="menus_item">
                <a class="site-page" href="https://blog.wehaox.com/friend.html" title="友链">
                    <i class="fa-fw fas fa-link"></i>
                    <span>友链</span>
                </a>
            </div> -->
            <div class="menus_item">
                <a class="site-page" href="https://blog.wehaox.com/about.html">
                    <i class="fa-fw fas fa-user"></i>
                    <span>关于这一切</span>
                </a>
            </div>
            <!-- <div class="menus_item">
                <a class="site-page group" href="javascript:void(0);" rel="external nofollow noreferrer">
                    <i class="fas fa-network-wired"></i>
                    <span>其他站点</span>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="menus_item_child">
                    <li>
                        <a class="site-page child" href="https://www.wehaox.com/" target="_BLANK">
                            <i class="fas fa-globe-asia"></i>
                            <span>WeHao’s Web</span></a>
                    </li>
                    <li>
                        <a class="site-page child" href="https://file.wehaox.com/" target="_BLANK">
                            <i class="fas fa-share"></i>
                            <span>WeHao‘s Share</span></a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</nav>