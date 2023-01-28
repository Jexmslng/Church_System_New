@extends('layout.app')
@section('title', 'Post Details')
@section('heading', 'Post Details')
@section('link_text', 'Goto All Posts')
@section('link', '/post')

@section('content')

<div class="row my-4 mt-5">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <img src="{{ asset('storage/images/'.$events->Picture) }}" class="img-fluid card-img-top">
      <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center">
            <p class="h4 fst-italic">{{$events->EventName}}</p>
          </div>
        <div class="d-flex justify-content-between align-items-center">
          <p class="">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $events->EventDateFrom)->format('F d, Y')}}</p>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <p class="">{{$events->Details}}</p>
          </div>

        <hr>
        <h3 class="fw-bold text-primary">{{ $events->title }}</h3>
        <p>{{ $events->content }}</p>
      </div>
      <div class="card-footer px-5 py-3 d-flex justify-content-end">
        <a href="{{route('events')}}" class="btn btn-success rounded-pill ">Back</a>
      </div>
    </div>
  </div>
</div>
@endsection