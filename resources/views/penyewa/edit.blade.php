<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Kelas</h3>
                    <hr>
                </div>
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
           
                        
                        {{-- {{ $penyewa->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


