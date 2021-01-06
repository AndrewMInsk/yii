<?php




if (isset($list) && is_array($list)) {
    foreach ($list as $item) {
        var_dump($item);
        echo '<a href="'.Yii::$app->urlManager->createUrl(['test/view','id'=>$item['id']]).'">Подробнее</a>';
        echo '<br>';
    }
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
if (isset($news)) {
    var_dump($news);
}
