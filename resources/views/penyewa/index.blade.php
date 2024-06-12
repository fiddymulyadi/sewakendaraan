<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .table-container {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .table thead th {
            background-color: #007bff;
            color: white;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }
        .table tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }
        .table tbody tr:hover {
            background-color: #d1e7fd;
        }
        .table tbody tr td, .table tbody tr th {
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body style="background: white">

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <i class="fas fa-home"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/penyewa">
                                <i class="fas fa-users"></i>
                                Data penyewa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-car-side"></i>
                                Data Kendaraan
                            </a>
                        </li>
                            <a class="nav-link" href="/sewa">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Data Penyewaan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Data Customer</h1>
                </div>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-12 bg-light rounded py-5" style="--bs-bg-opacity: .9;">
                            <div class="card border-0 shadow-xl rounded">
                                <div class="card-body">
                                    <a href="{{ route('penyewa.create') }}" class="btn btn-primary btn-sm my-1">
                                        <i class="fas fa-plus"></i> Tambah
                                    </a>
                                    <div class="table-container mt-3">
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">ID Customer</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">No HP</th>
                                                    <th scope="col" style="width: 20%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($dataPenyewa as $index => $penyewa)
                                                    <tr>
                                                        <th scope="row">{{ ++$index }}</th>
                                                        <td>{{ $penyewa->id_penyewa }}</td>
                                                        <td>{{ $penyewa->nama_penyewa }}</td>
                                                        <td>{{ $penyewa->alamat }}</td>
                                                        <td>{{ $penyewa->no_hp }}</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#viewModal{{ $penyewa->id_penyewa }}">
                                                                <i class="fas fa-eye"></i> Lihat
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $penyewa->id_penyewa }}">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </button>
                                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('penyewa.destroy', $penyewa->id_penyewa) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash"></i> Hapus
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <!-- View Modal -->
                                                    <div class="modal fade" id="viewModal{{ $penyewa->id_penyewa }}" tabindex="-1" aria-labelledby="viewModalLabel{{ $penyewa->id_penyewa }}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="viewModalLabel{{ $penyewa->id_penyewa }}">Detail Customer</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p><strong>ID Customer:</strong> {{ $penyewa->id_penyewa }}</p>
                                                                    <p><strong>Nama:</strong> {{ $penyewa->nama_penyewa }}</p>
                                                                    <p><strong>Alamat:</strong> {{ $penyewa->alamat }}</p>
                                                                    <p><strong>No HP:</strong> {{ $penyewa->no_hp }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Edit Modal -->
                                                    <div class="modal fade" id="editModal{{ $penyewa->id_penyewa }}" tabindex="-1" aria-labelledby="editModalLabel{{ $penyewa->id_penyewa }}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModalLabel{{ $penyewa->id_penyewa }}">Edit Customer</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="nama_penyewa" class="form-label">Nama</label>
                                                                            <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" value="{{ $penyewa->nama_penyewa }}" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="alamat" class="form-label">Alamat</label>
                                                                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $penyewa->alamat }}" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="no_hp" class="form-label">No HP</label>
                                                                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $penyewa->no_hp }}" required>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <tr>
                                                        <td colspan="6" class="text-center">
                                                            <div class="alert alert-danger">
                                                                Data User Belum Ada.
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- {{ $penyewa->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
