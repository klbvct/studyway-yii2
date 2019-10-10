<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="form4full">
    
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            <script>
                window.open("/site/thanks.php","_self");
            </script>
        </div>

        <p>
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        
        <?php $form = ActiveForm::begin([
                'options' => ['id' => 'forma1'],
                //'layout' => 'horizontal',
            ]); ?>

            <?= $form->field($model, 'name')->textInput()->input('name', ['placeholder' => "Ваше имя"]); ?>

            <?= $form->field($model, 'email')->textInput()->input('email', ['placeholder' => "Ваш e-mail"]); ?>

            <?= $form->field($model, 'subject')->textInput()->input('subject', ['placeholder' => "Ваш телефон"]); ?>

            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>

        <?php ActiveForm::end(); ?>            
            
    <?php endif; ?>

</div>


