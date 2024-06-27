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
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: userLocation
                });
                var marker = new google.maps.Marker({
                    position: userLocation,
                    map: map
                });
            }, function() {
                handleLocationError(true, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, pos) {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: pos
        });
        var infoWindow = new google.maps.InfoWindow({
            map: map,
            position: pos,
            content: browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.'
        });
        map.setCenter(pos);
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7vzGJ4DY0OHXua-pNShCOM7bhSJXmnuk&callback=initMap"></script>
@endsection