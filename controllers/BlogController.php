<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\models\Blog;
use Yii;
use yii\data\Pagination;

/**
 * Description of BlogController
 *
 * @author Home
 */
class BlogController extends AppController 
{
    //put your code here
    public function actionIndex() {
        //$hits = University::find()->where(['hit' => 1])->limit(4)->all();
        $query = Blog::find();
        
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6, 'forcePageParam' => false, 'pageSizeParam' => false]);
       
        $hits = $query->offset($pages->offset)->limit($pages->limit)->orderBy('time DESC')->all();
        
        $this->setMeta('Блог | STUDYWAY в Запорожье', 'блог, образование, курсы, программы, за рубежом, за границей', 'Блог об образовании за границей для украинцев из Запорожья. Лучшие университеты за рубежом');
        
        return $this->render('index', compact('hits', 'pages'));
    }
    
    public function actionView($alias) {
        $alias = Yii::$app->request->get('alias');
        $blog = blog::findOne(['alias' => $alias]);
        if (empty($blog)) { 
            throw new \yii\web\HttpException(404, 'Такой страницы нет!');
        }
        
        $query = Blog::find()->limit(6)->orderBy('time DESC')->all();
        
        $this->setMeta($blog->title, $university->keywords, $university->description . ' | STUDYWAY в Запорожье');
        
        return $this->render('view', compact('blog', 'query'));
    }
}
