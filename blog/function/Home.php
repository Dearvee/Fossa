<?php
/**
 * Created by PhpStorm.
 * User: Dearvee
 * Date: 2017/5/12
 * Time: 13:45
 */


function getId(){
    $filename=dirname(__FILE__).'/../data/home.txt';
    $homeArticleId=file_get_contents($filename);
    $homeArticleId=explode("\r\n",$homeArticleId);
    return $homeArticleId;
}

function toHome($articleId){
    $filename=dirname(__FILE__).'/../data/home.txt';
    file_put_contents($filename,$articleId,FILE_APPEND);
}

function getHome(){
    $homeId=getId();
    count($homeId);
    $home="";
    for($i=0;$i<count($homeId);$i++){
        $home=$home."<a href='"."blog/p/".$homeId[$i].".html'>".$homeId[$i]."</a>";
    }
    return $home;
}