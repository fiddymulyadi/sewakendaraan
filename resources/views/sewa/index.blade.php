<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Penyewaan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('sewa.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Sewa</th>
                                    <th scope="col">Plat KB</th>
                                    <th scope="col">Tanggal Sewa</th>
                                    <th scope="col">Tanggal Selesai</th>
                                    <th scope="col">Telpon Tujuan</th>
                                    <th scope="col">Alamat Tujuan</th>
                                    <th scope="col">Biaya Sewa</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">ID Penyewa</th>
                                    <th scope="col">Jlh Penumpang</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataSewa as $index => $sewa)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $sewa->id_sewa }}</td>
                                        <td>{{ $sewa->no_pol }}</td>
                                        <td>{{ $sewa->tgl_sewa }}</td>
                                        <td>{{ $sewa->tgl_selesai }}</td>
                                        <td>{{ $sewa->tlp_tujuan }}</td>
                                        <td>{{ $sewa->alamat_tujuan }}</td>
                                        <td>{{ $sewa->biaya_sewa }}</td>
                                        <td>{{ $sewa->kota }}</td>
                                        <td>{{ $sewa->id_penyewa }}</td>
                                        <td>{{ $sewa->jlh_penumpang }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('sewa.destroy', $sewa->id_sewa) }}" method="POST">
                                                <a href="{{ route('sewa.show', $sewa->id_sewa) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('sewa.edit', $sewa->id_sewa) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data User Belum Ada.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $penyewa->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>