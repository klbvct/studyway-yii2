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
use yii\data\Pagination;

/**
 * Description of Category
 *
 * @author Home
 */
class CategoryController extends AppController 
{
    
    public function actionIndex() {
       
        $query = University::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $hits = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('Обучение за рубежом | Studyway в Запорожье', 'университеты, вузы, поступить, высшее, образование, обучение, за границе, за рубежом', 'Квалифицированная помощь в поиске оптимальной стратегии обучения за рубежом. Каталог университетов за рубежом. Оптимальный путь для учебы украинцев за границей. Отзывы и рекомендации студентов по обучению за границей.');
        
        return $this->render('index', compact('hits', 'pages'));
    }

    public function actionView($alias) {
        
        $alias = Yii::$app->request->get('alias');
        $category = Category::findOne(['alias' => $alias]);
      
        if (empty($category)) { 
            throw new \yii\web\HttpException(404, 'Такой страницы нет!');
        }
        
        $query = University::find()->where(['category_id' => $alias]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $universities = $query->offset($pages->offset)->limit($pages->limit)->all();
        

        $this->setMeta($category->title, $university->keywords, $university->description);
    
        return $this->render('view', compact('universities', 'pages', 'category'));
    }

}
