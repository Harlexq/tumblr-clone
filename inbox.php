<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tumblr</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <?php
    include('pages/common/header.php');
    include('pages/common/mobileHeader.php');
    ?>


    <div class="container">
        <div class="write-text">
            <div class="write-text-inner">
                <div class="write-text-content">
                    <div class="write-text-none">
                        <img src="assets/img/message-slash.png" alt="">
                        <p>Yeni iletin yok</p>
                        <a href="#">Daha fazla bilgi edin.</a>
                    </div>
                </div>
                <aside class="browse today-browse">
                    <div class="browse-inner">
                        <div class="follow">
                            <div class="follow-inner follow-today-inner">
                                <div class="follow-title">
                                    <h2><i class="fa-solid fa-envelope"></i> Tüm İletiler</h2>
                                </div>
                                <a href="#" class="follow-item">
                                    <div class="user-info">
                                        <p>Serhan Bakır</p>
                                    </div>
                                </a>
                                <footer class="follow-footer">
                                    <p>Gelen kutusu, herhangi bir bloguna gelen soruların ve isteklerin topluca görüntülendiği yerdir.</p>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <footer class="tumblr-info-menu inbox-info-menu">
                        <a href="#">Hakkında</a>
                        <a href="#">Uygulamalar</a>
                        <a href="#">Hukuki</a>
                        <a href="#">Gizlilik</a>
                    </footer>
                </aside>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>