@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>Edit Pelanggan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Edit Pelanggan</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Edit Pelanggan</h2>
    <p class="section-lead">Edit Pelanggan</p>

    <div class="row">
      <div class="col-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('penyewa.update', $dataPenyewa->id_penyewa) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Penyewa</label>
                            <input type="text" name="nama_penyewa" class="form-control" id="exampleInputEmail1" placeholder="Enter username" value="{{ old('nama_penyewa', $dataPenyewa->nama_penyewa) }}">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            @error('username')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">No Handphone</label>
                          <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('no_hp', $dataPenyewa->no_hp) }}">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          @error('email')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{ old('alamat', $dataPenyewa->alamat) }}">
                          @error('password')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                            <br/>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      @endsection