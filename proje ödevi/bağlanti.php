<?php 

$host="localhost";
$kullanici="root";
$şifre="";
$vt="kullanıcılar";

$baglanti = mysqli_connect($host, $kullanici, $şifre, $vt);
mysqli_set_charset($baglanti, "UTF8");

?>