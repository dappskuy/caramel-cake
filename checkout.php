<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Toko Kue</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: linear-gradient(160deg, #e8f5f3 0%, #f8f5f0 40%, #fff8ee 100%);
            color: #3d2b1f;
            min-height: 100vh;
            padding: 110px 20px 40px;
        }

        .navbar-glass {
            position: fixed;
            top: 16px;
            left: 50%;
            transform: translateX(-50%);
            width: calc(100% - 32px);
            max-width: 1200px;
            z-index: 999;
            border-radius: 20px;
            overflow: visible !important;
            isolation: auto;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.45) 0%, rgba(255, 255, 255, 0.12) 45%, rgba(255, 255, 255, 0.28) 100%);
            backdrop-filter: blur(24px) saturate(200%);
            -webkit-backdrop-filter: blur(24px) saturate(200%);
            border: 1px solid rgba(255, 255, 255, 0.55);
            box-shadow: 0 8px 32px rgba(0, 87, 102, 0.12), 0 2px 8px rgba(0, 0, 0, 0.06), inset 0 1px 0 rgba(255, 255, 255, 0.75), inset 0 -1px 0 rgba(255, 255, 255, 0.15);
        }

        .navbar-glass::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0.05) 40%, transparent 100%);
            pointer-events: none;
            z-index: 0;
        }

        .navbar-glass::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -30%;
            width: 60%;
            height: 200%;
            background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.25) 0%, transparent 70%);
            pointer-events: none;
            z-index: 0;
            animation: glassShine 8s ease-in-out infinite;
        }

        @keyframes glassShine {
            0%, 100% { transform: translateX(0) rotate(0deg); opacity: 0.6; }
            50% { transform: translateX(80%) rotate(5deg); opacity: 1; }
        }

        .navbar-glass .navbar-inner {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 6px 20px;
            overflow: visible !important;
        }

        .navbar-glass .navbar-nav,
        .navbar-glass .navbar-collapse,
        .navbar-glass .dropdown {
            overflow: visible !important;
        }

        .navbar-glass .navbar-brand img {
            height: 56px;
            width: auto;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.08));
        }

        .navbar-glass .nav-link {
            color: #005766 !important;
            font-weight: 500;
            font-size: 15px;
            padding: 8px 16px !important;
            border-radius: 12px;
            transition: background 0.3s, color 0.3s, box-shadow 0.3s;
        }

        .navbar-glass .nav-link:hover,
        .navbar-glass .nav-link.active {
            background: rgba(0, 87, 102, 0.12);
            color: #004d43 !important;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.5);
        }

        .navbar-glass .btn-login {
            background: rgba(0, 87, 102, 0.85);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            padding: 8px 22px;
            font-weight: 600;
            backdrop-filter: blur(8px);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transition: background 0.3s, transform 0.2s;
        }

        .navbar-glass .btn-login:hover {
            background: rgba(0, 61, 54, 0.95);
            color: #fff;
            transform: translateY(-1px);
        }

        .navbar-glass .navbar-toggler {
            border: 1px solid rgba(0, 87, 102, 0.2);
            border-radius: 10px;
            padding: 6px 10px;
            background: rgba(255, 255, 255, 0.3);
        }

        .navbar-glass .dropdown-menu {
            background: #ffffff;
            backdrop-filter: none;
            -webkit-backdrop-filter: none;
            border: 1px solid rgba(0, 87, 102, 0.12);
            border-radius: 12px;
            box-shadow: 0 14px 32px rgba(0, 0, 0, 0.12);
            padding: 8px 0;
            margin-top: 8px;
            z-index: 2000;
        }

        .navbar-glass .dropdown-menu .dropdown-item {
            color: #005766;
            padding: 8px 18px;
            font-weight: 500;
            transition: background 0.2s;
        }

        .navbar-glass .dropdown-menu .dropdown-item:hover {
            background: rgba(0, 87, 102, 0.08);
            color: #004d43;
        }

        .checkout-layout {
            max-width: 1120px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1fr) 360px;
            gap: 24px;
            align-items: start;
        }

        .checkout-card {
            background: #fff;
            border: 1px solid rgba(0, 105, 92, 0.08);
            border-radius: 16px;
            box-shadow: 0 18px 45px rgba(0, 64, 58, 0.10);
            overflow: hidden;
        }

        .checkout-main { padding: 28px; }

        .header-checkout {
            padding: 26px 28px;
            background: linear-gradient(135deg, #00695c, #00897b);
            color: #fff;
        }

        .header-checkout h1 {
            font-size: 1.65rem;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .header-checkout p {
            margin: 0;
            color: rgba(255, 255, 255, 0.84);
        }

        .checkout-section {
            padding-top: 24px;
            margin-top: 24px;
            border-top: 1px solid #edf0e8;
        }

        .checkout-section:first-child {
            padding-top: 0;
            margin-top: 0;
            border-top: 0;
        }

        .section-title {
            color: #00695c;
            margin: 0 0 16px;
            font-size: 1.2rem;
            font-weight: 800;
        }

        .product-item {
            display: flex;
            gap: 18px;
            padding: 18px;
            background: linear-gradient(135deg, #fffaf0, #f4fbf8);
            border: 1px solid #efe2c9;
            border-radius: 14px;
        }

        .product-item img {
            width: 128px;
            height: 128px;
            object-fit: cover;
            border-radius: 12px;
        }

        .product-info { flex: 1; }

        .product-info h3 {
            margin-bottom: 6px;
            color: #2d2119;
            font-weight: 800;
        }

        .product-info p { margin-bottom: 8px; }

        .price {
            font-size: 1.25rem;
            font-weight: 800;
            color: #00695c;
            margin: 8px 0;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #e0f2f1;
            padding: 7px 14px;
            border-radius: 30px;
            width: fit-content;
        }

        .quantity-control button {
            width: 34px;
            height: 34px;
            border: none;
            background: white;
            color: #00695c;
            border-radius: 50%;
            font-size: 1.25rem;
            line-height: 1;
            cursor: pointer;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .form-group { margin-bottom: 0; }
        .form-group.full { grid-column: 1 / -1; }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            color: #4d3b30;
            font-weight: 650;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px 14px;
            border: 2px solid #e0d5c0;
            border-radius: 10px;
            background: #fff;
            color: #3d2b1f;
            font-size: 0.98rem;
        }

        textarea {
            min-height: 88px;
            resize: vertical;
        }

        textarea:focus,
        input:focus {
            border-color: #00695c;
            outline: none;
        }

        .summary {
            padding: 28px;
            background: #fff;
            position: sticky;
            top: 124px;
        }

        .summary h2 {
            color: #00695c;
            margin: 0 0 18px;
            font-size: 1.2rem;
            font-weight: 800;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 14px;
            margin: 14px 0;
            color: #4d3b30;
            font-size: 1rem;
        }

        .total {
            color: #00695c;
            font-size: 1.65rem;
            font-weight: 800;
            text-align: center;
            padding: 20px 0 10px;
            border-top: 2px dashed #d4c3a8;
            margin-top: 18px;
        }

        .payment-options {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin: 18px 0 24px;
        }

        .payment-option {
            padding: 14px;
            border: 2px solid #e0d5c0;
            border-radius: 12px;
            text-align: center;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .payment-option:hover,
        .payment-option.active {
            border-color: #00695c;
            background: #e0f2f1;
        }

        .btn-checkout {
            width: 100%;
            background: #00695c;
            color: white;
            border: none;
            padding: 16px;
            font-size: 1.08rem;
            font-weight: 800;
            border-radius: 12px;
            cursor: pointer;
            box-shadow: 0 12px 22px rgba(0, 105, 92, 0.20);
        }

        .btn-checkout:hover { background: #004d43; }

        @media (max-width: 991px) {
            .navbar-glass .navbar-collapse {
                background: rgba(255, 255, 255, 0.5);
                backdrop-filter: blur(16px);
                border-radius: 14px;
                margin-top: 10px;
                padding: 12px;
                border: 1px solid rgba(255, 255, 255, 0.4);
            }
        }

        @media (max-width: 768px) {
            body { padding: 112px 14px 28px; }
            .checkout-layout { grid-template-columns: 1fr; }
            .checkout-main, .summary { padding: 22px; }
            .summary { position: static; }
            .product-item { flex-direction: column; }
            .product-item img { width: 100%; height: 190px; }
            .form-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-glass navbar-expand-lg navbar-light">
        <div class="navbar-inner w-100">
            <a href="index.php" class="navbar-brand">
                <img src="frontend/images/logo (1).png" alt="Toko Kue">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCheckout">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navCheckout">
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

    <div class="checkout-layout">
        <div class="checkout-card">
            <div class="header-checkout">
                <h1>Checkout Pesanan</h1>
                <p>Lengkapi data penerima dan pastikan pesanan sudah sesuai.</p>
            </div>

            <div class="checkout-main">
                <section class="checkout-section">
                    <h2 class="section-title">Produk yang Dipesan</h2>
                    <div class="product-item">
                        <img id="product-image" src="" alt="">
                        <div class="product-info">
                            <h3 id="product-name">Nama Produk</h3>
                            <p id="product-desc">Deskripsi produk</p>
                            <p class="price" id="unit-price">Rp 0</p>

                            <div>
                                <label>Jumlah Pesanan</label>
                                <div class="quantity-control">
                                    <button type="button" onclick="changeQuantity(-1)">-</button>
                                    <span id="quantity">1</span>
                                    <button type="button" onclick="changeQuantity(1)">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="checkout-section">
                    <h2 class="section-title">Data Penerima</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nama-penerima">Nama Penerima</label>
                            <input id="nama-penerima" type="text" placeholder="Nama lengkap">
                        </div>

                        <div class="form-group">
                            <label for="telepon">No Telepon</label>
                            <input id="telepon" type="tel" placeholder="08xxxxxxxxxx">
                        </div>

                        <div class="form-group full">
                            <label for="alamat">Alamat</label>
                            <input id="alamat" type="text" placeholder="Nama jalan, nomor rumah, RT/RW">
                        </div>

                        <div class="form-group">
                            <label for="kode-pos">Kode Pos</label>
                            <input id="kode-pos" type="text" placeholder="Contoh: 60123">
                        </div>
                    </div>
                </section>

                <section class="checkout-section">
                    <h2 class="section-title">Catatan Pesanan</h2>
                    <div class="form-group">
                        <label for="catatan">Catatan Tambahan (Opsional)</label>
                        <textarea id="catatan" rows="3" placeholder="Tulisan pada kue, dekorasi, waktu pengiriman, dll..."></textarea>
                    </div>
                </section>
            </div>
        </div>

        <div class="checkout-card">
            <div class="summary">
                <h2>Ringkasan Pembayaran</h2>
                <div class="summary-row">
                    <span id="summary-product">Produk x 1</span>
                    <span id="summary-total">Rp 0</span>
                </div>

                <div class="total">
                    Total<br>
                    <span id="grand-total">Rp 0</span>
                </div>

                <h2 style="margin-top: 30px;">Metode Pembayaran</h2>
                <div class="payment-options">
                    <div class="payment-option active">Cash On Delivery (COD)</div>
                    <div class="payment-option">Transfer Bank</div>
                    <div class="payment-option">E-Wallet (Dana, OVO, GoPay)</div>
                </div>

                <button type="button" onclick="placeOrder()" class="btn-checkout">
                    Pesan Sekarang
                </button>
            </div>
        </div>
    </div>

    <script>
        let quantity = 1;
        let unitPrice = 0;
        let productName = "";

        function formatRupiah(amount) {
            return "Rp " + amount.toLocaleString('id-ID');
        }

        function getProductFromURL() {
            const params = new URLSearchParams(window.location.search);

            productName = params.get('name') || "Caramel Cake";
            unitPrice = parseInt(params.get('price')) || 150000;
            const image = params.get('img') || "frontend/images/caramelmain.jpeg";
            const desc = params.get('desc') || "Kue lembut dengan lapisan karamel premium.";

            document.getElementById('product-name').textContent = productName;
            document.getElementById('product-desc').textContent = desc;
            document.getElementById('product-image').src = image;
            document.getElementById('unit-price').textContent = formatRupiah(unitPrice);
        }

        function updateAll() {
            const total = unitPrice * quantity;
            document.getElementById('quantity').textContent = quantity;
            document.getElementById('summary-product').textContent = `${productName} x ${quantity}`;
            document.getElementById('summary-total').textContent = formatRupiah(total);
            document.getElementById('grand-total').textContent = formatRupiah(total);
        }

        function changeQuantity(change) {
            if (quantity + change >= 1) {
                quantity += change;
                updateAll();
            }
        }

        function setupPaymentOptions() {
            const options = document.querySelectorAll('.payment-option');
            options.forEach(option => {
                option.addEventListener('click', () => {
                    options.forEach(opt => opt.classList.remove('active'));
                    option.classList.add('active');
                });
            });
        }

        function placeOrder() {
            const total = unitPrice * quantity;
            const selectedPayment = document.querySelector('.payment-option.active').textContent;
            const namaPenerima = document.getElementById('nama-penerima').value.trim();
            const telepon = document.getElementById('telepon').value.trim();
            const alamat = document.getElementById('alamat').value.trim();
            const kodePos = document.getElementById('kode-pos').value.trim();

            if (!namaPenerima || !telepon || !alamat || !kodePos) {
                alert('Mohon lengkapi nama penerima, no telepon, alamat, dan kode pos.');
                return;
            }

            alert(`Pesanan Berhasil!\n\n` +
                  `Produk : ${productName}\n` +
                  `Jumlah : ${quantity}\n` +
                  `Total  : ${formatRupiah(total)}\n` +
                  `Penerima : ${namaPenerima}\n` +
                  `Telepon : ${telepon}\n` +
                  `Alamat : ${alamat}\n` +
                  `Kode Pos : ${kodePos}\n` +
                  `Pembayaran : ${selectedPayment}\n\n` +
                  `Terima kasih telah berbelanja!`);
        }

        window.onload = () => {
            getProductFromURL();
            updateAll();
            setupPaymentOptions();
        };
    </script>
    <script src="frontend/libraries/jquery/jquery-3.7.0.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
