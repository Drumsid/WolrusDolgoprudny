@extends('layouts.frontend.app')

@section('title', 'Contacts')

@push('css')
    <link href="{{ asset('assets/frontend/css/pages/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/pages/main.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid container-contact-foto-bg"><!-- 
    <img src="assets/img/church_bg.png" alt=""> -->
    <div class="container">
      @if (session('successMsg'))
      <div class="alert alert-success" role="alert">
      {{ session('successMsg') }}  
      </div> 
  @endif
  @if (session('successErr'))
  <div class="alert alert-danger mt-5" role="alert">
    {{ session('successErr') }}  
  </div> 
@endif
  @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
          {{ $error }}  
      </div> 
  @endforeach
      <div class="row">
        <div class="col bg-img-text">
          <h2>Расписание и контакты</h2>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-padding pastor-head-text">
          <h2>Расписание Служений</h2>
          <p>Каждое воскресенье в 11-00 на богослужении - актуальная проповедь, молитва и прославление наполняют жизнь верой,надеждой и любовью к Богу.</p>
          <p>Если у Вас есть молитвенная просьба, вопрос, или Вы хотите поделиться с другими людьми свидетельством или благодарением, напишите нам, и мы с радостью ответим на Ваш вопрос, а молитвенная группа и другие члены церкви* поддержат Вас в молитвах.</p>
          <div>
            {{-- <button type="button" class="btn btn-custom mt-2" data-toggle="modal" data-target="#exampleModal">Заполнить форму</button> --}}
          </div>  
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div> 
  
  
  
  {{-- <div class="container-fluid map-box">
    <!-- <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A523c207610ce15f2a73a548cd1c49860617b610517f25429d90aecb4355ae855&amp;source=constructor" width="100%" height="450" frameborder="0" scroll = false ></iframe> -->
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A523c207610ce15f2a73a548cd1c49860617b610517f25429d90aecb4355ae855&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
    <div class="map-title">
      <h4>МЕСТО СОБРАНИЙ</h4>
      <p>г. Долгопрудный, ул. 1-ая Школьная, 3</p>
      <h5>Подробности</h5>
      <p>Остановка Пацаева, ориентир магазин "Пятерочка", далее вдоль забора в частном секторе. Подробно можно узнать по телефону <a href="tel:+79256518880">8 (925) 651-88-80</a></p>
    </div>
  </div>
  
  <div class="container-fluid mobile-map-title">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-padding">
          <hr>
          <div class="mobile-text-box">
            <h4>МЕСТО СОБРАНИЙ</h4>
            <p>г. Долгопрудный, ул. 1-ая Школьная, 3</p>
            <h5>Подробности</h5>
            <p>Остановка Пацаева, ориентир магазин "Пятерочка", далее вдоль забора в частном секторе. Подробно можно узнать по телефону <a href="tel:+79256518880">8 (925) 651-88-80</a></p>
          </div>
          <hr>
        </div>
        <div class="col-md-2"></div>
  
      </div>
    </div>
  </div>  --}}
  
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-padding text-center contact-text">
          <p><a href="tel:+79256518880">8 (925) 651-88-80</a></p>
          <p><a href="mailto:woldolgoprudny@mail.ru">woldolgoprudny@mail.ru</a></p>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-vk"></i></a>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div> 
   
@endsection

@push('js')
    <script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>

@endpush