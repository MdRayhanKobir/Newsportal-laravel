<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@php
$category = DB::table('categories')
    ->orderBy('id', 'ASC')
    ->get();
$social = DB::table('socials')->first();
$allwebsitesetting=DB::table('websitesettings')->first();
@endphp
<section class="hdr_section"style="margin-top: -23px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-md-2 col-sm-4">
                <div class="header_logo">
                    <a href="{{ URL('/') }}"><img src="{{ asset($allwebsitesetting->logo) }}" style="margin-top:15px;"></a>
                </div>
            </div>
            <div class="col-xs-6 col-md-8 col-sm-8">
                <div id="menu-area" class="menu_area">
                    <div class="menu_bottom">
                        <nav role="navigation" class="navbar navbar-default mainmenu">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" data-target="#navbarCollapse" data-toggle="collapse"
                                    class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collection of nav links and other content for toggling -->
                            <div id="navbarCollapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="{{ URL::to('/') }}">
                                    @if (session()->get('lang') == 'bangla')
                                    HOME
                                    @else
                                    হোম
                                    @endif</a></li>

                                    @foreach ($category as $category)
                                        @php
                                            $subcategory = DB::table('subcategories')
                                                ->where('category_id', $category->id)
                                                ->get();
                                        @endphp
                                        <li class="dropdown">
                                            <a href="{{ URL::to('catpost/'.$category->id.'/'.$category->category_eng) }}" >
                                                @if (session()->get('lang') == 'english')
                                                    {{ $category->category_bang }}
                                                @else
                                                    {{ $category->category_eng }}
                                                @endif
                                                <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach ($subcategory as $subcategory)
                                                    <li><a href="{{ URL::to('subcatpost/'.$subcategory->id.'/'.$subcategory->subcategory_eng) }}">
                                                            @if (session()->get('lang') == 'english')
                                                                {{ $subcategory->subcategory_bang }}
                                                            @else
                                                                {{ $subcategory->subcategory_eng }}
                                                            @endif
                                                        </a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-2 col-sm-12">
                <div class="header-icon">
                    <ul>

                        <!-- version-start -->
                        @if (session()->get('lang') == 'bangla')
                            <li class="version"><a style="color: white !important;" href="{{ route('lang.english') }}"><B>বাংলা</B></a>
                            </li>&nbsp;&nbsp;&nbsp;
                        @else
                            <li class="version"><a style="color: white !important;" href="{{ route('lang.bangla') }}"><B>ENGLISH</B></a></li>
                            &nbsp;&nbsp;&nbsp;
                        @endif

                        <!-- login-start -->

                        <!-- search-start -->
                        <li>
                            <div class="search-large-divice">
                                <div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal"
                                        data-target=".bd-example-modal-lg"><i class="fa fa-search"
                                            aria-hidden="true"></i></a>
                                    <div class="modal fade bd-example-modal-lg" action="">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"> <i class="fa fa-times-circle"
                                                            aria-hidden="true"></i> </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="custom-search-input">
                                                                <form  action="{{ route('search') }}" method="GET">
                                                                    <div class="input-group">
                                                                        <input class="search form-control input-lg"
                                                                            placeholder="search"
                                                                            type="text" name="search" id="search">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-lg"
                                                                                type="submit"> <i class="fa fa-search"
                                                                                    aria-hidden="true"></i> </button>
                                                                        </span>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- social-start -->
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn-02"><i class="fa fa-thumbs-up"
                                        aria-hidden="true"></i></button>
                                <div class="dropdown-content">
                                    <a href="{{ $social->facebook }}" target="_blank"><i class="fa fa-facebook"
                                            aria-hidden="true"></i> Facebook</a>
                                    <a href="{{ $social->linkedin }}" target="_blank"><i class="fa fa-twitter"
                                            aria-hidden="true"></i> Twitter</a>
                                    <a href="{{ $social->youtube }}" target="_blank"><i class="fa fa-youtube-play"
                                            aria-hidden="true"></i> Youtube</a>
                                    <a href="{{ $social->instagram }}" target="_blank"><i class="fa fa-instagram"
                                            aria-hidden="true"></i> Instagram</a>
                                </div>
                            </div>
                        </li>
                        <li><div class="digital-clock" style="font-size: 20px">00:00:00</div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
  clockUpdate();
  setInterval(clockUpdate, 1000);
})

function clockUpdate() {
  var date = new Date();
  $('.digital-clock').css({'color': '#fff', 'text-shadow': '0 0 6px black'});
  function addZero(x) {
    if (x < 10) {
      return x = '0' + x;
    } else {
      return x;
    }
  }

  function twelveHour(x) {
    if (x > 12) {
      return x = x - 12;
    } else if (x == 0) {
      return x = 12;
    } else {
      return x;
    }
  }

  var h = addZero(twelveHour(date.getHours()));
  var m = addZero(date.getMinutes());
  var s = addZero(date.getSeconds());

  $('.digital-clock').text(h + ':' + m + ':' + s)
}
</script>
