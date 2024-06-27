@extends('layouts.setting')

@section('content')
<div class="container">
    <div class="profile-header">
        <h2>Ubah Profil</h2>
    </div>

    <form action="{{ route('profile.update') }}" method="POST" class="profile-form">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" value="{{ old('name', auth()->user()->name) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value="{{ old('email', auth()->user()->email) }}" required>
        </div>
        <div class="form-group">
            <label for="password">Kata Sandi Baru</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi baru">
            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah kata sandi.</small>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi kata sandi baru">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
