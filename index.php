<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['logged_in'] = true;
}
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

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
        <link rel="stylesheet" href="frontend/styles/main.css?v=5">
    </head>
    <body>
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
                            <a href="index.php" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                                Categories
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Cake</a>
                                <a href="#" class="dropdown-item">Cookies</a>
                            </div>
                        </li>
                    </ul>

                    <a href="login.php" class="btn btn-login d-none d-lg-block">Masuk</a>
                    <a href="login.php" class="btn btn-login d-lg-none mt-2 w-100">Masuk</a>
                </div>
            </div>
        </nav>

        <header class="header text-center">
            <span class="header-kicker">Freshly Baked Daily</span>
            <h1>Selamat Datang di
                <br>
                <span class="brand-highlight">Caramel Delight</span>
            </h1>
            <p class="header-sub mt-3">Nikmati kelezatan kue rumahan premium dengan cita rasa khas dan bahan pilihan terbaik</p>
            <a href="#popular" class="btn btn-get-started px-3 mt-4">Jelajahi Menu</a>
        </header>

        <main>
            <section class="section-popular" id="popular">
                <div class="container">
                    <div class="section-popular-heading text-center">
                        <span class="section-kicker">Best Seller</span>
                        <h2>Pilihan Kue yang Lagi Trend</h2>
                        <p>Kue favorit pelanggan untuk teman santai, hadiah, dan momen spesial.</p>
                    </div>
                </div>
            </section>

            <section class="section-popular-content" id="popularContent">
                <div class="container">
                    <div class="section-popular-cake row justify-content-center">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <article class="card-cake product-card d-flex flex-column" style="background-image: url(frontend/images/kue3.png);">
                                <div class="product-badge">Sweet Caramel</div>
                                <div class="product-info mt-auto">
                                        <h3 class="cake-name">Caramel Cake</h3>
                                        <p>Teksturnya lembut dan manisnya pas.</p>
                                    <div class="product-bottom">
                                        <span>Rp 85.000</span>
                                        <a href="details.php" class="btn btn-cake-details">Detail</a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <article class="card-cake product-card d-flex flex-column" style="background-image: url(frontend/images/kue1.png);">
                                <div class="product-badge">Brownies</div>
                                <div class="product-info mt-auto">
                                    <h3 class="cake-name">Brownies</h3>
                                    <p>kue enak dan manis</p>
                                    <div class="product-bottom">
                                        <span>Rp 150.000</span>
                                        <a href="details.php" class="btn btn-cake-details">Detail</a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <article class="card-cake product-card d-flex flex-column" style="background-image: url(frontend/images/kue2.png);">
                                <div class="product-badge">Crunchy</div>
                                <div class="product-info mt-auto">
                                    <h3 class="cake-name">Cookies</h3>
                                    <p>Cookies renyah dengan topping kacang dan aroma coklat.</p>
                                    <div class="product-bottom">
                                        <span>Rp 45.000</span>
                                        <a href="details.php" class="btn btn-cake-details">Detail</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-testimonial-heading" id="testimonialheading">
                <div class="container">
                    <div class="testimonial-intro text-center">
                        <span class="section-kicker">Customer Stories</span>
                        <h2>They Are Loving Us</h2>
                        <p>Apa kata pelanggan setelah mencoba kue favorit Caramel Delight.</p>
                    </div>
                </div>
            </section>

            <section class="section-testimonial-content" id="testimonialcontent">
                <div class="container">
                    <div class="section-testimonial-grid">
                        <article class="card-testimonial">
                            <div class="rating">★★★★★</div>
                            <p class="testimonial-text">"Kue nya enak, cocok dibuat camilan. Teksturnya lembut dan manisnya tidak berlebihan."</p>
                            <div class="testimonial-user">
                                <img src="frontend/images/user_picrazor.png" alt="Razor">
                                <div>
                                    <h3>Razor</h3>
                                    <span>Pelanggan Brownies</span>
                                </div>
                            </div>
                        </article>

                        <article class="card-testimonial featured">
                            <div class="rating">★★★★★</div>
                            <p class="testimonial-text">"Coklatnya lumer banget, bikin nagih. Cocok untuk dibawa ke acara keluarga."</p>
                            <div class="testimonial-user">
                                <img src="frontend/images/user_picalpha.png" alt="Alpha">
                                <div>
                                    <h3>Alpha</h3>
                                    <span>Pelanggan Caramel Cake</span>
                                </div>
                            </div>
                        </article>

                        <article class="card-testimonial">
                            <div class="rating">★★★★★</div>
                            <p class="testimonial-text">"Rekomendasi banget buat yang suka manis, rasanya pas dan tampilannya cantik."</p>
                            <div class="testimonial-user">
                                <img src="frontend/images/user_picmaya.png" alt="Maya">
                                <div>
                                    <h3>Maya</h3>
                                    <span>Pelanggan Cookies</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="section-order-cta">
                <div class="container">
                    <div class="order-cta-box">
                        <div>
                            <span class="section-kicker">Fresh From Oven</span>
                            <h2>Siap pesan kue untuk hari ini?</h2>
                            <p>Pilih produk favoritmu dan lanjutkan ke halaman pemesanan.</p>
                        </div>
                        <a href="details.php" class="btn btn-need-help">Ayo pesan sekarang</a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="section-footer">
            <div class="container">
                <div class="footer-panel">
                    <div>
                        <h5>Caramel Delight</h5>
                        <p>Kue rumahan dengan tampilan elegan dan rasa yang ramah untuk semua momen.</p>
                    </div>

                    <div>
                        <h5>Features</h5>
                        <ul class="list-unstyled">
                            <li><a href="#testimonialcontent">Reviews</a></li>
                            <li><a href="#popular">Best Seller</a></li>
                            <li><a href="details.php">Order Cake</a></li>
                        </ul>
                    </div>

                    <div>
                        <h5>Company</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Community</a></li>
                        </ul>
                    </div>

                    <div>
                        <h5>Get Connected</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Jatim Pride</a></li>
                            <li><a href="#">0821-0003-0004</a></li>
                            <li><a href="#">support@cakecaramel.id</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-bottom">
                    2024 Copyright Elements. All rights reserved
                </div>
            </div>
        </footer>

        <script src="frontend/libraries/jquery/jquery-3.7.0.min.js"></script>
        <script src="frontend/libraries/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="frontend/libraries/retina/retina.js"></script>
    </body>
</html>
