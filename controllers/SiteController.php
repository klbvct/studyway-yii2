<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends AppController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {   
        $this->setMeta('Образование за рубежом | STUDYWAY в Запорожье', 'образование, высшее, университеты, за рубежом, за границей', 'STUDYWAY в Запорожье - консалтинг в сфере образования за границей. Квалифицированная помощь в поиске оптимальной стратегии обучения за границей, которая сформирует у человека успешную модель будущего.');
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $this->setMeta('Контакты | STUDYWAY в Запорожье', 'контакты, образование, studyway, запорожье', 'Контакты консалтинговой компании STUDYWAY | Запорожье. Путь к успешному будущему.');
        return $this->render('contact');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays Visa page.
     *
     * @return string
     */
    public function actionUsa()
    {
        $this->setMeta('Виза в США и Канаду | STUDYWAY в Запорожье', 'виза, сша, канада, студенческая, туристическая, бизнес, рабочая, studyway, запорожье', 'Виза в США и Канаду. Минимальный пакет документов. Все типы виз. Профессиональная подготовка документов.');
        return $this->render('usa');
    }

    /**
     * Displays Thanks page.
     *
     * @return string
     */
    public function actionThanks() {
        
        $this->setMeta('Спасибо за заявку по образованию за рубежом | STUDYWAY в Запорожье', 'спасибо, заявка, образование, studyway, запорожье', 'Спасибо за заявку STUDYWAY | Запорожье. Путь к успешному будущему.');
        return $this->render('thanks');
    }
}
