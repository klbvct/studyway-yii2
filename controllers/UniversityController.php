<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\models\Category;
use app\models\University;
use Yii;

class UniversityController extends AppController 
{


    public function actionView($alias) {
        $alias = Yii::$app->request->get('alias');
        $university = University::findOne(['alias' => $alias]);
        if (empty($university)) { 
            throw new \yii\web\HttpException(404, 'Такой страницы нет!');
        }

        $this->setMeta($university->title, $university->keywords, $university->description);
        
        return $this->render('view', compact('university'));
    }


}