@extends('main.home_master');
@section('title')
@if (session()->get('lang') == 'bangla')
{{ $post->title_eng }}
@else
{{ $post->title_bang }}
@endif

@endsection
@section('content')
    <!-- single-page-start -->
    <section class="single-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li><a href="#">
                                @if (session()->get('lang') == 'bangla')
                                    {{ $post->category_eng }}
                                @else
                                    {{ $post->category_bang }}
                                @endif
                            </a></li>
                        <li><a href="#">
                                @if (session()->get('lang') == 'bangla')
                                    {{ $post->subcategory_eng }}
                                @else
                                    {{ $post->subcategory_bang }}
                                @endif
                            </a>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <header class="headline-header margin-bottom-10">
                        <h1 class="headline">
                            @if (session()->get('lang') == 'bangla')
                                {{ $post->title_eng }}
                            @else
                                {{ $post->title_bang }}
                            @endif
                        </h1>
                    </header>


                    <div class="article-info margin-bottom-20">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list-inline">


                                    <li>
                                        @if (session()->get('lang') == 'bangla')
                                            LOOK AT
                                        @else
                                            তাকানো
                                        @endif
                                    </li>
                                    <li><i class="fa fa-clock-o"></i> 09 My 2022 </li>
                                </ul>

                            </div>
                            {{-- <div class="col-md-6 col-sm-6 pull-right">
                        <ul class="social-nav">
                            <li><a href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('#'),'facebook-share-dialog','width=626,height=436'); return false;" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="" onclick="javascript:window.open('https://twitter.com/share?text=‘#'); return false;" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="" onclick="window.open('https://plus.google.com/share?url=#'); return false;" title="Google plus" rel="nofollow" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank" title="Print" rel="nofollow" class="print"><i class="fa fa-print"></i></a></li>
                        </ul>
                    </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- ******** -->
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="single-news">
                        <img src="{{ asset($post->image) }}" alt="" />
                        <h4 class="caption">
                            @if (session()->get('lang') == 'bangla')
                                <h3 class="text-danger">{{ $post->title_eng }} <span style="font-size: 30px">|| </span> {{ $post->tags_eng }}</h3>
                            @else
                                <h3 class="text-danger">{{ $post->title_bang }} <span style="font-size: 30px">|| </span> {{ $post->tags_bang }}</h3>
                            @endif
                            <br><br>
                            <div class="sharethis-inline-share-buttons"></div>

                        </h4>
                        <p>
                            @if (session()->get('lang') == 'bangla')
                                {!! $post->details_eng !!}
                            @else
                                {!! $post->details_bang !!}
                            @endif
                        </p>
                    </div><br><br>
                    <div class="sharethis-inline-share-buttons"></div><br>
                    {{-- fb commnet boxt --}}
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
                                        nonce="ClFC86MV"></script>

                    <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="8" data-width=""></div>
                    <!-- ********* -->
                    @php
                        $relatednews = DB::table('posts')
                            ->where('category_id', $post->category_id)
                            ->orderBy('id', 'desc')
                            ->limit(6)
                            ->get();
                    @endphp
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="heading">
                                @if (session()->get('lang') == 'bangla')
                                    Related News
                                @else
                                    সম্পর্কিত খবর
                                @endif
                            </h2>
                        </div>

                        @foreach ($relatednews as $relatednews)
                            <div class="col-md-4 col-sm-4">
                                <div class="top-news sng-border-btm">
                                    <a href="{{ route('singlepost', ['id' => $relatednews->id]) }}"><img
                                            src="{{ asset($relatednews->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-02"><a
                                            href="{{ route('singlepost', ['id' => $relatednews->id]) }}">
                                            @if (session()->get('lang') == 'bangla')
                                                {{ $relatednews->title_eng }}
                                            @else
                                                {{ $relatednews->title_bang }}
                                            @endif
                                        </a> </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
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
                            <li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab"
                                    data-toggle="tab" aria-expanded="false">
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
