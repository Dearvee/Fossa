<?php
/**
 * Created by PhpStorm.
 * User: Dearvee
 * Date: 2017/5/4
 * Time: 23:48
 */

$title=addslashes($_GET['title']);
$text=addslashes($_GET['text']);
date_default_timezone_set('Asia/Shanghai');
$time=date("l jS \of F Y H:i:s");
$index=$_GET['index'];

$mysqli=new mysqli("162.251.93.27","a0421211704","dearvee1996","a0421211704");
$sql="INSERT INTO blog_article(title,text,time)
                          VALUES (N'$title',N'$text','$time')";
//$mysqli=new mysqli("localhost","root","dearvee1996","blog");
//$sql="INSERT INTO article(title,text,time)
//                          VALUES (N'$title',N'$text','$time')";
$mysqli->query($sql);
$mysqli->close();
echo $time.'article submit successful~';
include '../function/articleToHtml.php';
include '../function/Home.php';
$href=buildHtmlFile($title,$time,$_GET['text']);#build html file
if ($index){
    toHome($href);                              #write to home.txt
}
echo "<script>window.location.href=\"../p/".$href.".html\";</script>";



