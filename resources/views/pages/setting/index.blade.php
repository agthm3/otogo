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
        <a  >
        <form action="{{ route('logout') }}" class="profile-menu-item" method="post">
            @csrf
            <div class="profile-menu-icon">
                <i class="fas fa-sign-out-alt"></i>
            </div>
            <div class="profile-menu-text">
                Keluar Akun
            </div>
        </form>    
        </a>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection
