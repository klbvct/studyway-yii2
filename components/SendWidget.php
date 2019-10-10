<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

use yii\base\Widget;
use app\models\ContactForm;
use Yii;

/**
 * Description of SendWidget
 *
 * @author Home
 */
class SendWidget extends Widget {
    
    public function run() {
        
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            
        }
        return $this->render('send', [
            'model' => $model,
        ]);
      
    }

   

}
