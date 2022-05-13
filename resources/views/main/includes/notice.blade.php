@php
$headline = DB::table('posts')
    ->where('posts.headline', 1)
    ->limit(4)
    ->get();
$notice = DB::table('notices')->first();
@endphp
<section>

    <div class="container-fluid">
        <div class="row scroll">
            <div class="col-md-2 col-sm-3 scroll_01 ">
                @if (session()->get('lang') == 'bangla')
                    Breaking News :
                @else
                    সদ্যপ্রাপ্ত সংবাদ :
                @endif

            </div>
            <div class="col-md-10 col-sm-9 scroll_02">
                <marquee>
                    @foreach ($headline as $headline)
                        @if (session()->get('lang') == 'bangla')
                            {{ $headline->title_eng }}
                        @else
                            {{ $headline->title_bang }}
                        @endif
                    @endforeach
                </marquee>
            </div>
        </div>
    </div>

    @if ($notice->status == 1)
        <div class="container-fluid">
            <div class="row scroll">
                <div class="col-md-2 col-sm-3 scroll_01 " style="background-color: green">
                    @if (session()->get('lang') == 'bangla')
                        Notice :
                    @else
                        বিজ্ঞপ্তি :
                    @endif

                </div>
                <div class="col-md-10 col-sm-9 scroll_02" style="background-color:red">
                    <marquee>
                        {!! $notice->notice !!}
                    </marquee>
                </div>
            </div>
        </div>
    @endif



</section>
