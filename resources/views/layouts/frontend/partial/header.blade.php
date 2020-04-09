<header>
    <div class="container-fluid position-relative no-side-padding my-flex-row">

        <a href="{{ route('mainhome') }}" class="logo"><img src="{{ asset('assets/frontend/images/min-logo-top.png') }}" alt="logo_cherch_dolgoprudny"></a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
        <li><a href="{{ route('mainhome') }}">Главная</a></li>
        {{-- <li><a href="{{ route('post.index') }}">Все новости</a></li> --}}
        {{-- <li><a href="{{ route('category.index') }}">Служения</a></li> --}}
        <li><a href="{{ route('pages.church') }}">О церкви</a></li>
        <li><a href="{{ route('pages.pastor') }}">О пасторе</a></li>
        <li><a href="{{ route('pages.contacts') }}">Расписание и контакты</a></li>
        {{-- @guest
            <li><a href="{{ route('login') }}">Login</a></li>
        @else --}}
        @if (Auth::user()->role->id == 1)
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        @endif
        @if (Auth::user()->role->id == 2)
        <li><a href="{{ route('author.dashboard') }}">Dashboard</a></li>
        @endif
        @endguest

        
        </ul><!-- main-menu -->

        {{-- <div class="src-area">
        <form method="GET" action="{{ route('search') }}">
                <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                <input class="src-input" type="text" placeholder="Type of search" name="query">
            </form>
        </div> --}}

    </div><!-- conatiner -->
</header>