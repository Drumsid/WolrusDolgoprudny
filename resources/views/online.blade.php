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
.youtube-img{
    width: 50px;
}
.thumb-wrap {
  position: relative;
  padding-bottom: 56.25%; /* задаёт высоту контейнера для 16:9 (если 4:3 — поставьте 75%) */
  height: 0;
  overflow: hidden;
}
.thumb-wrap iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 50%;
  height: 50%;
  border-width: 0;
  outline-width: 0;
  margin: auto;
}
</style>
@endpush

@section('content')
<div class="wrapp-online">
    <h2 class="text-center">Онлайн трансляция.</h2>
    <h3 class="text-center">Трансляция начнется ровно в 11:00 по Москве!</h3>
    <h4 class="text-center">Если в 11:02 трансляция не началась, обновите страницу!</h4>
    <h4 class="text-center">И нажмите 
        <img class="youtube-img" src="{{ asset('assets/frontend/images/youtubeRed.png') }}" alt=""> или
        <img class="youtube-img" src="{{ asset('assets/frontend/images/youtubeBlack.png') }}" alt="">
    </h4>
    <div class="flex-video mt-5 {{-- thumb-wrap --}}">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/7ZHntCxsYmg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <p class="mt-3 text-center">Для более удобного просмотра с телефона, после начала видео поверните телефон горизонтально.</p>
    {{-- <p class="text-center">Если видео не воспроизводится, подождите или обновите страницу.</p> --}}
    <p class="text-center">Трансляция проходит по воскресеньям в 11:00 по Московскому времени.</p>
    {{-- <p class="text-center">Трансляция еще не началась.</p> --}}
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