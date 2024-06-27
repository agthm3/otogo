@extends('layouts.ticket')

@section('content')
    
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="aktif-tab" data-toggle="tab" href="#aktif" role="tab" aria-controls="aktif" aria-selected="true">Aktif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="riwayat-tab" data-toggle="tab" href="#riwayat" role="tab" aria-controls="riwayat" aria-selected="false">Riwayat</a>
            </li>
        </ul>
      <a href="{{ route('ticket.show') }}" class="text-decoration-none" style="color: black">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="aktif" role="tabpanel" aria-labelledby="aktif-tab">
                <div class="ticket-card">
                    <p><strong>Rute Aktif</strong></p>
                    <p><i class="fas fa-map-marker-alt"></i> PINTU NOL Kampus UNHAS</p>
                    <p><i class="fas fa-map-marker-alt"></i> BTN Minasa Upa, Syech Yusuf, Sultan Alauddin, Andi Tonro, Kumala, Ratulangi</p>
                </div>
            </div>
            <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
                <div class="ticket-card">
                    <p><strong>Rute Riwayat</strong></p>
                    <p><i class="fas fa-map-marker-alt"></i> PINTU NOL Kampus UNHAS</p>
                    <p><i class="fas fa-map-marker-alt"></i> BTN Minasa Upa, Syech Yusuf, Sultan Alauddin, Andi Tonro, Kumala, Ratulangi</p>
                </div>
            </div>
        </div>
      </a>
        <button class="btn-custom">BELI TIKET</button>
    </div>
@endsection