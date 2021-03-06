@extends('layouts.backend.app')

@section('title', 'Edit Category')

@push('css')
   
@endpush

@section('content')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                    Изменить данные Служения
                    </h2>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger m-t-15" role="alert">
                                {{ $error }}  
                            </div> 
                        @endforeach
                    @endif

                </div>
                <div class="body">
                <form action="{{ route('admin.category.update', $category) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="name" class="form-control" name="name" value="{{ $category->name }}">
                                <label class="form-label">Название Служения</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <p>Фото должно быть размером 1600рх на 479рх (если фото получается коряво, пишем мне)</p>
                            <div class="form-line">
                                <input type="file" id="image" class="form-control" name="image">
                            </div>
                        </div>
                    <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.category.index') }}">НАЗАД</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Обновить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('js')

@endpush