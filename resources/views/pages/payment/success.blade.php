@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="card-custom success-card">
        <img src="{{ asset('asset/icons/success.png') }}" style="width:40px" alt="Success Icon" class="success-icon">
        <h1>Pembayaran Sukses!</h1>
        <p>Terima kasih telah menggunakan layanan kami.</p>
        <a href="{{ url('/ticket/show') }}" class="btn btn-primary">Lihat Tiket</a>
    </div>
</div>
@endsection

@section('styles')
<style>
    .success-card {
        padding: 40px;
        margin-top: 50px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #f9f9f9;
    }
    .success-icon {
        width: 100px;
        margin-bottom: 20px;
    }
</style>
@endsection
