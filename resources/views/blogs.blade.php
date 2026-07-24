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
                                                            style="font-family: Allura; color: white;">Blogs</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="elementor-element elementor-element-5d67790c e-flex e-con-boxed e-con e-parent lzl"
                                            data-id="5d67790c" data-element_type="container" data-e-type="container"
                                            data-settings='{"background_background":"classic"}' data-lzl-bg="">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-434bfc7e elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-card-shadow-yes elementor-posts__hover-gradient elementor-invisible elementor-widget elementor-widget-posts"
                                                    data-id="434bfc7e" data-element_type="widget" data-e-type="widget"
                                                    data-settings='{"_animation":"fadeInUp","cards_columns":"3","cards_columns_tablet":"2","cards_columns_mobile":"1","cards_row_gap":{"unit":"px","size":35,"sizes":[]},"cards_row_gap_tablet":{"unit":"px","size":"","sizes":[]},"cards_row_gap_mobile":{"unit":"px","size":"","sizes":[]}}'
                                                    data-widget_type="posts.cards" data-lzl-an="fadeInUp">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-posts-container elementor-posts elementor-posts--skin-cards elementor-grid"
                                                            role="list">
                                                            
                                                            @foreach($blogs as $blog)
                                                            <article
                                                                class="elementor-post elementor-grid-item post-{{ $blog->id }} post type-post status-publish format-standard has-post-thumbnail hentry category-blogs"
                                                                role="listitem">
                                                                <div class="elementor-post__card">
                                                                    <!-- Blog Image Link -->
                                                                    <a 
                                                                        @if($blog->link)
                                                                            href="{{ $blog->link }}" 
                                                                            target="_blank"
                                                                        @else
                                                                            href="{{ route('blog.detail', $blog->id) }}"
                                                                        @endif
                                                                        class="elementor-post__thumbnail__link"
                                                                        tabindex="-1">
                                                                        <div class="elementor-post__thumbnail">
                                                                            <img 
                                                                                loading="lazy" 
                                                                                decoding="async"
                                                                                width="800" 
                                                                                height="600"
                                                                                class="attachment-full size-full wp-image-1353 lzl"
                                                                                alt="{{ $blog->title }}"
                                                                                sizes="(max-width: 800px) 100vw, 800px"
                                                                                src="{{ asset($blog->image) }}"
                                                                                srcset="{{ asset($blog->image) }} 800w"
                                                                                onerror="this.src='{{ asset('asset/images/default-blog.jpg') }}'"
                                                                            >
                                                                        </div>
                                                                    </a>
                                                                    
                                                                    <div class="elementor-post__badge">Blogs</div>
                                                                    
                                                                    <div class="elementor-post__text">
                                                                        <!-- Blog Title -->
                                                                        <h3 class="elementor-post__title">
                                                                            <a 
                                                                                @if($blog->link)
                                                                                    href="{{ $blog->link }}" 
                                                                                    target="_blank"
                                                                                @else
                                                                                    href="{{ route('blog.detail', $blog->id) }}"
                                                                                @endif
                                                                            >
                                                                                {{ $blog->title }}
                                                                            </a>
                                                                        </h3>
                                                                        
                                                                        <!-- Blog Description (limited to 150 characters) -->
                                                                        <div class="elementor-post__excerpt">
                                                                            <p>{{ \Str::limit(strip_tags($blog->description), 150, '...') }}</p>
                                                                        </div>
                                                                        
                                                                        <!-- Read More Button -->
                                                                        <a 
                                                                            @if($blog->link)
                                                                                href="{{ $blog->link }}" 
                                                                                target="_blank"
                                                                            @else
                                                                                href="{{ route('blog.detail', $blog->id) }}"
                                                                            @endif
                                                                            class="elementor-post__read-more"
                                                                            aria-label="Read more about {{ $blog->title }}"
                                                                            tabindex="-1"
                                                                        >
                                                                            Read More @if($blog->link) <i class="fas fa-external-link-alt"></i> @endif »
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
                                                            @endforeach

                                                            @if($blogs->isEmpty())
                                                            <div class="col-12 text-center py-5">
                                                                <p>No blogs found.</p>
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
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection