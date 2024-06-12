<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Customer</title>
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

        .table tbody tr td,
        .table tbody tr th {
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center my-4">Tambah Customer</h3>
                <hr>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kendaraan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="no_pol" class="form-label">No Pol:</label>
                                <input type="text" class="form-control" name="no_pol" id="no_pol" value="{{ old('no_pol') }}">
                                @error('no_pol')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_mesin" class="form-label">No Mesin:</label>
                                <input type="text" class="form-control" name="no_mesin" id="no_mesin" value="{{ old('no_mesin') }}">
                                @error('no_mesin')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenis_mobil" class="form-label">Jenis Mobil:</label>
                                <select class="form-select" name="jenis_mobil" id="jenis_mobil">
                                    <option value="mpv" {{ old('jenis_mobil') == 'mpv' ? 'selected' : '' }}>MPV</option>
                                    <option value="city" {{ old('jenis_mobil') == 'city' ? 'selected' : '' }}>City</option>
                                    <option value="suv" {{ old('jenis_mobil') == 'suv' ? 'selected' : '' }}>SUV</option>
                                </select>
                                @error('jenis_mobil')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama_mobil" class="form-label">Nama Mobil:</label>
                                <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" value="{{ old('nama_mobil') }}">
                                @error('nama_mobil')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk:</label>
                                <select class="form-select" name="merk" id="merk">
                                    <option value="honda" {{ old('merk') == 'honda' ? 'selected' : '' }}>Honda</option>
                                    <option value="toyota" {{ old('merk') == 'toyota' ? 'selected' : '' }}>Toyota</option>
                                    <option value="daihatsu" {{ old('merk') == 'daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                                </select>
                                @error('merk')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kapasitas" class="form-label">Kapasitas:</label>
                                <input type="text" class="form-control" name="kapasitas" id="kapasitas" value="{{ old('kapasitas') }}">
                                @error('kapasitas')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tarif" class="form-label">Tarif:</label>
                                <input type="number" class="form-control" name="tarif" id="tarif" value="{{ old('tarif') }}">
                                @error('tarif')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Create
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
