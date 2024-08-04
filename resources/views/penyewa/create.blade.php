@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>Create Pelanggan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Create Pelanggan</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Create Pelanggan</h2>
    <p class="section-lead">Create Pelanggan</p>

    <div class="row">
      <div class="col-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('penyewa.store') }}" method="POST"  >
                            @csrf

                            <div class="form-group">
                                <label for="namaCustomer">Nama</label>
                                <input type="text" name="nama_penyewa" class="form-control" id="namaCustomer" placeholder="Masukkan nama Penyewa">
                                @error('nama_penyewa')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat Penyewa">
                                @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">No. Handphone</label>
                                  <input type="tel" name="no_hp" class="form-control" placeholder="Masukkan No HP">
                                   @error('no_hp')
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


