@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-custom time-card">
        <div>
            <i class="fas fa-clock"></i> 15:00
        </div>
        <div>
            <strong>Waktu Keberangkatan</strong>
        </div>
    </div>

    <div class="route-card">
        <p><strong>Rute Rekomendasi</strong></p>
        <p><i class="fas fa-map-marker-alt"></i> PINTU NOL Kampus UNHAS</p>
        <p><i class="fas fa-map-marker-alt"></i> BTN Minasa Upa, Syech Yusuf, Sultan Alauddin, Andi Tonro, Kumala, Ratulangi</p>
    </div>

    <div class="detail-card">
        <p><strong>Detail Perjalanan</strong></p>
        <div class="detail-row">
            <div class="detail-icons">
                <img src="https://via.placeholder.com/30" alt="Icon">
                <p>Naik OTO Kode <strong>A1</strong> di Pintu Nol Kampus Universitas Hasanuddin</p>
            </div>
            <div class="text-right">
                <p>Estimasi: 25 Menit</p>
            </div>
        </div>
        <div class="dotted-line"></div>
        <div class="detail-row">
            <div class="detail-icons">
                <img src="https://via.placeholder.com/30" alt="Icon">
                <p>Lanjut OTO Kode <strong>F1</strong> di Halte Mall Panakkukang</p>
            </div>
            <div class="text-right">
                <p>Estimasi: 25 Menit</p>
            </div>
        </div>
        <div class="dotted-line"></div>
        <div class="detail-row">
            <div class="detail-icons">
                <img src="https://via.placeholder.com/30" alt="Icon">
                <p>Lanjut OTO Kode <strong>B1</strong> di Halte Kampus Fakultas Teknik Universitas Hasanuddin</p>
            </div>
            <div class="text-right">
                <p>Estimasi: 25 Menit</p>
            </div>
        </div>
    </div>

    <div class="total-card">
        <div class="total-row">
            <p class="title">TOTAL TARIF</p>
            <p class="estimate">Estimasi: Rp18.000 - 20.000</p>
        </div>
        <div class="dotted-line"></div>
        <div class="total-row">
            <p class="title">Tarif OTO - A1</p>
            <p class="price">Rp10.000</p>
        </div>
        <p>Tarif pembayaran tarif Transport Publik dilakukan di awal.</p>
        <div class="total-row">
            <p class="title">Tarif OTO - F1</p>
            <p class="price">Rp5.000</p>
        </div>
        <p>Tarif pembayaran tarif Transport Publik dilakukan di awal.</p>
        <div class="total-row">
            <p class="title">Tarif OTO - B1</p>
            <p class="price">Rp4.000</p>
        </div>
        <p>Tarif pembayaran tarif Transport Publik dilakukan di awal.</p>
    </div>

    <button class="btn-custom" id="payBtn">SETUJU DAN BAYAR</button>
</div>

<!-- Modal -->
<div class="modal-custom" id="paymentModal">
    <div class="modal-header">
        <h5>Metode Pembayaran</h5>
        <button type="button" class="close" id="closeModal">&times;</button>
    </div>
    <div class="modal-body">
        <button class="btn btn-primary">QRIS</button>
        <button class="btn btn-primary">CASH</button>
        <button class="btn btn-secondary" id="cancelBtn">BATAL</button>
    </div>
</div>

@section('scripts')
<script>
    $(document).ready(function() {
        $('#payBtn').click(function() {
            $('#paymentModal').slideDown();
        });

        $('#closeModal, #cancelBtn').click(function() {
            $('#paymentModal').slideUp();
        });
    });
</script>
@endsection
@endsection
