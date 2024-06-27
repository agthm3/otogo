@extends('layouts.admin.admin-layout')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Jalur</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jalur.update', $route->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nama Jalur</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $route->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="route_code">Kode Jalur</label>
                                <input type="text" class="form-control" id="route_code" name="route_code" value="{{ $route->route_code }}" required>
                            </div>
                            <div class="form-group">
                                <label for="route_color">Warna Jalur</label>
                                <input type="color" class="form-control" id="route_color" name="route_color" value="{{ $route->route_color }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $route->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="depart">Jalur Keberangkatan</label>
                                <input type="text" class="form-control" id="depart" name="depart" value="{{ implode(', ', $departStreets) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="return">Jalur Kembali</label>
                                <input type="text" class="form-control" id="return" name="return" value="{{ implode(', ', $returnStreets) }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection