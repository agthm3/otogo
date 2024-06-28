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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jalur</th>
                                        <th>Nopol</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($allDriver as $item)
                                    <tr>
                                        <th>{{ $item->id ?? 'N/A' }}</th>
                                        <td>{{ $item->name ?? 'N/A' }}</td>
                                        <td>{{ $item->nopol ?? 'N/A' }}</td>
                                        <td>{{ $item->status ?? 'N/A' }}</td>
                                        <td class="color-primary">
                                            <a href="" class="btn btn-info btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
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
