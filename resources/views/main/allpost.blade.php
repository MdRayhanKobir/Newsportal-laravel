@extends('main.home_master')
@section('content')
<!-- archive_page-start -->
<section class="single_page">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="single_info">
                <span>
                    <a href="#"><i class="fa fa-home" aria-hidden="true"></i> /
                    </a>  Category
                </span>
            </div>
        </div>
        <div class="col-md-9 col-sm-8">
@foreach ($categoryallpost as $categoryallposts )
<div class="archive_post_sec_again">
    <div class="row">
        <div class="col-md-4 col-sm-5">
            <div class="archive_img_again">
                <a href="{{ route('singlepost',['id'=>$categoryallposts->id]) }}"><img src="{{ asset($categoryallposts->image) }}"></a>
            </div>
        </div>
        <div class="col-md-8 col-sm-7">
            <div class="archive_padding_again">
                <div class="archive_heading_01">
                    <a href="{{ route('singlepost',['id'=>$categoryallposts->id]) }}">
                    @if (session()->get('lang') == 'bangla')
                        {{ $categoryallposts->title_eng }}
                    @else
                        {{ $categoryallposts->title_bang }}
                    @endif</a>
                </div>
                <div class="archive_dtails">
                    @if (session()->get('lang') == 'bangla')
                        {!!Str::limit( $categoryallposts->details_eng,100) !!}
                    @else
                    {!!Str::limit( $categoryallposts->details_bang,100) !!}
                    @endif
                </div>
                <div class="dtails_btn"><a href="{{ route('singlepost',['id'=>$categoryallposts->id]) }}">
                    @if (session()->get('lang') == 'bangla')
                    Read More...
                    @else
                    বিস্তারিত পড়ুন...
                    @endif
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
            <div class="row">
                <div class="col-md-12">
                    <div class="post-nav">
                        <ul class="pager">
                            {{ $categoryallpost->links('vendor.pagination.custom') }}
                        </ul>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-4">
            <!-- add-start -->
            @php
            $vertical = DB::table('adds')
                ->where('adds.type', 0)
                ->skip(1)
                ->first();
            @endphp
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add"><img src="{{ asset($vertical->ads) }}" alt="" /></div>
                    </div>
                </div><!-- /.add-close -->
                {{-- tab part --}}
             {{-- tab part --}}
             @php
             $latest = DB::table('posts')
                 ->orderBy('id', 'desc')
                 ->limit(8)
                 ->get();
             $popular = DB::table('posts')
                 ->orderBy('id', 'desc')
                 ->inRandomOrder()
                 ->limit(8)
                 ->get();
             $highest = DB::table('posts')
                 ->orderBy('id', 'asc')
                 ->inRandomOrder()
                 ->limit(8)
                 ->get();
         @endphp
     <div class="tab-header">
         <!-- Nav tabs -->
         <ul class="nav nav-tabs nav-justified" role="tablist">
             <li role="presentation" class="active"><a href="#tab21" aria-controls="tab21"
                     role="tab" data-toggle="tab" aria-expanded="false">
                     @if (session()->get('lang') == 'bangla')
                         Latest
                     @else
                         সর্বশেষ
                     @endif
                 </a></li>
             <li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab"
                     aria-expanded="true">
                     @if (session()->get('lang') == 'bangla')
                         Popular
                     @else
                         জনপ্রিয়
                     @endif
                 </a>
             </li>
             <li role="presentation"><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab"
                     aria-expanded="true">
                     @if (session()->get('lang') == 'bangla')
                         Highest
                     @else
                         সর্বোচ্চ
                     @endif
                 </a></li>
         </ul>

         <!-- Tab panes -->
         <div class="tab-content ">
             <div role="tabpanel" class="tab-pane in active" id="tab21">
                 <div class="news-titletab">
                     @foreach ($latest as $latest)
                         <div class="news-title-02">
                             <h4 class="heading-03"><a href="{{ route('singlepost', ['id' => $latest->id]) }}">
                                     @if (session()->get('lang') == 'bangla')
                                         {{ $latest->title_eng }}
                                     @else
                                         {{ $latest->title_bang }}
                                     @endif
                                 </a>
                             </h4>
                         </div>
                     @endforeach




                 </div>
             </div>
             <div role="tabpanel" class="tab-pane fade" id="tab22">
                 <div class="news-titletab">
                     @foreach ($popular as $popular)
                         <div class="news-title-02">
                             <h4 class="heading-03"><a href="{{ route('singlepost', ['id' => $popular->id]) }}">
                                     @if (session()->get('lang') == 'bangla')
                                         {{ $popular->title_eng }}
                                     @else
                                         {{ $popular->title_bang }}
                                     @endif
                                 </a>
                             </h4>
                         </div>
                     @endforeach
                 </div>
             </div>
             <div role="tabpanel" class="tab-pane fade" id="tab23">
                 <div class="news-titletab">
                     @foreach ($highest as $highest)
                         <div class="news-title-02">
                             <h4 class="heading-03"><a href="{{ route('singlepost', ['id' => $highest->id]) }}">
                                     @if (session()->get('lang') == 'bangla')
                                         {{ $highest->title_eng }}
                                     @else
                                         {{ $highest->title_bang }}
                                     @endif
                                 </a>
                             </h4>
                         </div>
                     @endforeach

                 </div>
             </div>
         </div>
     </div>
            <!-- add-start -->
            @php
            $vertical = DB::table('adds')
                ->where('adds.type', 0)
                ->first();
            @endphp
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add"><img src="{{ asset($vertical->ads) }}" alt="" /></div>
                    </div>
                </div><!-- /.add-close -->
        </div>

    </div>

</div>
</section>
@endsection

