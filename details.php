<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caramel Cake</title>
        <link rel="icon" href="frontend/images/icon.png" type="image/x-icon">
        <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300&family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="frontend/styles/detail.css?v=4">
    </head>
    <body>

 <!--Navbar Liquid Glass-->
        <nav class="navbar navbar-glass navbar-expand-lg navbar-light">
            <div class="navbar-inner w-100">
                <a href="index.php" class="navbar-brand">
                    <img src="frontend/images/logo (1).png" alt="Brand Element">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navb">
                    <ul class="navbar-nav ml-auto mr-3 align-items-lg-center">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                                Categories
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Cake</a>
                                <a href="#" class="dropdown-item">Bread</a>
                                <a href="#" class="dropdown-item">Cookies</a>
                            </div>
                        </li>
                    </ul>

                    <a href="login.php" class="btn btn-login d-none d-lg-block">Masuk</a>
                    <a href="login.php" class="btn btn-login d-lg-none mt-2 w-100">Masuk</a>
                </div>
            </div>
        </nav>

        <!--content-->
        <main class="detail-product">
    <div class="container">

        <!-- Kolom Kiri -->
        <div class="product-content">

            <h1 class="product-title">Caramel Cake</h1>
            <p class="product-subtitle">
                Kue lembut dengan lapisan karamel premium yang manis dan harum.
            </p>

            <!-- Gambar Utama -->
            <div class="product-gallery">
                <img src="frontend/images/caramelmain.jpeg" alt="Caramel Cake" class="main-image">
            </div>

            <!-- Thumbnail -->
            <div class="thumbnail-wrapper">
                <img src="frontend/images/caramel1.jpeg" alt="">
                <img src="frontend/images/caramel2.jpeg" alt="">
                <img src="frontend/images/caramel3.jpeg" alt="">
            </div>

            <!-- Deskripsi -->
            <div class="description-box">
                <span class="section-label">Deskripsi Produk</span>
                <h2>Kelembutan bolu dan karamel yang kaya rasa</h2>

                <p>
                    Caramel cake adalah kue yang memadukan tekstur lembut dengan cita rasa karamel yang manis dan kaya. Kue ini dibuat dari adonan bolu yang dipanggang hingga mengembang sempurna, kemudian dipadukan dengan lapisan atau saus karamel yang memberikan aroma khas serta warna cokelat keemasan yang menggugah selera.
                </p>

                <p>
                    Keunikan caramel cake terletak pada keseimbangan rasanya. Manisnya karamel berpadu dengan kelembutan bolu sehingga menghasilkan sensasi yang nikmat di setiap gigitan. Beberapa variasi caramel cake juga dilengkapi dengan buttercream, whipped cream, atau taburan kacang cincang untuk menambah tekstur dan cita rasa.
                </p>

                <p>
                    Caramel cake cocok disajikan dalam berbagai kesempatan, mulai dari teman bersantai bersama secangkir kopi atau teh, hidangan penutup setelah makan, hingga sajian spesial untuk perayaan ulang tahun, arisan, maupun acara keluarga. Tampilannya yang elegan dengan lapisan karamel mengilap menjadikannya pilihan favorit bagi banyak pecinta kue.
                </p>
            </div>

        </div>

        <!-- Kolom Kanan -->
        <aside class="product-sidebar">

            <div class="sidebar-card">

                <h2>Informasi Produk</h2>

                <div class="info-item">
                    <span>Berat</span>
                    <span>500 gr</span>
                </div>

                <div class="info-item">
                    <span>Diameter</span>
                    <span>18 cm</span>
                </div>

                <div class="info-item">
                    <span>Kategori</span>
                    <span>Cake</span>
                </div>

                <div class="info-item">
                    <span>Stok</span>
                    <span>Tersedia</span>
                </div>

                <div class="info-item price">
                    <span>Harga</span>
                    <span>Rp 150.000</span>
                </div>

                <a class="btn-order" href="checkout.php">
                    Pesan Sekarang
                </a>

            </div>

        </aside>

    </div>
</main>

<script src="frontend/libraries/jquery/jquery-3.7.0.min.js"></script>
        <script src="frontend/libraries/bootstrap/js/bootstrap.bundle.js"></script>
    </body>

</html>
