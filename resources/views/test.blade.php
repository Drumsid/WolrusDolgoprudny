@extends('layouts.frontend.app')

@section('title', 'test')


@push('css')
<link href="{{ asset('assets/frontend/css/categories/styles.css') }}" rel="stylesheet">

<link href="{{ asset('assets/frontend/css/categories/responsive.css') }}" rel="stylesheet">
<style>
    .favoritePost {
        color: red;
    }
</style>  
@endpush

@section('content')
<section class="blog-area section">
    <div class="container">
        @if (session('successMsg'))
            <div class="alert alert-success m-t-15" role="alert">
            {{ session('successMsg') }}  
            </div> 
        @endif
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger m-t-15" role="alert">
                {{ $error }}  
            </div> 
        @endforeach
        <div class="row">
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> --}}
  <h2>Почему в церкви разводятся?/психолог Анна Мицкевич</h2>
  <div class="flex-video mt-5" style="width:100%;">
    <div>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/WWFrVNNyA1g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  {{-- <iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/live_stream?channel=UCvFaJA6Ja8gV5sDplTuYsVQ" width="640"></iframe>  --}}
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <form method="POST" action="{{ route('feedback') }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="test">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    </div>
  </div>
        </div><!-- row -->

    </div><!-- container -->
</section><!-- section -->

@endsection

@push('js')
<script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
<script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
@endpush