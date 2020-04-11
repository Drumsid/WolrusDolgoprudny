@extends('layouts.backend.app')

@section('title', 'Create Tag')

@push('css')
   
@endpush

@section('content')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                    Добавить новый Тэг
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
                <form action="{{ route('admin.tag.store') }}" method="POST">
                    @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="name" class="form-control {{ $errors->has('name') ? 'border-danger' : ''}}" name="name" value="{{ old('name') }}">
                                <label class="form-label">Имя тэга</label>
                            </div>
                        </div>
                    <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.tag.index') }}">НАЗАД</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('js')

@endpush