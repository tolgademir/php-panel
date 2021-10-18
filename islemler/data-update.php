<?php

include "db.php";

if (isset($_POST['yonetici_paneli_veri_guncelleme'])) {
	$sorgu=$db->prepare("UPDATE yonetici_paneli SET 
		yonetici_paneli_baslik=:yonetici_paneli_baslik,
		yonetici_paneli_aciklama=:yonetici_paneli_aciklama
		");

	$sonuc=$sorgu->execute(array(
		'yonetici_paneli_baslik' => $_POST['yonetici_paneli_baslik'],
		'yonetici_paneli_aciklama' => $_POST['yonetici_paneli_aciklama'],
	));

	if ($_FILES['yonetici_paneli_icon']['error']=="0") {
		$gecici_isim=$_FILES['yonetici_paneli_icon']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['yonetici_paneli_icon']['name'];
		move_uploaded_file($gecici_isim,"../resimler/iconlar/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE yonetici_paneli SET 
			yonetici_paneli_icon=:yonetici_paneli_icon
			");
	
		$sonuc=$sorgu->execute(array(
			'yonetici_paneli_icon' => $dosya_ismi,
		));
	}

	if ($sonuc) {
		header("location:../index.php?durum=yonetici-paneli-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../index.php?durum=yonetici-paneli-veri-guncelleme-islemi-basarisiz");
	}
	exit;

}

if (isset($_POST['yonetici_paneli_veri_ekleme'])) {
	if ($_FILES['yonetici_paneli_icon']['error']=="0") {
		$gecici_isim=$_FILES['yonetici_paneli_icon']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['yonetici_paneli_icon']['name'];
		move_uploaded_file($gecici_isim,"../resimler/iconlar/$dosya_ismi"); 
	}

	$sorgu=$db->prepare("INSERT INTO yonetici_paneli SET 
		yonetici_paneli_baslik=:yonetici_paneli_baslik,
		yonetici_paneli_aciklama=:yonetici_paneli_aciklama,
		yonetici_paneli_icon=:yonetici_paneli_icon
		");

	$sonuc=$sorgu->execute(array(
		'yonetici_paneli_baslik' => $_POST['yonetici_paneli_baslik'],
		'yonetici_paneli_aciklama' => $_POST['yonetici_paneli_aciklama'],
		'yonetici_paneli_icon' => $dosya_ismi
	));

	if ($sonuc) {
		header("location:../index.php?durum=yonetici-paneli-veri-ekleme-islemi-basarili");
	} else {
		header("location:../index.php?durum=yonetici-paneli-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

if (isset($_POST['oturumacma'])) {
	$sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_mail=:kul_mail AND kul_sifre=:kul_sifre");
	$sorgu->execute(array(
		'kul_mail' => $_POST['kul_mail'],
		'kul_sifre' => md5($_POST['kul_sifre'])
	));

	$sonuc=$sorgu->rowcount();
	
	$kullanici=$sorgu->fetch(PDO::FETCH_ASSOC);

	if ($sonuc==0) {

		header("location:../404.php");
		
	} else {
		$_SESSION['kul_isim'] = $kullanici['kul_isim'];
		$_SESSION['kul_mail'] = $kullanici['kul_mail'];
		$_SESSION['kul_id'] = $kullanici['kul_id'];

		header("location:../index.php?giris=basarili");
	}
	exit;
}

?>