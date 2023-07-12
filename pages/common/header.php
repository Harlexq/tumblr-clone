<header class="header">
    <div class="container-fluid header-inner">
        <div class="navbar-brand">
            <a href="index.php">
                <img src="assets/img/logo.png" alt="">
            </a>
            <form class="search">
                <input class="search-input" type="text" placeholder="Tumblr'ı Ara">
                <button class="search-btn" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <nav class="nav">
            <menu class="navbar">
                <a class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>" href="index.php"><i class="fa-solid fa-house"></i></a>
                <a class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'today.php') echo 'active'; ?>" href="today.php"><i class="fa-regular fa-compass"></i></a>
                <button type="button" class="nav-item" onclick=""><i class="fa-solid fa-store"></i></button>
                <a class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'inbox.php') echo 'active'; ?>" href="inbox.php"><i class="fa-solid fa-envelope"></i></a>
                <button type="button" class="nav-item" id="navSmile" onclick="toggleSmileMenu()"><i class="fa-solid fa-face-smile"></i></button>
                <div class="smile" id="smile">
                    <div class="smile-inner">
                        <div class="smile-info">
                            <p>harlex0</p>
                            <span>Yeni İleti</span>
                        </div>
                        <div class="smile-body">
                            <img src="assets/img/smile.png" alt="">
                            <p>Bir Tumblr'la Konuş</p>
                            <div class="smile-content">
                                <img src="assets/img/message1.jpg" alt="">
                                <img src="assets/img/post.jpg" alt="">
                                <img src="assets/img/message2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="nav-item" id="navLightning" onclick="toggleLightningMenu()"><i class="fa-solid fa-bolt-lightning"></i></button>
                <div class="smile lightning" id="lightning">
                    <div class="smile-inner">
                        <div class="smile-info">
                            <p>harlex0</p>
                            <span>
                                <hr>
                            </span>
                        </div>
                        <div class="lightning-content-menu">
                            <div class="lightning-menu-inner">
                                <menu class="lightning-menu">
                                    <button class="active" type="button">Tümü</button>
                                    <button type="button">Bahsedilmeler</button>
                                    <button type="button">RB'ler</button>
                                    <button type="button">Yanıtlar</button>
                                </menu>
                            </div>
                        </div>
                        <div class="smile-body lightning-body">
                            <i class="fa-solid fa-bolt-lightning"></i>
                            <p>Gönderi oluşturduğunda Beğeni, RB ve yeni takipçilerini görmek için bu sekmeye göz at.</p>
                        </div>
                    </div>
                </div>
                <button type="button" class="nav-item" id="navUser" onclick="toggleUserMenu()"><i class=" fa-solid fa-user"></i></button>
                <div class="user" id="user">
                    <div class="user-inner">
                        <div class="user-info">
                            <p>Hesap</p>
                            <button type="button" onclick="" class="quit">Oturumu Kapat</button>

                        </div>
                        <nav class="user-content-menu">
                            <menu class="user-menu">
                                <a href="#" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-solid fa-heart"></i>
                                        <p>Beğeniler</p>
                                    </div>
                                    <p class="date">0</p>
                                </a>
                                <a href="#" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-solid fa-user-plus"></i>
                                        <p>Takip edilenler</p>
                                    </div>
                                    <p class="date">5</p>
                                </a>
                                <a href="#" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-solid fa-gear"></i>
                                        <p>Ayarlar</p>
                                    </div>
                                </a>
                                <a href="#" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <p>Alan adları</p>
                                    </div>
                                </a>
                                <a href="#" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-solid fa-rectangle-ad"></i>
                                        <p>Reklamlardan Kurtul</p>
                                    </div>
                                </a>
                                <a href="#" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        <p>Ödeme ve satın almalar</p>
                                    </div>
                                </a>
                                <a href="#" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-solid fa-gift"></i>
                                        <p>Hediyeler</p>
                                    </div>
                                </a>
                                <a href="#" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-regular fa-star"></i>
                                        <p>Yeni ne var?</p>
                                    </div>
                                </a>
                                <a href="#" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-solid fa-circle-question"></i>
                                        <p>Yardım</p>
                                    </div>
                                </a>
                                <button type="button" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-solid fa-keyboard"></i>
                                        <p>Klavye Kısayolları</p>
                                    </div>
                                </button>
                                <button type="button" class="user-menu-item">
                                    <div class="user-menu-icons">
                                        <i class="fa-solid fa-palette"></i>
                                        <p>Paleti Değiştir</p>
                                    </div>
                                </button>
                            </menu>
                        </nav>
                        <div class="user-info-main">
                            <p>Bloglar</p>
                            <button type="button" class="quit">+ Yeni</button>
                        </div>
                        <div class="profile">
                            <div class="profile-inner">
                                <a href="#" class="profile-body">
                                    <div class="profile-name">
                                        <img src="assets/img/SerhanBakir.jpg" alt="">
                                        <div class="profile-name-inner">
                                            <p>harlex0</p>
                                            <span>Serhan Bakır</span>
                                        </div>
                                    </div>
                                    <div class="profil-toggle">
                                        <i class="fa-solid fa-chevron-up"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <nav class="profile-intr">
                            <menu class="profile-intr-menu">
                                <a href="#" class="profil-intr-item">Gönderiler</a>
                                <a href="#" class="profil-intr-item">Takipçiler</a>
                                <a href="#" class="profil-intr-item">Etkinlik</a>
                                <a href="#" class="profil-intr-item">Taslaklar</a>
                                <a href="#" class="profil-intr-item">Sıradakiler</a>
                                <a href="#" class="profil-intr-item">Tumblr'da Ateşleme</a>
                                <a href="#" class="profil-intr-item">Blog ayarları</a>
                                <a href="#" class="profil-intr-item">Toplu Gönderi Düzenleyici</a>
                            </menu>
                        </nav>
                        <div class="user-info-main user-info-main-footer">
                            <a href="#">Hakkında</a>
                            <a href="#">Uygulamalar</a>
                            <a href="#">Hukuki</a>
                            <a href="#">Gizlilik</a>
                        </div>
                    </div>
                </div>
                <button type="button" class="nav-item nav-pencil" onclick=""><i class="fa-solid fa-pencil"></i></button>
            </menu>
        </nav>
    </div>
</header>

<div class="quit-body">
    <h2>Oturumu Kapatmak İstediğinden Emin<br>Misin?</h2>
    <div class="quit-btn">
        <button type="button" class="cancel-btn">İptal Et</button>
        <button type="button" class="ok-btn">Tamam</button>
    </div>
</div>