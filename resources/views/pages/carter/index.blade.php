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

    <form id="carterForm" class="carter-form">
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
            <label for="phone">Nomor Handphone</label>
            <input type="number" class="form-control" id="phone" placeholder="Masukkan nomor Whatsapp">
        </div>

        <div class="card">
            <div class="card-body bg-warning">
               <p><strong> Keterangan</strong></p>
                Pesanan angkot ini sudah termasuk biaya jasa pengemudi, sewa kendaraan, dan bahan bakar. Biaya selain itu, <span><strong>semisal parkir, tol, makan supir, dll. tidak termasuk</strong></span>.
            </div>
        </div>

        <button class="btn-custom-new" type="button" id="submitBtnNew">SETUJU DAN BAYAR</button>
    </form>
</div>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        console.log("Document ready");

        // Adding click event listener
        $('#submitBtnNew').on('click', function() {
            console.log("Button clicked");

            // Get form data
            var name = $('#name').val();
            var pickup = $('#pickup').val();
            var destination = $('#destination').val();
            var date = $('#date').val();
            var carterType = $('#carterType').val();
            var amount = $('#amount').val();
            var phone = $('#phone').val();

            console.log("Form data:", { name, pickup, destination, date, carterType, amount, phone });

            // Construct WhatsApp message
            var message = 'Nama: ' + name + 
                          '\nTitik Jemput: ' + pickup + 
                          '\nTitik Tujuan: ' + destination + 
                          '\nTanggal Carter: ' + date + 
                          '\nJenis Carter: ' + carterType + 
                          '\nJumlah Carter: ' + amount + 
                          '\nNomor Handphone: ' + phone;

            // WhatsApp URL
            var whatsappURL = 'https://wa.me/6285173231604?text=' + encodeURIComponent(message);

            console.log("WhatsApp URL:", whatsappURL);

            // Open WhatsApp
            window.open(whatsappURL, '_blank');
        });
    });
</script>
@endsection
