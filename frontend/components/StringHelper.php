<?php

namespace frontend\components;


use Yii;

class StringHelper
{


    public  function getShort($string, $limit = null)
    {

        if ($limit === NULL) {
            $limit = Yii::$app->params['shortTextLimit'];
        }
        //$miniStr = substr($string, 0, $limit);

        $keywords = preg_split("/[\s,]+/", $string);

        $output = array_slice($keywords,0, $limit);
        // возвращает "c", "d" и "e"

        return implode(' ',$output);
    }
}