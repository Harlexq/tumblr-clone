<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tumblr</title>
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.ico">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.ico">
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
                    <div class="write-text-user">
                        <img src="assets/img/SerhanBakir.jpg" alt="">
                        <header class="write-user-info">
                            <div class="write-user-info-inner">
                                <div class="write-user-intr">
                                    <p>harlex0</p>
                                    <div class="write-user-icons">
                                        <i class="fa-solid fa-gear"></i>
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                                <div class="write-user-img">
                                    <img src="assets/img/SerhanBakir.jpg" alt="">
                                </div>
                            </div>
                            <div class="write-user-desc">
                                <h2>Serhan Bakır</h2>
                                <p>Junior Web Developer</p>
                            </div>
                        </header>
                    </div>
                    <div class="write-text-info">
                        <div class="write-info-inner">
                            <menu class="write-info-menu">
                                <button onclick="metinToggleButton()" class="write-info-item textBtn">
                                    <img src="assets/img/metin.png" alt="">
                                    <p>Metin</p>
                                </button>
                                <div class="text-editor" id="textEditor">
                                    <div class="text-editor-inner">
                                        <div class="text-editor-img">
                                            <img src="assets/img/SerhanBakir.jpg" alt="">
                                        </div>
                                        <div class="text-editor-body">
                                            <div class="text-editor-content">
                                                <div class="text-editor-info">
                                                    <p>harlex0</p>
                                                    <i class="fa-solid fa-gear"></i>
                                                </div>
                                                <div class="text-editor-title">
                                                    <input type="text" placeholder="Başlık">
                                                </div>
                                                <div class="text-editor-text">
                                                    <textarea placeholder="Canın ne isterse ekle"></textarea>
                                                </div>
                                                <div class="text-editor-hash">
                                                    <p>#etiketde koy ki gönderdin bulunabilsin</p>
                                                </div>
                                                <div class="text-editor-intr">
                                                    <div class="text-editor-close">
                                                        <button type="button" class="btn-close">Kapat</button>
                                                    </div>
                                                    <div class="text-editor-gear">
                                                        <button type="button" class="btn-ever">Herkes İçin Uygun <i class="fa-solid fa-angle-down"></i></button>
                                                        <button type="button" class="btn-send">Şimdi Gönder | <i class="fa-solid fa-angle-down"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button onclick="FotografToggleButton()" class="write-info-item fotografBtn">
                                    <img src="assets/img/fotograf.png" alt="">
                                    <p>Fotoğraf</p>
                                </button>
                                <div class="text-editor" id="fotografEditor">
                                    <div class="text-editor-inner">
                                        <div class="text-editor-img">
                                            <img src="assets/img/SerhanBakir.jpg" alt="">
                                        </div>
                                        <div class="text-editor-body">
                                            <div class="text-editor-content">
                                                <div class="text-editor-info">
                                                    <p>harlex0</p>
                                                    <i class="fa-solid fa-gear"></i>
                                                </div>
                                                <div class="text-editor-upload">
                                                    <button type="button" class="text-editor-upload-img">
                                                        <i class="fa-solid fa-camera"></i>
                                                        <p>Resim yükle</p>
                                                    </button>
                                                    <button type="button" class="text-editor-upload-net">
                                                        <i class="fa-solid fa-globe"></i>
                                                        <p>İnternetten resim yükle</p>
                                                    </button>
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <div class="text-editor-text">
                                                    <textarea placeholder="Canın ne isterse ekle"></textarea>
                                                </div>
                                                <div class="text-editor-hash">
                                                    <p>#etiketde koy ki gönderdin bulunabilsin</p>
                                                </div>
                                                <div class="text-editor-intr">
                                                    <div class="text-editor-close">
                                                        <button type="button" class="btn-close">Kapat</button>
                                                    </div>
                                                    <div class="text-editor-gear">
                                                        <button type="button" class="btn-ever">Herkes İçin Uygun <i class="fa-solid fa-angle-down"></i></button>
                                                        <button type="button" class="btn-send">Şimdi Gönder | <i class="fa-solid fa-angle-down"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button onclick="AlintiToggleButton()" class="write-info-item alintiBtn">
                                    <img src="assets/img/alinti.png" alt="">
                                    <p>Alıntı</p>
                                </button>
                                <div class="text-editor" id="alintiEditor">
                                    <div class="text-editor-inner">
                                        <div class="text-editor-img">
                                            <img src="assets/img/SerhanBakir.jpg" alt="">
                                        </div>
                                        <div class="text-editor-body">
                                            <div class="text-editor-content">
                                                <div class="text-editor-info">
                                                    <p>harlex0</p>
                                                    <i class="fa-solid fa-gear"></i>
                                                </div>
                                                <div class="text-editor-text alinti-text">
                                                    <textarea placeholder="Başka birinden duyduğumuz şeyler buraya"></textarea>
                                                </div>
                                                <div class="text-editor-hash">
                                                    <p>#etiketde koy ki gönderdin bulunabilsin</p>
                                                </div>
                                                <div class="text-editor-intr">
                                                    <div class="text-editor-close">
                                                        <button type="button" class="btn-close">Kapat</button>
                                                    </div>
                                                    <div class="text-editor-gear">
                                                        <button type="button" class="btn-ever">Herkes İçin Uygun <i class="fa-solid fa-angle-down"></i></button>
                                                        <button type="button" class="btn-send">Şimdi Gönder | <i class="fa-solid fa-angle-down"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button onclick="BaglantiToggleButton()" class="write-info-item baglantiBtn">
                                    <img src="assets/img/baglanti.png" alt="">
                                    <p>Bağlantı</p>
                                </button>
                                <div class="text-editor" id="baglantiEditor">
                                    <div class="text-editor-inner">
                                        <div class="text-editor-img">
                                            <img src="assets/img/SerhanBakir.jpg" alt="">
                                        </div>
                                        <div class="text-editor-body">
                                            <div class="text-editor-content">
                                                <div class="text-editor-info">
                                                    <p>harlex0</p>
                                                    <i class="fa-solid fa-gear"></i>
                                                </div>
                                                <div class="text-editor-upload text-editor-link">
                                                    <input type="link" placeholder="Bağlantı yaz yada yapıştır">
                                                    <i class="fa-solid fa-x"></i>
                                                </div>
                                                <div class="text-editor-text">
                                                    <textarea placeholder="Canın ne isterse ekle"></textarea>
                                                </div>
                                                <div class="text-editor-hash">
                                                    <p>#etiketde koy ki gönderdin bulunabilsin</p>
                                                </div>
                                                <div class="text-editor-intr">
                                                    <div class="text-editor-close">
                                                        <button type="button" class="btn-close">Kapat</button>
                                                    </div>
                                                    <div class="text-editor-gear">
                                                        <button type="button" class="btn-ever">Herkes İçin Uygun <i class="fa-solid fa-angle-down"></i></button>
                                                        <button type="button" class="btn-send">Şimdi Gönder | <i class="fa-solid fa-angle-down"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="write-info-item">
                                    <img src="assets/img/sohbet.png" alt="">
                                    <p>Sohbet</p>
                                </button>
                                <button class="write-info-item">
                                    <img src="assets/img/ses.png" alt="">
                                    <p>Ses</p>
                                </button>
                                <button class="write-info-item">
                                    <img src="assets/img/video.png" alt="">
                                    <p>Video</p>
                                </button>
                            </menu>
                        </div>
                        <div class="user-btn">
                            <div class="user-btn-inner">
                                <menu class="user-btn-menu">
                                    <a class="user-btn-item active" href="#">Senin İçin</a>
                                    <a class="user-btn-item" href="#">Takip edilenler</a>
                                    <a class="user-btn-item" href="#">Etiketlerin</a>
                                    <a class="user-btn-item" href="#">Yönet...</a>
                                </menu>
                            </div>
                        </div>
                        <div class="post">
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                            ?>
                                <div class="post-inner">
                                    <div class="post-img">
                                        <img src="assets/img/post.jpg" alt="">
                                    </div>
                                    <div class="post-user">
                                        <div class="post-user-info">
                                            <div class="post-user-name">
                                                <p>harlex</p>
                                                <button type="button">Takip Et</button>
                                            </div>
                                            <div class="post-user-intr">
                                                <i class="fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <p>Merhaba, ben Serkan Bakır. Web geliştirme alanında kendimi geliştirmek ve kariyerime sağlam bir başlangıç yapmak amacıyla Reklam Ajanslarında Junior Web Developer olarak staj yaptım. Orta seviyede HTML, CSS, Bootstrap ve Temel seviyede JavaScript bilgisine sahibim ve bu becerilerimi projelerimde başarıyla kullanıyorum. Ayrıca, web tasarımı, kullanıcı deneyimi ve dijital pazarlama trendleri hakkında da kendimi sürekli olarak güncelliyorum. Profesyonel hedeflerim arasında yaratıcı, işlevsel ve etkileyici web siteleri tasarlamak yer alıyor. Sektörde kendimi geliştirerek, diğer uzmanlarla işbirliği yaparak ve müşterilerin ihtiyaçlarını anlayarak daha iyi bir web geliştirme deneyimi sunmak için çalışıyorum.</p>
                                            <div class="post-hash">
                                                <span>#codelove</span>
                                                <span>#hmmm</span>
                                                <span>#harlex</span>
                                            </div>
                                            <div class="radar-fire">
                                                <p><i class="fa-solid fa-fire"></i> Ateşle</p>
                                            </div>
                                            <div class="radar-intr">
                                                <div class="radar-intr-not">
                                                    <p><strong>1.186</strong> not</p>
                                                </div>
                                                <div class="radar-intr-user">
                                                    <menu class="radar-menu">
                                                        <i class="fa-solid fa-share"></i>
                                                        <i class="fa-regular fa-comment"></i>
                                                        <i class="fa-solid fa-retweet"></i>
                                                        <i class="fa-regular fa-heart" onclick="toggleHeart(this)"></i>
                                                    </menu>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-inner">
                                    <div class="post-img">
                                        <img src="assets/img/post.jpg" alt="">
                                    </div>
                                    <div class="post-user">
                                        <div class="post-user-info">
                                            <div class="post-user-name">
                                                <p>harlex</p>
                                                <button type="button">Takip Et</button>
                                            </div>
                                            <div class="post-user-intr">
                                                <i class="fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <img src="assets/img/postcontent.jpg" alt="">
                                            <div class="post-hash">
                                                <span>#codelove</span>
                                                <span>#hmmm</span>
                                                <span>#harlex</span>
                                            </div>
                                            <div class="radar-fire">
                                                <p><i class="fa-solid fa-fire"></i> Ateşle</p>
                                            </div>
                                            <div class="radar-intr">
                                                <div class="radar-intr-not">
                                                    <p><strong>1.186</strong> not</p>
                                                </div>
                                                <div class="radar-intr-user">
                                                    <menu class="radar-menu">
                                                        <i class="fa-solid fa-share"></i>
                                                        <i class="fa-regular fa-comment"></i>
                                                        <i class="fa-solid fa-retweet"></i>
                                                        <i class="fa-regular fa-heart" onclick="toggleHeart(this)"></i>
                                                    </menu>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <aside class="browse">
                    <div class="browse-inner">
                        <h1>Bu bloglara göz at</h1>
                        <div class="follow">
                            <div class="follow-inner">
                                <?php
                                for ($i = 0; $i < 4; $i++) {
                                ?>
                                    <a href="#" class="follow-item">
                                        <div class="user-info">
                                            <img src="assets/img/follow1.jpg" alt="">
                                            <div class="follow-name">
                                                <p>Harlex</p>
                                                <span>harlex</span>
                                            </div>
                                        </div>
                                        <div class="user-intr">
                                            <p>Takip Et</p>
                                            <i class="fa-solid fa-x"></i>
                                        </div>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                            <a href="today.php" class="discovery">Tumblr'da keşfe çık</a>
                        </div>
                        <h1 class="radar-title">Radar</h1>
                        <div class="radar">
                            <div class="radar-inner">
                                <a href="#" class="radar-card">
                                    <div class="radar-info">
                                        <div class="radar-user-info">
                                            <img src="assets/img/follow1.jpg" alt="">
                                            <div class="radar-name">
                                                <p>Harlex</p>
                                                <span>Takip Et</span>
                                            </div>
                                        </div>
                                        <div class="radar-ellips">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                    <div class="radar-img">
                                        <img src="assets/img/radar.jpg" alt="">
                                    </div>
                                    <div class="radar-fire">
                                        <p><i class="fa-solid fa-fire"></i> Ateşle</p>
                                    </div>
                                    <div class="radar-intr">
                                        <div class="radar-intr-not">
                                            <p><strong>1.186</strong> not</p>
                                        </div>
                                        <div class="radar-intr-user">
                                            <menu class="radar-menu">
                                                <i class="fa-solid fa-share"></i>
                                                <i class="fa-solid fa-retweet"></i>
                                                <i class="fa-regular fa-heart" onclick="toggleHeart(this)"></i>
                                            </menu>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h1 class="sponsor-title">Sponsorlu</h1>
                    <div class="sponsor">
                        <a href="#">Reklamları kapatmak ister misin?</a>
                    </div>
                    <footer class="tumblr-info-menu">
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