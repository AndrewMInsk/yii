<?php


namespace frontend\models\test;

use Yii;

class Test
{


    public static function getNewsList($maxNews = 10)
    {


        $sql = 'SELECT * FROM news LIMIT ' . $maxNews;

        $result = Yii::$app->db->createCommand($sql)->queryAll();
        if (!empty($result) && is_array($result)) {

            foreach ($result as &$item) {
                $item['content'] = Yii::$app->StringHelper->getShort($item['content'], 4);
            }
        }

        return $result;
    }
}