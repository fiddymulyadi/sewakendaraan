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
                                    <a href="{{ route('penyewa.create') }}" class="btn btn-primary btn-sm my-1">
                                        <i class="fas fa-plus"></i> Tambah
                                    </a>
                                    <div class="table-container mt-3">
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">ID Customer</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">No HP</th>
                                                    <th scope="col" style="width: 20%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($dataPenyewa as $index => $penyewa)
                                                    <tr>
                                                        <th scope="row">{{ ++$index }}</th>
                                                        <td>{{ $penyewa->id_penyewa }}</td>
                                                        <td>{{ $penyewa->nama_penyewa }}</td>
                                                        <td>{{ $penyewa->alamat }}</td>
                                                        <td>{{ $penyewa->no_hp }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('penyewa.show',  $penyewa->id_penyewa) }}" class="btn btn-info btn-sm">Show</a>
                                                            <a href="{{ route('penyewa.edit',  $penyewa->id_penyewa) }}" class="btn btn-warning btn-sm">Edit</a>
                                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('penyewa.destroy', $penyewa->id_penyewa) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash"></i> Hapus
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <!-- View Modal -->
                                                    <div class="modal fade" id="viewModal{{ $penyewa->id_penyewa }}" tabindex="-1" aria-labelledby="viewModalLabel{{ $penyewa->id_penyewa }}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="viewModalLabel{{ $penyewa->id_penyewa }}">Detail Customer</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p><strong>ID Customer:</strong> {{ $penyewa->id_penyewa }}</p>
                                                                    <p><strong>Nama:</strong> {{ $penyewa->nama_penyewa }}</p>
                                                                    <p><strong>Alamat:</strong> {{ $penyewa->alamat }}</p>
                                                                    <p><strong>No HP:</strong> {{ $penyewa->no_hp }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Edit Modal -->
                                                    <div class="modal fade" id="editModal{{ $penyewa->id_penyewa }}" tabindex="-1" aria-labelledby="editModalLabel{{ $penyewa->id_penyewa }}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModalLabel{{ $penyewa->id_penyewa }}">Edit Customer</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="nama_penyewa" class="form-label">Nama</label>
                                                                            <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" value="{{ $penyewa->nama_penyewa }}" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="alamat" class="form-label">Alamat</label>
                                                                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $penyewa->alamat }}" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="no_hp" class="form-label">No HP</label>
                                                                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $penyewa->no_hp }}" required>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <tr>
                                                        <td colspan="6" class="text-center">
                                                            <div class="alert alert-danger">
                                                                Data User Belum Ada.
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- {{ $penyewa->links() }} --}}
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            @endsection