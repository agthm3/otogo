@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom: 60px;">
    <div class="card-custom">
        {{-- <p><strong>Dari</strong></p>
        <p><i class="fas fa-map-marker-alt" style="color: #007bff;"></i> Input Jalan</p> --}}
        <p><strong>Tujuan</strong></p>
        <p><i class="fas fa-map-marker-alt" style="color: #dc3545;"></i> {{ $streetName }}</p>
    </div>

    <div class="card-custom time-card">
        <div>
            <i class="fas fa-clock"></i> 15:00
        </div>
        <div>
            <strong>Waktu Keberangkatan</strong>
        </div>
    </div>

    @if($routes->isEmpty())
        <p>Tidak ada rute yang ditemukan untuk jalan yang Anda cari.</p>
    @else
        @foreach ($routes as $route)
            @php
                $estimationTime = rand(20, 60) . ' menit';
                $estimationPrice = rand(10000, 20000);
            @endphp
        <a href="{{ route('payment.show', $route->id) }}">
            <div class="route-card text-decoration-none" style="color: black">
                <div class="route-row">
                    <div class="route-icons" style="background-color: {{ $route->route_color }}; padding: 5px; border-radius: 5px;">
                        <img src="{{ asset('otogo-icon.png') }}" alt="Icon"><strong>{{ $route->route_code }}</strong>
                    </div>
                    <div class="text-right">
                        <p>{{ $estimationTime }}</p>
                    </div>
                </div>
                <div class="dotted-line"></div>
                <div class="route-row">
                    <div>
                        <p>{{ $route->streets->first()->name }} - {{ $route->streets->last()->name }}</p>
                    </div>
                    <div class="route-estimation">
                        <p class="price">Rp{{ number_format($estimationPrice, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    @endif
</div>
@endsection