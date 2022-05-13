
@php
    $seo=DB::table('seos')->first();
@endphp
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="title" content="{{ $seo->meta_title }}">
 <meta name="author" content="{{ $seo->meta_author }}">
 <meta name="keyword" content="{{ $seo->meta_keyword }}">
 <meta name="description" content="{{ $seo->meta_keyword }}">
 <meta name="google analyticts" content="{{ $seo->google_analytics }}">
 <meta name="google varification" content="{{ $seo->google_varification }}">
 <meta name="alexa analytics" content="{{ $seo->alexa_analytics }}">

