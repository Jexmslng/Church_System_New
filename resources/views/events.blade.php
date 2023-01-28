@include('partials.HomeHeader')

<h1 class="EventsTitle" style="font-family: 'Times New Roman', Times, serif;">Events & Activities</h1>@extends('layout.app')
@section('title', 'Home Page')
@section('content')
 

<div class="row g-5 mt-1"style="margin-left: -150px; margin-right: -150px">
  @forelse($events as $key => $row)
  <div class="col-lg-4">

      <div class="card shadow mt-5" style="height: 36em; background-color: #081c15;">
        <a class=""  href="{{route('post.show', $row->id)}}">
          <img src="{{ asset('storage/images/'.$row->Picture) }}" class="card-img-top img-fluid" style="height: 20em; object-fit:cover;">
        </a>
        <div class="card-body">
          <p class="h4 fst-italic text-white">{{ $row->EventName }}</p>
          <div class="card-title fst-italic" style="color:#bcb9b9; margin-top: -10px; font-size:15px;">{{  \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->EventDateFrom)
            ->format('M d, Y')}}</div>
               <p class="text-white" style="color:white">{{ Str::limit($row->Details, 200) }}</p>
            @if (
                Str::length($row->Details) > 200
            
            )
                    <a class="btn"  href="{{route('post.show', $row->id)}}" style="background-color: #b7e4c7;">Read More</a>
              
            @endif
      
        </div>
      </div>


  </div>
  @empty
    <h2 class="text-center text-secondary p-4">No post found in the database!</h2>
  @endforelse
  <div class="d-flex justify-content-center my-5">
    {{ $events->onEachSide(1)->links() }}
  </div>

</div>

@endsection
@include('partials.HomeFooter')