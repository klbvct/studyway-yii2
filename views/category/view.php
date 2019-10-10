<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\Pjax;
?>

<!-- Список университетов -->
<section class="list" id="ex4">
    <div class="container">
        <div class="row">

            <!-- Menu -->
            <?php echo app\components\SidebarWidget::widget(); ?>
            <!-- / Menu -->

            <!-- List University -->
            <div class="col-lg-9">
                <h1><?= $category->title ?></h1>

                
                    <?php if(!empty($universities)): ?>
                        <?php foreach ($universities as $hit): ?>

                            <a href="<?= Url::to(['university/view', 'alias' => $hit->alias]) ?>">
                                <div class="list-items">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <?= Html::img("@web/img/university/$hit->img", ['alt' => "Университет $hit->title"]) ?>
                                        </div>
                                        <div class="col col-md-7">
                                            <div class="list-title">
                                                <h3><?= $hit->title ?></h3>
                                                <span><i class="fas fa-map-marker-alt"></i></span><p><?= $hit->location ?></p>
                                                <span><i class="fas fa-graduation-cap"></i></span><p><?= $hit->profil ?></p>
                                                <span><i class="fas fa-dollar-sign"></i></span><p><?= $hit->price ?> за семестр</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-2">
                                            <?= Html::img("@web/img/university/icon/$hit->icon", ['alt' => "Университет $hit->title"]) ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            
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
            <!-- / List University -->
        </div>
    </div>
</section>

<!-- Описание страницы и расширеный текст -->
<section class="content">
    <div class="container">
        <!-- <article>
        <h2>Бакалавриат в США</h2>
        <p>
            Степень бакалавра — первая базовая ступень высшего образования в США. Обучение длится 4 года. Для поступления необходимо иметь аттестат о среднем образовании. Самое приятно, что американцы принимают наши аттестаты об образовании, так что поступать на бакалавриат в США можно сразу после окончания школы. Обычно для поступления нужно сдать всего два экзамена — SAT (проверяет математику, логику, английский) и TOEFL (проверяет английский). В некоторых университетах есть специальные занятия для иностранцев. Это курс по адаптации, упор здесь делается на академический английский. Плюс подобных занятий в том, что после этого учебного года студент попадает сразу на второй курс, таким образом, учащийся экономит время.
        </p>
        <ul><span>3 этапа обучения в аспирантуре США:</span>
            <li>Изучение обязательного списка предметов, выбор научного руководителя и написание плана будущей диссертации</li>
            <li>Сдача квалификационных экзаменов (Сomprehensive Exams)</li>
            <li>В последний год студенты занимаются написанием самой диссертации и её защитой</li>
        </ul>
        </article>
        <article>
        <h2>Магистратура в США</h2>
        <p>
            Обучение на степень магистра длится 1-2 года. В магистратуру идут те, кто хочет перейти на следующую ступень образования по своей специальности или же те, кто решил поменять свою деятельность. Большой плюс образования в США в том, что ваша специальность в магистратуре может не иметь никакого отношения к специальности на бакалавриате. То есть после физики можно спокойно идти на экономику.
        </p>
        </article> -->
        <?= $category->advantage ?>
    </div>
</section>

<!-- Предложение(Оффер) Консультации -->
<section class="offer">
    <div class="container">
        <div class="row no-gutters">
        <div class="col-lg-6">
            <p class="offer-title">30 минут, бесплатной</p>
            <p class="offer-title"><span>Консультации и оценки шансов<br>на <?= $category->title_h1 ?></span></p>
            <p class="offer-title">с PhD - Doctor of Philosophy,<br>Марьяной Калабуховой</p>
            <a href="#ex1">
                <button class="button photo-button button-full">
                    Забронировать      
                </button>
            </a>
            <a href="#ex2">
                <button class="button photo-button button-empty">
                    Подробнее
                </button>
            </a>
        </div>
        <div class="col-lg-6">
            <img src="/img/offer-photo.png" alt="" class="img-responsive">
        </div>
        </div>
    </div>
</section>

<?php echo app\components\AboutmeWidget::widget(); ?>
