<!DOCTYPE html>
<html lang="en">
    <head>
        @include('main.includes.meta')

        <title>@yield('title')</title>

        @include('main.includes.css')

    </head>
    <body>
    <!-- header-start -->
    @include('main.includes.header')
	<!-- /.header-close -->

    <!-- top-add-start -->
    @include('main.includes.adds')
	 <!-- /.top-add-close -->

	<!-- date-start -->
    @include('main.includes.date')
    <!-- /.date-close -->

	<!-- notice-start -->
    @include('main.includes.notice')
	<!-- 1st-news-section-start -->

@yield('content')
	{{-- footer part --}}
    @include('main.includes.footer')

{{-- js file --}}
@include('main.includes.js')

	</body>
</html>
