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
          <p>Каждое воскресенье в 11-00 мы ждем тебя на богослужении -актуальная проповедь, молитва и прославление наполняют жизнь верой,надеждой и любовью к Богу.</p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div> 
  
  
  
  <div class="container-fluid map-box">
    <!-- <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A523c207610ce15f2a73a548cd1c49860617b610517f25429d90aecb4355ae855&amp;source=constructor" width="100%" height="450" frameborder="0" scroll = false ></iframe> -->
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A523c207610ce15f2a73a548cd1c49860617b610517f25429d90aecb4355ae855&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
    <div class="map-title">
      <h4>МЕСТО СОБРАНИЙ</h4>
      <p>г. Долгопрудный, ул. 1-ая Школьная, 3</p>
      <h5>Подробности</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nihil laudantium, optio blanditiis reiciendis eum eligendi at deleniti ipsam. Nemo dolor expedita, deserunt dolorem illum laudantium sint quas quaerat voluptatem?</p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nihil laudantium, optio blanditiis reiciendis eum eligendi at deleniti ipsam. Nemo dolor expedita, deserunt dolorem illum laudantium sint quas quaerat voluptatem?</p>
          </div>
          <hr>
        </div>
        <div class="col-md-2"></div>
  
      </div>
    </div>
  </div> 
  
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