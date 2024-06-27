@extends('layouts.admin.admin-layout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Jalur</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Jalur</label>
                            <p>{{ $route->name }}</p>
                        </div>
                        <div class="form-group">
                            <label>Kode Jalur</label>
                            <p>{{ $route->route_code }}</p>
                        </div>
                        <div class="form-group">
                            <label>Kode Warna</label>
                            <span class="badge" style="background-color: {{ $route->route_color }}">{{ $route->route_color }}</span>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <p>{{ $route->description }}</p>
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <img src="{{ asset('storage/'.$route->logo) }}" alt="{{ $route->name }}" width="100">
                        </div>
                        <h5>Jalan-jalan</h5>
                        <ul>
                            @foreach($route->streets as $street)
                            <li>{{ $street->name }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('jalur.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection