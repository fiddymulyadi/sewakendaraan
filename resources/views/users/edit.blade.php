@extends('layouts.template')

@section('content')
<div class="section-header">
    <h1>Create Users</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ url('') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Create Users</div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Create Users</h2>
    <p class="section-lead">Create Users</p>

    <div class="row">
      <div class="col-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('users.update', $User->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="level" class="section-title mt-0">Level:</label>
                                <div class="form-group">
                                    <select class="form-control" name="level" id="level">
                                        <option value="admin" {{ old('level', $User->level) == 'admin' ? 'selected' : '' }}>admin</option>
                                        <option value="administrator" {{ old('level', $User->level) == 'administrator' ? 'selected' : '' }}>administrator</option>
                                    </select>
                                </div>
                                @error('level')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ old('name', $User->kapasitnameas) }}">
                                @error('name')
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
