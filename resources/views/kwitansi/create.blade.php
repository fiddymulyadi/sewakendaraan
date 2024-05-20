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
                    <h3 class="text-center my-4">Tambah Kwitansi</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kwitansi.store') }}" method="POST"  >
                            @csrf
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Tanggal Kwitansi</label>
                                  <input type="date" name="tanggal_kwitansi" class="form-control" placeholder="Tanggal Kwitansi">
                                   @error('tanggal_kwitansi')
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
           
                        
                        {{-- {{ $kwitansi->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


