@extends('layouts.setting')

@section('content')
<div class="container">
    <div class="guide-header">
        <h2>Panduan</h2>
    </div>

    <div class="guide-list">
        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#guide1" aria-expanded="false" aria-controls="guide1">
                Panduan 1: Registrasi Akun
            </button>
            <div id="guide1" class="collapse guide-item-body">
                <p>
                    Buka aplikasi OTOGO dan pilih "Daftar". Masukkan informasi yang diperlukan seperti nama, email, dan nomor telepon.
                    Buat kata sandi yang aman. Verifikasi email Anda melalui tautan yang dikirimkan ke kotak masuk email Anda.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#guide2" aria-expanded="false" aria-controls="guide2">
                Panduan 2: Masuk ke Akun
            </button>
            <div id="guide2" class="collapse guide-item-body">
                <p>
                    Buka aplikasi OTOGO dan pilih "Masuk". Masukkan email dan kata sandi yang sudah terdaftar. Klik tombol "Masuk".
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#guide3" aria-expanded="false" aria-controls="guide3">
                Panduan 3: Memesan Angkot
            </button>
            <div id="guide3" class="collapse guide-item-body">
                <p>
                    Di halaman utama, pilih tujuan Anda dengan mengetikkan alamat atau memilih dari daftar saran. Pilih waktu keberangkatan yang diinginkan.
                    Klik "Cari Angkot".
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#guide4" aria-expanded="false" aria-controls="guide4">
                Panduan 4: Memilih Rute
            </button>
            <div id="guide4" class="collapse guide-item-body">
                <p>
                    Aplikasi akan menampilkan beberapa rute yang tersedia. Pilih rute yang sesuai dengan kebutuhan Anda. Klik "Pilih Rute".
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#guide5" aria-expanded="false" aria-controls="guide5">
                Panduan 5: Pembayaran
            </button>
            <div id="guide5" class="collapse guide-item-body">
                <p>
                    Setelah memilih rute, Anda akan diarahkan ke halaman pembayaran. Pilih metode pembayaran (QRIS atau Cash). Ikuti instruksi untuk menyelesaikan pembayaran.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#guide6" aria-expanded="false" aria-controls="guide6">
                Panduan 6: Menggunakan Carter OTOGO
            </button>
            <div id="guide6" class="collapse guide-item-body">
                <p>
                    Di halaman utama, pilih opsi "Carter OTOGO". Isi detail carter seperti titik jemput, titik tujuan, dan tanggal. Pilih jenis carter (full day atau half day).
                    Klik "Pesan Carter".
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#guide7" aria-expanded="false" aria-controls="guide7">
                Panduan 7: Mengubah Profil
            </button>
            <div id="guide7" class="collapse guide-item-body">
                <p>
                    Buka menu profil. Pilih "Ubah Profil". Edit informasi yang ingin diubah. Klik "Simpan Perubahan".
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#guide8" aria-expanded="false" aria-controls="guide8">
                Panduan 8: Panduan & Pertanyaan Umum
            </button>
            <div id="guide8" class="collapse guide-item-body">
                <p>
                    Buka menu profil. Pilih "Panduan" atau "Pertanyaan Umum". Baca informasi yang tersedia untuk membantu Anda menggunakan aplikasi OTOGO.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#guide9" aria-expanded="false" aria-controls="guide9">
                Panduan 9: Lupa Kata Sandi
            </button>
            <div id="guide9" class="collapse guide-item-body">
                <p>
                    Pilih "Lupa Kata Sandi" di halaman masuk, masukkan email Anda, dan ikuti instruksi untuk mereset kata sandi.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#guide10" aria-expanded="false" aria-controls="guide10">
                Panduan 10: Menghubungi Layanan Pelanggan
            </button>
            <div id="guide10" class="collapse guide-item-body">
                <p>
                    Anda dapat menghubungi layanan pelanggan OTOGO melalui email support@otogo.com atau melalui fitur "Bantuan" di dalam aplikasi.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.guide-item-header').click(function() {
            $(this).toggleClass('active');
        });
    });
</script>
@endsection
