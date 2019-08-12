<?php
include "config/db.php";
error_reporting(0);
    $sorgu=$baglan->prepare("SELECT * FROM blog WHERE id=?");
    $sorgu->execute(array(1));
    $icerik=$sorgu->fetch(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title><?=$icerik->title;?></title>
    <meta name="description" content="<?=$icerik->description;?>" />
    <meta name="keywords" content="<?=$icerik->keywords;?>" />
    <meta name="author" content="<?=$icerik->author;?>" />
    <link rel="stylesheet" href="assets/css/stil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="page">
<div class="ust">
    <ul>
        <li><a href="index#">Anasayfa</a></li>
        <li><a href="index#hakkimda">Hakkımda</a></li>
        <li><a href="index#deneyimler">Deneyim</a></li>
        <li><a href="index#egitimler">Eğitimler</a></li>
        <li><a href="index#yetenekler">Yetenekler && Tasarım Becerileri</a></li>
        <li><a href="index#projeler">Projeler</a></li>
        <li><a href="index#etkinlikler">Etkinlikler && Konferanslar</a></li>
        <li><a href="index#iletisim">İletişim</a></li>
    </ul>
</div>

<div class="icerik" style="margin-top:135px;" id="hakkimda">
	<h2 align="center" class="yanson">$ Who Am I</h2>
	<p><?=$icerik->hakkimda;?></p>
</div>
<div class="icerik" id="deneyimler">
	<h2 align="center" class="yanson">$ Deneyim</h2>
    <p><?=$icerik->deneyim;?></p>
</div>
<div class="icerik" id="egitimler">
	<h2 align="center" class="yanson">$ Eğitimler</h2>
    <p><?=$icerik->egitim;?></p>

</div>


<div class="icerik" id="yetenekler">
    <h2 align="center" class="yanson">$ Yetenekler && Tasarım Becerileri</h2>
    <p><?=$icerik->yetenek;?></p>

</div>


<div class="icerik" id="projeler">
    <h2 align="center" class="yanson">$ Projeler</h2>
    <p><?=$icerik->proje;?></p>
</div>

<div class="icerik" id="etkinlikler">
    <h2 align="center" class="yanson">$ Etkinlikler ve Konferanslar</h2>
    <p><?=$icerik->etkinlik;?></p>
</div>

<div class="icerik" id="iletisim">
	<h2 align="center" class="yanson">$ İletişim</h2>
    <div class="ortala">
        <a href="<?=$icerik->linkedin;?>" target="_blank"><i class="fa fa-linkedin"></i></a>&nbsp;
        <a href="<?=$icerik->twitter;?>" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp;
        <a href="<?=$icerik->instagram;?>" target="_blank"><i class="fa fa-instagram"></i></a>
    </div>
    <div class="ortala" style="margin-top: 32px;">
        <a href="mailto:<?=$icerik->email;?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
    </div>
    <div class="ortala" style="margin-top: 15px;">
        <strong style="margin-left: 12px;"><?=$icerik->email;?></strong>
    </div>


</div>
</body>
</html>