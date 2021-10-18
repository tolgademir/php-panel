<?php include "islemler/db.php"; ?>

<!doctype html>
<html lang="tr">

<head>

    <link rel="icon" href="resimler/iconlar/<?php echo $yonetici_paneli['yonetici_paneli_icon'] ?>" type="image/png">

    <title> Giriş Yap - Hoşgeldiniz ! </title>
    <meta name="description" content="Giriş Yap - Hoşgeldiniz !"/>

    
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/panel/panel.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <form action="islemler/data-update.php" method="POST" enctype="multipart/form-data" class="login-form">
                            
                            <br>
                            <h5 class="panel"> Hoşgeldin ! </h5>
                            <br>

                            <div class="form-group">
                                <p> E - Mail </p>
                                <input type="text" class="form-control rounded-left" placeholder="E - Mail" name="kul_mail" id="kul_mail">
                            </div>
                            
                            <div class="form-group">
                                <p> Şifre </p>
                                <input type="password" class="form-control rounded-left" placeholder="Şifre" name="kul_sifre" id="kul_sifre">
                            </div>

                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="oturumacma">Giriş Yap</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>