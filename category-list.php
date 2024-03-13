<?php

/**
 * 分类
 *
 * @package custom
 *
 */ $this->need('page_header.php');
?>
<main class="layout" id="content-inner">
    <div id="page">
        <div class="category-lists">
            <div class="category-title is-center">分类 -
                <span
                    class="category-amount"><?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?><?php $stat->categoriesNum() ?></span>
            </div>
            <script>
            // 准备数据
            var categoryNames = [];
            var categoryCounts = [];
            <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
            <?php while ($categories->next()) : ?>
            categoryNames.push('<?php echo addslashes($categories->name); ?>');
            categoryCounts.push(<?php echo $categories->count(); ?>);
            <?php endwhile; ?>
            </script>

            <canvas id="categoryChart" width="400" height="400"></canvas>
            <style>
            #categoryChart {
                max-width: 300px;
                max-height: 300px;
                position: relative;
                margin: auto;
            }
            </style>

            <script>
            var ctx = document.getElementById('categoryChart').getContext('2d');
            var categoryChart = new Chart(ctx, {
                type: 'polarArea',
                data: {
                    labels: categoryNames,
                    datasets: [{
                        label: '文章数',
                        data: categoryCounts,
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(199, 199, 199, 0.6)',
                            'rgba(54, 162, 235, 0.6)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(199, 199, 199, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // 这可以让图表更好地适应容器大小
                    plugins: {
                        legend: {
                            display: false // 不显示图例
                        }
                    }
                }
            });
            </script>

            <ul class="category-list" id="aside-cat-list">
                <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
                <?php while ($categorys->next()) : ?>
                <?php if ($categorys->levels === 0) : ?>
                <?php $children = $categorys->getAllChildren($categorys->mid); ?>
                <?php if (empty($children)) { ?>
                <li class="category-list-item">
                    <a class="category-list-link" href="<?php $categorys->permalink(); ?>"
                        title="<?php $categorys->name(); ?>"><?php $categorys->name(); ?>
                    </a>
                    <span class="category-list-count"><?php $categorys->count(); ?></span>
                </li>
                <?php } else { ?>
                <li class="category-list-item">
                    <a class="category-list-link" href="#"><?php $categorys->name(); ?></a>
                    <span class="category-list-count"><?php $categorys->count(); ?></span>
                    <ul class="category-list-child">
                        <?php foreach ($children as $mid) { ?>
                        <?php
                                        $child = $categorys->getCategory($mid);
                                        echo ($this->is('category', $mid)); ?>
                        <li class="category-list-item">
                            <a href="<?php echo $child['permalink'] ?>"
                                title="<?php echo $child['name']; ?>"><?php echo $child['name']; ?>
                            </a><span class="category-list-count"><?php echo $child['count']; ?></span>
                        </li>
                        <?php
                                    } ?>
                    </ul>
                </li>
                <?php } ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        </div>
        <?php $this->need('comments.php'); ?>
    </div>
    <?php $this->need('sidebar.php'); ?>
</main>
<?php $this->need('footer.php'); ?>