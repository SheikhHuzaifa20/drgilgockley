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
                                            data-settings='{"background_background":"slideshow","background_slideshow_gallery":[{"id":1178,"url":"{{ asset('asset/images/bgbgbg.png') }}"}],"background_slideshow_loop":"yes","background_slideshow_slide_duration":5000,"background_slideshow_slide_transition":"fade","background_slideshow_transition_duration":500}'
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
                                        <div class="elementor-element elementor-element-b70552d e-flex e-con-boxed e-con e-parent"
                                            data-id="b70552d" data-element_type="container" data-e-type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-3c91444 e-flex e-con-boxed e-con e-child"
                                                    data-id="3c91444" data-element_type="container" data-e-type="container"
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
                                                                    srcset="{{ $page->image }} 1536w, {{ $page->image }} 225w, {{ $page->image }} 768w, {{ $page->image }} 1152w"
                                                                    src="{{ $page->image }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c8dd1b8 animated-slow e-con-full e-flex elementor-invisible e-con e-child"
                                                    data-id="c8dd1b8" data-element_type="container" data-e-type="container"
                                                    data-settings='{"animation":"fadeInUp"}' data-lzl-an="fadeInUp">
                                                    <div class="elementor-element elementor-element-81af360 elementor-widget elementor-widget-heading"
                                                        data-id="81af360" data-element_type="widget" data-e-type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h6 class="elementor-heading-title elementor-size-default">
                                                                {{ $page->page_name }}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-123f6f5 elementor-widget elementor-widget-heading"
                                                        data-id="123f6f5" data-element_type="widget" data-e-type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h6 class="elementor-heading-title elementor-size-default">
                                                                {{ $page->name }}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-1f3d191 elementor-widget elementor-widget-text-editor"
                                                        data-id="1f3d191" data-element_type="widget" data-e-type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            {!! $page->content !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-840870c e-flex e-con-boxed e-con e-parent"
                                            data-id="840870c" data-element_type="container" data-e-type="container">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-bee8e59 animated-slow e-flex e-con-boxed elementor-invisible e-con e-child"
                                                    data-id="bee8e59" data-element_type="container" data-e-type="container"
                                                    data-settings='{"animation":"fadeInUp"}' data-lzl-an="fadeInUp">
                                                    <div class="e-con-inner">
                                                        <div class="elementor-element elementor-element-a42292d elementor-widget elementor-widget-text-editor"
                                                            data-id="a42292d" data-element_type="widget"
                                                            data-e-type="widget" data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                {!! $section[0]->value !!}
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
