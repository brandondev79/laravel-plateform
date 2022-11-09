@section('title')
    <title>{{ config('app.name', 'Collab') }}</title>
@show

<!-- Itemprop -->
<meta itemprop="name" content="collab • The professional banking account for SMEs and freelancers"/>
<meta itemprop="description" content="GRÂCE À NOUS, PLUS RIEN N’ARRÊTE LES COMMERCIAUX. collab provides a fully featured professional account with a simplified accounting flow.">

<!-- OpenGraph card -->
<meta property="og:title" content="collab • The professional banking account for SMEs and freelancers">
<meta property="og:description" content="GRÂCE À NOUS, PLUS RIEN N’ARRÊTE LES COMMERCIAUX. collab provides a fully featured professional account with a simplified accounting flow.">

<!-- Twitter card -->
<meta name="twitter:title" content="collab • The professional banking account for SMEs and freelancers">
<meta name="twitter:description" content="GRÂCE À NOUS, PLUS RIEN N’ARRÊTE LES COMMERCIAUX. collab provides a fully featured professional account with a simplified accounting flow.">

<!-- Misc head -->
<meta charset="utf-8"/>
<meta name="google" content="notranslate" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

@yield('meta')

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('front/favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('front/favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('front/favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('front/favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('front/favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('front/favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('front/favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('front/favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('front/favicon/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('front/favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('front/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('front/favicon/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('front/favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ URL::asset('front/favicon/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ URL::asset('front/favicon/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">

<!-- OpenGraph card -->
<meta property="og:type" content="collab.eu">
<meta property="og:url" content="https://collab.eu/en/">
<meta property="og:image" content="https://qonto-assets.s3.amazonaws.com/homepage/ogimage/og-image.jpg">
<meta property="og:logo" content="https://qonto-assets.s3.amazonaws.com/homepage/collab_Meta_og_logo.png">
<meta property="og:site_name" content="collab">

<!-- Twitter card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@getcollab">
<meta name="twitter:image" content="https://qonto-assets.s3.amazonaws.com/homepage/ogimage/twitter-image.jpg">
<meta name="twitter:widgets:csp" content="on">
<meta name="twitter:app:name:iphone" content="collab">
<meta name="twitter:app:name:googleplay" content="collab">
<meta name="twitter:app:id:iphone" content="1214811644">
<meta name="twitter:app:id:googleplay" content="eu.collab.collab">

<!-- Favicon for landing only -->
<link rel="image_src" href="../../qonto-assets.s3.amazonaws.com/homepage/ogimage/og-image.jpg"/>


<!-- Itemprop -->
<meta itemprop="url" content="https://collab.eu/en/">

<!-- Domain verification for search console  -->
<meta name="google-site-verification" content="BXBLE6blQEo2oOg3cefWBGTWkJK3CBigOFdgXf-kEDY"/>
<meta name="google-site-verification" content="_wP15xcI_DjZPbefgDymNj28_DW-EpOcgLGniZPSdJA" />

<!-- Smart App banner -->
<meta name="apple-itunes-app" content="app-id=1214811644">

<!-- Audisto Crawler -->
<meta name="audisto-confirm" content="5f92fa364a58c3010a534777322b0ed6d5a0e07b" />

<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Crowdin Preview -->

<!-- External CSS and JS -->
<link rel="stylesheet" media="screen" href="{{ URL::asset('front/layout/new_layout/application-8413a2efd2efc573f20bdecdb7ec8bb7a11d0e46030f89cd9c4d4dfbff9e80d5.css') }}" />
<script src="{{ URL::asset('front/application-58edf3c17ec7bae8e56dbffb155d376a72eccf47d3b1b0217a429a5fe7a38f5e.js') }}" data-turbolinks-track="true"></script>

@yield('styles')