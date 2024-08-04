@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>Invoice List</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Invoice List</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Invoice List</h2>
    <p class="section-lead">Invoice List</p>

    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h4>Invoice List</h4>
            </div>
            <div class="card-body">
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('invoice.create') }}" class="btn btn-primary">Create New Invoice</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Kwitansi</th>
                        <th>ID Penyewa</th>
                        <th>No Pol</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $k)
                        <tr>
                            <td>{{ $k->id_kwitansi }}</td>
                            <td>{{ $k->id_penyewa }}</td>
                            <td>{{ $k->no_pol }}</td>
                            <td>
                                <a href="{{ route('invoice.edit', $k->id_invoice) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('invoice.destroy', $k->id_invoice) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
