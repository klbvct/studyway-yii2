<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;

?>

<div class="col-lg-3">
    <ul class="accordion-menu">
        <li>
            <a href="/"><div class="dropdownlink">О нас</div></a>
        </li>
        <li>
            <div class="dropdownlink">Образование
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>
            <ul class="submenuItems">
                <li><a href="/university">За рубежом</a></li>
                <li><a href="/university/austria">Австрия</a></li>
                <li><a href="/university/britain">Британия</a></li>
                <li><a href="/university/germany">Германия</a></li>
                <li><a href="/university/spain">Испания</a></li>
                <li><a href="/university/canada">Канада</a></li>
                <li><a href="/university/usa">США</a></li>
                <li><a href="/university/switzerland">Швейцария</a></li>
            </ul>
        </li>
        <li>
            <div class="dropdownlink">Программы
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>
            <ul class="submenuItems">
                <li><a href="/program/english">Курсы английского</a></li>
                <li><a href="/program/germany">Курсы немецкого</a></li>
                <li><a href="/program/camp">Летний лагерь</a></li>
            </ul>
        </li>
        <li>
            <div class="dropdownlink">Визы
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>
            <ul class="submenuItems">
                <li><a href="/visa/usa">США</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><div class="dropdownlink">Переводы</div></a>
        </li>
        <li>
            <a href="/blog"><div class="dropdownlink">Блог</div></a>
        </li>
        <li>
            <a href="/contact"><div class="dropdownlink">Контакты</div></a>
        </li>
    </ul>
</div>
<!-- / Menu -->
