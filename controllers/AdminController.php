<?php

class AdminController extends NewsController
{
    protected static $state = 'Admin';
    protected static $inform = 'Добавить новость';

    public function __construct(){
        //echo 'это - AdminController'.'<br>';
    }
    public static function actionEdit(){
        include __DIR__ . '/../views/admin/editor.php';
        die;
    }
    public static function actionAdd(){

        $news = new News();
        $news->title = $_POST['title'];
        $news->text = $_POST['text'];
        Admin::add($news);
    }
}