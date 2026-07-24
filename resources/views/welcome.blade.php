@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->

@section('css')
    <style>
        .elementor-54 .elementor-element.elementor-element-31128012 .elementskit-tootltip-testimonial .elementskit-commentor-content,
        .elementor-54 .elementor-element.elementor-element-31128012 .ekit-main-swiper .elementskit-single-testimonial-slider,
        .elementor-54 .elementor-element.elementor-element-31128012 .elementskit-testimonial_card {
            margin-left: 10px;
            margin-right: 10px;
            height: 350px;
        }

        .elementor-54 .elementor-element.elementor-element-31128012 .elementskit-single-testimonial-slider .elementskit-commentor-content>p,
        .elementor-54 .elementor-element.elementor-element-31128012 .elementskit-testimonial_card .elementskit-commentor-coment {
            font-family: "Poppins", Sans-serif;
            font-weight: 400;
            font-style: italic;
            line-height: 1.8em;
            height: 140px;
        }

        .bannerSwiper,
        .bannerSwiper .swiper-wrapper,
        .bannerSwiper .swiper-slide {
            width: 100%;
            height: 100%;
        }

        .bannerSwiper .swiper-slide {
            display: flex;
            align-items: center;
        }

        .banner-content {
            display: flex;
            width: 100%;
            padding: 0 15px;
        }

        .banner-inner {
            display: flex;
            flex-direction: row;
            width: 100%;
            align-items: center;
            gap: 30px;
        }

        .banner-left {
            flex: 1;
            padding-right: 30px;
        }

        .banner-right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .banner-right img {
            max-width: 100%;
            height: auto;
        }

        /* Responsive for mobile */
        @media (max-width: 768px) {
            .banner-inner {
                flex-direction: column;
            }

            .banner-left {
                padding-right: 0;
                text-align: center;
            }

            .banner-right {
                margin-top: 20px;
            }
        }
    </style>
@endsection

<main id="inner-wrap" class="wrap kt-clear" role="main">
    <div id="primary" class="content-area">
        <div class="content-container site-container">
            <div id="main" class="site-main">
                <div class="content-wrap">
                    <article id="post-54"
                        class="entry content-bg single-entry post-54 page type-page status-publish hentry">
                        <div class="entry-content-wrap">
                            <div class="entry-content single-content">
                                <div data-elementor-type="wp-page" data-elementor-id="54" class="elementor elementor-54"
                                    data-elementor-post-type="page">
                                    <div class="elementor-element elementor-element-86040f0 e-flex e-con-boxed e-con e-parent lzl"
                                        data-id="86040f0" data-element_type="container" data-e-type="container"
                                        data-settings='{"background_background":"slideshow","background_slideshow_gallery":[{"id":1178,"url":"{{ asset('asset/images/img-4846.png') }}"},{"id":1372,"url":"{{ asset('asset/images/bgbgbg.png') }}"}],"background_slideshow_loop":"yes","background_slideshow_slide_duration":5000,"background_slideshow_slide_transition":"fade","background_slideshow_transition_duration":500}'
                                        data-lzl-bg="">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-76a9fcb elementor-arrows-position-outside elementor-widget elementor-widget-n-carousel"
                                                data-id="76a9fcb" data-element_type="widget" data-e-type="widget"
                                                data-settings='{"carousel_items":[{"slide_title":"Slide #1","_id":"1859c5a"}],"slides_to_show":"1","slides_to_scroll":"1","autoplay_speed":3002,"slides_to_show_tablet":"2","slides_to_show_mobile":"1","autoplay":"yes","pause_on_hover":"yes","pause_on_interaction":"yes","infinite":"yes","speed":500,"offset_sides":"none","arrows":"yes","image_spacing_custom":{"unit":"px","size":10,"sizes":[]},"image_spacing_custom_tablet":{"unit":"px","size":"","sizes":[]},"image_spacing_custom_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                data-widget_type="nested-carousel.default">
                                                <div class="elementor-widget-container">
                                                    <div class="e-n-carousel swiper" role="region"
                                                        aria-roledescription="carousel" aria-label="Carousel"
                                                        dir="ltr">
                                                        <div class="swiper-wrapper" aria-live="off">
                                                            <div class="swiper-slide" data-slide="1" role="group"
                                                                aria-roledescription="slide" aria-label="1 of 1">
                                                                <div class="elementor-element elementor-element-8d7089b e-flex e-con-boxed e-con e-child"
                                                                    data-id="8d7089b" data-element_type="container"
                                                                    data-e-type="container">
                                                                    @if ($banners->count() > 1)
                                                                        <div class="swiper bannerSwiper">
                                                                            <div class="swiper-wrapper">
                                                                                @foreach ($banners as $banner)
                                                                                    <div class="swiper-slide">
                                                                                        <div
                                                                                            class="e-con-inner banner-content">
                                                                                            <div
                                                                                                class="e-con-inner banner-inner">
                                                                                                <div class="elementor-element elementor-element-0573f95 e-con-full e-flex e-con e-child banner-left"
                                                                                                    data-id="0573f95"
                                                                                                    data-element_type="container"
                                                                                                    data-e-type="container">
                                                                                                    <div class="elementor-element elementor-element-2a36134 elementor-widget elementor-widget-heading"
                                                                                                        data-id="2a36134"
                                                                                                        data-element_type="widget"
                                                                                                        data-e-type="widget"
                                                                                                        data-widget_type="heading.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <h6
                                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                                {{ $banner->text2 }}
                                                                                                            </h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-a83121c elementor-widget elementor-widget-heading"
                                                                                                        data-id="a83121c"
                                                                                                        data-element_type="widget"
                                                                                                        data-e-type="widget"
                                                                                                        data-widget_type="heading.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <h1
                                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                                {{ $banner->title }}
                                                                                                            </h1>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-6a31f34 elementor-widget elementor-widget-text-editor"
                                                                                                        data-id="6a31f34"
                                                                                                        data-element_type="widget"
                                                                                                        data-e-type="widget"
                                                                                                        data-widget_type="text-editor.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            {!! $banner->description !!}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-f87f02e elementor-tablet-align-center elementor-widget elementor-widget-button"
                                                                                                        data-id="f87f02e"
                                                                                                        data-element_type="widget"
                                                                                                        data-e-type="widget"
                                                                                                        data-widget_type="button.default">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <div
                                                                                                                class="elementor-button-wrapper">
                                                                                                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                                                                    href="https://www.youtube.com/@gilgockley1816"
                                                                                                                    target="_blank">
                                                                                                                    <span
                                                                                                                        class="elementor-button-content-wrapper">
                                                                                                                        <span
                                                                                                                            class="elementor-button-text">Go
                                                                                                                            To
                                                                                                                            YouTube</span>
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-9cca461 e-con-full e-flex e-con e-child banner-right"
                                                                                                    data-id="9cca461"
                                                                                                    data-element_type="container"
                                                                                                    data-e-type="container">
                                                                                                    <div class="elementor-element elementor-element-08884ad elementor-invisible elementor-widget elementor-widget-image"
                                                                                                        data-id="08884ad"
                                                                                                        data-element_type="widget"
                                                                                                        data-e-type="widget"
                                                                                                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","motion_fx_scale_effect":"yes","motion_fx_scale_speed":{"unit":"px","size":2,"sizes":[]},"motion_fx_scale_range":{"unit":"%","size":"","sizes":{"start":49,"end":75}},"_animation":"zoomIn","motion_fx_scale_direction":"out-in","motion_fx_devices":["desktop","tablet","mobile"]}'
                                                                                                        data-widget_type="image.default"
                                                                                                        data-lzl-an="zoomIn">
                                                                                                        <div
                                                                                                            class="elementor-widget-container">
                                                                                                            <img fetchpriority="high"
                                                                                                                decoding="async"
                                                                                                                width="2560"
                                                                                                                height="2471"
                                                                                                                class="attachment-full size-full wp-image-1162 lzl"
                                                                                                                alt="Awaken Your inner self by Dr. Gil Gockley"
                                                                                                                sizes="(max-width: 2560px) 100vw, 2560px"
                                                                                                                srcset="{{ $banner->image }} 2560w, {{ $banner->image }} 300w, {{ $banner->image }} 1024w, {{ $banner->image }} 768w, {{ $banner->image }} 1536w, {{ $banner->image }} 2048w"
                                                                                                                src="{{ $banner->image }}">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                            <div class="swiper-pagination"></div>
                                                                        </div>
                                                                    @else
                                                                        @php
                                                                            $banner = $banners->first();
                                                                        @endphp
                                                                        <div class="e-con-inner banner-content">
                                                                            <div class="e-con-inner banner-inner">
                                                                                <div class="elementor-element elementor-element-0573f95 e-con-full e-flex e-con e-child banner-left"
                                                                                    data-id="0573f95"
                                                                                    data-element_type="container"
                                                                                    data-e-type="container">
                                                                                    <div class="elementor-element elementor-element-2a36134 elementor-widget elementor-widget-heading"
                                                                                        data-id="2a36134"
                                                                                        data-element_type="widget"
                                                                                        data-e-type="widget"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h6
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                {{ $banner->text2 }}
                                                                                            </h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-a83121c elementor-widget elementor-widget-heading"
                                                                                        data-id="a83121c"
                                                                                        data-element_type="widget"
                                                                                        data-e-type="widget"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h1
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                {{ $banner->title }}
                                                                                            </h1>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-6a31f34 elementor-widget elementor-widget-text-editor"
                                                                                        data-id="6a31f34"
                                                                                        data-element_type="widget"
                                                                                        data-e-type="widget"
                                                                                        data-widget_type="text-editor.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            {!! $banner->description !!}
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-f87f02e elementor-tablet-align-center elementor-widget elementor-widget-button"
                                                                                        data-id="f87f02e"
                                                                                        data-element_type="widget"
                                                                                        data-e-type="widget"
                                                                                        data-widget_type="button.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="elementor-button-wrapper">
                                                                                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                                                    href="https://www.youtube.com/@gilgockley1816"
                                                                                                    target="_blank">
                                                                                                    <span
                                                                                                        class="elementor-button-content-wrapper">
                                                                                                        <span
                                                                                                            class="elementor-button-text">Go
                                                                                                            To
                                                                                                            YouTube</span>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-9cca461 e-con-full e-flex e-con e-child banner-right"
                                                                                    data-id="9cca461"
                                                                                    data-element_type="container"
                                                                                    data-e-type="container">
                                                                                    <div class="elementor-element elementor-element-08884ad elementor-invisible elementor-widget elementor-widget-image"
                                                                                        data-id="08884ad"
                                                                                        data-element_type="widget"
                                                                                        data-e-type="widget"
                                                                                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","motion_fx_scale_effect":"yes","motion_fx_scale_speed":{"unit":"px","size":2,"sizes":[]},"motion_fx_scale_range":{"unit":"%","size":"","sizes":{"start":49,"end":75}},"_animation":"zoomIn","motion_fx_scale_direction":"out-in","motion_fx_devices":["desktop","tablet","mobile"]}'
                                                                                        data-widget_type="image.default"
                                                                                        data-lzl-an="zoomIn">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <img fetchpriority="high"
                                                                                                decoding="async"
                                                                                                width="2560"
                                                                                                height="2471"
                                                                                                class="attachment-full size-full wp-image-1162 lzl"
                                                                                                alt="Awaken Your inner self by Dr. Gil Gockley"
                                                                                                sizes="(max-width: 2560px) 100vw, 2560px"
                                                                                                srcset="{{ $banner->image }} 2560w, {{ $banner->image }} 300w, {{ $banner->image }} 1024w, {{ $banner->image }} 768w, {{ $banner->image }} 1536w, {{ $banner->image }} 2048w"
                                                                                                src="{{ $banner->image }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-b70552d e-flex e-con-boxed e-con e-parent"
                                        data-id="b70552d" data-element_type="container" data-e-type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-3c91444 e-flex e-con-boxed e-con e-child"
                                                data-id="3c91444" data-element_type="container"
                                                data-e-type="container"
                                                data-settings='{"background_background":"classic"}'>
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-44223f8 elementor-widget elementor-widget-image"
                                                        data-id="44223f8" data-element_type="widget"
                                                        data-e-type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container"> <img decoding="async"
                                                                width="1536" height="2048"
                                                                class="attachment-full size-full wp-image-1312 lzl"
                                                                alt="Author Dr. Gil Gockley"
                                                                sizes="(max-width: 1536px) 100vw, 1536px"
                                                                srcset="{{ asset('asset/images/54545.png') }} 1536w, {{ asset('asset/images/54545-225x300.png') }} 225w, {{ asset('asset/images/54545-768x1024.png') }} 768w, {{ asset('asset/images/54545-1152x1536.png') }} 1152w"
                                                                src="{{ asset('asset/images/54545.png') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c8dd1b8 animated-slow e-con-full e-flex elementor-invisible e-con e-child"
                                                data-id="c8dd1b8" data-element_type="container"
                                                data-e-type="container" data-settings='{"animation":"fadeInUp"}'
                                                data-lzl-an="fadeInUp">
                                                <div class="elementor-element elementor-element-81af360 elementor-widget elementor-widget-heading"
                                                    data-id="81af360" data-element_type="widget" data-e-type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $about->page_name }}</h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-123f6f5 elementor-widget elementor-widget-heading"
                                                    data-id="123f6f5" data-element_type="widget" data-e-type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $about->name }}</h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1f3d191 elementor-widget elementor-widget-text-editor"
                                                    data-id="1f3d191" data-element_type="widget" data-e-type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        {!! $about->content !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-840870c e-flex e-con-boxed e-con e-parent"
                                        data-id="840870c" data-element_type="container" data-e-type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-bee8e59 animated-slow e-flex e-con-boxed elementor-invisible e-con e-child"
                                                data-id="bee8e59" data-element_type="container"
                                                data-e-type="container" data-settings='{"animation":"fadeInUp"}'
                                                data-lzl-an="fadeInUp">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-a42292d elementor-widget elementor-widget-text-editor"
                                                        data-id="a42292d" data-element_type="widget"
                                                        data-e-type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            {!! $about_sec[0]->value !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-30fac53 e-flex e-con-boxed e-con e-parent lzl"
                                        data-id="30fac53" data-element_type="container" data-e-type="container"
                                        data-settings='{"background_background":"classic"}' data-lzl-bg="">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-e92ebad elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-invisible elementor-widget elementor-widget-divider"
                                                data-id="e92ebad" data-element_type="widget" data-e-type="widget"
                                                data-settings='{"_animation":"zoomIn"}'
                                                data-widget_type="divider.default" data-lzl-an="zoomIn">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider"> <span
                                                            class="elementor-divider-separator">
                                                            <span
                                                                class="elementor-divider__text elementor-divider__element">
                                                                About the Book </span>
                                                        </span> </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b4afa99 e-con-full e-flex e-con e-child"
                                                data-id="b4afa99" data-element_type="container"
                                                data-e-type="container"
                                                data-settings='{"background_background":"classic"}'>
                                                <div class="elementor-element elementor-element-4115283 e-con-full e-flex elementor-invisible e-con e-child"
                                                    data-id="4115283" data-element_type="container"
                                                    data-e-type="container"
                                                    data-settings='{"animation":"fadeInRight"}'
                                                    data-lzl-an="fadeInRight">
                                                    <div class="elementor-element elementor-element-0e0283f e-con-full e-flex e-con e-child"
                                                        data-id="0e0283f" data-element_type="container"
                                                        data-e-type="container">
                                                        <div class="elementor-element elementor-element-6564faf elementor-widget elementor-widget-heading"
                                                            data-id="6564faf" data-element_type="widget"
                                                            data-e-type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    {{ $book->name }}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-94c3ff1 elementor-widget elementor-widget-heading"
                                                            data-id="94c3ff1" data-element_type="widget"
                                                            data-e-type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    {{ $book_sec[0]->value }}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2b5cbd7 elementor-widget elementor-widget-heading"
                                                            data-id="2b5cbd7" data-element_type="widget"
                                                            data-e-type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    {{ $book_sec[1]->value }}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-0bd918f elementor-widget elementor-widget-text-editor"
                                                            data-id="0bd918f" data-element_type="widget"
                                                            data-e-type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                {!! $book->content !!}
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-15e474f e-con-full e-flex e-con e-child"
                                                            data-id="15e474f" data-element_type="container"
                                                            data-e-type="container">
                                                            <div class="elementor-element elementor-element-c1682c5 elementor-tablet-align-center elementor-align-center elementor-widget elementor-widget-button"
                                                                data-id="c1682c5" data-element_type="widget"
                                                                data-e-type="widget"
                                                                data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper"> <a
                                                                            class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                            href="{{ $book_sec[3]->value }}"
                                                                            target="_blank"> <span
                                                                                class="elementor-button-content-wrapper">
                                                                                <span class="elementor-button-icon">
                                                                                    <svg aria-hidden="true"
                                                                                        class="e-font-icon-svg e-fab-amazon"
                                                                                        viewbox="0 0 448 512"
                                                                                        xmlns="http://www.w3.org/2000/svg">

                                                                                    </svg> </span>
                                                                                <span
                                                                                    class="elementor-button-text">{{ $book_sec[2]->value }}</span>
                                                                            </span> </a> </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-1c82dfe elementor-tablet-align-center elementor-align-center elementor-widget elementor-widget-button"
                                                                data-id="1c82dfe" data-element_type="widget"
                                                                data-e-type="widget"
                                                                data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper"> <a
                                                                            class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                            href="{{ $book_sec[5]->value }}"
                                                                            target="_blank"> <span
                                                                                class="elementor-button-content-wrapper">
                                                                                <span
                                                                                    class="elementor-button-text">{{ $book_sec[4]->value }}</span>
                                                                            </span> </a> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-57159c6 e-con-full e-flex e-con e-child"
                                                            data-id="57159c6" data-element_type="container"
                                                            data-e-type="container">
                                                            <div class="elementor-element elementor-element-d3a3e78 elementor-tablet-align-center elementor-align-center elementor-widget elementor-widget-button"
                                                                data-id="d3a3e78" data-element_type="widget"
                                                                data-e-type="widget"
                                                                data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper"> <a
                                                                            class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                            href="{{ $book_sec[7]->value }}"
                                                                            target="_blank"> <span
                                                                                class="elementor-button-content-wrapper">
                                                                                <span
                                                                                    class="elementor-button-text">{{ $book_sec[6]->value }}</span>
                                                                            </span> </a> </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-f7fca0f elementor-tablet-align-center elementor-align-center elementor-widget elementor-widget-button"
                                                                data-id="f7fca0f" data-element_type="widget"
                                                                data-e-type="widget"
                                                                data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper"> <a
                                                                            class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                            href="{{ $book_sec[9]->value }}"
                                                                            target="_blank"> <span
                                                                                class="elementor-button-content-wrapper">
                                                                                <span
                                                                                    class="elementor-button-text">{{ $book_sec[8]->value }}</span>
                                                                            </span> </a> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-2427d78 e-con-full e-flex e-con e-child"
                                                        data-id="2427d78" data-element_type="container"
                                                        data-e-type="container">
                                                        <div class="elementor-element elementor-element-c80b100 elementor-invisible elementor-widget elementor-widget-image"
                                                            data-id="c80b100" data-element_type="widget"
                                                            data-e-type="widget"
                                                            data-settings='{"_animation":"zoomIn","_animation_delay":500}'
                                                            data-widget_type="image.default" data-lzl-an="zoomIn"
                                                            data-lzl-ad="500">
                                                            <div class="elementor-widget-container"> <img
                                                                    decoding="async" width="629" height="759"
                                                                    class="attachment-full size-full wp-image-1164 lzl"
                                                                    alt="Awaken Your inner self by Dr. Gil Gockley"
                                                                    sizes="(max-width: 629px) 100vw, 629px"
                                                                    srcset="{{ $book->image }} 629w, {{ $book->image }} 249w"
                                                                    src="{{ $book->image }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-dbc3646 e-con-full elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-flex elementor-invisible e-con e-child"
                                                    data-id="dbc3646" data-element_type="container"
                                                    data-e-type="container"
                                                    data-settings='{"animation":"fadeInRight"}'
                                                    data-lzl-an="fadeInRight">
                                                    <div class="elementor-element elementor-element-889bc53 e-con-full e-flex e-con e-child"
                                                        data-id="889bc53" data-element_type="container"
                                                        data-e-type="container">
                                                        <div class="elementor-element elementor-element-29cce8f elementor-invisible elementor-widget elementor-widget-image"
                                                            data-id="29cce8f" data-element_type="widget"
                                                            data-e-type="widget"
                                                            data-settings='{"_animation":"zoomIn","_animation_delay":500}'
                                                            data-widget_type="image.default" data-lzl-an="zoomIn"
                                                            data-lzl-ad="500">
                                                            <div class="elementor-widget-container"> <img
                                                                    decoding="async" title="" alt=""
                                                                    loading="lazy" class="lzl"
                                                                    src="{{ asset('asset/images/book-0824.png') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-8151204 e-con-full e-flex e-con e-child"
                                                        data-id="8151204" data-element_type="container"
                                                        data-e-type="container">
                                                        <div class="elementor-element elementor-element-70f8bae elementor-widget elementor-widget-heading"
                                                            data-id="70f8bae" data-element_type="widget"
                                                            data-e-type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    Nail &amp; Tooth</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-641ded2 elementor-widget elementor-widget-text-editor"
                                                            data-id="641ded2" data-element_type="widget"
                                                            data-e-type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <p><em>Nail &amp; Tooth</em> is a dark,
                                                                    unsettling novel that blends psychological
                                                                    suspense, moral tension, and real-world
                                                                    horror. What begins as a discovery rooted in
                                                                    history and chance slowly unravels into a
                                                                    chilling examination of hidden evil,
                                                                    collective silence, and the cost of
                                                                    survival.</p>
                                                                <p>Set against the backdrop of the American
                                                                    South, the story follows Rhi and those
                                                                    around her as wealth, secrecy, and power
                                                                    expose the fractures beneath familiar faces.
                                                                    As buried truths surface—both literal and
                                                                    emotional—the novel confronts how easily
                                                                    evil can disguise itself as generosity,
                                                                    community, and kindness.</p>
                                                                <p>Tense, atmospheric, and unflinching, <em>Nail
                                                                        &amp; Tooth</em> asks difficult
                                                                    questions: Who pays the price when darkness
                                                                    goes unnoticed? And what responsibility do
                                                                    survivors carry once they know the truth?
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-6ba5c74 elementor-tablet-align-center elementor-align-center elementor-widget elementor-widget-button"
                                                            data-id="6ba5c74" data-element_type="widget"
                                                            data-e-type="widget" data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper"> <a
                                                                        class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                                                        href="https://www.amazon.com/"
                                                                        target="_blank"> <span
                                                                            class="elementor-button-content-wrapper">
                                                                            <span class="elementor-button-icon">
                                                                                <svg aria-hidden="true"
                                                                                    class="e-font-icon-svg e-fab-amazon"
                                                                                    viewbox="0 0 448 512"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z">
                                                                                    </path>
                                                                                </svg> </span>
                                                                            <span class="elementor-button-text">Buy
                                                                                From Amazon</span>
                                                                        </span> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6dfca01 e-con-full e-flex elementor-invisible e-con e-child"
                                                    data-id="6dfca01" data-element_type="container"
                                                    data-e-type="container"
                                                    data-settings='{"animation":"fadeInRight"}'
                                                    data-lzl-an="fadeInRight">
                                                    <div class="elementor-element elementor-element-578b938 e-con-full e-flex e-con e-child"
                                                        data-id="578b938" data-element_type="container"
                                                        data-e-type="container">
                                                        <div class="elementor-element elementor-element-0d26272 elementor-widget elementor-widget-video"
                                                            data-id="0d26272" data-element_type="widget"
                                                            data-e-type="widget"
                                                            data-settings='{"video_type":"hosted","autoplay":"yes","play_on_mobile":"yes","mute":"yes","loop":"yes","controls":"yes"}'
                                                            data-widget_type="video.default">
                                                            <div class="elementor-widget-container">
                                                                <div
                                                                    class="e-hosted-video elementor-wrapper elementor-open-inline">
                                                                    <video class="elementor-video"
                                                                        src="{{ asset('asset/images/Gil_video_0_1781738025_0_1781891493-1.mp4') }}"
                                                                        autoplay="" loop="" controls=""
                                                                        muted="muted" playsinline=""
                                                                        controlslist="nodownload"></video>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-87d8cff elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-flex e-con-boxed e-con e-parent"
                                        data-id="87d8cff" data-element_type="container" data-e-type="container"
                                        data-settings='{"background_background":"classic"}'>
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-3571c0e elementor-invisible elementor-widget elementor-widget-image-carousel"
                                                data-id="3571c0e" data-element_type="widget" data-e-type="widget"
                                                data-settings='{"navigation":"none","autoplay_speed":2000,"slides_to_show":"7","_animation":"fadeInRight","autoplay":"yes","pause_on_hover":"yes","pause_on_interaction":"yes","infinite":"yes","speed":500}'
                                                data-widget_type="image-carousel.default" data-lzl-an="fadeInRight">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image-carousel-wrapper swiper"
                                                        role="region" aria-roledescription="carousel"
                                                        aria-label="Image Carousel" dir="ltr">
                                                        <div class="elementor-image-carousel swiper-wrapper"
                                                            aria-live="off">
                                                            <div class="swiper-slide" role="group"
                                                                aria-roledescription="slide" aria-label="1 of 7">
                                                                <figure class="swiper-slide-inner"><img
                                                                        decoding="async"
                                                                        class="swiper-slide-image lzl"
                                                                        alt="1-300x150-1.webp"
                                                                        src="{{ asset('asset/images/1-300x150-1.webp') }}">
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide" role="group"
                                                                aria-roledescription="slide" aria-label="2 of 7">
                                                                <figure class="swiper-slide-inner"><img
                                                                        decoding="async"
                                                                        class="swiper-slide-image lzl"
                                                                        alt="2-300x150-1.webp"
                                                                        src="{{ asset('asset/images/2-300x150-1.webp') }}">
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide" role="group"
                                                                aria-roledescription="slide" aria-label="3 of 7">
                                                                <figure class="swiper-slide-inner"><img
                                                                        decoding="async"
                                                                        class="swiper-slide-image lzl"
                                                                        alt="4-300x150-1.webp"
                                                                        src="{{ asset('asset/images/4-300x150-1.webp') }}">
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide" role="group"
                                                                aria-roledescription="slide" aria-label="4 of 7">
                                                                <figure class="swiper-slide-inner"><img
                                                                        decoding="async"
                                                                        class="swiper-slide-image lzl"
                                                                        alt="2-300x150-2.webp"
                                                                        src="{{ asset('asset/images/2-300x150-2.webp') }}">
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide" role="group"
                                                                aria-roledescription="slide" aria-label="5 of 7">
                                                                <figure class="swiper-slide-inner"><img
                                                                        decoding="async"
                                                                        class="swiper-slide-image lzl"
                                                                        alt="6-300x150-1.webp"
                                                                        src="{{ asset('asset/images/6-300x150-1.webp') }}">
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide" role="group"
                                                                aria-roledescription="slide" aria-label="6 of 7">
                                                                <figure class="swiper-slide-inner"><img
                                                                        decoding="async"
                                                                        class="swiper-slide-image lzl"
                                                                        alt="4-300x150-2.webp"
                                                                        src="{{ asset('asset/images/4-300x150-2.webp') }}">
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide" role="group"
                                                                aria-roledescription="slide" aria-label="7 of 7">
                                                                <figure class="swiper-slide-inner"><img
                                                                        decoding="async"
                                                                        class="swiper-slide-image lzl"
                                                                        alt="7-300x150-1.webp"
                                                                        src="{{ asset('asset/images/7-300x150-1.webp') }}">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5a643cbd e-flex e-con-boxed e-con e-parent lzl"
                                        data-id="5a643cbd" data-element_type="container" data-e-type="container"
                                        data-settings='{"background_background":"classic"}' data-lzl-bg="">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-136204f0 e-con-full e-flex e-con e-child"
                                                data-id="136204f0" data-element_type="container"
                                                data-e-type="container">
                                                <div class="elementor-element elementor-element-72a3264f e-flex e-con-boxed e-con e-child"
                                                    data-id="72a3264f" data-element_type="container"
                                                    data-e-type="container">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-66eb39b elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-invisible elementor-widget elementor-widget-divider"
                                                            data-id="66eb39b" data-element_type="widget"
                                                            data-e-type="widget"
                                                            data-settings='{"_animation":"zoomIn"}'
                                                            data-widget_type="divider.default" data-lzl-an="zoomIn">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-divider"> <span
                                                                        class="elementor-divider-separator">
                                                                        <span
                                                                            class="elementor-divider__text elementor-divider__element">
                                                                            Testimonials </span>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-86d01bd elementor-widget elementor-widget-heading"
                                                            data-id="86d01bd" data-element_type="widget"
                                                            data-e-type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h6
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    What Readers Say</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-31128012 elementor-widget elementor-widget-elementskit-testimonial"
                                                data-id="31128012" data-element_type="widget" data-e-type="widget"
                                                data-widget_type="elementskit-testimonial.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <div class="elementskit-testimonial-slider ekit_testimonial_style_5 arrow_inside"
                                                            data-config='{"rtl":false,"arrows":false,"dots":false,"pauseOnHover":true,"autoplay":true,"speed":1000,"slidesPerGroup":1,"slidesPerView":3,"loop":true,"spaceBetween":15,"breakpoints":{"320":{"slidesPerView":1,"slidesPerGroup":1,"spaceBetween":10},"768":{"slidesPerView":1,"slidesPerGroup":1,"spaceBetween":10},"1024":{"slidesPerView":3,"slidesPerGroup":1,"spaceBetween":15}}}'>
                                                            <div class="ekit-main-swiper swiper">
                                                                <div class="swiper-wrapper">
                                                                    @foreach ($testimonial as $item)
                                                                        <div class="swiper-slide">
                                                                            <div class="swiper-slide-inner">
                                                                                <div
                                                                                    class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two elementor-repeater-item-909e2af">

                                                                                    <!-- Commentor Header with Dynamic Stars -->
                                                                                    <div
                                                                                        class="elementskit-commentor-header">
                                                                                        <!-- Dynamic Stars -->
                                                                                        <ul class="elementskit-stars">
                                                                                            @for ($i = 1; $i <= 5; $i++)
                                                                                                <li>
                                                                                                    <a>
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                            viewbox="0 0 576 512"
                                                                                                            width="18"
                                                                                                            height="18">
                                                                                                            <path
                                                                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                                                                                @if ($i <= $item->rating) fill="#FFB800" @else fill="#E0E0E0" @endif />
                                                                                                        </svg>
                                                                                                    </a>
                                                                                                </li>
                                                                                            @endfor
                                                                                        </ul>

                                                                                        <!-- Watermark Icon -->
                                                                                        <div
                                                                                            class="elementskit-icon-content elementskit-watermark-icon">
                                                                                            <i aria-hidden="true"
                                                                                                class="icon icon-quote"></i>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Commentor Content -->
                                                                                    <div
                                                                                        class="elementskit-commentor-content">
                                                                                        {!! $item->description !!}
                                                                                    </div>

                                                                                    <!-- Commentor Bio -->
                                                                                    <div
                                                                                        class="elementskit-commentor-bio">
                                                                                        <div
                                                                                            class="elementkit-commentor-details">
                                                                                            <div
                                                                                                class="elementskit-profile-info">
                                                                                                <strong
                                                                                                    class="elementskit-author-name">{{ $item->title }}</strong>
                                                                                                <span
                                                                                                    class="elementskit-author-des">{{ $item->text2 }}</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-23420591 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-flex e-con-boxed e-con e-parent"
                                        data-id="23420591" data-element_type="container" data-e-type="container"
                                        data-settings='{"background_background":"classic"}'>
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-768eedcd e-con-full e-flex e-con e-child"
                                                data-id="768eedcd" data-element_type="container"
                                                data-e-type="container">
                                                <div class="elementor-element elementor-element-2a487b05 elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
                                                    data-id="2a487b05" data-element_type="widget"
                                                    data-e-type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon"> <span
                                                                    class="elementor-icon">
                                                                    <i aria-hidden="true"
                                                                        class="icon icon-users1"></i> </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h2 class="elementor-icon-box-title"> <span>
                                                                        10+ </span> </h2>
                                                                <p class="elementor-icon-box-description">
                                                                    Years of experiance </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1c68b382 e-con-full e-flex e-con e-child"
                                                data-id="1c68b382" data-element_type="container"
                                                data-e-type="container">
                                                <div class="elementor-element elementor-element-7b9aacfb elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
                                                    data-id="7b9aacfb" data-element_type="widget"
                                                    data-e-type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon"> <span
                                                                    class="elementor-icon">
                                                                    <i aria-hidden="true"
                                                                        class="icon icon-flower"></i> </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h2 class="elementor-icon-box-title"> <span>
                                                                        42 </span> </h2>
                                                                <p class="elementor-icon-box-description">
                                                                    Event Speaker </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-76f26d04 e-con-full e-flex e-con e-child"
                                                data-id="76f26d04" data-element_type="container"
                                                data-e-type="container">
                                                <div class="elementor-element elementor-element-1cfcd8d1 elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
                                                    data-id="1cfcd8d1" data-element_type="widget"
                                                    data-e-type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon"> <span
                                                                    class="elementor-icon">
                                                                    <i aria-hidden="true"
                                                                        class="icon icon-open-book"></i> </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h2 class="elementor-icon-box-title"> <span>
                                                                        20+ </span> </h2>
                                                                <p class="elementor-icon-box-description">
                                                                    Book Published </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-33235df0 e-con-full e-flex e-con e-child"
                                                data-id="33235df0" data-element_type="container"
                                                data-e-type="container">
                                                <div class="elementor-element elementor-element-1e52f7ae elementor-position-inline-start elementor-view-default elementor-mobile-position-block-start elementor-widget elementor-widget-icon-box"
                                                    data-id="1e52f7ae" data-element_type="widget"
                                                    data-e-type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon"> <span
                                                                    class="elementor-icon">
                                                                    <i aria-hidden="true"
                                                                        class="icon icon-Rating"></i> </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h2 class="elementor-icon-box-title"> <span>
                                                                        1000+ </span> </h2>
                                                                <p class="elementor-icon-box-description">
                                                                    Happy Readers </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5d67790c e-flex e-con-boxed e-con e-parent lzl"
                                        data-id="5d67790c" data-element_type="container" data-e-type="container"
                                        data-settings='{"background_background":"classic"}' data-lzl-bg="">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-df9c18d elementor-widget-divider--view-line_text elementor-widget-divider--element-align-center elementor-invisible elementor-widget elementor-widget-divider"
                                                data-id="df9c18d" data-element_type="widget" data-e-type="widget"
                                                data-settings='{"_animation":"zoomIn"}'
                                                data-widget_type="divider.default" data-lzl-an="zoomIn">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider"> <span
                                                            class="elementor-divider-separator">
                                                            <span
                                                                class="elementor-divider__text elementor-divider__element">
                                                                Blogs </span>
                                                        </span> </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2c0638c elementor-widget elementor-widget-heading"
                                                data-id="2c0638c" data-element_type="widget" data-e-type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">
                                                        Dr. Gockley’s Blog</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-434bfc7e elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-card-shadow-yes elementor-posts__hover-gradient elementor-invisible elementor-widget elementor-widget-posts"
                                                data-id="434bfc7e" data-element_type="widget" data-e-type="widget"
                                                data-settings='{"_animation":"fadeInUp","cards_columns":"3","cards_columns_tablet":"2","cards_columns_mobile":"1","cards_row_gap":{"unit":"px","size":35,"sizes":[]},"cards_row_gap_tablet":{"unit":"px","size":"","sizes":[]},"cards_row_gap_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                data-widget_type="posts.cards" data-lzl-an="fadeInUp">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-posts-container elementor-posts elementor-posts--skin-cards elementor-grid"
                                                        role="list">
                                                        @php
                                                            $latestBlogs = App\Models\Blog::orderBy('created_at', 'asc')
                                                                ->limit(3)
                                                                ->get();
                                                        @endphp

                                                        @forelse($latestBlogs as $blog)
                                                            <article
                                                                class="elementor-post elementor-grid-item post-{{ $blog->id }} post type-post status-publish format-standard has-post-thumbnail hentry category-blogs"
                                                                role="listitem">
                                                                <div class="elementor-post__card">
                                                                    <!-- Blog Image Link -->
                                                                    <a class="elementor-post__thumbnail__link"
                                                                        href="{{ $blog->link ? $blog->link : route('blog.detail', $blog->id) }}"
                                                                        {{ $blog->link ? 'target="_blank"' : '' }}
                                                                        tabindex="-1">
                                                                        <div class="elementor-post__thumbnail">
                                                                            <img loading="lazy" decoding="async"
                                                                                width="800" height="600"
                                                                                class="attachment-full size-full wp-image-1353 lzl"
                                                                                alt="{{ $blog->title }}"
                                                                                sizes="(max-width: 800px) 100vw, 800px"
                                                                                srcset="{{ asset($blog->image) }} 800w"
                                                                                src="{{ asset($blog->image) }}"
                                                                                onerror="this.src='{{ asset('asset/images/default-blog.jpg') }}'">
                                                                        </div>
                                                                    </a>

                                                                    <div class="elementor-post__badge">Blogs</div>

                                                                    <div class="elementor-post__text">
                                                                        <!-- Blog Title -->
                                                                        <h3 class="elementor-post__title">
                                                                            <a href="{{ $blog->link ? $blog->link : route('blog.detail', $blog->id) }}"
                                                                                {{ $blog->link ? 'target="_blank"' : '' }}>
                                                                                {{ $blog->title }}
                                                                            </a>
                                                                        </h3>

                                                                        <!-- Blog Description -->
                                                                        <div class="elementor-post__excerpt">
                                                                            <p>{{ \Str::limit(strip_tags($blog->description), 120, '...') }}
                                                                            </p>
                                                                        </div>

                                                                        <!-- Read More Button -->
                                                                        <a class="elementor-post__read-more"
                                                                            href="{{ $blog->link ? $blog->link : route('blog.detail', $blog->id) }}"
                                                                            {{ $blog->link ? 'target="_blank"' : '' }}
                                                                            aria-label="Read more about {{ $blog->title }}"
                                                                            tabindex="-1">
                                                                            Read More @if ($blog->link)
                                                                                <i
                                                                                    class="fas fa-external-link-alt"></i>
                                                                            @endif »
                                                                        </a>
                                                                    </div>

                                                                    <div class="elementor-post__meta-data">
                                                                        <span class="elementor-post-date">
                                                                            {{ $blog->created_at->format('F d, Y') }}
                                                                        </span>
                                                                        <span class="elementor-post-avatar">
                                                                            No Comments
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        @empty
                                                            <div class="col-12 text-center py-5">
                                                                <p>No blogs found.</p>
                                                            </div>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


@section('js')
<script type="text/javascript"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const el = document.querySelector('.elementor-element-86040f0');
        if (!el) return;

        const images = [
            "{{ asset('asset/images/img-4846.png') }}",
            "{{ asset('asset/images/bgbgbg.png') }}"
        ];
        let index = 0;

        setInterval(function() {
            index = (index + 1) % images.length;
            el.style.backgroundImage = 'url("' + images[index] + '")';
            el.style.backgroundSize = 'cover';
            el.style.backgroundPosition = 'center';
        }, 5000);
    });
</script>
<script>
    @if ($banners->count() > 1)
        new Swiper(".bannerSwiper", {
            loop: true,
            speed: 1000,
            spaceBetween: 0,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            effect: "slide",
        });
    @endif
</script>
@endsection
