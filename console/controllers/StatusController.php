<?php

namespace console\controllers;

use yii\console\Controller;

class StatusController extends Controller
{

    public function actionTest()
    {
        echo 'Hello World Test Status';
        die();
    }
}