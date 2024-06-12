<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Tambah Sewa</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('sewa.store') }}" method="POST"  >
                            @csrf

                              <div class="form-group">
                                <label for="exampleInputPassword1">Plat KB</label>
                                <input type="text" name="no_pol" class="form-control" placeholder="Nomor Plat KB">
                                @error('no_pol')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
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
                                    <input type="text" name="alamat_tujuan" class="form-control" placeholder="Telpon Tujuan">
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
                                    <input type="text" name="kota" class="form-control" placeholder="Masukkan No HP">
                                     @error('kota')
                                     <div class="alert alert-danger mt-2">
                                         {{ $message }}
                                     </div>
                                     @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Penyewa</label>
                                    <select class="form-select" name="id_penyewa" aria-label="Default select example">
                                        @foreach ($dataPenyewa as $penyewa)
                                        <option value="{{$penyewa->id_penyewa}}">{{$penyewa->nama_penyewa}}</option>

                                       @endforeach
                                      </select>
                                     @error('id_penyewa')
                                     <div class="alert alert-danger mt-2">
                                         {{ $message }}
                                     </div>
                                     @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jumlah Penumpang</label>
                                    <input type="tel" name="jlh_penumpang" class="form-control" placeholder="Masukkan No HP">
                                     @error('no_hp')
                                     <div class="alert alert-danger mt-2">
                                         {{ $message }}
                                     </div>
                                     @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">ID Kwitansi</label>
                                    <input type="text" name="id_kwitansi" class="form-control" placeholder="Nomor Bukti">
                                     @error('id_kwitansi')
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


                        {{-- {{ $customer->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


