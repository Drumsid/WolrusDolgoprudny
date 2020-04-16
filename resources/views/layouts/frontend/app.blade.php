<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet"> --}}


	<!-- Stylesheets -->

	<link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">

	<link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">

	<link href="{{ asset('assets/frontend/css/ionicons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/css/home/main.css') }}" rel="stylesheet">
  <style>
    .form-star {
      color: #EAA33E;
      font-size: 20px;
    }
  </style>

    
    @stack('css')
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
  (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
  m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
  (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

  ym(61993216, "init", {
       clickmap:true,
       trackLinks:true,
       accurateTrackBounce:true,
       webvisor:true
  });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/61993216" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
@include('layouts.frontend.partial.header')

@yield('content')

@include('layouts.frontend.partial.footer')

<script src="{{ asset('assets/frontend/js/jquery-3.1.1.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/tether.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/bootstrap.js') }}"></script>

<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script>
    // (function($) {
        function backToTop() {

          let button = $('.back-to-top');

          $(window).on('scroll', () => {
            if ($(this).scrollTop() >= 50) {
              button.fadeIn();
            } else {
              button.fadeOut();
            }
          });

          button.on('click', (e) => {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 1000);
          })
        }

        backToTop();
    // })(jQuery);
  </script>
@stack('js')


</body>
</html>
