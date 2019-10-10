<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\models\Course;
use app\models\Program;
use Yii;
use yii\data\Pagination;

/**
 * Description of CourseController
 *
 * @author Home
 */
class CourseController extends AppController 
{
    /*public function actionIndex() {
        $query = Program::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $hits = $query->offset($pages->offset)->limit($pages->limit)->all();
        
        $this->setMeta('Программы за рубежом | STUDYWAY в Запорожье', 'программы, курсы, каникулы, языковые, за рубежом, для украинцев, за границей', 'Языковые программы за рубежом. Курсы за границей для детей и взрослых. Каникулы за рубежом. Профессиональный английский язык.');
        
        return $this->render('index', compact('hits', 'pages'));
    }*/

    public function actionView($alias) {
        $alias = Yii::$app->request->get('alias');     
        $category = Course::findOne(['alias' => $alias]);
        if (empty($category)) { 
            throw new \yii\web\HttpException(404, 'Такой страницы нет!');
        }
        //$universities = University::find()->where(['category_id' => $alias])->limit(4)->all();
        $query = Program::find()->where(['category_id' => $alias]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $universities = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta($category->title, $category->keywords, $category->description . ' | STUDYWAY в Запорожье');
    
        return $this->render('view', compact('universities', 'pages', 'category'));
    }
}
