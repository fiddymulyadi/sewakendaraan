<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mb-4">
                    <h3>Data User</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body p-4">
                        <div class="mb-3 d-flex align-items-center">
                            <h5 class="me-3 mb-0"><i class="fas fa-id-badge"></i> ID:</h5>
                            <p class="text-muted mb-0">{{ $penyewa->id_penyewa }}</p>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <h5 class="me-3 mb-0"><i class="fas fa-user"></i> Nama:</h5>
                            <p class="text-muted mb-0">{{ $penyewa->nama_penyewa }}</p>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <h5 class="me-3 mb-0"><i class="fas fa-map-marker-alt"></i> Alamat:</h5>
                            <p class="text-muted mb-0">{{ $penyewa->alamat }}</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <h5 class="me-3 mb-0"><i class="fas fa-phone"></i> No Handphone:</h5>
                            <p class="text-muted mb-0">{{ $penyewa->no_hp }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
