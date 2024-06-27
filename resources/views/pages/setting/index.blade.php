@extends('layouts.setting')

@section('content')
<div class="container">
    <div class="profile-menu">
        <a href="{{ route('account.index') }}" class="profile-menu-item">
            <div class="profile-menu-icon">
                <i class="fas fa-user-edit"></i>
            </div>
            <div class="profile-menu-text">
                Ubah Profil
            </div>
        </a>
        <a href="{{ route('panduan.index') }}" class="profile-menu-item">
            <div class="profile-menu-icon">
                <i class="fas fa-book"></i>
            </div>
            <div class="profile-menu-text">
                Panduan
            </div>
        </a>
        <a href="{{ route('qna.index') }}" class="profile-menu-item">
            <div class="profile-menu-icon">
                <i class="fas fa-question-circle"></i>
            </div>
            <div class="profile-menu-text">
                Pertanyaan Umum
            </div>
        </a>
        <a href="mailto:otogo@gmail.com" class="profile-menu-item">
            <div class="profile-menu-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="profile-menu-text">
                Feedback
            </div>
        </a>
        <a href="#" onclick="document.getElementById('logout-form').submit();" class="profile-menu-item">
            <div class="profile-menu-icon">
                <i class="fas fa-sign-out-alt"></i>
            </div>
            <div class="profile-menu-text">
                Keluar Akun
            </div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
            @csrf
        </form>
        <p>Tertarik ikut jadi bagian driver OTOGO? <a href="{{ route("driver.index") }}">Join OTOGO Driver Sekarang!</a></p>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection
