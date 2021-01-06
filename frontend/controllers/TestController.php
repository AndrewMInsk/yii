<?php


namespace frontend\controllers;


use frontend\models\test\Test;
use yii\web\Controller;
use Yii;

/**
 * Class TestController
 * @package frontend\controllers
 */
class TestController extends Controller
{

    /**
     *
     * @return string
     */
    public function actionIndex()
    {
        $maxNews = intval(\Yii::$app->params['maxNewsInList']);
        $list = Test::getNewsList($maxNews);
        return $this->render('index', [
            'list' => $list
        ]);
    }

    /**
     * @param $id
     * @return string
     */
    public function actionView($id)
    {

        //mail('info@a-site.by', 'My Subject', "Hi");
        $result = Yii::$app->mailer->compose()->setTo('info@a-site.by')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();

        $item = Test::getNewsById($id);
        return $this->render('index', [
            'news' => $item
        ]);
    }
}