<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin">
    <meta name="author" content="Admin">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset(!empty($favicon->img_path) ? $favicon->img_path : '') }}">
    <title>{{ config('app.name') }}</title>
    <!-- ============================================================== -->
    <!-- All CSS LINKS IN BELOW FILE -->
    <!-- ============================================================== -->
    <meta name="description"
        content="Transform your life with Awaken Your Inner Self, revealing five life-changing miracles that build emotional wellness, spiritual growth, inner peace and love all.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Awaken Your Inner Self | Five Miracles for Lasting Inner Peace">
    <meta property="og:description"
        content="Transform your life with Awaken Your Inner Self, revealing five life-changing miracles that build emotional wellness, spiritual growth, inner peace and love all.">
    <meta property="og:site_name" content="Dr. Gil Gockley">
    <meta property="article:modified_time" content="2026-07-10T19:32:15+00:00">
    <meta property="og:image" content="{{ asset('asset/images/book-9092-scaled.png') }}">
    <meta name="twitter:card" content="summary_large_image">

    <script id="jquery-core-js" src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script id="jquery-migrate-js" src="{{ asset('asset/js/jquery-migrate.min.js') }}"></script>
    <meta name="generator" content="WordPress 7.0.1">
    <meta name="google-site-verification" content="ICf1d_7rZrWkE57ijESQ6v-JahpxxgK2xW1TanR--eI">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <!-- In head section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- Before closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    @include('layouts.front.css')
    @yield('css')
    <style>
        .myaccount-tab-menu.nav a {
            display: block;
            padding: 20px;
            font-size: 16px;
            align-items: center;
            width: 100%;
            font-weight: bold;
            color: black;
            border-radius: 10px;
        }

        .myaccount-tab-menu.nav a i {
            padding-right: 10px;
        }

        .myaccount-tab-menu.nav {
            border: 1px solid;
            border-radius: 10px;
        }

        .myaccount-tab-menu.nav .active,
        .myaccount-tab-menu.nav a:hover {
            background-color: #dd1017;
            color: white;
        }

        .account-details-form label.required {
            width: 100%;
            font-weight: 500;
            font-size: 18px;
        }

        .account-details-form input {
            border-width: 1px;
            border-color: white;
            border-style: solid;
            padding-left: 15px;
            color: black;
            width: 100%;
            border-radius: 3px;
            background-color: rgb(255, 255, 255);
            height: 52px;
            padding-left: 15px;
            margin-bottom: 30px;
            color: #000000;
            font-size: 15px;
        }

        .account-details-form legend {
            font-family: CottonCandies;
            font-size: 50px;
        }

        .editable {
            position: relative;
        }

        .editable-wrapper {
            position: absolute;
            right: 0px;
            top: -50px;
        }

        .editable-wrapper a {
            background-color: #17a2b8;
            border-radius: 50px;
            width: 35px;
            height: 35px;
            display: inline-block;
            text-align: center;
            line-height: 35px;
            color: white;
            margin-left: 10px;
            font-size: 16px;
        }

        .editable-wrapper a.edit {
            background-color: #007bff;
        }
    </style>
</head>



<body
    class="home wp-singular page-template-default page page-id-54 wp-embed-responsive wp-theme-kadence footer-on-bottom hide-focus-outline link-style-standard content-title-style-hide content-width-fullwidth content-style-unboxed content-vertical-padding-hide non-transparent-header mobile-non-transparent-header kadence-elementor-colors elementor-default elementor-kit-13 elementor-page elementor-page-54 ">
    <img style="z-index:-99999;position:fixed;top:0;left:0;margin:1px;max-width:none!important;max-height:none!important;width:100vw!important;height:100vh!important;"
        onload='var i=this,d=document;function c(e){d.removeEventListener(e.type,c);setTimeout(function(){i.parentNode.removeChild(i)},250)}d.addEventListener("DOMContentLoaded",c)'
        alt="...">

    <div id="wrapper" class="site wp-site-blocks"> <a class="skip-link screen-reader-text scroll-ignore"
            href="#main">Skip to content</a>
        @include('layouts/front.header')




        @yield('content')


        @include('layouts/front.footer')
    </div>
    <!-- ============================================================== -->
    <!-- All SCRIPTS ANS JS LINKS IN BELOW FILE -->
    <!-- ============================================================== -->
    @include('layouts/front.scripts')
    @yield('js')

</body>

</html>
