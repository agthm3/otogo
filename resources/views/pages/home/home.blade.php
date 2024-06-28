@extends('layouts.app')

@section('content')
<div class="container">
    <div class="destination-card">
        <h5>Mau Kemana Hari ini?</h5>
        <p>Pilih destinasi kamu dibawah ini.</p>
        <form action="{{ route('search.routes') }}" method="GET">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt red-icon"></i></span>
                </div>
                <input type="text" name="street_name" class="form-control" placeholder="Masukkan nama jalan..." aria-label="Destination" aria-describedby="basic-addon1">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>

    <div id="map" style="width: 100%; height: 400px;"></div>

    <h3>Rute OTOGO</h3>
    @foreach ($latestRoutes as $route)
    <div class="oto-card" style="background-color: {{ $route->route_color }}">
        <div class="oto-card-content">
            <h5>{{ $route->name }}</h5>
            <p>{{ $route->streets->first()->name }} - {{ $route->streets->last()->name }}</p>
            <a href="{{ route('direction.show', $route->id) }}"><button class="btn btn-light">Pilih</button></a>
        </div>
        <img src="{{ asset('asset/img/otogo-mobil.svg') }}" alt="Kendaraan">
    </div>
    @endforeach
</div>

<script>
    function initMap() {
        var defaultLocation = { lat: -5.147665, lng: 119.432731 };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: defaultLocation
        });

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
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
                handleLocationError(true, map, defaultLocation);
            });
        } else {
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmZcJLO_7aldKS3keJjovi3TNz_dm7u6k&callback=initMap"></script>
@endsection