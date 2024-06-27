@extends('layouts.app')

@section('content')
<div class="container">
    <div class="destination-card">
        <h5>Mau Kemana Hari ini?</h5>
        <p>Pilih destinasi kamu dibawah ini.</p>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt red-icon"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Pintu Nol, Universitas Hasanuddin" aria-label="Destination" aria-describedby="basic-addon1">
        </div>
    </div>

    <div class="map-card">
        <h5>Peta Makassar</h5>
        <div id="map" style="width: 100%; height: 400px;"></div>
    </div>

    <div class="oto-card">
        <div class="oto-card-content">
            <h5>OTO - F1</h5>
            <p>Malengkeri Kampus Unhas</p>
            <a href="{{ route('payment.index') }}"> <button class="btn btn-light">Pilih</button></a>
        </div>
        <img src="asset/img/otogo-mobil.svg" alt="Kendaraan">
    </div>

    <div class="oto-card">
        <div class="oto-card-content">
            <h5>OTO - E1</h5>
            <p>Terminal Panakkukang Kampus Unhas</p>
            <button class="btn btn-light">Pilih</button>
        </div>
        <img src="asset/img/otogo-mobil.svg" alt="Kendaraan">
    </div>
</div>

<script>
    function initMap() {
        var makassar = {lat: -5.147665, lng: 119.432732};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: makassar
        });
        var marker = new google.maps.Marker({
            position: makassar,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7vzGJ4DY0OHXua-pNShCOM7bhSJXmnuk&callback=initMap"></script>
@endsection