@extends('layouts.frontend.app')

@section('title', 'About Pastors')

@push('css')
    <link href="{{ asset('assets/frontend/css/pages/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/pages/main.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid container-pastor-foto-bg"><!-- 
    <img src="assets/img/church_bg.png" alt=""> -->
    <div class="container">
      <div class="row">
        <div class="col bg-img-text">
          <h2>Наш пастор</h2>
        </div>
      </div>
    </div>
  </div>
   
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-padding pastor-head-text">
          <h2>Андрей и Анна Мицкевич </h2>
          <p>
            Мы служим вместе , чтим Божье присутствие и верим в спасение каждого человека. Родились и выросли в Томске, около 20 лет назад посвятили свою жизнь Богу и с тех пор большую часть своего времени посвящаем церкви и служению людям, у нас счастливый и крепкий брак, и взрослая дочь.
          </p>
          <p>Получив откровения от Бога переехали в Москву. В 2014 г приняли призыв быть пасторами в церкви в г. Долгопрудном и стали продолжать вести  общину, которая была начата в 2010 году.</p>
          <p>И в настоящее время являемся пасторами церкви "Слово жизни"* в Долгопрудном и строим церковь на сбалансированном библейском основании. </p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div> 
  
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-padding pastor-text-box">
          <p><span>Андрей Мицкевич </span> - пастор, проповедник, учитель Библии. Получил образование в Российской Христианской Гуманитарной Академии, по специальности религовед ( кафедра философии,богословия и религоведения), также получил специальное образование и квалификацию  служителя религиозного объединения в Евроазиатской богословский семинарии. </p>
          <p>Вместе с супругой - консультанты по семейным вопросам.</p>
        </div>
        <div class="col-md-2">
          <div class="img-round-box text-center text-padding">
            <img src="{{ asset('assets/frontend/images/andrey-m4.jpg') }}" alt="" class="img-fluid pastor-img">
            {{-- <p class="under-img-text">@AllforJesus</p>  --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-padding pastor-text-box">
          <p><span>Анна Мицкевич </span> - прекрасная жена и мать, профессиональный психолог. Сюда надо еще текст строчек четыре или пять.</p>
        </div>
        <div class="col-md-2">
          <div class="img-round-box text-center text-padding">
            <img src="{{ asset('assets/frontend/images/am.jpg') }}" alt="" class="img-fluid pastor-img">
            {{-- <p class="under-img-text">@AllforJesus</p>  --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
    <script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>

@endpush