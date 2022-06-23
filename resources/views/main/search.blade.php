@extends('main.home_master')
@section('content')
<section>
    @php
    $firstsectionbig = DB::table('posts')
        ->where('posts.first_section_thumnail', 1)
        ->orderBy('id', 'desc')
        ->first();
    $firstsection = DB::table('posts')
        ->where('posts.first_section', 1)
        ->orderBy('id', 'desc')
        ->limit(8)
        ->get();
    @endphp

   <div class="container-fluid ">
       <div class="row">
        @foreach ($post as $post )
       <div class="col-md-3">
        <div class="card" style="width:100%;height:100%; margin-bottom:30px">
            <img src="{{ $post->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                @if (session()->get('lang') == 'bangla')
                <h5 class="card-title" style="font-size:20px">{{ $post->title_eng }}</h5>
                 @else
                 <h5 class="card-title" style="font-size:20px">{{ $post->title_bang }}</h5>
                  @endif

              <a  href="{{ route('search.singlepost',['id' => $post->id]) }}" class="btn btn-primary" style="margin-top:10px ">View Post</a>
            </div>
          </div>
       </div>
        @endforeach
       </div>
   </div>
</section>
@endsection
