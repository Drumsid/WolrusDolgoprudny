@extends('layouts.frontend.app')

@section('title', 'Main')

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
    <div class="container">
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
        <div class="card bible-block">
            <div class="card-body">
              <h4 class="card-title pb-1"><i>Случайное место писания</i></h4>
            <p class="card-text">{{ $bibleQuote->description }}</p>
            
              <span class="pt-2 pr-3 float-right">{{ $bibleQuote->address }}</span>
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
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Встреча</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/10.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Приезд</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/11.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Старый друг</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/9.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Служение сестер</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
            <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Наше видение</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Команда</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/4.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Авторитет</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
            <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/5.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Адвент</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/6.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Иностранцы</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/7.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Наши</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card card-border">
            <img src="{{ asset('assets/frontend/images/8.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body card-body-padding">
              <h5 class="card-title">Братская</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
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