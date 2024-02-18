<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php   
/**  
    * 标签
    *  
    * @package custom  
    */  
$this->need('page_header.php'); ?>
<style>
.tag-cloud-list a:first-child{
    font-size: 1.8em;
}
.tag-cloud-list a{
    font-size: 1.3em;
}
.tag-cloud-list a:nth-child(2n){
    font-size: 2.1em;
}

@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --body-color: #181c1f;
  --primary-color: #ffffff;
}

body {
  min-height: 100vh;
  background-color: var(--body-color);
}

.container {
  width: 100%;
  height: 400px;
  display: flex;
  justify-content: center;
  border-bottom: 1px solid rgba(255, 255, 255, .1);
  /* 添加一个从下往上线性渐变的镜像效果，增加视觉层次感 */
  -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, transparent, transparent, #0005);
}

.cloud {
  position: relative;
  top: 50px;
  z-index: 100;

  /* 横向云朵 */
  width: 320px;
  height: 100px;
  background-color: var(--primary-color);
  border-radius: 100px;

  /* drop-shadow函数将阴影效果应用于投影图像 */
  filter: drop-shadow(0 0 30px var(--primary-color));
}
.cloud::before {
  content: "";
  /* 左侧小云朵 */
  width: 110px;
  height: 110px;
  background-color: var(--primary-color);
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: 40px;

  /* 右侧大云朵 */
  box-shadow: 90px 0 0 30px var(--primary-color);
}

.cloud .raintext {
  position: absolute;
  top: 40px;
  height: 20px;
  line-height: 20px;
  text-transform: uppercase;
  color: var(--primary-color);
  text-shadow: 0 0 5px var(--primary-color), 0 0 15px var(--primary-color), 0 0 30px var(--primary-color);
  transform-origin: bottom;
  animation: animate 2s linear forwards;
}

@keyframes animate {
  0% {
    transform: translateX(0);
  }

  70% {
    transform: translateY(290px);
  }

  100% {
    transform: translateY(290px);
  }
}

</style>
<main class="layout" id="content-inner">
    <div id="page">
        <div class="container">
            <div class="cloud">
            <!-- <div class="text">a</div>
            <div class="text">b</div>
            <div class="text">c</div> -->
            <!-- 雨滴将会在这里出现 -->
            </div>
            <script>
                // 生成字母和数字数组
                function generateText() {
                const letters = [];
                const numbers = [];

                const a = "a".charCodeAt(0);

                for (let i = 0; i < 26; i++) {
                    letters.push(String.fromCharCode(a + i));
                    
                    if (i < 9) {
                    numbers.push(i + 1);
                    }
                };
                return [...letters, ...numbers];
                };

                // 从生成的数组中随机取出一个字符
                function randomText() {
                const texts = generateText();
                const text = texts[Math.floor(Math.random() * texts.length)];
                return text;
                };

                function rainEffect() {
                const cloudEle = document.querySelector(".cloud");
                const textEle = document.createElement("div");

                textEle.innerText = randomText();
                // console.log(textEle.innerText);
                textEle.classList.add("raintext");

                const left = Math.floor(Math.random() * 310);
                const size = Math.random() * 1.5;
                const duration = Math.random();
                const styleSheets = {
                    left: `${left}px`,
                    fontSize: `${0.5 + size}em`,
                    animationDuration: `${1 + duration}s`,
                };
                Object.assign(textEle.style, styleSheets);
                cloudEle.appendChild(textEle);
                // debugger;
                setTimeout(() => {
                    cloudEle.removeChild(textEle);
                }, 2000);
                };
                
                // 每隔20ms创建一个雨滴元素
                setInterval(() => rainEffect(), 20);
            </script>
        </div>
        <div class="tag-cloud-title is-center">标签 - <span class="tag-cloud-amount"><?php echo tagsNum(); ?> </span></div>
        <div class="tag-cloud-list is-center">
            
   <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 2000))->to($tags); ?>  
        <?php while($tags->next()): ?>  
            <a<?php if (!empty($this->options->beautifyBlock) && in_array('ShowColorTags',
                    $this->options->beautifyBlock)): ?> 
            style="color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)"
              <?php endif; ?>
            rel="tag" class="tagslink" href="<?php $tags->permalink(); ?>"  title="<?php $tags->name(); ?>" style='display: inline-block; margin: 0 5px 5px 0;'><?php $tags->name(); ?></a>
            <?php endwhile; ?>
  </div>
         <?php $this->need('comments.php'); ?>
    </div>
     <?php $this->need('sidebar.php'); ?>
</main>
<?php $this -> need('footer.php'); ?>