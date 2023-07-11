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
                <a class="nav-item" href="#"><i class="fa-solid fa-store"></i></a>
                <a class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == 'inbox.php') echo 'active'; ?>" href="inbox.php"><i class="fa-solid fa-envelope"></i></a>
                <a class="nav-item" onclick="smileFunction()" href="#"><i class="fa-solid fa-face-smile"></i></a>
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
                <a class="nav-item" href="#"><i class="fa-solid fa-bolt-lightning"></i></a>
                <a class="nav-item" href="#"><i class="fa-solid fa-user"></i></a>
                <a class="nav-item nav-pencil" href="#"><i class="fa-solid fa-pencil"></i></a>
            </menu>
        </nav>
    </div>
</header>