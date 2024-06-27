@extends('layouts.admin.admin-layout')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Jalur</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jalur.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="routeName">Nama Jalur</label>
                                <input type="text" class="form-control" id="routeName" name="name" placeholder="Masukkan Nama Jalur" required>
                            </div>
                            <div class="form-group">
                                <label for="routeCode">Kode Jalur</label>
                                <input type="text" class="form-control" id="routeCode" name="route_code" placeholder="Masukkan Kode Jalur" required>
                            </div>
                            <div class="form-group">
                                <label for="routeColor">Kode Warna</label>
                                <input type="color" class="form-control" id="routeColor" name="route_color" required>
                            </div>
                            <div class="form-group">
                                <label for="routeDescription">Deskripsi</label>
                                <textarea class="form-control" id="routeDescription" name="description" rows="3" placeholder="Masukkan Deskripsi Jalur"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="routeLogo">Logo Jalur</label>
                                <input type="file" class="form-control-file" id="routeLogo" name="logo">
                            </div>
                            <div class="form-group">
                                <label for="streets">Nama Jalan</label>
                                <input type="text" class="form-control" id="streets" name="streets" placeholder="Masukkan Nama Jalan (pisahkan dengan koma)">
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