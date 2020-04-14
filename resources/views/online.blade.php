@extends('layouts.frontend.app')

@section('title', 'Онлайн трансляция')


@push('css')
<link href="{{ asset('assets/frontend/css/home/styles.css') }}" rel="stylesheet">

<link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/pages/main.css') }}" rel="stylesheet">
<style>
    .flex-video {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .wrapp-online {
        min-height: 550px;
        padding: 80px;
    }

</style>
@endpush

@section('content')
<div class="wrapp-online">
    <h2 class="text-center">Онлайн трансляция.</h2>
    <div class="flex-video mt-5">
        <p>Трансляция еще не началась.</p>
        {{-- <div>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/WWFrVNNyA1g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> --}}
      </div>
      {{-- <p class="text-center">Если видео не воспроизводится, подождите или обновите страницу.</p> --}}
</div>


@endsection

@push('js')
<script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
<script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    function fav()
    {
        Swal.fire({
            position: 'top-end',
            icon: 'info',
            title: 'Oops...',
            text: 'To liked this, you need login first!'
            })
    }
</script>
@endpush