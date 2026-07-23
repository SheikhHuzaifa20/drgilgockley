@extends('layouts.main')

@section('content')
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
                                            data-settings='{"background_background":"slideshow","background_slideshow_gallery":[{"id":1372,"url":"{{ asset('asset/images/bgbgbg.png') }}"}],"background_slideshow_loop":"yes","background_slideshow_slide_duration":5000,"background_slideshow_slide_transition":"fade","background_slideshow_transition_duration":500}'
                                            data-lzl-bg="">
                                            <div class="e-con-inner" style="justify-content: center !important;">
                                                <div class="elementor-element elementor-element-5e4838d elementor-widget elementor-widget-heading"
                                                    data-id="5e4838d" data-element_type="widget" data-e-type="widget"
                                                    data-widget_type="heading.default" bis_skin_checked="1">
                                                    <div class="elementor-widget-container" bis_skin_checked="1">
                                                        <h1 class="elementor-heading-title elementor-size-default"
                                                            style="font-family: Allura; color: white;">
                                                            {{ $page->page_name }}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="elementor-element elementor-element-30fac53 e-flex e-con-boxed e-con e-parent lzl"
                                            data-id="30fac53" data-element_type="container" data-e-type="container"
                                            data-settings='{"background_background":"classic"}' data-lzl-bg="">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-b4afa99 e-con-full e-flex e-con e-child"
                                                    data-id="b4afa99" data-element_type="container" data-e-type="container"
                                                    data-settings='{"background_background":"classic"}'>
                                                    <div class="elementor-element elementor-element-4115283 e-con-full e-flex elementor-invisible e-con e-child"
                                                        data-id="4115283" data-element_type="container"
                                                        data-e-type="container" data-settings='{"animation":"fadeInRight"}'
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
                                                                        {{ $page->name }}</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-94c3ff1 elementor-widget elementor-widget-heading"
                                                                data-id="94c3ff1" data-element_type="widget"
                                                                data-e-type="widget" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2
                                                                        class="elementor-heading-title elementor-size-default">
                                                                        {{ $section[0]->value }}</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-2b5cbd7 elementor-widget elementor-widget-heading"
                                                                data-id="2b5cbd7" data-element_type="widget"
                                                                data-e-type="widget" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2
                                                                        class="elementor-heading-title elementor-size-default">
                                                                        {{ $section[1]->value }}</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-0bd918f elementor-widget elementor-widget-text-editor"
                                                                data-id="0bd918f" data-element_type="widget"
                                                                data-e-type="widget"
                                                                data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    {!! $page->content !!}
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
                                                                                href="{{ $section[3]->value}}"
                                                                                target="_blank"> <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-icon">
                                                                                        <svg aria-hidden="true"
                                                                                            class="e-font-icon-svg e-fab-amazon"
                                                                                            viewbox="0 0 448 512"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            
                                                                                        </svg> </span>
                                                                                    <span class="elementor-button-text">{{ $section[2]->value}}</span>
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
                                                                                href="{{ $section[5]->value}}"
                                                                                target="_blank"> <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-text">{{ $section[4]->value}}</span>
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
                                                                                href="{{ $section[7]->value}}"
                                                                                target="_blank"> <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-text">{{ $section[6]->value}}</span>
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
                                                                                href="{{ $section[9]->value}}"
                                                                                target="_blank"> <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-text">{{ $section[8]->value}}</span>
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
                                                                        srcset="{{ $page->image }} 629w, {{ $page->image }} 249w"
                                                                        src="{{ $page->image }}">
                                                                </div>
                                                            </div>
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
