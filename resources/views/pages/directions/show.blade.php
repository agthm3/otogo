@extends('layouts.direction')

@section('content')
<div class="container">
    <div class="detail-card">
        <h5>Rute OTOGO</h5>
        <div class="route-overview">
            <p><i class="fas fa-map-marker-alt" style="color: #007bff;"></i> {{ $departStreets->first()->name }}</p>
            <p><i class="fas fa-map-marker-alt" style="color: #dc3545;"></i> {{ $returnStreets->last()->name }}</p>
        </div>
    </div>

    <div class="detail-card">
        <h5>Rute Perhentian OTOGO</h5>
        <div class="route-details">
            <div class="route-section">
                <h6><i class="fas fa-circle" style="color: #28a745;"></i> Rute Berangkat</h6>
                <ul>
                    @foreach ($departStreets as $street)
                    <li>{{ $street->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="route-section">
                <h6><i class="fas fa-circle" style="color: #dc3545;"></i> Rute Kembali</h6>
                <ul>
                    @foreach ($returnStreets as $street)
                    <li>{{ $street->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
