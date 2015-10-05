<?php 
define('USER','root');
define('PASSWORD','');
try{
$db=new PDO('mysql:host=localhost;port=3307;dbname=helen',USER,PASSWORD);

}catch(PDOException $e){
echo $e->getMessage();
}