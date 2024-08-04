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
    <h2 class="section-title">Sewa Kendaraan</h2>
    <p class="section-lead">Sewa Kendaraan</p>

    <div class="row">
      <div class="col-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('sewa.store') }}" method="POST"  >
                            @csrf

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
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Tanggal Sewa</label>
                                  <input type="date" name="tgl_sewa" class="form-control" placeholder="Tanggal Sewa Kendaraan">
                                   @error('tgl_sewa')
                                   <div class="alert alert-danger mt-2">
                                       {{ $message }}
                                   </div>
                                   @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tanggal Selesai</label>
                                    <input type="date" name="tgl_selesai" class="form-control" placeholder="Tanggal Selesai Sewa">
                                     @error('tgl_selesai')
                                     <div class="alert alert-danger mt-2">
                                         {{ $message }}
                                     </div>
                                     @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Alamat Tujuan</label>
                                    <input type="text" name="alamat_tujuan" class="form-control" placeholder="Alamat Tujuan">
                                     @error('alamat_tujuan')
                                     <div class="alert alert-danger mt-2">
                                         {{ $message }}
                                     </div>
                                     @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Telpon Tujuan</label>
                                    <input type="text" name="tlp_tujuan" class="form-control" placeholder="Telpon Tujuan">
                                     @error('tlp_tujuan')
                                     <div class="alert alert-danger mt-2">
                                         {{ $message }}
                                     </div>
                                     @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Biaya Sewa</label>
                                    <input type="text" name="biaya_sewa" class="form-control" placeholder="Biaya Sewa">
                                     @error('biaya_sewa')
                                     <div class="alert alert-danger mt-2">
                                         {{ $message }}
                                     </div>
                                     @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kota</label>
                                    <input type="text" name="kota" class="form-control" placeholder="Masukkan Kota">
                                     @error('kota')
                                     <div class="alert alert-danger mt-2">
                                         {{ $message }}
                                     </div>
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
                                    <label for="id_invoice" class="section-title mt-0">No Kwitansi :</label>
                                    <div class="form-group">
                                        <select class="form-control" name="id_invoice" id="id_invoice">
                                            @foreach ($invoice as $invoices)
                                                <option value="{{$invoices->id_invoice}}">{{$invoices->id_invoice}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('id_invoice')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                 
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jumlah Penumpang</label>
                                    <input type="tel" name="jlh_penumpang" class="form-control" placeholder="Masukkan Jumlah Penumpang">
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

