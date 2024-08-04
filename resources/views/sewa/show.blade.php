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
    <h2 class="section-title">Detail Sewa Kendaraan</h2>
    <p class="section-lead">Berikut adalah detail dari sewa kendaraan yang dipilih.</p>

    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-header">
                    <h4>Informasi Sewa</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">ID Sewa</h5>
                            <p class="font-weight-bold">{{ $sewa->id_sewa }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">Nomor Polisi</h5>
                            <p class="font-weight-bold">{{ $sewa->no_pol }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">Tanggal Sewa</h5>
                            <p class="font-weight-bold">{{ $sewa->tgl_sewa }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">Tanggal Selesai</h5>
                            <p class="font-weight-bold">{{ $sewa->tgl_selesai }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">Telepon Tujuan</h5>
                            <p class="font-weight-bold">{{ $sewa->tlp_tujuan }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">Alamat Tujuan</h5>
                            <p class="font-weight-bold">{{ $sewa->alamat_tujuan }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">Biaya Sewa</h5>
                            <p class="font-weight-bold">{{ $sewa->biaya_sewa }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">Kota</h5>
                            <p class="font-weight-bold">{{ $sewa->kota }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">ID Penyewa</h5>
                            <p class="font-weight-bold">{{ $sewa->id_penyewa }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">ID Kwitansi</h5>
                            <p class="font-weight-bold">{{ $sewa->id_kwitansi }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">ID Invoice</h5>
                            <p class="font-weight-bold">{{ $sewa->id_invoice }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="text-muted">Jumlah Penumpang</h5>
                            <p class="font-weight-bold">{{ $sewa->jlh_penumpang }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url('sewa.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
