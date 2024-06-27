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

    <div class="oto-card" style="background-color: #54BFD4">
        <div class="oto-card-content">
            <h5>Butuh Carter OTOGO?</h5>
            <p>Carter OTOGO dengan mudah dan cepat untuk kegiatan kamu.</p>
            <a href="{{ route('payment.index') }}"> <button class="btn btn-light">Pilih</button></a>
        </div>
        <img src="asset/img/otogo-mobil.svg" alt="Kendaraan">
    </div>

    <div class="map-card">
        <h5>Peta Lokasi Anda</h5>
        <div id="map" style="width: 100%; height: 400px;"></div>
    </div>
    <h3>Rute OTOGO</h1>
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
        console.log("initMap called");
        var defaultLocation = { lat: -5.147665, lng: 119.432731 };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: defaultLocation
        });

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                console.log("Geolocation success");
                var userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                map.setCenter(userLocation);
                new google.maps.Marker({
                    position: userLocation,
                    map: map
                });
            }, function(error) {
                console.log("Geolocation error: " + error.message);
                handleLocationError(true, map, defaultLocation);
            });
        } else {
            console.log("Browser doesn't support Geolocation");
            handleLocationError(false, map, defaultLocation);
        }
    }

    function handleLocationError(browserHasGeolocation, map, pos) {
        var infoWindow = new google.maps.InfoWindow({
            position: pos,
            content: browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.'
        });
        infoWindow.open(map);
        map.setCenter(pos);
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7vzGJ4DY0OHXua-pNShCOM7bhSJXmnuk&callback=initMap"></script> @endsection