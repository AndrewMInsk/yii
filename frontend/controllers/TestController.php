<?php


namespace frontend\controllers;


use frontend\models\test\Test;
use yii\web\Controller;


class TestController extends Controller
{

    public function actionIndex()
    {


        $maxNews = intval(\Yii::$app->params['maxNewsInList']);


        $list = Test::getNewsList($maxNews);



        return $this->render('index', [
            'list' => $list
        ]);


    }
}