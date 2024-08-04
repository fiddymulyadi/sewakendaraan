@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>Create Kendaraan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Create Kendaraan</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Create Kendaraan</h2>
    <p class="section-lead">Create Kendaraan</p>

    <div class="row">
      <div class="col-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kendaraan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="no_pol" class="form-label">No Pol:</label>
                                <input type="text" class="form-control" name="no_pol" id="no_pol" placeholder="No Pol" value="{{ old('no_pol') }}">
                                @error('no_pol')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_mesin" class="form-label">No Mesin:</label>
                                <input type="text" class="form-control" name="no_mesin" id="no_mesin" placeholder="No Mesin" value="{{ old('no_mesin') }}">
                                @error('no_mesin')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenis_mobil" class="section-title mt-0">Jenis Mobil:</label>
                                <div class="form-group">
                                    <select class="form-control" name="jenis_mobil" id="jenis_mobil">
                                        <option value="mpv" {{ old('jenis_mobil') == 'mpv' ? 'selected' : '' }}>MPV</option>
                                        <option value="city" {{ old('jenis_mobil') == 'city' ? 'selected' : '' }}>City</option>
                                        <option value="suv" {{ old('jenis_mobil') == 'suv' ? 'selected' : '' }}>SUV</option>
                                    </select>
                                </div>
                                @error('jenis_mobil')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama_mobil" class="form-label">Nama Mobil:</label>
                                <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" placeholder="Nama Mobil" value="{{ old('nama_mobil') }}">
                                @error('nama_mobil')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="merk" class="section-title mt-0">Merk:</label>
                                <div class="form-group">
                                <select class="form-control" name="merk" id="merk">
                                    <option value="honda" {{ old('merk') == 'honda' ? 'selected' : '' }}>Honda</option>
                                    <option value="toyota" {{ old('merk') == 'toyota' ? 'selected' : '' }}>Toyota</option>
                                    <option value="daihatsu" {{ old('merk') == 'daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                                </select>
                            </div>
                                @error('merk')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kapasitas" class="form-label">Kapasitas:</label>
                                <input type="text" class="form-control" name="kapasitas" id="kapasitas" placeholder="Kapasitas" value="{{ old('kapasitas') }}">
                                @error('kapasitas')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tarif" class="form-label">Tarif:</label>
                                <input type="number" class="form-control" name="tarif" id="tarif" placeholder="Tarif" value="{{ old('tarif') }}">
                                @error('tarif')
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
