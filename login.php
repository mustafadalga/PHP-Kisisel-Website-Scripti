<?php
include "../config/db.php";
include "fonksiyonlar.php";
session_start();
OturumAcikmi() ? header("Location: index") : "";
if ($_POST)
{
    $email=checkInput($_POST['email']);
    $parola=checkInput($_POST['parola']);
    $sorgu=$baglan->prepare("SELECT * FROM admin WHERE email=?");
     $sorgu->execute(array($email));
        if ($sorgu->rowCount())
        {
            $result=$sorgu->fetch(PDO::FETCH_ASSOC);
            if (password_verify($parola,$result["parola"]))
            {
                $_SESSION["admin"]=$result["email"];
                $uyari="Giriş işlemi başarılı.";
            }
            else
            {
                $uyari="Giriş işlemi başarısız!";
            }
        }
        else
        {
            $uyari="Giriş işlemi başarısız!";
        }
}
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/stil.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Admin Login</title>
</head>
<body class="login">

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center m-5">
            <h2 >Admin Paneli - Giriş</h2>
        </div>
    </div>
</div>

<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Giriş Yap</div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Adresi</label>
                                <div class="col-md-6">
                                    <input type="email" id="email_address" class="form-control" name="email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Parola</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="parola" required>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Giriş Yap
                                </button>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4 mt-2">
                                    <?php if(isset($uyari)) : ?>
                                    <div class="alert alert-info text-center">
                                        <?=$uyari;?>
                                        <?php if (strpos($uyari,"başarılı")):?>
                                        <script>
                                            setTimeout(function(){ window.location.href="index"; }, 3000);
                                        </script>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
</body>
</html>

