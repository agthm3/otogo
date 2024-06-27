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
                        <form>
                            <div class="form-group">
                                <label for="routeName">Nama Jalur</label>
                                <input type="text" class="form-control" id="routeName" placeholder="Masukkan Nama Jalur">
                            </div>
                            <div class="form-group">
                                <label for="routeCode">Kode Jalur</label>
                                <input type="text" class="form-control" id="routeCode" placeholder="Masukkan Kode Jalur">
                            </div>
                            <div class="form-group">
                                <label for="routeColor">Kode Warna</label>
                                <input type="color" class="form-control" id="routeColor">
                            </div>
                            <div class="form-group">
                                <label for="routeDescription">Deskripsi</label>
                                <textarea class="form-control" id="routeDescription" rows="3" placeholder="Masukkan Deskripsi Jalur"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="routeLogo">Logo Jalur</label>
                                <input type="file" class="form-control-file" id="routeLogo">
                            </div>
                            <div class="form-group">
                                <label for="streets">Nama Jalan</label>
                                <input type="text" class="form-control" id="streets" placeholder="Masukkan Nama Jalan (pisahkan dengan koma)">
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