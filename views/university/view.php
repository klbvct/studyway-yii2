<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>

<!-- Фото и название университета -->
<section class="university-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <input type="button" onclick="history.back();" value="< назад" class="button-back">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <?= Html::img("@web/img/university/$university->img", ['alt' => "Университет $university->title"]) ?>
                </div>
                <div class="col-md-5">
                    <div class="university-top__items">
                        <h1><?= $university->title ?></h1>
                        <div class="university-top__item">
                            <i class="fas fa-map-marker-alt"></i><p><?= $university->location ?></p>
                        </div>
                        <div class="university-top__item">
                            <i class="fas fa-graduation-cap"></i><p><?= $university->profil ?></p>
                        </div>
                        <div class="university-top__item">
                            <i class="far fa-calendar-alt"></i><p><?= $university->duration ?></p>
                        </div>
                        <div class="university-top__item">
                            <i class="fas fa-dollar-sign"></i><p><?= $university->price ?> за семестр</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <?= Html::img("@web/img/university/icon/$university->icon", ['alt' => "Университет $university->title", 'class' => 'university-top__icon']) ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Описание университета -->
    <section class="university-description">
        <div class="container">
            <div class="row">
                <h2 class="bold">Описание <?= $university->title ?></h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <?= $university->about ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Программы обучения -->
    <section class="university-programs">
        <div class="container">
            <div class="university-programs__item">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-lg-5">
                        <h2 class="bold">Программы обучения в<br><?= $university->title ?></h2>
                    </div>
                    <div class="col-lg-5">
                        <ul class="university-programs-items">
                            <?= $university->program ?>
                        </ul>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div class="university-programs__item">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-lg-5">
                        <h2 class="bold">Факультеты и специальности в<br><?= $university->title ?></h2>
                    </div>
                    <div class="col-lg-5">
                        <ul>
                            <?= $university->facult ?>
                        </ul>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Цена учебы в университете -->
    <section class="university-price">
        <div class="container">
            <h2>Цена обучения в <?= $university->title ?></h2>
            <?= $university->study ?>
        </div>
    </section>

    <!-- Проживание в университете -->
    <section class="university-accomodation">
        <div class="container">
            <div class="row">
                <h2 class="bold">Проживание в <?= $university->title ?></h2>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <p><img src="/img/university/accomodation/family.png" alt=""></p>
                    <p>Принимающая семья</p>
                </div>
                <div class="col-lg-3">
                    <p><img src="/img/university/accomodation/campus.png" alt=""></p>
                    <p>Университетский кампус</p>
                </div>
                <div class="col-lg-3">
                    <p><img src="/img/university/accomodation/student.png" alt=""></p>
                    <p>Студенческая резиденция</p>
                </div>
                <div class="col-lg-3">
                    <p><img src="/img/university/accomodation/city.png" alt=""></p>
                    <p>Проживание вне кампуса</p>
                </div>
            </div>
        </div>
    </section>