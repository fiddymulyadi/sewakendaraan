@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>Detail Pelanggan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Detail Pelanggan</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Detail Pelanggan</h2>
    <p class="section-lead">Detail Pelanggan</p>

    <div class="row">
      <div class="col-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('penyewa.index') }}" class="btn btn-primary mb-4">Kembali</a>
                        <div class="mb-3 d-flex align-items-center">
                            <h6 class="me-3 mb-0"><i class="fas fa-id-badge"></i> ID:</h6>
                            <p class="text-muted mb-0"> {{ $penyewa->id_penyewa }}</p>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <h6 class="me-3 mb-0"><i class="fas fa-user"></i> Nama:</h6>
                            <p class="text-muted mb-0"> {{ $penyewa->nama_penyewa }}</p>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <h6 class="me-3 mb-0"><i class="fas fa-map-marker-alt"></i> Alamat:</h6>
                            <p class="text-muted mb-0"> {{ $penyewa->alamat }}</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <h6 class="me-3 mb-0"><i class="fas fa-phone"></i> No Handphone:</h6>
                            <p class="text-muted mb-0"> {{ $penyewa->no_hp }}</p>
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
