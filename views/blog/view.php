<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>

<!-- Секция Блог -->
<section class="blog-item">
    <div class="container">
        <div class="row">
            <div class="home"><div class="col-12"><a href="/blog">< Блог</a></div></div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="blog-item__content">
                    <?= Html::img("@web/img/blog/$blog->img", ['alt' => "$blog->title"]) ?>
                    <h1><?= $blog->title ?></h1>
                    <?= $blog->text ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-item__list">
                    <h3>Блог</h3>
                    <ul>
                        <?php if(!empty($query)): ?>
                            <?php foreach ($query as $hit): ?>

                                <a href="<?= Url::to(['blog/view', 'alias' => $hit->alias]) ?>">
                                    <li><?= $hit->title ?></li>
                                </a>
                    
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>