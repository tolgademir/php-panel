<?php

session_start();

$host="localhost";

$veritabani_ismi="panel";

$kullanici_adi="root";

$sifre="";

try 
{
	$db = new PDO("mysql:host=$host; dbname=$veritabani_ismi; charset=utf8", $kullanici_adi,$sifre);
      
} 
catch (PDOException $e) {
	echo $e->getmessage();
      
}

$sorgu=$db->prepare("SELECT * FROM yonetici_paneli");
$sorgu->execute();
$yonetici_paneli=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM login_edit");
$sorgu->execute();
$login_edit=$sorgu->fetch(PDO::FETCH_ASSOC);

?>