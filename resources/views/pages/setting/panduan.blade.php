@extends('layouts.setting')

@section('content')
<div class="container">
    <div class="guide-header">
        <h2>Panduan</h2>
    </div>

    <div class="guide-list">
        @for ($i = 1; $i <= 10; $i++)
            <div class="guide-item">
                <button class="guide-item-header" data-toggle="collapse" data-target="#guide{{ $i }}" aria-expanded="false" aria-controls="guide{{ $i }}">
                    Panduan {{ $i }}
                </button>
                <div id="guide{{ $i }}" class="collapse guide-item-body">
                    <p>Ini adalah isi dari panduan {{ $i }}. Anda dapat mengisi panduan ini dengan informasi yang relevan.</p>
                </div>
            </div>
        @endfor
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
