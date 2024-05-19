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
                    <h3 class="text-center my-4">Tambah Customer</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="POST"  >
                          @csrf
                            <div class="form-group">
                                <label for="idCustomer">ID Customer</label>
                                <input type="text" name="id" class="form-control" id="idCustomer" aria-describedby="emailHelp" placeholder="Masukan ID pengguna">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                @error('id_penyewa')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                            <div class="form-group">
                              <label for="namaCustomer">Nama Customer</label>
                              <input type="text" name="email" class="form-control" id="namaCustomer" placeholder="Masukkan nama pengguna">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              @error('nama_penyewa')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Alamat Customer</label>
                              <input type="text" name="Alamat" class="form-control" placeholder="Masukkan alamat pengguna">
                              @error('alamat')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">No. Handphone</label>
                                <input type="tel" name="Handphone" class="form-control" placeholder="Masukkan No HP">
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
           
                        
                        {{-- {{ $penyewa->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


