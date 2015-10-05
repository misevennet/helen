<?php require_once('templutes/top.php');
if($_GET['url']){
$file=$_GET['url'];
}
else{
$file='index';
}
$res=$db->query("SELECT * FROM maintexts WHERE url='$file'");
$text=$res->fetch();
echo"<h2>".$text['name']."</h2>";
echo $text['body'];
 require_once('templutes/bottom.php');?>