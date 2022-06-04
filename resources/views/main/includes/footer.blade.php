<!-- top-footer-start -->
<section>
    <div class="container-fluid">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="foot-logo">
                        @php
                            $allwebsitesetting = DB::table('websitesettings')->first();
                        @endphp
                        <img src="{{ asset($allwebsitesetting->logo) }}" style="height: 50px;" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="social">
                        <ul>
                            <li><a href="" target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                            <li><a href="" target="_blank" class="twitter"> <i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="" target="_blank" class="instagram"> <i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="" target="_blank" class="android"> <i class="fa fa-android"></i></a>
                            </li>
                            <li><a href="" target="_blank" class="linkedin"> <i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="" target="_blank" class="youtube"> <i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="apps-img">
                        <ul>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/apps-01.png') }}" alt="" /></a>
                            </li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/apps-02.png') }}" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.top-footer-close -->

<!-- middle-footer-start -->
@php
$allwebsitesetting = DB::table('websitesettings')->first();
@endphp
<section class="middle-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="editor-one">
                    @if (session()->get('lang') == 'bangla')
                        Comapny Address:
                    @else
                        কোম্পানির ঠিকানা:
                    @endif
                    <br>
                    @if (session()->get('lang') == 'bangla')
                        {!! $allwebsitesetting->address_eng !!}
                    @else
                        {!! $allwebsitesetting->address_bang !!}
                    @endif

                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="editor-two">
                    @if (session()->get('lang') == 'bangla')
                        Company Phone Number:
                    @else
                        কোম্পানির ফোন নম্বর:
                    @endif
                    <br>
                    @if (session()->get('lang') == 'bangla')
                        {!! $allwebsitesetting->phone_eng !!}
                    @else
                        {!! $allwebsitesetting->phone_bang !!}
                    @endif
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="editor-three">
                    @if (session()->get('lang') == 'bangla')
                        Company Email:
                    @else
                        কোম্পানির ইমেইল
                    @endif
                    <br>
                    @if (session()->get('lang') == 'bangla')
                        {!! $allwebsitesetting->email !!}
                    @else
                        {!! $allwebsitesetting->email !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section><!-- /.middle-footer-close -->

<!-- bottom-footer-start -->
<section class="bottom-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="copyright">
                    All rights reserved © 2022 Rayhan Kobir
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="btm-foot-menu">
                    <ul>
                        <li><a href="{{ route('about.us') }}">About US</a></li>
                        <li><a href="{{ route('terms.condition') }}">Terms & Condition</a></li>
                        <li><a href="{{ route('contact.us') }}">Contact US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
