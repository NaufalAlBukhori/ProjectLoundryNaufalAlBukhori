<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Laundry</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <img class="pr-10" src="LL.jpg" alt="" style="height: 55px;">
            <a class="navbar-brand" href="index.php">Naufal Loundry</a>
        </div>
    </nav>

    <!-- Form Pemesanan -->
    <div class="container py-5">
        <h1 class="text-center mb-4">Form Pemesanan Laundry</h1>
        <form action="order.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = mysqli_real_escape_string($conn, $_POST['nama']);
            $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
            $nomor_telepon = mysqli_real_escape_string($conn, $_POST['nomor_telepon']);

            $query = "INSERT INTO orders (nama_pelanggan, alamat, nomor_telepon) VALUES ('$nama', '$alamat', '$nomor_telepon')";
            if (mysqli_query($conn, $query)) {
                echo "<p class='alert alert-success mt-3'>Pesanan berhasil dikirim!</p>";
            } else {
                echo "<p class='alert alert-danger mt-3'>Terjadi kesalahan: " . mysqli_error($conn) . "</p>";
            }
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
