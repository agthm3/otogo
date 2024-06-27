@extends('layouts.direction')

@section('content')
<div class="container">
    <a href="{{ route("direction.show") }}" class="text-decoration-none" style="color: black">
        <div class="custom-route-card">
            <div class="custom-route-content">
                <span class="custom-route-badge" style="background-color: #ff0000; color: white;">A1</span>
                <p>Terminal Daya - Pasar Butung</p>
            </div>
        </div>
    </a>

    <div class="custom-route-card">
        <div class="custom-route-content">
            <span class="custom-route-badge" style="background-color: #800080; color: white;">D</span>
            <p>Terminal Daya - Pasar Butung</p>
        </div>
    </div>

    <div class="custom-route-card">
        <div class="custom-route-content">
            <span class="custom-route-badge" style="background-color: #FFFF00; color: black;">F1</span>
            <p>Terminal Daya - Pasar Butung</p>
        </div>
    </div>

    <div class="custom-route-card">
        <div class="custom-route-content">
            <span class="custom-route-badge" style="background-color: #008000; color: white;">F</span>
            <p>Terminal Daya - Pasar Butung</p>
        </div>
    </div>
</div>
@endsection
