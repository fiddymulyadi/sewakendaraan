<!DOCTYPE html>
<html>
<head>
    <title>Kendaraan Index</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <div class="container mt-5">
        <h1 class="mb-4">Kendaraan List</h1>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Create New Kendaraan</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered table-striped">
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
</body>
</html>
