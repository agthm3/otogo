@extends('layouts.carter')

@section('content')
<div class="container">
    <h5 class="header-title">Carter OTOGO</h5>
    
    <div class="tarif-card">
        <div class="tarif-item">
            <div class="tarif-header" style="background-color: #f39c12;">
                <p>TARIF - 1</p>
                <p>Pulang Pergi (Full Day)</p>
                <img src="{{ asset('asset/img/otogo-mobil.svg') }}" alt="Kendaraan">
            </div>
            <div class="tarif-body">
                <p><i class="fas fa-route"></i> Jarak min 5km - max 80km</p>
                <p><i class="fas fa-clock"></i> Durasi 18 Jam</p>
                <p class="harga">ESTIMASI HARGA</p>
                <p class="harga-value">Rp150-600rb</p>
            </div>
        </div>
        <div class="tarif-item">
            <div class="tarif-header" style="background-color: #27ae60;">
                <p>TARIF - 1</p>
                <p>Pulang Pergi (Full Day)</p>
                <img src="{{ asset('asset/img/otogo-mobil.svg') }}" alt="Kendaraan">
            </div>
            <div class="tarif-body">
                <p><i class="fas fa-route"></i> Jarak min 5km - max 80km</p>
                <p><i class="fas fa-clock"></i> Durasi 18 Jam</p>
                <p class="harga">ESTIMASI HARGA</p>
                <p class="harga-value">Rp150-600rb</p>
            </div>
        </div>
    </div>

    <form class="carter-form">
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap anda">
        </div>
        <div class="form-group">
            <label for="pickup">Titik Jemput</label>
            <input type="text" class="form-control" id="pickup" placeholder="Nama lokasi penjemputan">
        </div>
        <div class="form-group">
            <label for="destination">Titik Tujuan</label>
            <input type="text" class="form-control" id="destination" placeholder="Nama lokasi tujuan">
        </div>
        <div class="form-group">
            <label for="date">Tanggal Carter</label>
            <input type="date" class="form-control" id="date">
        </div>
        <div class="form-group">
            <label for="carterType">Jenis Carter</label>
            <select class="form-control" id="carterType">
                <option value="full_day">Pulang Pergi (Full Day)</option>
                <option value="half_day">Setengah Hari (Half Day)</option>
                <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Jumlah Carter</label>
            <input type="number" class="form-control" id="amount" placeholder="Jumlah Carter">
        </div>
        <div class="form-group">
            <label for="amount">Nomor Handphone</label>
            <input type="number" class="form-control" id="amount" placeholder="Masukkan nomor Whatsapp">
        </div>

        <div class="card">
            <div class="card-body bg-warning">
               <p><strong> Keterangan</strong></p>
                Pesanan angkot ini sudah termasuk biaya jasa pengemudi, sewa kendaraan, dan bahan bakar. Biaya selain itu, <span><strong>semisal parkir, tol, makan supir, dll. tidak termasuk</strong></span>.
            </div>
        </div>

        <button  id="payBtn" class="btn-custom ">Pesan Carter OTOGO</button>
    </form>
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
