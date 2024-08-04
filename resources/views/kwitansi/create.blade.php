@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>Create Kwitansi</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Create Kwitansi</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Create Kwitansi</h2>
    <p class="section-lead">Create Kwitansi</p>

    <div class="row">
      <div class="col-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kwitansi.store') }}" method="POST"  >
                            @csrf
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Tanggal Kwitansi</label>
                                  <input type="date" name="tgl_kwitansi" class="form-control" placeholder="Tanggal Kwitansi">
                                   @error('tgl_kwitansi')
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


