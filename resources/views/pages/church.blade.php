@extends('layouts.frontend.app')

@section('title', 'About Church')

@push('css')
    <link href="{{ asset('assets/frontend/css/pages/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/pages/main.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid container-foto-bg">
    <!-- 
  <img src="assets/img/church_bg.png" alt=""> -->
    <div class="container">
      <div class="row">
        <div class="col bg-img-text">
          <h2>Наша Церковь</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-padding church-head-text">
          <h2>Церковь "Слово жизни"** - объединяет сотни церквей по всей России. <span>Церковь является основой
              христианской жизни.</span></h2>
          <p>В церкви нас благословляет Бог, и там мы можем быть благословением для других. У различных церквей разные
            задачи в зависимости от того, какие истины они представляют и к чему их призвал Господь. Но в то же время
            все церкви и всех христиан объединяет нечто общее- Мы должны возвещать Евангелие, верить в Бога, жить жизнью
            Духа, заниматься миссионерством и быть готовыми пойти до края земли, а также вместе созидать Тело Христа в
            любви и единстве с остальными верующими. </p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div>

  <div class="container-fluid container-yellow">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">
          <h2>ВИДЕНИЕ ЦЕРКВИ "СЛОВО ЖИЗНИ"</h2>
          <p>Снаряди Мой народ Моим Словом веры</p>
          <p>Покажи ему его духовное оружие</p>
          <p>Научи его пользоваться им</p>
          <p>Вышли его в победоносную битву для Господа</p>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-padding matsola-text-box">
          <p>Церковь "Слово Жизни"** Долгопрудный -часть большой семьи "Слово жизни", епископом которой является Маттс
            Ола Исхоэль - первый заместитель начальствующего епископа РОСХВЕ*** Сергея Васильевича Ряховского и старший
            пастор церкви "Слово Жизни" Москва.</p>
        </div>
        <div class="col-md-2">
          <div class="img-round-box text-center text-padding">
          <img src="{{ asset('assets/frontend/images/mats-ola2.png') }}" alt="" class="img-fluid matsola-img">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 urist-text">
          <p>** Местная религиозная организация церковь христиан веры евангельской (пятидесятников) "Слово Жизни"
            г.Долгопрудный</p>
          <p>*** Российский объединенный союз христиан веры евангельской (пятидесятников)</p>
        </div>
        <div class="col-md-2">
          <div class="img-round-box">
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