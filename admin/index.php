<?php
include "../config/db.php";
include "fonksiyonlar.php";
session_start();
!OturumAcikmi() ? header("Location: login") : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Paneli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/stil.css">
    <script src="../assets/ckeditor/ckeditor.js"></script>
</head>
<body class="admin_bg">

    <div class="container">
     <div class="row m-5">
         <div class="col-md-12 text-center">
             <h1>Admin Paneli</h1>
         </div>
         <div class="col-md-12 text-center">
             <a href="cikis.php" class="btn btn-info btn-sm">Çıkış Yap</a>
         </div>
     </div>

        <form id="admin-form">
            <h4>Web Site Bilgileri Seo Bilgileri</h4>
            <hr>
            <?php
            if (kayitlimi(1))
            {
                $sorgu = $baglan->prepare("SELECT * FROM blog");
                $sorgu->execute(array());
                $icerik = $sorgu->fetch(PDO::FETCH_OBJ);
                ?>
                <div class="form-group">
                    <label>Web site başlığı</label>
                    <input type="text" class="form-control" name="title" value="<?=$icerik->title;?>">
                </div>
                <div class="form-group">
                    <label>Web site açıklaması</label>
                    <input type="text" class="form-control" name="description" value="<?=$icerik->description;?>">
                </div>
                <div class="form-group">
                    <label>Web site anahtar kelimeler</label>
                    <input type="text" class="form-control" name="keywords" value="<?=$icerik->keywords;?>">
                </div>
                <div class="form-group">
                    <label>Web site author</label>
                    <input type="text" class="form-control" name="author" value="<?=$icerik->author;?>">
                </div>

                <h4 class="ust_bosluk">Web Site İçerik Bilgileri</h4>
                <hr>


                <div class="form-group">
                    <label>Hakkımda</label>
                    <div class="textarea">
                        <textarea name="hakkimda">
                            <?=($icerik->hakkimda);?>
                        </textarea></div>
                        <script>
                            CKEDITOR.replace("hakkimda");

                        </script>
                    </div>

                    <div class="form-group">
                        <label>Deneyimler</label>
                        <div class="textarea">
                            <textarea name="deneyimler">
                               <?=($icerik->deneyim);?>
                           </textarea>
                       </div>
                       <script>
                        CKEDITOR.replace("deneyimler");
                    </script>
                </div>

                <div class="form-group">
                    <label>Eğitimler</label>
                    <div class="textarea"><textarea name="egitimler" ><?=($icerik->egitim);?></textarea></div>
                    <script>
                        CKEDITOR.replace("egitimler");
                    </script>
                </div>

                <div class="form-group">
                    <label>Projeler</label>
                    <div class="textarea"><textarea name="projeler"><?=($icerik->proje);?></textarea></div>
                    <script>
                        CKEDITOR.replace("projeler");
                    </script>
                </div>

                <div class="form-group">
                    <label>Etkinlikler ve Konferanslar</label>
                    <div class="textarea"><textarea name="etkinlikler"><?=($icerik->etkinlik);?></textarea></div>
                    <script>
                        CKEDITOR.replace("etkinlikler");
                    </script>
                </div>

                <div class="form-group">
                    <label>Yetenekler ve Tasarım Becerileri</label>
                    <div class="textarea"><textarea name="yetenekler"><?=($icerik->yetenek);?></textarea></div>
                    <script>
                        CKEDITOR.replace("yetenekler");
                    </script>
                </div>


                <div class="form-group">
                    <label class="ust_bosluk font-weight-bold">İletişim Bilgileri</label>
                    <hr>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Linkedin</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="linkedin" value="<?=$icerik->linkedin;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="twitter" value="<?=$icerik->twitter;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">İnstagram</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="instagram" value="<?=$icerik->instagram;?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email adresiniz</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" value="<?=$icerik->email;?>">
                    </div>
                </div>

                <div class="form-group text-right ">
                    <button type="button" class="btn btn-primary btn-lg btn-block btnkaydet">Bilgileri Kaydet</button>
                </div>

                <div class="form-group text-center row d-none uyari">
                    <div class="col-md-3"></div>
                    <div class="alert alert-info col-md-6 text-center"></div>
                    <div class="col-md-3"></div>
                </div>

            <?php  }  else  {  ?>


             <div class="form-group">
                <label>Web site başlığı</label>
                <input type="text" class="form-control" name="title" placeholder="Bir  başlık giriniz">
            </div>
            <div class="form-group">
                <label>Web site açıklaması</label>
                <input type="text" class="form-control" name="description" placeholder="Bir açıklama giriniz">
            </div>
            <div class="form-group">
                <label>Web site anahtar kelimeler</label>
                <input type="text" class="form-control" name="keywords" placeholder="Anahtar kelimeleri giriniz">
            </div>
            <div class="form-group">
                <label>Web site author</label>
                <input type="text" class="form-control" name="author" placeholder="Author giriniz">
            </div>

            <h4 class="ust_bosluk">Web Site İçerik Bilgileri</h4>
            <hr>


            <div class="form-group">
                <label>Hakkımda</label>
                <div class="textarea"><textarea name="hakkimda"></textarea></div>
                <script>
                    CKEDITOR.replace("hakkimda");
                </script>
            </div>

            <div class="form-group">
                <label>Deneyimler</label>
                <div class="textarea"><textarea name="deneyimler"></textarea></div>
                <script>
                    CKEDITOR.replace("deneyimler");
                </script>
            </div>

            <div class="form-group">
                <label>Eğitimler</label>
                <div class="textarea"><textarea name="egitimler"></textarea></div>
                <script>
                    CKEDITOR.replace("egitimler");
                </script>
            </div>

            <div class="form-group">
                <label>Projeler</label>
                <div class="textarea"><textarea name="projeler"></textarea></div>
                <script>
                    CKEDITOR.replace("projeler");
                </script>
            </div>

            <div class="form-group">
                <label>Etkinlikler ve Konferanslar</label>
                <div class="textarea"><textarea name="etkinlikler"></textarea></div>
                <script>
                    CKEDITOR.replace("etkinlikler");
                </script>
            </div>

                <div class="form-group">
                    <label>Yetenekler && Tasarım Becerileri</label>
                    <div class="textarea"><textarea name="yetenekler"></textarea></div>
                    <script>
                        CKEDITOR.replace("yetenekler");
                    </script>
                </div>


            <div class="form-group">
                <label class="ust_bosluk font-weight-bold">İletişim Bilgileri</label>
                <hr>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Linkedin</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="linkedin" placeholder="Linkedin url giriniz">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Twitter</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="twitter" placeholder="Twitter url giriniz">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">İnstagram</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="instagram" placeholder="İnstagram url giriniz">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email adresiniz</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="email" placeholder="Email adresinizi giriniz">
                </div>
            </div>

            <div class="form-group text-right ">
                <button type="button" class="btn btn-primary btn-lg btn-block btnkaydet">Bilgileri Kaydet</button>
            </div>

            <div class="form-group text-center row d-none uyari">
                <div class="col-md-3"></div>
                <div class="alert alert-info col-md-6 text-center"></div>
                <div class="col-md-3"></div>
            </div>
        <?php     }  ?>
    </form>

</div>

<div class="bg-dark text-center" style="margin-top: 250px;">
    <div class="footer-copyright py-3 text-white">© 2019 Copyright:
        <a href="https://github.com/mustafadalga"> Mustafa Dalğa</a>
    </div>
</div>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="../assets/js/js.js"></script>