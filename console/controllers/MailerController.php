<?php

namespace console\controllers;

use yii\console\Controller;
use Yii;

/**
 * Class MailerController
 * @package console\controllers
 */
class MailerController extends Controller
{
    /**
     * отсылаем
     */
    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()->setTo('info@a-site.by')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();
        var_dump($result); die();
    }

}