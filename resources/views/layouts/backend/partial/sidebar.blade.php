<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ Storage::disk('public')->url('profile/' . Auth::user()->image ) }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
        <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Профиль</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <i class="material-icons">input</i>Выйти
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
                   </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">Главное меню</li>
            @if (Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Админ панель</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/author*') ? 'active' : '' }}">
                    <a href="{{ route('admin.author.index') }}">
                        <i class="material-icons">person</i>
                        <span>Все авторы</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}">
                        <i class="material-icons">label</i>
                        <span>Тэги</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Служения</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/post*') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>Посты</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/pending/post') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.pending') }}">
                        <i class="material-icons">create</i>
                        <span>Посты ожидают публикации</span>
                        <span class="badge bg-green {{ $postApprove->count() == 0 ? 'my-d-none' : '' }}">{{ $postApprove->count() }}</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/favorite') ? 'active' : '' }}">
                    <a href="{{ route('admin.favorite.index') }}">
                        <i class="material-icons">favorite</i>
                        <span>Любимые посты (лайки)</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/comments') ? 'active' : '' }}">
                    <a href="{{ route('admin.comments.index') }}">
                        <i class="material-icons">comment</i>
                        <span>Все комментарии</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/bible') ? 'active' : '' }}">
                    <a href="{{ route('admin.bible.index') }}">
                        <i class="material-icons">book</i>
                        <span>Цитаты Библии</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}">
                    <a href="{{ route('admin.subscriber.index') }}">
                        <i class="material-icons">subscriptions</i>
                        <span>Все подписчики <br> (не используем пока)</span>
                    </a>
                </li>

                <li class="header">Системные настройки</li>
                <li class="{{ Request::is('admin/settings') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings') }}">
                        <i class="material-icons">settings</i>
                        <span>Настройки пользователя</span>
                    </a>
                </li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <i class="material-icons">input</i>
                     <span>Выйти</span>
                 </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
            @endif
            @if (Request::is('author*'))
                <li class="{{ Request::is('author/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('author.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Админ панель</span>
                    </a>
                </li>
                <li class="{{ Request::is('author/favorite') ? 'active' : '' }}">
                    <a href="{{ route('author.favorite.index') }}">
                        <i class="material-icons">favorite</i>
                        <span>Любимые посты (лайки)</span>
                    </a>
                </li>
                <li class="{{ Request::is('author/post*') ? 'active' : '' }}">
                    <a href="{{ route('author.post.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>Посты</span>
                    </a>
                </li>
                <li class="{{ Request::is('author/comments') ? 'active' : '' }}">
                    <a href="{{ route('author.comments.index') }}">
                        <i class="material-icons">comment</i>
                        <span>Комментарии</span>
                    </a>
                </li>
                <li class="header">Системные настройки</li>
                <li class="{{ Request::is('author/settings') ? 'active' : '' }}">
                    <a href="{{ route('author.settings') }}">
                        <i class="material-icons">settings</i>
                        <span>Настройки пользователя</span>
                    </a>
                </li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="material-icons">input</i>
                    <span>Выйти</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li> 
            @endif

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2019 - {{ date('Y') }} <a href="javascript:void(0);"> Слово жизни Долгопрудный</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>