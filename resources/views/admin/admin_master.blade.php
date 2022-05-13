<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.includes.meta')
    <title>@yield('title')</title>
    {{-- jquery meta --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- all css --}}
    @include('admin.includes.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.includes.sidebar')
      <!-- partial -->
      @include('admin.includes.header')
      <!-- page-body-wrapper ends -->
    </div>
    {{-- all footer file --}}
    @include('admin.includes.footer')

    {{-- all js --}}
    @include('admin.includes.js')
  </body>
</html>
