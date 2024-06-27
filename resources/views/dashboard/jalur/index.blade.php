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
                        <a href="{{ route('jalur.create') }}" class="btn btn-primary">+ Jalur</a>
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
                                    <tr>
                                        <th>1</th>
                                        <td>Kolor Tea Shirt For Man</td>
                                        <td><span class="badge badge-primary">Sale</span>
                                        </td>
                                        <td>January 22</td>
                                        <td class="color-primary"><a href="" class="btn btn-primary">Detail</a></td>
                                    </tr>
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