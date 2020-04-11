@extends('layouts.backend.app')

@section('title', 'Admin dashboard')

@push('css')
  
@endpush

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Панель Администратора</h2>
    </div>

    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">Всего постов</div>
                <div class="number count-to" data-from="0" data-to="{{ $posts->count() }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">favorite</i>
                </div>
                <div class="content">
                    <div class="text">Все посты с лайками</div>
                    <div class="number count-to" data-from="0" data-to="{{ Auth::user()->favorite_posts()->count() }}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">forum</i>
                </div>
                <div class="content">
                    <div class="text">Посты ожидают публикации</div>
                <div class="number count-to" data-from="0" data-to="{{ $total_pending_posts }}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">Все просмотры</div>
                <div class="number count-to" data-from="0" data-to="{{ $all_views }}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">apps</i>
                </div>
                <div class="content">
                    <div class="text">Служения</div>
                <div class="number count-to" data-from="0" data-to="{{ $category_count }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
            <div class="info-box bg-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">labels</i>
                </div>
                <div class="content">
                    <div class="text">Тэги</div>
                <div class="number count-to" data-from="0" data-to="{{ $tag_count }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
            <div class="info-box bg-blue-grey hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">account_circle</i>
                </div>
                <div class="content">
                    <div class="text">Авторы</div>
                <div class="number count-to" data-from="0" data-to="{{ $author_count }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
            <div class="info-box bg-indigo hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">fiber_new</i>
                </div>
                <div class="content">
                    <div class="text">Сегодня опубликовано</div>
                <div class="number count-to" data-from="0" data-to="{{ $new_authors_today }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Топ 5 популярных постов</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Заголовок</th>
                                    <th>Просмотров</th>
                                    <th>Лаков</th>
                                    <th>Комментариев</th>
                                    <th>Статус</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($popular_posts as $key => $post)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ str_limit($post->title, 20) }}</td>
                                        <td>{{ $post->view_count }}</td>
                                        <td>{{ $post->favorite_to_users_count }}</td>
                                        <td>{{ $post->comments_count }}</td>
                                        <td>
                                            @if ($post->status)
                                                <span class="label bg-green">Опубликовано</span>
                                            @else
                                            <span class="label bg-red">Не опубликовано</span>
                                            @endif
                                        </td>
                                        <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('post.details', $post->slug) }}" target="_blank">Посмотреть</a>
                                        </td>
                                    </tr>    
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Топ активных авторов</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Имя</th>
                                    <th>Пост</th>
                                    <th>Комментарии</th>
                                    <th>Лайки</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($active_author as $key => $author)
                                <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->posts_count }}</td>
                                <td>{{ $author->comments_count }}</td>
                                <td>{{ $author->favorite_posts_count }}</td>
                                </tr>   
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->

    </div>
</div>        
@endsection

@push('js')
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('assets/backend/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
    
    <script src="{{ asset('assets/backend/js/pages/index.js') }}"></script>
@endpush