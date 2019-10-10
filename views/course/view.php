<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
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
                    <?php foreach ($universities as $university): ?>
                    
                        <a href="<?= Url::to(['program/view', 'alias' => $university->alias]) ?>">
                            <div class="list-items">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?= Html::img("@web/img/program/$university->img", ['alt' => "$university->title"]) ?>
                                    </div>
                                    <div class="col col-md-7">
                                        <div class="list-title">
                                            <h3><?= $university->title ?></h3>
                                            <span><i class="fas fa-map-marker-alt"></i></span><p><?= $university->location ?></p>
                                            <span><i class="fas fa-graduation-cap"></i></span><p><?= $university->profil ?></p>
                                            <span><i class="fas fa-dollar-sign"></i></span><p><?= $university->price ?> в неделю</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-2">
                                        <?= Html::img("@web/img/program/icon/$university->icon", ['alt' => "$university->title"]) ?>
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
            <?= $category->text ?>
        </div>
    </section>

    <!-- Предложение(Оффер) Консультации -->
    <section class="offer">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                <p class="offer-title">30 минут, бесплатной</p>
                <p class="offer-title"><span>Консультации и оценки шансов<br>на обучение за рубежом</span></p>
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

    <!-- Навигация под Оффером -->
    <section class="container">
        <div class="about-sidebar">
            <a href="#ex2">О специалисте</a>
            <a href="#ex4">Программы</a>
            <a href="#ex5">Что будет на консультации?</a>
            <a href="#ex6">Сколько стоит?</a>
            <a href="#ex1">Забронировать</a>
        </div>
    </section>

    <!-- О специалисте -->
    <section class="special" id="ex2">
        <div class="container">
            <div class="row">
                <div class="col-12"><div class="title">Марьяна Калабухова</div></div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="special-item">
                        <p><i class="fas fa-caret-right"></i> PhD – доктор философии<br>
                            <i class="fas fa-caret-right"></i> Директор группы компаний EUROPE CENTER Ltd.<br>
                            <i class="fas fa-caret-right"></i> Основатель компании Studyway – международное образование<br>
                        </p>        
                    </div>
                    <div class="special-item">
                        <p>
                            <i class="fas fa-caret-right"></i> 2008 - 2009 Стажировка в Университете Дуизбург-Эссен (Германия)<br>
                            <i class="fas fa-caret-right"></i> 2008 – 2013 Преподаватель (Факультет иностранной филологии) <br>
                            <i class="fas fa-caret-right"></i> С 2014  - консультант по вопросам образования за границей<br>
                            <i class="fas fa-caret-right"></i> С 2017 года – сертифицированный консультант по вопросам образования: методика “Education Design” (США)<br>                     
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="special-text">
                        <p><i class="fas fa-quote-right"></i> Обучение и профессиональное развитие каждого человека на сегодняшний день – это процесс очень индивидуальный. Формула “школа – институт - работа” уже не является действенной для всех. Дизайн образования в моих консультациях помогает сформировать индивидуальную стратегию для каждого студента. Подобно кубикам Lego, мы поэтапно выстраиваем концепцию обучения и развития для каждого абитуриента, профессионала или предпринимателя. Мы сотрудничаем с институциями во всем мире, что помогает каждому студенту формировать  привлекательный для работодателя набор навыков и знаний в будущем <i class="fas fa-quote-left"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Полоса с часами-->
    <section class="time">
        <div class="container">
            <div class="time-clock">
                
                    <img src="/img/clock.png" alt="">
                    
                    <p>За 30 минут Марьяна расскажет, какие программы в колледжах или университетах подойдут именно вам. Расскажет как поступить и построить карьеру за рубежом.</p>
                    
            </div>
        </div>
    </section>

    <!-- Что будет на консультации? -->
    <section class="consult" id="ex5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12"><div class="title">Что будет на консультации?</div></div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                <div class="consult-item">
                    <img src="/img/1.png" alt="">
                        <h3>Ориентир — на ваши цели</h3>
                        <p>
                            Марьяна поможет составить план по подготовке к языковым экзаменам для поступления, расскажет, как улучшить ваш кейс и добавить мотивации в вашу заявку для приёмной комиссии. Расскажет, как выбрать стипендии для иностранных студентов, которые покрывают не только курс, но и дают возможность стажироваться во время обучения.
                        </p>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="consult-item">
                    <img src="/img/2.png" alt="">
                        <h3>Мотивация и помощь</h3>
                        <p>
                            Марьяна расскажет, как поступала сама, какие документы нужны для поступления и оценит шансы. И всё это — самостоятельно, без дорогих агентов и специальных знаний. Подберёт колледж по вашему направлению, проанализирует лучшие специальности для вас и обозначит время на подготовку к поступлению.
                        </p>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                <div class="consult-item">
                    <img src="/img/3.png" alt="">
                        <h3>Ответы на сложные вопросы</h3>
                        <p>
                            Можно обсудить поступление в университет или колледж, наметить план подготовки к поступлению и выбору направления и программы обучения. Марьяна поделится своим опытом и расскажет обо всех подводных камнях.
                        </p>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="consult-item">
                    <img src="/img/4.png" alt="">
                        <h3>Еще бонусы</h3>
                        <p>
                            Проведет анализ способностей и талантов абитуриента. Расскажет об актуальности той или иной специальности на рынке труда сегодня/через 5 лет. Проанализирует возможности совершенствования в уже выбранной специальности или переквалификации студентов.
                        </p>
                </div>
                </div>
            </div>
        </div>
    </section>

