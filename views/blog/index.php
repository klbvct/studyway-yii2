<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>

<!-- Секция Блог -->
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="home"><div class="col-12"><a href="/">< Главная</a></div></div>
        </div>
        <div class="row">
            <div class="col-12"><h1>Блог - все про образование за рубежом</h1></div>
        </div>
        <div class="row">
            <?php if(!empty($hits)): ?>
                <?php foreach ($hits as $hit): ?>

                    <div class="col-md-6 col-lg-4">
                        <a href="<?= Url::to(['blog/view', 'alias' => $hit->alias]) ?>">
                            <div class="blog__item">
                                <?= Html::img("@web/img/blog/$hit->img", ['alt' => "$hit->title"]) ?>
                                <h3><?= $hit->title ?></h3>
                                <p><?= $hit->time ?></p>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>

            <!--Pagination-->
            <div class="col-12">
                <div class="pagination">
                <?php 
                    echo LinkPager::widget([
                        'pagination' => $pages,
                    ]); 
                ?>
                </div>
            </div>
        </div>
    </div>
</section>