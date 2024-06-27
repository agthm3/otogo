<div class="nav-bar">
    <a href="{{ route('home.index') }}">
        <img src="{{ request()->routeIs('home.index') ? asset('asset/img/icon/home-on.png') : asset('asset/img/icon/home-off.png') }}" alt="Home">
        <span>Home</span>
    </a>
    <a href="{{ route('direction.index') }}">
        <img src="{{ request()->routeIs('direction.index') ? asset('asset/img/icon/direction-on.png') : asset('asset/img/icon/direction-off.png') }}" alt="Direction">
        <span>Direction</span>
    </a>
    <a href="{{ route('ticket.index') }}">
        <img src="{{ request()->routeIs('ticket.index') ? asset('asset/img/icon/ticket-on.png') : asset('asset/img/icon/ticket-off.png') }}" alt="Ticket">
        <span>Ticket</span>
    </a>
    <a href="{{ route('setting.index') }}">
        <img src="{{ request()->routeIs('setting.index') ? asset('asset/img/icon/settings-on.png') : asset('asset/img/icon/settings-off.png') }}" alt="Setting">
        <span>Setting</span>
    </a>
</div>
