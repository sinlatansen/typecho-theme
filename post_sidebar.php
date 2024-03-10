<?php if (!defined('__TYPECHO_ROOT_DIR__'))
  exit; ?>
<div class="aside-content" id="aside-content" role="complementary">
    <?php if (!empty($this->options->PostSidebarBlock) && in_array('ShowAuthorInfo', $this->options->PostSidebarBlock)): ?>
    <div class="card-widget card-info">
        <div class="card-info-avatar is-center">
            <div class="avatar-img">
                <img id="img_hover" data-lazy-src="<?php $this->options->logoUrl() ?>"
                    onerror="this.onerror=null;this.src='/usr/themes/butterfly/img/friend_404.gif'"
                    src="<?php echo GetLazyLoad() ?>" alt="avatar">
                <script>
                var image = document.getElementById('img_hover');

                var state = 0;
                image.addEventListener('mouseover', function() {
                    var bg = document.documentElement.getAttribute('data-theme');
                    console.log('bg=' + bg);
                    if (bg === 'light') {
                        state = state + 1;
                        console.log(state % 2);
                        if (state % 2 === 1) {
                            this.src = "https://s2.loli.net/2024/02/17/eOgCndyiYcGI1WH.jpg";
                        } else {
                            this.src = this.dataset.lazySrc;
                        }
                        console.log(this.src);
                    } else {
                        this.src = "https://s2.loli.net/2024/02/17/h41rvlyxgLnmcJK.jpg";
                    }

                });

                const glitchText = () => {
                    const elem = document.querySelector('.cyberpunk');
                    let originalText = elem.getAttribute('data-text');
                    let glitchedText = '';
                    for (let i = 0; i < originalText.length; i++) {
                        if (Math.random() > 0.8) {
                            const char = originalText[i];
                            glitchedText += char === char.toUpperCase() ? char.toLowerCase() : char.toUpperCase();
                        } else {
                            glitchedText += originalText[i];
                        }
                    }
                    elem.setAttribute('data-text', glitchedText);
                }

                setInterval(glitchText, 200);
                </script>
            </div>
            <div class="author-info__name cyberpunk glitched" data-text="<?php $this->author(); ?>">
                <?php $this->author(); ?>
            </div>
            <div class="author-info__description">
                <?php $this->options->author_description() ?>
            </div>
        </div>
        <div class="card-info-data">
            <div class="card-info-data site-data is-center">
                <a href="<?php $this->options->archivelink() ?>">
                    <div class="headline">文章</div>
                    <div class="length-num">
                        <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                        <?php $stat->publishedPostsNum() ?>
                    </div>
                </a>
                <a href="<?php $this->options->tagslink() ?>">
                    <div class="headline">标签</div>
                    <div class="length-num">
                        <?php echo tagsNum(); ?>
                    </div>
                </a>
                <a href="<?php $this->options->categorylink() ?>">
                    <div class="headline">
                        分类
                    </div>
                    <div class="length-num">
                        <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                        <?php $stat->categoriesNum() ?>
                    </div>
                </a>
            </div>
        </div>
        <!--<a class="button--animated" id="card-info-btn" target="_blank" rel="noopener" href="<?php $this->options->author_site() ?>">
    <i class="fas fa-link">
    </i>
    <span>
    <?php $this->options->author_site_description() ?>
    </span>
  </a>-->
        <?php if ($this->options->author_bottom != null): ?>
        <div class="card-info-social-icons is-center">
            <?php $this->options->author_bottom() ?>
        </div>
        <?php elseif (!$this->options->author_bottom): ?>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php if (!empty($this->options->PostSidebarBlock) && in_array('ShowAnnounce', $this->options->PostSidebarBlock)): ?>
    <!-- <div class="card-widget card-announcement">
      <div class="item-headline">
        <i class="fas fa-bullhorn card-announcement-animation"></i><span>公告</span>
      </div>
      <div class="announcement_content">
        <?php $this->options->announcement() ?>
      </div>
    </div> -->
    <?php endif; ?>
    <?php if (!empty($this->options->AD)): ?>
    <div class="card-widget">
        <div class="item-headline"><i class="fa-solid fa-rectangle-ad"></i><span>广告</span></div>
        <div>
            <?php $this->options->AD() ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="sticky_layout">
        <div class="card-widget" id="card-toc">
            <div class="item-headline">
                <i class="fas fa-stream"></i>
                <span>目录</span>
                <span class="toc-percentage"></span>
            </div>
            <div class="toc-content">
                <ol class="toc">
                    <?php getCatalog(); ?>
                </ol>
            </div>
        </div>
        
    </div>
</div><!-- end #sidebar -->