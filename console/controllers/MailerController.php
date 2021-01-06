<?php

namespace console\controllers;

use yii\console\Controller;

class MailerController extends Controller
{
    public function actionSend()
    {
        echo 'Hello World 1';
        die();
    }
    public function actionTest()
    {
        echo 'Hello World Test';
        die();
    }
}