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
</div>
</div>
</div>
</div>
</div>
@endsection
