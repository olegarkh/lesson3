<?php

class Admin extends News
{
    public static function add($news){
        echo 'вот Add'.'<br>';
       $db = new DB;
       $db->queryAdd($news);
    }
} 