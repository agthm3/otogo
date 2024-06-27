@extends('layouts.setting')

@section('content')
<div class="container">
  

    <div class="profile-menu">
        <a href="" class="profile-menu-item">
            <div class="profile-menu-icon">
                <i class="fas fa-user-edit"></i>
            </div>
            <div class="profile-menu-text">
                Ubah Profil
            </div>
        </a>
        <a href="" class="profile-menu-item">
            <div class="profile-menu-icon">
                <i class="fas fa-book"></i>
            </div>
            <div class="profile-menu-text">
                Panduan
            </div>
        </a>
        <a href="" class="profile-menu-item">
            <div class="profile-menu-icon">
                <i class="fas fa-question-circle"></i>
            </div>
            <div class="profile-menu-text">
                Pertanyaan Umum
            </div>
        </a>
        <a href="{{ route('logout') }}" class="profile-menu-item">
            <div class="profile-menu-icon">
                <i class="fas fa-sign-out-alt"></i>
            </div>
            <div class="profile-menu-text">
                Keluar Akun
            </div>
        </a>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection
