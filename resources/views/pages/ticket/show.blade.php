@extends('layouts.ticket')

@section('content')
<style>
    /* Style for screens larger than 768px wide (e.g., laptops) */
    @media (min-width: 768px) {
        .responsive-qr {
            width: 20%;
        }
    }

    /* Style for screens smaller than 768px wide (e.g., mobile devices) */
    @media (max-width: 767px) {
        .responsive-qr {
            width: 50%;
        }
    }
</style>
<div class="container">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="aktif" role="tabpanel" aria-labelledby="aktif-tab">
            <div class="ticket-card">
                <p><strong>Rute Terpilih</strong></p>
                <p><i class="fas fa-map-marker-alt"></i> PINTU NOL Kampus UNHAS</p>
                <p><i class="fas fa-map-marker-alt"></i> BTN Minasa Upa, Syech Yusuf, Sultan Alauddin, Andi Tonro, Kumala, Ratulangi</p>
                <p> <i class="fas fa-clock"></i>  15:00 - 16:30</p>
                <div class="row ml-1">
                  <div class="col-md-6">
                    <p>  CASH (Rp30.000)</p>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('asset/img/qr-code.jpg') }}" style=" float: right;"  class="responsive-qr" alt="">
                      </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
            <div class="ticket-card">
                <p><strong>Rute Riwayat</strong></p>
                <p><i class="fas fa-map-marker-alt"></i> PINTU NOL Kampus UNHAS</p>
                <p><i class="fas fa-map-marker-alt"></i> BTN Minasa Upa, Syech Yusuf, Sultan Alauddin, Andi Tonro, Kumala, Ratulangi</p>
            </div>
        </div>
        <div class="detail-card">
            <p><strong>Detail Perjalanan</strong></p>
            <div class="detail-row">
                <div class="detail-icons">
                    <img src="{{ asset('asset/img/icon/otogo-icon.svg') }}" alt="Icon">
                    <p>Naik OTO Kode <strong>A1</strong> di Pintu Nol Kampus Universitas Hasanuddin</p>
                </div>
                <div class="text-right">
                    <p>Estimasi: 25 Menit</p>
                </div>
            </div>
            <div class="dotted-line"></div>
            <div class="detail-row">
                <div class="detail-icons">
                    <img src="{{ asset('asset/img/icon/otogo-icon.svg') }}" alt="Icon">
                    <p>Lanjut OTO Kode <strong>F1</strong> di Halte Mall Panakkukang</p>
                </div>
                <div class="text-right">
                    <p>Estimasi: 25 Menit</p>
                </div>
            </div>
            <div class="dotted-line"></div>
            <div class="detail-row">
                <div class="detail-icons">
                    <img src="{{ asset('asset/img/icon/otogo-icon.svg') }}" alt="Icon">
                    <p>Lanjut OTO Kode <strong>B1</strong> di Halte Kampus Fakultas Teknik Universitas Hasanuddin</p>
                </div>
                <div class="text-right">
                    <p>Estimasi: 25 Menit</p>
                </div>
            </div>
        </div>
    </div>
    <button class="btn-custom bg-danger">EMERGENCY</button>
</div>
@endsection