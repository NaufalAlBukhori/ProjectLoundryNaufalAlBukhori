<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Sederhana</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <img class="pr-5" src="LL.jpg" alt="" style="height: 55px;">
        <a class="navbar-brand" href="index.php">Naufal Laundry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item">
                <a class="btn btn-primary btn-lg text-white px-4 ms-2" href="order.php" style="font-weight: bold;">Pesan Laundry</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="NaufalLoundry3.jpg" class="d-block w-100" alt="Layanan Laundry Cepat">
                <div class="carousel-caption d-none d-md-block">
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="NaufalLoundry4.png" class="d-block w-100" alt="Harga Terjangkau">
                <div class="carousel-caption d-none d-md-block">
                
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <!-- Card 1: Terpercaya -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <img src="1.jpg" alt="Logo Terpercaya" class="mb-3" style="width: 100px; height: auto;">
                        <h5 class="card-title">Terpercaya</h5>
                        <p class="card-text">Kami memberikan pelayanan terbaik yang dapat dipercaya oleh pelanggan kami.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2: Murah -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <img src="2.jpg" alt="Logo Murah" class="mb-3" style="width: 100px; height: auto;">
                        <h5 class="card-title">Murah</h5>
                        <p class="card-text">Harga yang kami tawarkan sangat kompetitif dan terjangkau.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3: Bersih dan Wangi -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <img src="3.jpg" alt="Logo Bersih dan Wangi" class="mb-3" style="width: 100px; height: auto;">
                        <h5 class="card-title">Bersih dan Wangi</h5>
                        <p class="card-text">Pakaian Anda akan kembali dalam kondisi bersih dan wangi, seperti baru.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Tentang Kami</h2>
            <p class="text-center">Hai, selamat datang di Naufal Laundry! Kami ada di Kelurahan Sapuro, Kota Pekalongan, siap jadi teman setia untuk urusan laundry kamu. Di sini, kami nggak cuma mencuci pakaian, tapi juga menjaga agar pakaian kesayanganmu tetap bersih, wangi, dan awet.

Dengan peralatan modern dan deterjen yang ramah lingkungan, kami selalu memastikan hasil terbaik untuk kamu. Nggak perlu khawatir soal waktu—kami tahu betapa berharganya waktu kamu, jadi kami selalu berusaha memberikan layanan yang cepat dan tepat waktu.

Naufal Laundry itu bukan cuma soal laundry, tapi juga soal memberikan rasa nyaman. Yuk, coba layanan kami dan rasakan bedanya sendiri!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Email</h5>
                    <p>NaufalLoundry_Sapuro@gmail.com</p>
                </div>
                <div class="col-md-6">
                    <h5>Telepon</h5>
                    <p>085856953659</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 NaufalLoundry_Sapuro. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
