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
        <p><i class="fas fa-map-marker-alt"></i> 
            @foreach ($route->streets as $street)
                {{ $street->name }}{{ $loop->last ? '' : ',' }}
            @endforeach
        </p>
    </div>

    <div class="detail-card">
        <p><strong>Detail Perjalanan</strong></p>
        <div class="detail-row">
            <div class="detail-icons">
                <img src="{{ asset('asset/img/icon/otogo-icon.svg') }}" alt="Icon">
                <p>Naik OTO Kode <strong>{{ $route->route_code }}</strong> di Pintu Nol Kampus Universitas Hasanuddin</p>
            </div>
            <div class="text-right">
                <p>Estimasi: {{ $estimationTime }}</p>
            </div>
        </div>
    </div>

    <div class="total-card">
        <div class="total-row">
            <p class="title">TOTAL TARIF</p>
            <p class="estimate">Estimasi: Rp{{ number_format($estimationPrice, 0, ',', '.') }}</p>
        </div>
        <div class="dotted-line"></div>
        <div class="total-row">
            <p class="title">Tarif OTO - {{ $route->route_code }}</p>
            <p class="price">Rp{{ number_format($estimationPrice, 0, ',', '.') }}</p>
        </div>
        <p>Tarif pembayaran tarif Transport Publik dilakukan di awal.</p>
    </div>

    <button class="btn-custom" id="payBtn">SETUJU DAN BAYAR</button>

    <!-- Modal -->
    <div class="modal-custom" id="paymentModal">
        <div class="modal-header">
            <h5>Metode Pembayaran</h5>
            <button type="button" class="close" id="closeModal">&times;</button>
        </div>
        <div class="modal-body">
            <a href="{{ route('payment.success') }}" class="btn btn-primary">QRIS</a>
            <a href="{{ route('payment.success') }}" class="btn btn-primary">CASH</a>
            <button class="btn btn-secondary" id="cancelBtn">BATAL</button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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