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
<body>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <div class="container mt-5">
        <h1 class="mb-4">Kendaraan List</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Create New Kendaraan</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No Pol</th>
                        <th>No Mesin</th>
                        <th>Jenis Mobil</th>
                        <th>Nama Mobil</th>
                        <th>Merk</th>
                        <th>Kapasitas</th>
                        <th>Tarif</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kendaraan as $k)
                        <tr>
                            <td>{{ $k->no_pol }}</td>
                            <td>{{ $k->no_mesin }}</td>
                            <td>{{ $k->jenis_mobil }}</td>
                            <td>{{ $k->nama_mobil }}</td>
                            <td>{{ $k->merk }}</td>
                            <td>{{ $k->kapasitas }}</td>
                            <td>{{ $k->tarif }}</td>
                            <td>
                                <a href="{{ route('kendaraan.show', $k->no_pol) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('kendaraan.edit', $k->no_pol) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('kendaraan.destroy', $k->no_pol) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
