@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>Kendaraan List</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Kendaraan List</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Kendaraan List</h2>
    <p class="section-lead">Berikut adalah list kendaraan yang tersedia</p>

    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h4>Kendaraan List</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Kembali</a>
                </div>
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
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $kendaraan->no_pol }}</td>
                        <td>{{ $kendaraan->no_mesin }}</td>
                        <td>{{ $kendaraan->jenis_mobil }}</td>
                        <td>{{ $kendaraan->nama_mobil }}</td>
                        <td>{{ $kendaraan->merk }}</td>
                        <td>{{ $kendaraan->kapasitas }}</td>
                        <td>{{ $kendaraan->tarif }}</td>
                    </tr>
            </tbody>
        </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
