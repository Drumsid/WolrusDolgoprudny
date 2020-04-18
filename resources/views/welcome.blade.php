@extends('layouts.frontend.app')

@section('title', 'Главная страница')

@push('css')
    <link href="{{ asset('assets/frontend/css/home/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/pages/main.css') }}" rel="stylesheet">
    <style>
        .favoritePost {
            color: red;
        }
    </style>  
@endpush

@section('content')

{{-- новости и слайдер пока убираем до лучших времен --}}
<!-- category slider -->
{{-- <div class="main-slider">
    
    <div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
        data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
        data-swiper-breakpoints="true" data-swiper-loop="true" >
        <div class="swiper-wrapper">

            @foreach ($categories as $category)
                <div class="swiper-slide">
                <a class="slider-category" href="{{ route('category.posts', $category->slug) }}">
                    <div class="blog-image"><img src="{{ Storage::disk('public')->url('category/slider/' . $category->image) }}" alt="Blog Image"></div>

                        <div class="category">
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                <h3><b>{{ $category->name }}</b></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                </div><!-- swiper-slide -->  
            @endforeach


        </div><!-- swiper-wrapper -->

    </div><!-- swiper-container -->

</div> --}}
<!-- category slider -->
<!-- welcome block -->
<div class="container-fluid">
    <div class="container mb-3">
      @if (session('successMsg'))
        <div class="alert alert-success mt-5" role="alert">
          {{ session('successMsg') }}  
        </div> 
      @endif
      @if (session('successErr'))
        <div class="alert alert-danger mt-5" role="alert">
          {{ session('successErr') }}  
        </div> 
      @endif
  @foreach ($errors->all() as $error)
      <div class="alert alert-danger mt-5" role="alert">
          {{ $error }}  
      </div> 
  @endforeach
      <div class="row">

        <div class="col text-center welcome-block">
          <h1 class="mt-5">Мы рады каждому человеку, который к нам приходит. Добро пожаловать в церковь «Слово жизни»* в Долгопрудном!</h1>
          <h2 class="mt-5">Важно, чтобы каждый человек нашел свой духовный дом. И мы будем рады, если таким домом для Вас станет наша церковь*</h2>
        </div>
      </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card bible-block">
            <div class="card-body">
              <h4 class="card-title pb-1"><i>Стих из библии</i></h4>
            <p class="card-text">{{ $bibleQuote->description }}</p>
            
              <span class="pt-2 pr-3 float-right">{{ $bibleQuote->address }}</span>
            </div>
          </div>
        </div>
        
      </div>
    </div>
</div>

<!-- welcome block -->
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card yellow-border">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Онлайн трансляция</h5>
              <a href="{{ route('online') }}" class="btn btn-custom">Смотреть</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/12.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Пасторы Церкви</h5>
              <p class="card-text mb-3">Андрей Мицкевич - пастор, проповедник, учитель Библии. Получил образование в Российской Христианской Гуманитарной Академии.</p>
              <a href="{{ route('pages.pastor') }}" class="btn btn-custom">Подробно</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/14.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Молитва, забота и помощь</h5>
              <p class="card-text mb-3">Если у Вас есть молитвенная просьба, вопрос, или Вы хотите поделиться с другими людьми свидетельством или благодарением, напишите нам, и мы с радостью ответим на Ваш вопрос, а молитвенная группа и другие члены церкви* поддержат Вас в молитвах.</p>
              {{-- <a href="#" class="btn btn-custom">Go somewhere</a> --}}
            <p class="phone-news">Записаться на консультацию можно по телефону <strong><a href="tel:+79256518880">8 (925) 651-88-80</a></strong> или нажать на кнопку ниже.</p>
            <div>
              {{-- <button type="button" class="btn btn-custom mt-2" data-toggle="modal" data-target="#exampleModal">Нужна молитва?</button> --}}
            </div>  
          </div>
          </div>
          {{-- <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/17.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Служение старшее поколение.</h5>
              <p class="card-text mb-3">Жизнь в служении «Старшее поколение» с пенсионным возрастом только начинается! Если Вы молоды сердцем, добро пожаловать в служение «Старшее поколение»! Здесь Вы будете вовлечены в жизнь церкви, окружены заботой и молитвенной поддержкой. Мы рады Вам!</p>
             
            </div>
          </div> --}}
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/9.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Служение сестер</h5>
              <p class="card-text mb-3">Сестры собираются вместе, обсуждают писание, жизенные ситуации, деляться опытом.</p>
              {{-- <a href="#" class="btn btn-custom">Go somewhere</a> --}}
            </div>
          </div>
        </div>

        <div class="col-md-4">
            <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/19.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Церковь "Слово Жизни"* Долгопрудный</h5>
              <p class="card-text mb-3">Мы-христианская церковь,входящая в состав Российского Объединенного Союза Христиан Веры Евангельской (пятидесятников).</p>
              <a href="{{ route('pages.church') }}" class="btn btn-custom">Подробнее</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/15.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Консультация</h5>
              <p class="card-text mb-3">Нам всем необходима поддержка в трудной жизненной ситуации, которую мы можем получить через душепопечение. Согласно книги Исход 18:13–23 душепопечение — это нахождение суждения Бога по всякому делу в народе Божьем.
                Наши служители помогут вам найти богоугодное решение в трудных обстоятельствах.</p>
                <p class="phone-news">Записаться на консультацию можно по телефону <strong><a href="tel:+79256518880">8 (925) 651-88-80</a></strong></p>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/4.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Старший пастор</h5>
              <p class="card-text mb-3">Маттс-Ола Исхоел − президент и старший пастор церкви «Слово жизни»* в Москве, первый заместитель председателя Российского Объединенного Союза Христиан Веры Евангельской С.В. Ряховского по межконфессиональным вопросам, председатель Духовного Совета РОСХВЕ. </p>
              {{-- <a href="#" class="btn btn-custom">Go somewhere</a> --}}
            </div>
          </div>
        </div>

        <div class="col-md-4">
            <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/13.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Воскресное Богослужение</h5>
              <p class="card-text mb-3">Каждое воскресенье в 11-00 мы ждем тебя на богослужении -актуальная проповедь, молитва и прославление наполняют жизнь верой,надеждой и любовью к Богу.</p>
              <a href="{{ route('pages.contacts') }}" class="btn btn-custom">Подробнее</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/16.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">«Никто не должен лечь спать голодным»</h5>
              <p class="card-text mb-3">
                Мы призваны заботиться о наших братьях и сестрах, которые находятся в трудной ситуации, и помогать им продуктами, одеждой и лекарствами.</p>
<p>Вы можете принять участие в этом служении, продуктами или добровольным пожертвованием.</p>
<p class="mt-3 mb-11">Предпочтительные продукты</p>
<ul class="mb-3">
  <li>крупы (греча, рис, манка, перловка), макаронные изделия</li>
  <li>подсолнечное масло, консервы (рыбные, мясные, овощные)</li>
  <li>сахар, чай, сладости (конфеты, печенье, зефир)</li>
</ul>
<p class="mb-3">Внимание! Все продукты должны быть в фирменной заводской упаковке и с длительным сроком хранения.</p>
<p class="mt-1">Нежелательные продукты</p>
<ul class="mb-3">
  <li>продукты с нарушенной (вскрытой) упаковкой, хлеб</li>
  <li>скоропортящиеся продукты</li>
</ul>
<p class="phone-news">Если вам нужно помощь или вы хотите помочь кому то свяжитесь по телефону <strong><a href="tel:+79256518880">8 (925) 651-88-80</a></strong></p>
            </div>
          </div>
          {{-- <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/7.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Служение прославления</h5>
              <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div> --}}
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/8.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Братская</h5>
              <p class="card-text mb-3">Братья собираются вместе. Преломляют хлеб, обсуждают вопросы,  ценности. Вместе молятся за нужды.</p>
              {{-- <a href="#" class="btn btn-custom">Go somewhere</a> --}}
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<!-- news block -->
{{-- <section class="blog-area section">
    <div class="container">
            <h2 class="header-border">Последние новости</h2>
        <br>
        @if (session('successMsg'))
            <div class="alert alert-success m-t-15" role="alert">
            {{ session('successMsg') }}  
            </div> 
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger m-t-15" role="alert">
                    {{ $error }}  
                </div> 
            @endforeach
        @endif
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{ Storage::disk('public')->url('post/' . $post->image) }}" alt="Blog Image"></div>

                        <a class="avatar" href="{{ route('author.profile', $post->user->username ) }}"><img src="{{ Storage::disk('public')->url('profile/' . $post->user->image) }}" alt="Profile Image"></a>

                            <div class="blog-info">

                            <h4 class="title"><a href="{{ route('post.details', $post->slug) }}"><b>{{ $post->title }}</b></a></h4>

                                <ul class="post-footer">
                                    <li>
                                        
                                        @guest
                                    <a href="{{ route('post.details', $post->slug) }}"><i class="ion-heart"></i>
                                            {{ $post->favorite_to_users->count() }}
                                            </a>
                                        @else
                                        <a class="{{ !Auth::user()->favorite_posts->where('pivot.post_id', $post->id)->count() == 0 ? 'favoritePost' : 'no' }}" href="{{ route('post.details', $post->slug) }}"><i class="ion-heart"></i>
                                                {{ $post->favorite_to_users->count() }}
                                            </a>
                                        <form method="POST" action="{{ route('post.favorite', $post) }}" id="favorite-form-{{ $post->id }}" style="display: none;">
                                            @csrf
                                        </form>
                                        @endguest
                                    </li>
                                    <li><a href="{{ route('post.details', $post->slug) }}"><i class="ion-chatbubble"></i>{{ $post->comments->count() }}</a></li>
                                <li><a href="{{ route('post.details', $post->slug) }}"><i class="ion-eye"></i>{{ $post->view_count }}</a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->    
            @endforeach

        </div><!-- row -->
        {{ $posts->links() }}
       

    </div><!-- container -->
</section> --}}
<!-- news block -->
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