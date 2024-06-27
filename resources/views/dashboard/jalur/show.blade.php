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
                        <p><strong>Nama Jalur:</strong> {{ $route->name }}</p>
                        <p><strong>Kode Jalur:</strong> {{ $route->route_code }}</p>
                        <p><strong>Warna Jalur:</strong> <span class="badge badge-primary" style="background-color: {{ $route->route_color }};">{{ $route->route_color }}</span></p>
                        <p><strong>Deskripsi:</strong> {{ $route->description }}</p>
                        <h5>Jalur Keberangkatan:</h5>
                        <ul>
                            @foreach($departStreets as $street)
                                <li>{{ $street->name }}</li>
                            @endforeach
                        </ul>
                        <h5>Jalur Kembali:</h5>
                        <ul>
                            @foreach($returnStreets as $street)
                                <li>{{ $street->name }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route('jalur.edit', $route->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('jalur.destroy', $route->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jalur ini?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection