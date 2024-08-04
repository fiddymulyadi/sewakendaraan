@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>List Pelanggan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">List Pelanggan</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">List Pelanggan</h2>
    <p class="section-lead">List Pelanggan</p>

    <div class="row">
      <div class="col-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('kwitansi.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Kwitansi</th>
                                    <th scope="col">Tanggal Kwitansi</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataKwitansi as $index => $kwitansi)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $kwitansi->id_kwitansi }}</td>
                                        <td>{{ $kwitansi->tgl_kwitansi }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kwitansi.destroy', $kwitansi->id_kwitansi) }}" method="POST">
                                                <a href="{{ route('kwitansi.edit', $kwitansi->id_kwitansi) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Kwitansi Belum Ada.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $kwitansi->links() }} --}}
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                @endsection