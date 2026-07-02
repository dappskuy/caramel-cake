<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toko Kue Caramel Delight - Register</title>

    <!-- Custom fonts for this template-->
    <link href="backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="backend/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body.bg-gradient-primary {
            background-color: #f8f5f0;
            background-image: linear-gradient(160deg, #e8f5f3 0%, #f8f5f0 40%, #fff8ee 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
            position: relative;
        }
        
        /* Floating background blobs for the glass effect */
        .glass-bg-blobs {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }
        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            opacity: 0.55;
            animation: floatBlob 15s infinite ease-in-out;
        }
        .blob-1 {
            top: -15%;
            left: -10%;
            width: 45vw;
            height: 45vw;
            background: radial-gradient(circle, #00897b 0%, rgba(224, 242, 241, 0.2) 70%);
        }
        .blob-2 {
            bottom: -15%;
            right: -10%;
            width: 50vw;
            height: 50vw;
            background: radial-gradient(circle, #ffe082 0%, rgba(255, 179, 0, 0.2) 70%);
            animation-delay: -5s;
        }
        .blob-3 {
            top: 30%;
            left: 35%;
            width: 35vw;
            height: 35vw;
            background: radial-gradient(circle, #00acc1 0%, rgba(224, 247, 250, 0.2) 70%);
            animation-delay: -10s;
        }
        @keyframes floatBlob {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(50px, -30px) scale(1.15); }
            66% { transform: translate(-20px, 40px) scale(0.9); }
        }

        /* Glassmorphism Card Style & Interactive Hover */
        .glass-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.45) 0%, rgba(255, 255, 255, 0.15) 100%) !important;
            backdrop-filter: blur(25px) saturate(180%);
            -webkit-backdrop-filter: blur(25px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5) !important;
            box-shadow: 0 20px 50px rgba(0, 87, 102, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.6) !important;
            border-radius: 24px !important;
            overflow: hidden;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease, border-color 0.4s ease !important;
        }
        
        .glass-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 60px rgba(0, 137, 123, 0.22), inset 0 1px 0 rgba(255, 255, 255, 0.7) !important;
            border-color: rgba(255, 255, 255, 0.75) !important;
        }
        
        .btn-primary {
            background: rgba(0, 87, 102, 0.85);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            padding: 12px 22px;
            font-weight: 600;
            backdrop-filter: blur(8px);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
        }
        .btn-primary:hover {
            background: rgba(0, 61, 54, 0.95) !important;
            border-color: rgba(255, 255, 255, 0.4);
            box-shadow: 0 8px 20px rgba(0, 87, 102, 0.35) !important;
            transform: translateY(-2px) scale(1.02);
        }
        .btn-primary:active {
            transform: translateY(1px) scale(0.98);
        }
        .btn-user {
            border-radius: 12px !important;
        }
        
        .form-control-user {
            background: rgba(255, 255, 255, 0.35) !important;
            border: 1px solid rgba(255, 255, 255, 0.4) !important;
            backdrop-filter: blur(5px);
            color: #3d2b1f !important;
            border-radius: 12px !important;
            padding: 15px 20px !important;
            height: auto !important;
            transition: all 0.3s ease;
        }
        .form-control-user:hover {
            background: rgba(255, 255, 255, 0.45) !important;
            border-color: rgba(0, 137, 123, 0.5) !important;
        }
        .form-control-user:focus {
            background: rgba(255, 255, 255, 0.65) !important;
            border-color: #00897b !important;
            box-shadow: 0 0 15px rgba(0, 137, 123, 0.2) !important;
            outline: none;
            transform: scale(1.01);
        }
        
        .text-gray-900 {
            color: #2d1f18 !important;
        }
        .small {
            color: #005766;
            font-weight: 600;
            transition: all 0.2s ease;
            display: inline-block;
        }
        .small:hover {
            color: #00897b !important;
            transform: scale(1.05);
            text-decoration: none !important;
        }
        .card-body {
            background: transparent !important;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <!-- Background Blobs -->
    <div class="glass-bg-blobs">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-9">

                <div class="card glass-card o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Create an Account!</h1>
                                    </div>
                                    <form class="user" action="login.php" method="POST" autocomplete="off">
                                        <!-- Nama Lengkap -->
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="inputName"
                                                placeholder="Nama Lengkap" required autocomplete="off">
                                        </div>
                                        
                                        <!-- Alamat -->
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="inputAddress"
                                                placeholder="Alamat Lengkap" required autocomplete="off">
                                        </div>

                                        <!-- Email & Nomor Telepon -->
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="email" class="form-control form-control-user" id="inputEmail"
                                                    placeholder="Alamat Email" required autocomplete="off">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="tel" class="form-control form-control-user" id="inputPhone"
                                                    placeholder="Nomor Telepon" required autocomplete="off">
                                            </div>
                                        </div>

                                        <!-- Password & Konfirmasi Password -->
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user"
                                                    id="inputPassword" placeholder="Password" required autocomplete="new-password">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user"
                                                    id="inputRepeatPassword" placeholder="Konfirmasi Password" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block font-weight-bold">
                                            Register Account
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="backend/forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="backend/vendor/jquery/jquery.min.js"></script>
    <script src="backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="backend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="backend/js/sb-admin-2.min.js"></script>

</body>

</html>
