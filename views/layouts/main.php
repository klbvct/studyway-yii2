<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
      <div class="container">
         <div class="row no-gutters">
            <div class="col-md-3 top">
               <a href="/"><img src="/img/logo.png" alt="" class="img-fluid"></a>
            </div>
            <div class="col-md top">
               <i class="fas fa-map-marker-alt"></i>Запорожье, Жаботинского 33
            </div>
            <div class="col-sm-12 col-md-3 col-lg-2 top" id="sweeties">
               <i class="fa fa-chevron-down" aria-hidden="true"></i><span class="header-title">Контакты </span>
               <ul>
                  <li>(067) 616 63 39</li>
                  <li>(095) 462 43 52</li>
                  <li>info@studyway.com.ua</li>
               </ul>
            </div>
         </div>
      </div>
   </header>

   <?= $content ?>

   
      <!-- Забронировать консультацию -->
      <section class="reserve" id="ex1">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="title">Забронировать консультацию</div>
               </div>
               <div class="col-lg-7">
                  <div class="reserve__left">
                     <p>Стоимость<br><span class="bold">бесплатно</span></p>
                     <p>Забронируйте консультацию с оценкой шансов<br><?= $send ;?></p>
                     <ul><span class="reserve_blue">Как попасть на консультацию:</span>
                        <li>1. Оставьте заявку</li>
                        <li>2. Подтвердите дату и время</li>
                        <li>3. Получить ответы на вопросы</li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-5">
                  <?php echo app\components\SendWidget::widget(); ?>
               </div>
            </div>
         </div>
      </section>

   <footer class="footer">
      <div class="container">
         <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/university">Университеты</a></li>
            <li><a href="/program/english">Программы</a></li>
            <li><a href="/blog">Блог</a></li>
            <li><a href="/contact">Контакты</a></li>
         </ul>
         <ul>
            <li>+38 095 462 43 52</li>
            <li>+38 067 616 63 39 | Viber</li>
            <li>info@studyway.com.ua</li>
            <li><i class="far fa-clock"></i> пн-пт 10:00-18:00</li>
         </ul>
         <ul>
            <li><i class="fas fa-map-marker-alt"></i> StudyWay - 69035, Украина, Запорожье, Жаботинского, 33</li>
         </ul>
      </div>
   </footer>

    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
