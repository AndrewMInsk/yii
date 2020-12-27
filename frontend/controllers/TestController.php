<?php


namespace frontend\controllers;


use frontend\models\test\Test;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
       $list = Test::getNewsList();


        return $this->render('index',[
            'list'=>$list
        ]);
    }
}