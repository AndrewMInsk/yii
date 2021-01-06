<?php


namespace frontend\models\test;

use Yii;

/**
 * Class Test
 * @package frontend\models\test
 */
class Test
{


    /**
     * @param int $maxNews
     * @return array

     */
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

    /**
     * @param int $id
     * @return array|false

     */
    public static function getNewsById($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id=$id";
        return Yii::$app->db->createCommand($sql)->queryOne();


    }
}