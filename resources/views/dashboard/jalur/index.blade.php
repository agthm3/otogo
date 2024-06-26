@extends('layouts.admin.admin-layout')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Jalur</h4>
                        <a href="{{ route('dashboard-jalur.create') }}" class="btn btn-primary">+ Jalur</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jalur</th>
                                        <th>Kode Warna</th>
                                        <th>Koder Jalur</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($routes as $route)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $route->name }}</td>
                                        <td><span class="badge badge-primary" style="background-color: {{ $route->route_color }};">{{ $route->route_color }}</span></td>
                                        <td>{{ $route->route_code }}</td>
                                        <td>
                                            <a href="{{ route('jalur.show', $route->id) }}" class="btn btn-primary">Detail</a>
                                            <a href="{{ route('jalur.edit', $route->id) }}" class="btn btn-secondary">Edit</a>
                                            <form action="{{ route('jalur.destroy', $route->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jalur ini?')">Delete</button>
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