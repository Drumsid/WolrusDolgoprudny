@extends('layouts.backend.app')

@section('title', 'Create Bible quote')

@push('css')
   
@endpush

@section('content')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                    Добавить цитату
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
                <form action="{{ route('admin.bible.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="description" class="form-control {{ $errors->has('description') ? 'border-danger' : ''}}" name="description" value="{{ old('description') }}">
                                <label class="form-label">Цитата</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="address" class="form-control {{ $errors->has('address') ? 'border-danger' : ''}}" name="address" value="{{ old('address') }}">
                                <label class="form-label">Адрес места писания</label>
                            </div>
                        </div>
                    <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.bible.index') }}">НАЗАД</a>
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