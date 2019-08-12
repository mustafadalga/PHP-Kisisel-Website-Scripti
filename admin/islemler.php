<?php
include "../config/db.php";
include "fonksiyonlar.php";


if($_POST)
{

    $title=checkInput($_POST['title']);
    $description=checkInput($_POST['description']);
    $keywords=checkInput($_POST['keywords']);
    $author=checkInput($_POST['author']);
    $hakkimda=$_POST['hakkimda'];
    $deneyimler=$_POST['deneyimler'];
    $egitimler=$_POST['egitimler'];
    $yetenekler=$_POST['yetenekler'];
    $projeler=$_POST['projeler'];
    $etkinlikler=$_POST['etkinlikler'];
    $linkedin=checkInput($_POST['linkedin']);
    $twitter=checkInput($_POST['twitter']);
    $instagram=checkInput($_POST['instagram']);
    $email=checkInput($_POST['email']);

    if (kayitlimi(1))
    {
        $sorgu=$baglan->prepare("UPDATE blog SET title=? , description=?,keywords=?, author=?,hakkimda=?,deneyim=?,egitim=?,yetenek=?,proje=?,etkinlik=?,linkedin=?,twitter=?,instagram=?,email=? WHERE id=?");
        $sorgu->execute(array($title,$description,$keywords,$author,$hakkimda,$deneyimler,$egitimler,$yetenekler,$projeler,$etkinlikler,$linkedin,$twitter,$instagram,$email,1));
        $hata=$sorgu->errorInfo();
        if(empty($hata[2]))
        {
            $uyari="Güncelleme başarıyla tamamlandı";
        }
        else
        {

            $uyari= "Güncelleme işlemi sırasında hata:".$hata[2];
        }
    }
    else
    {
        $sorgu=$baglan->prepare("INSERT INTO blog(title,description,keywords,author,hakkimda,deneyim,egitim,yetenek,proje,etkinlik,linkedin,twitter,instagram,email) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $sorgu->execute(array($title,$description,$keywords,$author,$hakkimda,$deneyimler,$egitimler,$yetenekler,$projeler,$etkinlikler,$linkedin,$twitter,$instagram,$email));
        $hata=$sorgu->errorInfo();
        if(empty($hata[2]))
        {
            $uyari="Kayıt işlemi başarıyla tamamlandı";
        }
        else
        {
            $uyari= "Kayıt işlemi sırasında hata:".$hata[2];
        }
    }
    echo $uyari;
}
?>