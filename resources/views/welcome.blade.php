<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sewa Kendaraan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px;
            transition: background-color 0.2s;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="text-center">Admin Panel</h2>
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-car"></i> Kelola Kendaraan</a>
        <a href="#"><i class="fas fa-users"></i> Kelola Pelanggan</a>
        <a href="#"><i class="fas fa-file-invoice-dollar"></i> Transaksi</a>
        <a href="#"><i class="fas fa-chart-line"></i> Laporan</a>
        <a href="#"><i class="fas fa-cogs"></i> Pengaturan</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Dashboard</h1>
        <p>Selamat datang di panel admin sewa kendaraan. Gunakan menu di sidebar untuk mengelola sistem.</p>

        <!-- Image Cards Carousel -->
        <div id="carCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">
                        <img src="https://source.unsplash.com/640x426/?car" class="card-img-top" alt="Car Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Car 1</h5>
                            <p class="card-text">Deskripsi singkat tentang mobil 1.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <img src="https://source.unsplash.com/640x426/?vehicle" class="card-img-top" alt="Car Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Car 2</h5>
                            <p class="card-text">Deskripsi singkat tentang mobil 2.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <img src="https://source.unsplash.com/640x426/?monster-truck" class="card-img-top" alt="Car Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Car 3</h5>
                            <p class="card-text">Deskripsi singkat tentang mobil 3.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Example Content -->
        <div class="card mt-4">
            <div class="card-header">
                Statistik Sewa Kendaraan
            </div>
            <div class="card-body">
                <p class="card-text">Jumlah Kendaraan: 20</p>
                <p class="card-text">Jumlah Pelanggan: 150</p>
                <p class="card-text">Transaksi Bulan Ini: 30</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
