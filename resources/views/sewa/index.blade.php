@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>Sewa Kendaraan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Sewa Kendaraan</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Sewa Kendaraan</h2>
    <p class="section-lead">Sewa Kendaraan</p>

    <div class="row">
      <div class="col-12">
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
                                    <th scope="col">ID Kwitansi</th>
                                    <th scope="col">ID Invoice</th>
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
                                        <td>{{ $sewa->id_kwitansi }}</td>
                                        <td>{{ $sewa->id_invoice }}</td>
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
            </div>
            </div>
            </div>
            </div>
            @endsection
