@extends('layouts.direction')

@section('content')
<div class="container">
    @foreach ($routes as $route)
    <a href="{{ route('direction.show', $route->id) }}" class="text-decoration-none" style="color: black">
        <div class="custom-route-card">
            <div class="custom-route-content">
                <span class="custom-route-badge" style="background-color: {{ $route->route_color }}; color: white;">{{ $route->route_code }}</span>
                <p>{{ $route->name }}</p>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection
