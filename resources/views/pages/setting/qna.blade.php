@extends('layouts.setting')

@section('content')
<div class="container">
    <div class="guide-header">
        <h2>Pertanyaan Umum</h2>
    </div>

    <div class="guide-list">
        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#qna1" aria-expanded="false" aria-controls="qna1">
                Apa itu OTOGO?
            </button>
            <div id="qna1" class="collapse guide-item-body">
                <p>
                    OTOGO adalah aplikasi transportasi yang memudahkan Anda untuk memesan angkot dan carter secara online. Kami menyediakan layanan yang aman, nyaman, dan andal untuk mobilitas Anda sehari-hari.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#qna2" aria-expanded="false" aria-controls="qna2">
                Bagaimana cara mendaftar di OTOGO?
            </button>
            <div id="qna2" class="collapse guide-item-body">
                <p>
                    Anda bisa mendaftar di OTOGO dengan mengunduh aplikasi kami, kemudian pilih "Daftar", masukkan informasi yang diperlukan, dan verifikasi email Anda.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#qna3" aria-expanded="false" aria-controls="qna3">
                Bagaimana cara memesan angkot melalui OTOGO?
            </button>
            <div id="qna3" class="collapse guide-item-body">
                <p>
                    Di halaman utama aplikasi, pilih tujuan Anda dan waktu keberangkatan. Aplikasi akan menampilkan rute yang tersedia dan Anda dapat memilih rute yang sesuai. Kemudian, lakukan pembayaran sesuai instruksi.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#qna4" aria-expanded="false" aria-controls="qna4">
                Apakah saya bisa membayar dengan uang tunai?
            </button>
            <div id="qna4" class="collapse guide-item-body">
                <p>
                    Ya, Anda bisa membayar dengan uang tunai atau menggunakan metode pembayaran lain yang tersedia seperti QRIS.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#qna5" aria-expanded="false" aria-controls="qna5">
                Bagaimana cara mengubah informasi profil saya?
            </button>
            <div id="qna5" class="collapse guide-item-body">
                <p>
                    Buka menu profil di aplikasi, pilih "Ubah Profil", edit informasi yang ingin Anda ubah, dan klik "Simpan Perubahan".
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#qna6" aria-expanded="false" aria-controls="qna6">
                Bagaimana jika saya lupa kata sandi?
            </button>
            <div id="qna6" class="collapse guide-item-body">
                <p>
                    Pilih "Lupa Kata Sandi" di halaman masuk, masukkan email Anda, dan ikuti instruksi untuk mereset kata sandi.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#qna7" aria-expanded="false" aria-controls="qna7">
                Apakah OTOGO tersedia di seluruh Indonesia?
            </button>
            <div id="qna7" class="collapse guide-item-body">
                <p>
                    Saat ini, OTOGO tersedia di beberapa kota besar di Indonesia. Kami terus berupaya untuk memperluas jangkauan layanan kami ke lebih banyak kota di masa mendatang.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#qna8" aria-expanded="false" aria-controls="qna8">
                Bagaimana cara menggunakan fitur carter di OTOGO?
            </button>
            <div id="qna8" class="collapse guide-item-body">
                <p>
                    Di halaman utama, pilih opsi "Carter OTOGO", isi detail carter seperti titik jemput, titik tujuan, dan tanggal. Pilih jenis carter (full day atau half day), dan klik "Pesan Carter".
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#qna9" aria-expanded="false" aria-controls="qna9">
                Bagaimana cara menghubungi layanan pelanggan OTOGO?
            </button>
            <div id="qna9" class="collapse guide-item-body">
                <p>
                    Anda dapat menghubungi layanan pelanggan OTOGO melalui email support@otogo.com atau melalui fitur "Bantuan" di dalam aplikasi.
                </p>
            </div>
        </div>

        <div class="guide-item">
            <button class="guide-item-header" data-toggle="collapse" data-target="#qna10" aria-expanded="false" aria-controls="qna10">
                Bagaimana saya bisa memberikan feedback tentang layanan OTOGO?
            </button>
            <div id="qna10" class="collapse guide-item-body">
                <p>
                    Anda dapat memberikan feedback melalui fitur "Feedback" di dalam aplikasi atau mengirimkan email ke feedback@otogo.com.
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
