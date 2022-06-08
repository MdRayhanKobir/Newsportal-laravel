@extends('main.home_master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
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
    <section class="news-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="row">
                        <div class="col-md-1 col-sm-1 col-lg-1"></div>
                        <div class="col-md-12 col-sm-10 ">
                            <div class="lead-news">
                                <div class="service-img "><a
                                        href="{{ route('singlepost', ['id' => $firstsectionbig->id]) }}">
                                        <img src="{{ asset($firstsectionbig->image) }}" width="800px" alt="Notebook"></a>
                                </div>
                                <div class="content">
                                    <h4 class="lead-heading-01"><a
                                            href="{{ route('singlepost', ['id' => $firstsectionbig->id]) }}">
                                            @if (session()->get('lang') == 'bangla')
                                                {{ $firstsectionbig->title_eng }}
                                            @else
                                                {{ $firstsectionbig->title_bang }}
                                            @endif
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        @foreach ($firstsection as $firstsection)
                            <div class="col-md-3 col-sm-3  col-lg-3">
                                <div class="top-news">
                                    <a href="{{ route('singlepost', ['id' => $firstsection->id]) }}"><img
                                            src="{{ asset($firstsection->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-02"><a
                                            href="{{ route('singlepost', ['id' => $firstsection->id]) }}">
                                            @if (session()->get('lang') == 'bangla')
                                                {{ Str::limit($firstsection->title_eng, 100) }}
                                            @else
                                                {{ Str::limit($firstsection->title_bang, 100) }}
                                            @endif
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- add-start -->
                    @php
                        $horizontal2 = DB::table('adds')
                            ->where('adds.type', 1)
                            ->skip(2)
                            ->first();
                    @endphp
                    <div class="row">
                        @if ($horizontal2 == null)
                        @else
                            <div class="col-md-12 col-sm-12">
                                <div class="add"><img src="{{ asset($horizontal2->ads) }}" alt="" />
                                </div>
                            </div>
                        @endif
                    </div><!-- /.add-close -->

                    <!-- news-start -->
                    @php
                        $firstcategory = DB::table('categories')->first();
                        $firstcatbigthumnail = DB::table('posts')
                            ->where('category_id', $firstcategory->id)
                            ->where('posts.bigthumnail', 1)
                            ->first();
                        $firstcatsmallthumnail = DB::table('posts')
                            ->where('category_id', $firstcategory->id)
                            ->where('posts.bigthumnail', null)
                            ->limit(3)
                            ->get();
                    @endphp
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="bg-one">
                                <div class="cetagory-title"><a
                                        href="{{ URL::to('catpost/' . $firstcategory->id . '/' . $firstcategory->category_eng) }}">
                                        @if (session()->get('lang') == 'bangla')
                                            {{ $firstcategory->category_eng }}
                                        @else
                                            {{ $firstcategory->category_bang }}
                                        @endif
                                        <span>
                                            @if (session()->get('lang') == 'bangla')
                                                More
                                            @else
                                                আরও
                                            @endif

                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </span>
                                    </a></div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="top-news">
                                            <a href="{{ route('singlepost', ['id' => $firstcatbigthumnail->id]) }}"><img
                                                    src="{{ asset($firstcatbigthumnail->image) }}" alt="Notebook"></a>
                                            <h4 class="heading-02"><a
                                                    href="{{ route('singlepost', ['id' => $firstcatbigthumnail->id]) }}">
                                                    @if (session()->get('lang') == 'bangla')
                                                        {{ $firstcatbigthumnail->title_eng }}
                                                    @else
                                                        {{ $firstcatbigthumnail->title_bang }}
                                                    @endif
                                                </a> </h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        @foreach ($firstcatsmallthumnail as $firstcatsmallthumnail)
                                            <div class="image-title">
                                                <a
                                                    href="{{ route('singlepost', ['id' => $firstcatsmallthumnail->id]) }}"><img
                                                        src="{{ asset($firstcatsmallthumnail->image) }}"
                                                        alt="Notebook"></a>
                                                <h4 class="heading-03"><a
                                                        href="{{ route('singlepost', ['id' => $firstcatsmallthumnail->id]) }}">
                                                        @if (session()->get('lang') == 'bangla')
                                                            {{ $firstcatsmallthumnail->title_eng }}
                                                        @else
                                                            {{ $firstcatsmallthumnail->title_bang }}
                                                        @endif
                                                    </a> </h4>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                            $secondcategory = DB::table('categories')
                                ->skip(1)
                                ->first();
                            $secondcatbigthumnail = DB::table('posts')
                                ->where('category_id', $secondcategory->id)
                                ->where('posts.bigthumnail', 1)
                                ->first();
                            $secondcatsmallthumnail = DB::table('posts')
                                ->where('category_id', $secondcategory->id)
                                ->where('posts.bigthumnail', null)
                                ->limit(3)
                                ->get();
                        @endphp

                        <div class="col-md-6 col-sm-6">
                            <div class="bg-one">
                                <div class="cetagory-title"><a
                                        href="{{ URL::to('catpost/' . $secondcategory->id . '/' . $secondcategory->category_eng) }}">
                                        @if (session()->get('lang') == 'bangla')
                                            {{ $secondcategory->category_eng }}
                                        @else
                                            {{ $secondcategory->category_bang }}
                                        @endif

                                        <span>
                                            @if (session()->get('lang') == 'bangla')
                                                More
                                            @else
                                                আরও
                                            @endif

                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </span>
                                    </a></div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">

                                        <div class="top-news">
                                            <a href="{{ route('singlepost', ['id' => $secondcatbigthumnail->id]) }}"><img
                                                    src="{{ asset($secondcatbigthumnail->image) }}" alt="Notebook"></a>
                                            <h4 class="heading-02"><a
                                                    href="{{ route('singlepost', ['id' => $secondcatbigthumnail->id]) }}">
                                                    @if (session()->get('lang') == 'bangla')
                                                        {{ $secondcatbigthumnail->title_eng }}
                                                    @else
                                                        {{ $secondcatbigthumnail->title_bang }}
                                                    @endif
                                                </a> </h4>
                                        </div>


                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        @foreach ($secondcatsmallthumnail as $secondcatsmallthumnail)
                                            <div class="image-title">
                                                <a
                                                    href="{{ route('singlepost', ['id' => $secondcatsmallthumnail->id]) }}"><img
                                                        src="{{ asset($secondcatsmallthumnail->image) }}"
                                                        alt="Notebook"></a>
                                                <h4 class="heading-03"><a
                                                        href="{{ route('singlepost', ['id' => $secondcatsmallthumnail->id]) }}">
                                                        @if (session()->get('lang') == 'bangla')
                                                            {{ $secondcatsmallthumnail->title_eng }}
                                                        @else
                                                            {{ $secondcatsmallthumnail->title_bang }}
                                                        @endif
                                                    </a> </h4>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <!-- add-start -->
                    @php
                        $vertical = DB::table('adds')
                            ->where('adds.type', 0)
                            ->first();
                    @endphp
                    @if ($vertical == null)
                    @else
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="sidebar-add"><img src="{{ asset($vertical->ads) }}" alt="" /></div>
                            </div>
                        </div>
                    @endif
                    <!-- /.add-close -->

                    <!-- youtube-live-start -->
                    @php
                        $livetv = DB::table('livetvs')->first();
                    @endphp
                    @if ($livetv->status == 1)
                        <div class="cetagory-title-03">
                            @if (session()->get('lang') == 'bangla')
                                live TV
                            @else
                                সরাসরি সম্প্রচার
                            @endif
                        </div>
                        <div class="photo">
                            <div class="embed-responsive embed-responsive-16by9 embed-responsive-item"
                                style="margin-bottom:5px;">
                                {!! $livetv->embed_code !!}
                            </div>
                        </div>
                    @endif
                    <!-- /.youtube-live-close -->

                    <!-- facebook-page-start -->
                    <div class="cetagory-title-03">
                        @if (session()->get('lang') == 'bangla')
                            Facebook
                        @else
                            ফেসবুক
                        @endif
                    </div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
                                        nonce="781aQ9rY"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/somoynews.tv/" data-tabs=""
                        data-width="270" data-height="" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/somoynews.tv/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/somoynews.tv/">SOMOY TV</a></blockquote>
                    </div>
                    <!-- /.facebook-page-close -->

                    <!-- add-start -->
                    @php
                        $vertical = DB::table('adds')
                            ->where('adds.type', 0)
                            ->skip(1)
                            ->first();
                    @endphp
                    <div class="row">
                        @if ($vertical == null)
                        @else
                            <div class="col-md-12 col-sm-12">
                                <div class="sidebar-add">
                                    <img src="{{ asset($vertical->ads) }}" alt="" />
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- search by district --}}
                    @php
                        $searchdistrict = DB::table('districs')->get();
                    @endphp
                    <div class="cetagory-title-03">
                        @if (session()->get('lang') == 'bangla')
                            Search By District
                        @else
                            জেলা দ্বারা অনুসন্ধান
                        @endif
                    </div>
                    <form action="{{ route('search.district') }}" method="get">
                        @csrf
                        <div class="old-news-date">
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" id="exampleSelectGender" name="district_id">
                                        <option disabled="" selected="">--Select District--</option>
                                        @foreach ($searchdistrict as $searchdistrict)
                                            <option value="{{ $searchdistrict->id }}">
                                                {{ $searchdistrict->district_eng }} |
                                                {{ $searchdistrict->district_bang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="subdistrict_id" id="subdistrict_id">
                                        <option disabled="" selected="">--Select SubDistrict--</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="" style="margin-top: 8px;">
                            <input type="submit" class="btn btn-primary btn-lg" value="Search " style="background: green">
                        </div>
                    </form>

                    <!-- /.add-close -->
                </div>
            </div>
        </div>
    </section><!-- /.1st-news-section-close -->

    <!-- 2nd-news-section-start -->
    @php
    $thirdcategory = DB::table('categories')
        ->skip(2)
        ->first();
    $thirdcatbigthumnail = DB::table('posts')
        ->where('category_id', $thirdcategory->id)
        ->where('posts.bigthumnail', 1)
        ->first();
    $thirdcatsmallthumnail = DB::table('posts')
        ->where('category_id', $thirdcategory->id)
        ->where('posts.bigthumnail', null)
        ->limit(3)
        ->get();
    @endphp
    <section class="news-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="bg-one">
                        <div class="cetagory-title-02"><a
                                href="{{ URL::to('catpost/' . $thirdcategory->id . '/' . $thirdcategory->category_eng) }}">
                                @if (session()->get('lang') == 'bangla')
                                    {{ $thirdcategory->category_eng }}
                                @else
                                    {{ $thirdcategory->category_bang }}
                                @endif

                                <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus"
                                        aria-hidden="true"></i>
                                    @if (session()->get('lang') == 'bangla')
                                        All News
                                    @else
                                        সব খবর
                                    @endif
                                </span>
                            </a></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="top-news">
                                    <a href="{{ route('singlepost', ['id' => $thirdcatbigthumnail->id]) }}"><img
                                            src="{{ asset($thirdcatbigthumnail->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-02"><a
                                            href="{{ route('singlepost', ['id' => $thirdcatbigthumnail->id]) }}">
                                            @if (session()->get('lang') == 'bangla')
                                                {{ $thirdcatbigthumnail->title_eng }}
                                            @else
                                                {{ $thirdcatbigthumnail->title_bang }}
                                            @endif
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                @foreach ($thirdcatsmallthumnail as $thirdcatsmallthumnail)
                                    <div class="image-title">
                                        <a href="{{ route('singlepost', ['id' => $thirdcatsmallthumnail->id]) }}"><img
                                                src="{{ asset($thirdcatsmallthumnail->image) }}" alt="Notebook"></a>
                                        <h4 class="heading-03"><a
                                                href="{{ route('singlepost', ['id' => $thirdcatsmallthumnail->id]) }}">
                                                @if (session()->get('lang') == 'bangla')
                                                    {{ $thirdcatsmallthumnail->title_eng }}
                                                @else
                                                    {{ $thirdcatsmallthumnail->title_bang }}
                                                @endif
                                            </a>
                                        </h4>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                {{-- four news --}}
                @php
                    $fourdcategory = DB::table('categories')
                        ->skip(3)
                        ->first();
                    $fourcatbigthumnail = DB::table('posts')
                        ->where('category_id', $fourdcategory->id)
                        ->where('posts.bigthumnail', 1)
                        ->first();
                    $fourcatsmallthumnail = DB::table('posts')
                        ->where('category_id', $fourdcategory->id)
                        ->where('posts.bigthumnail', null)
                        ->limit(3)
                        ->get();
                @endphp
                <div class="col-md-6 col-sm-6">
                    <div class="bg-one">
                        <div class="cetagory-title-02"><a
                                href="{{ URL::to('catpost/' . $fourdcategory->id . '/' . $fourdcategory->category_eng) }}">
                                @if (session()->get('lang') == 'bangla')
                                    {{ $fourdcategory->category_eng }}
                                @else
                                    {{ $fourdcategory->category_bang }}
                                    @endif <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i
                                            class="fa fa-plus" aria-hidden="true"></i>
                                        @if (session()->get('lang') == 'bangla')
                                            All News
                                        @else
                                            সব খবর
                                        @endif
                                    </span>
                            </a></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="top-news">
                                    <a href="{{ route('singlepost', ['id' => $fourcatbigthumnail->id]) }}"><img
                                            src="{{ asset($fourcatbigthumnail->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-02"><a
                                            href="{{ route('singlepost', ['id' => $fourcatbigthumnail->id]) }}">
                                            @if (session()->get('lang') == 'bangla')
                                                {{ $fourcatbigthumnail->title_eng }}
                                            @else
                                                {{ $fourcatbigthumnail->title_bang }}
                                            @endif
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                @foreach ($fourcatsmallthumnail as $fourcatsmallthumnail)
                                    <div class="image-title">
                                        <a href="{{ route('singlepost', ['id' => $fourcatsmallthumnail->id]) }}"><img
                                                src="{{ asset($fourcatsmallthumnail->image) }}" alt="Notebook"></a>
                                        <h4 class="heading-03"><a
                                                href="{{ route('singlepost', ['id' => $fourcatsmallthumnail->id]) }}">
                                                @if (session()->get('lang') == 'bangla')
                                                    {{ $fourcatsmallthumnail->title_eng }}
                                                @else
                                                    {{ $fourcatsmallthumnail->title_bang }}
                                                @endif
                                            </a>
                                        </h4>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ******* -->
            @php
                $fivecategory = DB::table('categories')
                    ->skip(4)
                    ->first();
                $fivecatbigthumnail = DB::table('posts')
                    ->where('category_id', $fivecategory->id)
                    ->where('posts.bigthumnail', 1)
                    ->first();
                $fivecatsmallthumnail = DB::table('posts')
                    ->where('category_id', $fivecategory->id)
                    ->where('posts.bigthumnail', null)
                    ->limit(3)
                    ->get();
            @endphp
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="bg-one">
                        <div class="cetagory-title-02"><a
                                href="{{ URL::to('catpost/' . $fivecategory->id . '/' . $fivecategory->category_eng) }}">
                                @if (session()->get('lang') == 'bangla')
                                    {{ $fivecategory->category_eng }}
                                @else
                                    {{ $fivecategory->category_bang }}
                                @endif

                                <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus"
                                        aria-hidden="true"></i>
                                    @if (session()->get('lang') == 'bangla')
                                        All News
                                    @else
                                        সব খবর
                                    @endif
                                </span>
                            </a></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="top-news">
                                    <a href="{{ route('singlepost', ['id' => $fivecatbigthumnail->id]) }}"><img
                                            src="{{ asset($fivecatbigthumnail->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-02"><a
                                            href="{{ route('singlepost', ['id' => $fivecatbigthumnail->id]) }}">
                                            @if (session()->get('lang') == 'bangla')
                                                {{ $fivecatbigthumnail->title_eng }}
                                            @else
                                                {{ $fivecatbigthumnail->title_bang }}
                                            @endif
                                        </a> </h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                @foreach ($fivecatsmallthumnail as $fivecatsmallthumnail)
                                    <div class="image-title">
                                        <a href="{{ route('singlepost', ['id' => $fivecatsmallthumnail->id]) }}"><img
                                                src="{{ asset($fivecatsmallthumnail->image) }}" alt="Notebook"></a>
                                        <h4 class="heading-03"><a
                                                href="{{ route('singlepost', ['id' => $fivecatsmallthumnail->id]) }}">
                                                @if (session()->get('lang') == 'bangla')
                                                    {{ $fivecatsmallthumnail->title_eng }}
                                                @else
                                                    {{ $fivecatsmallthumnail->title_bang }}
                                                @endif

                                            </a> </h4>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                {{-- six news section --}}
                @php
                    $sixcategory = DB::table('categories')
                        ->skip(5)
                        ->first();
                    $sixcatbigthumnail = DB::table('posts')
                        ->where('category_id', $sixcategory->id)
                        ->where('posts.bigthumnail', 1)
                        ->first();
                    $sixcatsmallthumnail = DB::table('posts')
                        ->where('category_id', $sixcategory->id)
                        ->where('posts.bigthumnail', null)
                        ->limit(3)
                        ->get();
                @endphp
                <div class="col-md-6 col-sm-6">
                    <div class="bg-one">
                        <div class="cetagory-title-02"><a
                                href="{{ URL::to('catpost/' . $sixcategory->id . '/' . $sixcategory->category_eng) }}">
                                @if (session()->get('lang') == 'bangla')
                                    {{ $sixcategory->category_eng }}
                                @else
                                    {{ $sixcategory->category_bang }}
                                @endif
                                <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus"
                                        aria-hidden="true"></i>
                                    @if (session()->get('lang') == 'bangla')
                                        All News
                                    @else
                                        সব খবর
                                    @endif
                                </span>
                            </a></div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="top-news">
                                    <a href="{{ route('singlepost', ['id' => $sixcatbigthumnail->id]) }}"><img src="{{ asset($sixcatbigthumnail->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-02"><a href="{{ route('singlepost', ['id' => $sixcatbigthumnail->id]) }}">
                                            @if (session()->get('lang') == 'bangla')
                                                {{ $sixcatbigthumnail->title_eng }}
                                            @else
                                                {{ $sixcatbigthumnail->title_bang }}
                                            @endif
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                @foreach ($sixcatsmallthumnail as $sixcatsmallthumnail)
                                    <div class="image-title">
                                        <a href="{{ route('singlepost', ['id' => $sixcatsmallthumnail->id]) }}"><img src="{{ asset($sixcatsmallthumnail->image) }}"
                                                alt="Notebook"></a>
                                        <h4 class="heading-03"><a href="{{ route('singlepost', ['id' => $sixcatsmallthumnail->id]) }}">

                                                @if (session()->get('lang') == 'bangla')
                                                    {{ $sixcatsmallthumnail->title_eng }}
                                                @else
                                                    {{ $sixcatsmallthumnail->title_bang }}
                                                @endif
                                            </a>
                                        </h4>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add-start -->
            @php
                $horizontal3 = Db::table('adds')
                    ->where('adds.type', 1)
                    ->skip(3)
                    ->first();
                $horizontal4 = Db::table('adds')
                    ->where('adds.type', 1)
                    ->skip(4)
                    ->first();
            @endphp
            <div class="row">
                @if ($horizontal3 == null && $horizontal4 == null)
                @else
                    <div class="col-md-6 col-sm-6">
                        <div class="add"><img src="{{ asset($horizontal3->ads) }}" alt="" /></div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="add"><img src="{{ asset($horizontal4->ads) }}" alt="" /></div>
                    </div>
                @endif
            </div><!-- /.add-close -->

        </div>
    </section><!-- /.2nd-news-section-close -->

    <!-- seven-news-section-start -->
    @php
    $sevencategory = DB::table('categories')
        ->skip(6)
        ->first();
    $sevencatbigthumnail = DB::table('posts')
        ->where('category_id', $sevencategory->id)
        ->where('posts.bigthumnail', 1)
        ->first();
    $sevencatsmallthumnail = DB::table('posts')
        ->where('category_id', $sevencategory->id)
        ->where('posts.bigthumnail', null)
        ->limit(3)
        ->get();
    @endphp
    <section class="news-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="cetagory-title-02"><a
                            href="{{ URL::to('catpost/' . $sevencategory->id . '/' . $sevencategory->category_eng) }}">
                            @if (session()->get('lang') == 'bangla')
                                {{ $sevencategory->category_eng }}
                            @else
                                {{ $sevencategory->category_bang }}
                            @endif
                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus"
                                    aria-hidden="true"></i>
                                @if (session()->get('lang') == 'bangla')
                                    All News
                                @else
                                    সব খবর
                                @endif
                            </span>
                        </a></div>

                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="top-news">
                                <a href="{{ route('singlepost', ['id' => $sevencatbigthumnail->id]) }}"><img src="{{ asset($sevencatbigthumnail->image) }}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="{{ route('singlepost', ['id' => $sevencatbigthumnail->id]) }}">
                                        @if (session()->get('lang') == 'bangla')
                                            {{ $sevencatbigthumnail->title_eng }}
                                        @else
                                            {{ $sevencatbigthumnail->title_bang }}
                                        @endif

                                    </a> </h4>
                            </div>
                        </div>
                        {{-- <div class="row"> --}}
                        <div class="col-md-5 col-sm-5">
                            @foreach ($sevencatsmallthumnail as $sevencatsmallthumnail)
                                <div class="image-title">
                                    <a href="{{ route('singlepost', ['id' => $sevencatsmallthumnail->id]) }}"><img src="{{ asset($sevencatsmallthumnail->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-03"><a href="{{ route('singlepost', ['id' => $sevencatsmallthumnail->id]) }}">
                                            @if (session()->get('lang') == 'bangla')
                                                {{ $sevencatsmallthumnail->title_eng }}
                                            @else
                                                {{ $sevencatsmallthumnail->title_bang }}
                                            @endif
                                        </a> </h4>
                                </div>
                            @endforeach

                        </div>
                        {{-- </div> --}}
                        {{-- <div class="col-md-4 col-sm-4">
                            <div class="image-title">
                                <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                                <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
                            </div>
                            <div class="image-title">
                                <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                                <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
                            </div>
                            <div class="image-title">
                                <a href="#"><img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Notebook"></a>
                                <h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
                            </div>
                        </div> --}}
                    </div>
                    <!-- ******* -->
                    <br />

                    {{-- eight news --}}
                    @php
                        $eightcategory = DB::table('categories')
                            ->skip(7)
                            ->first();
                        $eightcatbigthumnail = DB::table('posts')
                            ->where('category_id', $eightcategory->id)
                            ->where('posts.bigthumnail', 1)
                            ->first();
                        $eightcatsmallthumnail = DB::table('posts')
                            ->where('category_id', $eightcategory->id)
                            ->where('posts.bigthumnail', null)
                            ->limit(3)
                            ->get();
                    @endphp
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="cetagory-title-02"><a
                                    href="{{ URL::to('catpost/' . $eightcategory->id . '/' . $eightcategory->category_eng) }}">
                                    @if (session()->get('lang') == 'bangla')
                                        {{ $eightcategory->category_eng }}
                                    @else
                                        {{ $eightcategory->category_bang }}
                                    @endif
                                    <i class="fa fa-angle-right" aria-hidden="true">
                                    </i> <span><i class="fa fa-plus" aria-hidden="true"></i>
                                        @if (session()->get('lang') == 'bangla')
                                            All News
                                        @else
                                            সব খবর
                                        @endif
                                    </span>
                                </a></div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="bg-gray">
                                <div class="top-news">
                                    <a href="{{ route('singlepost', ['id' => $eightcatbigthumnail->id]) }}"><img src="{{ asset($eightcatbigthumnail->image) }}" alt="Notebook"></a>
                                    <h4 class="heading-02"><a href="{{ route('singlepost', ['id' => $eightcatbigthumnail->id]) }}">
                                            @if (session()->get('lang') == 'bangla')
                                                {{ $eightcatbigthumnail->title_eng }}
                                            @else
                                                {{ $eightcatbigthumnail->title_bang }}
                                            @endif
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            @foreach ($eightcatsmallthumnail as $eightcatsmallthumnail)
                                <div class="image-title">
                                    <a href="{{ route('singlepost', ['id' => $eightcatsmallthumnail->id]) }}"><img src="{{ asset($eightcatsmallthumnail->image) }}"
                                            alt="Notebook"></a>
                                    <h4 class="heading-03"><a href="{{ route('singlepost', ['id' => $eightcatsmallthumnail->id]) }}">
                                            @if (session()->get('lang') == 'bangla')
                                                {{ $eightcatsmallthumnail->title_eng }}
                                            @else
                                                {{ $eightcatsmallthumnail->title_bang }}
                                            @endif
                                        </a> </h4>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="col-md-4 col-sm-4">
                            <div class="news-title">
                                <a href="#">Facebook Messenger gets shiny new logo </a>
                            </div>
                            <div class="news-title">
                                <a href="#">Facebook Messenger gets shiny new logo </a>
                            </div>
                            <div class="news-title">
                                <a href="#">Facebook Messenger gets shiny new logo </a>
                            </div>
                        </div> --}}
                    </div>

                    @php
                        $horizontal1 = DB::table('adds')
                            ->where('adds.type', 1)
                            ->skip(1)
                            ->first();
                    @endphp
                    <div class="row">
                        @if ($horizontal1 == null)
                        @else
                            <div class="col-md-12 col-sm-12">
                                <div class="sidebar-add">
                                    <img src="{{ asset($horizontal1->ads) }}" alt="" />
                                </div>
                            </div>
                        @endif
                    </div><!-- /.add-close -->
                </div>

                {{-- tab bar --}}
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
                <div class="col-md-3 col-sm-3">
                    <div class="tab-header ">
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
                                            <h4 class="heading-03"><a
                                                    href="{{ route('singlepost', ['id' => $latest->id]) }}">
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
                                            <h4 class="heading-03"><a
                                                    href="{{ route('singlepost', ['id' => $popular->id]) }}">
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
                                            <h4 class="heading-03"><a
                                                    href="{{ route('singlepost', ['id' => $highest->id]) }}">
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
                    <!-- Namaj Times -->
                    @php
                        $prayers = DB::table('prayers')->first();
                    @endphp
                    <div class="cetagory-title-03">
                        @if (session()->get('lang') == 'bangla')
                            Prayer Time
                        @else
                            নামাজের সময়
                        @endif
                    </div>
                    <table class="table table-hover table-bordered">
                        <tr style="background-color: #81ecec">
                            <th >
                                @if (session()->get('lang') == 'bangla')
                                    Fajr
                                @else
                                    ফজর
                                @endif
                            </th>
                            <th>{{ $prayers->fajor }}</th>
                        </tr>

                        <tr>
                            <th>
                                @if (session()->get('lang') == 'bangla')
                                    Zahur
                                @else
                                    জহুর
                                @endif
                            </th>
                            <th>{{ $prayers->jahor }}</th>
                        </tr>
                        <tr style="background-color: #81ecec">
                            <th>
                                @if (session()->get('lang') == 'bangla')
                                    Asor
                                @else
                                    আসর
                                @endif
                            </th>
                            <th>{{ $prayers->asor }}</th>
                        </tr>
                        <tr>
                            <th>
                                @if (session()->get('lang') == 'bangla')
                                    Magrib
                                @else
                                    মাগরিব
                                @endif
                            </th>
                            <th>{{ $prayers->magrib }}</th>
                        </tr>
                        <tr style="background-color: #81ecec">
                            <th>
                                @if (session()->get('lang') == 'bangla')
                                    Isha
                                @else
                                    ইশা
                                @endif
                            </th>
                            <th>{{ $prayers->esha }}</th>
                        </tr>
                        <tr>
                            <th>
                                @if (session()->get('lang') == 'bangla')
                                    Jummah
                                @else
                                    জুম্মাহ
                                @endif
                            </th>
                            <th>{{ $prayers->jummah }}</th>
                        </tr>
                    </table>
                    <!-- Namaj Times -->
                    {{-- <div class="cetagory-title-03">Old News </div>
                    <form action="" method="post">
                        <div class="old-news-date">
                            <input type="text" name="from" placeholder="From Date" required="">
                            <input type="text" name="" placeholder="To Date">
                        </div>
                        <div class="old-date-button">
                            <input type="submit" value="search ">
                        </div>
                    </form>
                    <!-- news --> --}}
                    @php
                        $website = DB::table('websites')->get();
                    @endphp
                    <br><br><br><br><br>
                    <div class="cetagory-title-04">
                        @if (session()->get('lang') == 'bangla')
                            Important Website
                        @else
                            গুরুত্বপূর্ণ ওয়েবসাইট
                        @endif
                    </div>
                    <div class="">
                        @foreach ($website as $website)
                            <div class=" table table-bordered" style="background-color: #79aacf">
                                <div class="news-title-02">
                                    <h4 class="heading-03"><a href="{{ $website->website_link }}"
                                            target="_blank"><i class="fa fa-check"
                                                aria-hidden="true"></i>{{ $website->website_name }}
                                        </a> </h4>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>
    </section><!-- /.3rd-news-section-close -->



    <!-- gallery-section-start -->
    @php
    $photogallery = DB::table('photos')
        ->where('photos.type', 1)
        ->orderBy('id', 'desc')
        ->first();
    $smallphotogallery = DB::table('photos')
        ->where('photos.type', 0)
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get();
    @endphp
    <section class="news-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="gallery_cetagory-title">
                        @if (session()->get('lang') == 'bangla')
                            Photo Gallery
                        @else
                            ফটো সংগ্রহশালা
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="photo_screen">
                                <div class="myPhotos" style="width:100%">
                                    <img src="{{ asset($photogallery->photo) }}" alt="Avatar">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="photo_list_bg">

                                @foreach ($smallphotogallery as $smallphotogallery)
                                    <div class="photo_img photo_border active">
                                        <img src="{{ asset($smallphotogallery->photo) }}" alt="image"
                                            onclick="currentDiv(1)">
                                        <div class="heading-03">
                                            {{ $smallphotogallery->photo_title }}
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                    <!--=======================================
                                                    Video Gallery clickable jquary  start
                                                ========================================-->

                    <script>
                        var slideIndex = 1;
                        showDivs(slideIndex);

                        function plusDivs(n) {
                            showDivs(slideIndex += n);
                        }

                        function currentDiv(n) {
                            showDivs(slideIndex = n);
                        }

                        function showDivs(n) {
                            var i;
                            var x = document.getElementsByClassName("myPhotos");
                            var dots = document.getElementsByClassName("demo");
                            if (n > x.length) {
                                slideIndex = 1
                            }
                            if (n < 1) {
                                slideIndex = x.length
                            }
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                            }
                            x[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " w3-opacity-off";
                        }
                    </script>

                    <!--=======================================
                                                    Video Gallery clickable  jquary  close
                                                =========================================-->
                    @php
                        $videogallery = DB::table('videos')
                            ->where('videos.type', 1)
                            ->orderBy('id', 'desc')
                            ->first();
                        $smallvideogallery = DB::table('videos')
                            ->where('videos.type', 0)
                            ->orderBy('id', 'desc')
                            ->limit(3)
                            ->get();
                    @endphp

                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="gallery_cetagory-title">
                        @if (session()->get('lang') == 'bangla')
                            Video Gallery
                        @else
                            ভিডিও সংগ্রহশালা
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="video_screen">
                                <div class="myVideos" style="width:100%">
                                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                        {!! $videogallery->embed_code !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="gallery_sec owl-carousel">

                                @foreach ($smallvideogallery as $smallvideogallery)
                                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                        <iframe width="853" height="480"
                                            src="https://www.youtube.com/embed/{{ $smallvideogallery->embed_code }}"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                @endforeach

                                {{-- <div class="video_image" style="width:100%" onclick="currentDivs(1)">
                                    <img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Avatar">
                                    <div class="heading-03">
                                        <div class="content_padding">
                                            Kumar Sanu tests positive for coronavirus
                                        </div>
                                    </div>
                                </div>

                                <div class="video_image" style="width:100%" onclick="currentDivs(1)">
                                    <img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Avatar">
                                    <div class="heading-03">
                                        <div class="content_padding">
                                            Kumar Sanu tests positive for coronavirus
                                        </div>
                                    </div>
                                </div>

                                <div class="video_image" style="width:100%" onclick="currentDivs(1)">
                                    <img src="{{ asset('frontend/assets/img/news.jpg') }}" alt="Avatar">
                                    <div class="heading-03">
                                        <div class="content_padding">
                                            Kumar Sanu tests positive for coronavirus
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>


                    <script>
                        var slideIndex = 1;
                        showDivss(slideIndex);

                        function plusDivs(n) {
                            showDivss(slideIndex += n);
                        }

                        function currentDivs(n) {
                            showDivss(slideIndex = n);
                        }

                        function showDivss(n) {
                            var i;
                            var x = document.getElementsByClassName("myVideos");
                            var dots = document.getElementsByClassName("demo");
                            if (n > x.length) {
                                slideIndex = 1
                            }
                            if (n < 1) {
                                slideIndex = x.length
                            }
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                            }
                            x[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " w3-opacity-off";
                        }
                    </script>

                </div>
            </div>
        </div>
    </section><!-- /.gallery-section-close -->

    {{-- This is for District --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="district_id"]').on('change', function() {
                var district_id = $(this).val();
                if (district_id) {
                    $.ajax({
                        url: "{{ url('/get/subdistrict/search') }}/" + district_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $("#subdistrict_id").empty();
                            $.each(data, function(key, value) {
                                $("#subdistrict_id").append('<option value="' + value
                                    .id + '">' + value.subdistrict_eng + ' | ' +
                                    value.subdistrict_bang + '</option>'
                                );
                            });


                        },

                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endsection
