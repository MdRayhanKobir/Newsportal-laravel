<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        {{-- <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('backend/assets/images/logo.svg') }}" --}}
                {{-- alt="logo" /></a> --}}
                <p  class="sidebar-brand brand-logo">NEWSPORTAL</p>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                src="{{ asset('backend/assets/images/logo-mini.svg') }}" alt="logo" /></a>
    </div>
    @php
        $editData = DB::table('users')
            ->where('id', Auth::user()->id)
            ->first();
    @endphp
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle "
                            src="{{ !empty($editData->image) ? url('upload/user_images/' . $editData->image) : url('upload/no-image.jpg') }}"
                            alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ $editData->name }}</h5>
                        <span>{{ $editData->email }}</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="{{ route('account.setting') }}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('show.password') }}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>

                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if (Auth::user()->category == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Categories</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('categories') }}">Category</a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('subcategories') }}">Sub-Category</a></li>
                    </ul>
                </div>
            </li>
        @else
        @endif

        @if (Auth::user()->district == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#distric" aria-expanded="false"
                    aria-controls="distric">
                    <span class="menu-icon">
                        <i class="mdi mdi-security"></i>
                    </span>
                    <span class="menu-title">District</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="distric">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('districts') }}">
                                District </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('subdistricts') }}">
                                Sub-District </a></li>
                    </ul>
                </div>
            </li>
        @else
        @endif

        @if (Auth::user()->post == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false"
                    aria-controls="post">
                    <span class="menu-icon">
                        <i class="mdi mdi-security"></i>
                    </span>
                    <span class="menu-title">Post</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="post">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('create.posts') }}"> Add
                                Post </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('all.posts') }}"> All
                                Post </a></li>
                    </ul>
                </div>
            </li>
        @else
        @endif

        @if (Auth::user()->setting == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#social" aria-expanded="false"
                    aria-controls="social">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Setting</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="social">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('social.setting') }}">
                                Social Setting </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('seo.setting') }}"> SEO
                                Setting </a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('prayer.setting') }}">Prayer Setting </a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('livetv.setting') }}">LiveTV Setting </a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('notice.setting') }}">Notice Setting </a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('allwebsite.setting') }}">Website Setting </a></li>
                    </ul>
                </div>
            </li>
        @else
        @endif

        @if (Auth::user()->website == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#website" aria-expanded="false"
                    aria-controls="website">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Website</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="website">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('add.websitesetting') }}"> Add Website Link </a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('website.setting') }}"> All Website Link </a></li>
                    </ul>
                </div>
            </li>
        @else
        @endif


        @if (Auth::user()->gallery == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#photo" aria-expanded="false"
                    aria-controls="photo">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Gallery</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="photo">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('photo.gallery') }}">
                                Photo Gallery </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('video.gallery') }}">
                                Video Gallery </a></li>
                    </ul>
                </div>
            </li>
        @else
        @endif

        @if (Auth::user()->ads == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#add" aria-expanded="false" aria-controls="add">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Advertisement</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="add">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('list.add') }}"> Add
                                List </a></li>
                    </ul>
                </div>
            </li>
        @else
        @endif
        @if (Auth::user()->role == 1)
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false"
                    aria-controls="user">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Manage User</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="user">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('add.writter') }}">
                                Add User </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('all.writter') }}">
                                All Users </a></li>
                    </ul>
                </div>
            </li>
        @else
        @endif

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#news" aria-expanded="false"
                aria-controls="news">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">News Manage</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="news">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('view.news') }}">
                            Show Share news </a></li>

                </ul>
            </div>
        </li>

    </ul>

</nav>
