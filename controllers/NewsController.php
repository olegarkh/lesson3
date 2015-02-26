<?php

class NewsController
{
    protected static $state = 'News';
    protected static $inform = '';

    public function __construct(){
        echo 'это - NewsController'.'<br>';
        $status = 'News';
    }
    public static function actionAll()
    {
        $status = static::$state;
        $info = static::$inform;
        $items = News::getAll();
        include __DIR__ . '/../views/news/all.php';
        die;
    }
    public static function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../views/news/one.php';
        die;
    }
}