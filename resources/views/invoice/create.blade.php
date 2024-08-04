@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>Create Invoice</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Create Invoice</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Create Invoice</h2>
    <p class="section-lead">Create Invoice</p>

    <div class="row">
      <div class="col-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('invoice.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="id_kwitansi" class="section-title mt-0">Kwitansi:</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_kwitansi" id="id_kwitansi">
                                        @foreach ($kwitansi as $kwitansis)
                                            <option value="{{$kwitansis->id_kwitansi}}">{{$kwitansis->tgl_kwitansi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_kwitansi')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="id_penyewa" class="section-title mt-0">Penyewa:</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_penyewa" id="id_penyewa">
                                        @foreach ($dataPenyewa as $penyewa)
                                            <option value="{{$penyewa->id_penyewa}}">{{$penyewa->nama_penyewa}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_penyewa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_pol" class="section-title mt-0">No Pol:</label>
                                <div class="form-group">
                                    <select class="form-control" name="no_pol" id="no_pol">
                                        @foreach ($kendaraan as $kendaraans)
                                            <option value="{{$kendaraans->no_pol}}">{{$kendaraans->no_pol}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('no_pol')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Create
                            </button>
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
