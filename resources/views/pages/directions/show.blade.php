@extends('layouts.direction')

@section('content')
<div class="container">
    <div class="detail-card">
        <h5>Rute OTOGO</h5>
        <div class="route-overview">
            <p><i class="fas fa-map-marker-alt" style="color: #007bff;"></i> Terminal Daya</p>
            <p><i class="fas fa-map-marker-alt" style="color: #dc3545;"></i> Pasar Butung</p>
        </div>
    </div>

    <div class="detail-card">
        <h5>Rute Perhentian OTOGO</h5>
        <div class="route-details">
            <div class="route-section">
                <h6><i class="fas fa-circle" style="color: #28a745;"></i> Rute Berangkat</h6>
                <ul>
                    <li>Terminal Panaikang</li>
                    <li>Urip Sumoharjo</li>
                    <li>Taman Makam Pahlawan</li>
                    <li>Adiyaksa</li>
                    <li>Terminal Panakkukang</li>
                    <li>Toddopuli Raya</li>
                </ul>
            </div>
            <div class="route-section">
                <h6><i class="fas fa-circle" style="color: #dc3545;"></i> Rute Kembali</h6>
                <ul>
                    <li>Toddopuli Raya</li>
                    <li>Emmy Saelan</li>
                    <li>Sultan Alauddin</li>
                    <li>Adiyaksa</li>
                    <li>Terminal Panakkukang</li>
                    <li>Toddopuli Raya</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
