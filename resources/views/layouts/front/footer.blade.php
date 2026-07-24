<footer data-elementor-type="footer" data-elementor-id="19" class="elementor elementor-19 elementor-location-footer"
    data-elementor-post-type="elementor_library">
    <div class="elementor-element elementor-element-31c2e99a e-flex e-con-boxed e-con e-parent" data-id="31c2e99a"
        data-element_type="container" data-e-type="container" data-settings='{"background_background":"classic"}'>
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-e78f2ce e-con-full e-flex e-con e-child" data-id="e78f2ce"
                data-element_type="container" data-e-type="container">
                <div class="elementor-element elementor-element-3785320f e-con-full e-flex e-con e-child"
                    data-id="3785320f" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-85bc2ec elementor-widget elementor-widget-heading"
                        data-id="85bc2ec" data-element_type="widget" data-e-type="widget"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h6 class="elementor-heading-title elementor-size-default"><a href="index.php">Dr. Gil
                                    Gockley</a></h6>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-75a8470 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                        data-id="75a8470" data-element_type="widget" data-e-type="widget"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Dr. Gil Gockley, the last surviving teacher of The Human Potential Movement,
                                offers an 11-step inner path to self-awareness, emotional wellness, and
                                spiritual awakening.</p>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5382177b e-con-full e-flex e-con e-child"
                    data-id="5382177b" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-ce56056 elementor-widget elementor-widget-heading"
                        data-id="ce56056" data-element_type="widget" data-e-type="widget"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h6 class="elementor-heading-title elementor-size-default">Quick Links</h6>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-02ca628 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="02ca628" data-element_type="widget" data-e-type="widget"
                        data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item"> <a href="index.php"> <span
                                            class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="icon icon-right-arrow1"></i> </span>
                                        <span class="elementor-icon-list-text">Home</span> </a> </li>
                                <li class="elementor-icon-list-item"> <a href="about-the-author.php"> <span
                                            class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="icon icon-right-arrow1"></i> </span>
                                        <span class="elementor-icon-list-text">About the Author</span> </a>
                                </li>
                                <li class="elementor-icon-list-item"> <a href="about-the-book.php"> <span
                                            class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="icon icon-right-arrow1"></i> </span>
                                        <span class="elementor-icon-list-text">About the Book</span> </a> </li>
                                <li class="elementor-icon-list-item"> <a href="blogs.php">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="icon icon-right-arrow1"></i> </span>
                                        <span class="elementor-icon-list-text">Blogs</span> </a> </li>
                                <li class="elementor-icon-list-item"> <a href="contact-me.php"> <span
                                            class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="icon icon-right-arrow1"></i> </span>
                                        <span class="elementor-icon-list-text">Contact Me</span> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1fef782a e-con-full e-flex e-con e-child"
                    data-id="1fef782a" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-629cda0 elementor-widget elementor-widget-heading"
                        data-id="629cda0" data-element_type="widget" data-e-type="widget"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h6 class="elementor-heading-title elementor-size-default">Contact Info</h6>
                        </div>
                    </div>
                    
                    @php
                        $company_email = DB::table('m_flag')->where('id', 1)->first();
                        $facebook = DB::table('m_flag')->where('id', 2)->first();
                        $instagram = DB::table('m_flag')->where('id', 3)->first();
                        $copyright = DB::table('m_flag')->where('id', 4)->first();
                    @endphp
                    <div class="elementor-element elementor-element-661c44d6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="661c44d6" data-element_type="widget" data-e-type="widget"
                        data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item"> <a href="mailto:{{ $company_email->flag_value }}">
                                        <span class="elementor-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-envelope"
                                                viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                                </path>
                                            </svg> </span> <span
                                            class="elementor-icon-list-text">{{ $company_email->flag_value }}</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-42adf5e e-grid-align-left elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                        data-id="42adf5e" data-element_type="widget" data-e-type="widget"
                        data-widget_type="social-icons.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-social-icons-wrapper elementor-grid" role="list"> <span
                                    class="elementor-grid-item" role="listitem">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-animation-grow elementor-repeater-item-0ae8d70"
                                        href="{{ $facebook->flag_value }}" target="_blank"
                                        data-lzl-clk-nodef="*"> <span class="elementor-screen-only">Facebook</span>
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fab-facebook"
                                            viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                            </path>
                                        </svg> </a>
                                </span> <span class="elementor-grid-item" role="listitem">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-grow elementor-repeater-item-af551dc"
                                        href="{{ $instagram->flag_value }}" target="_blank"
                                        data-lzl-clk-nodef="*"> <span class="elementor-screen-only">Instagram</span>
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fab-instagram"
                                            viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                            </path>
                                        </svg> </a>
                                </span> </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3de976b1 e-con-full elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child"
                    data-id="3de976b1" data-element_type="container" data-e-type="container">
                    <div class="elementor-element elementor-element-db29ac8 elementor-widget elementor-widget-heading"
                        data-id="db29ac8" data-element_type="widget" data-e-type="widget"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h6 class="elementor-heading-title elementor-size-default">Subscribe to Dr. Gil
                                Gockley's YouTube </h6>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d989d19 elementor-tablet-align-center elementor-widget elementor-widget-button"
                        data-id="d989d19" data-element_type="widget" data-e-type="widget"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper"> <a
                                    class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                    href="https://www.youtube.com/@gilgockley1816" target="_blank"> <span
                                        class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right"
                                                viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                                                </path>
                                            </svg> </span>
                                        <span class="elementor-button-text">Click Here</span>
                                    </span> </a> </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-4bf4d7c3 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-button-align-stretch elementor-widget elementor-widget-form"
                        data-id="4bf4d7c3" data-element_type="widget" data-e-type="widget"
                        data-settings='{"button_width":"30","button_width_mobile":"40","step_next_label":"Next","step_previous_label":"Previous","step_type":"number_text","step_icon_shape":"circle"}'
                        data-widget_type="form.default">
                        <div class="elementor-widget-container">
                            <form class="elementor-form" method="post" name="New Form" aria-label="New Form">
                                <input type="hidden" name="post_id" value="19"> <input type="hidden"
                                    name="form_id" value="4bf4d7c3"> <input type="hidden" name="referer_title"
                                    value="Awaken Your Inner Self | Five Miracles for Lasting Inner Peace">
                                <input type="hidden" name="queried_id" value="54">
                                <div class="elementor-form-fields-wrapper elementor-labels-">
                                    <div
                                        class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-70 elementor-sm-60 elementor-field-required">
                                        <label for="form-field-email"
                                            class="elementor-field-label elementor-screen-only">
                                            Email </label> <input size="1" type="email"
                                            name="form_fields[email]" id="form-field-email"
                                            class="elementor-field elementor-size-sm  elementor-field-textual"
                                            placeholder="Your email here" required="required">
                                    </div>
                                    <div
                                        class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-30 e-form__buttons elementor-sm-40">
                                        <button class="elementor-button elementor-size-sm" type="submit"> <span
                                                class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon">
                                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-paper-plane"
                                                        viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z">
                                                        </path>
                                                    </svg> <span class="elementor-screen-only">Submit</span>
                                                </span>
                                            </span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-13d3f388 e-flex e-con-boxed e-con e-child"
                data-id="13d3f388" data-element_type="container" data-e-type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-1e8d5b60 elementor-widget elementor-widget-heading"
                        data-id="1e8d5b60" data-element_type="widget" data-e-type="widget"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default"> {{ $copyright->flag_value }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<script>
    document.documentElement.style.setProperty('--scrollbar-offset', window.innerWidth - document.documentElement
        .clientWidth + 'px');
</script>

<script>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
</script>
<script id="ekit-widget-scripts-js" src="{{asset('asset/js/widget-scripts.js')}}"></script>
<script id="hostinger-reach-subscription-block-view-js" src="{{asset('asset/js/subscription-view.js')}}"></script>
<script id="kadence-navigation-js-extra">
    var kadenceConfig = {
        "screenReader": {
            "expand": "Child menu",
            "expandOf": "Child menu of",
            "collapse": "Child menu",
            "collapseOf": "Child menu of"
        },
        "breakPoints": {
            "desktop": "1024",
            "tablet": 768
        },
        "scrollOffset": "0"
    };
    //# sourceURL=kadence-navigation-js-extra
</script>
<script id="kadence-navigation-js" src="{{asset('asset/js/navigation.min.js')}}" async></script>
<script id="elementor-webpack-runtime-js" src="{{asset('asset/js/webpack.runtime.min.js')}}"></script>
<script id="elementor-frontend-modules-js" src="{{asset('asset/js/frontend-modules.min.js')}}"></script>
<script id="jquery-ui-core-js" src="{{asset('asset/js/core.min.js')}}"></script>
<script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            },
            "hasCustomBreakpoints": false
        },
        "version": "4.1.4",
        "is_static": false,
        "experimentalFeatures": {
            "e_font_icon_svg": true,
            "additional_custom_breakpoints": true,
            "container": true,
            "e_panel_promotions": true,
            "theme_builder_v2": true,
            "nested-elements": true,
            "global_classes_should_enforce_capabilities": true,
            "e_variables": true,
            "e_opt_in_v4_page": true,
            "e_components": true,
            "e_interactions": true,
            "e_widget_creation": true,
            "import-export-customization": true,
            "e_pro_atomic_form": true,
            "e_pro_variables": true,
            "e_pro_interactions": true
        },
        "urls": {
            "assets": "https:\/\/drgilgockley.com\/wp-content\/plugins\/elementor\/assets\/",
            "ajaxurl": "https:\/\/drgilgockley.com\/wp-admin\/admin-ajax.php",
            "uploadUrl": "{{asset('asset/images')}}/"
        },
        "nonces": {
            "floatingButtonsClickTracking": "a375b61f04",
            "atomicFormsSendForm": "4dc450a169"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "body_background_background": "classic",
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 54,
            "title": "Awaken%20Your%20Inner%20Self%20%7C%20Five%20Miracles%20for%20Lasting%20Inner%20Peace",
            "excerpt": "",
            "featuredImage": false
        }
    };
    //# sourceURL=elementor-frontend-js-before
</script>
<script id="elementor-frontend-js" src="{{asset('asset/js/frontend.min.js')}}"></script>
<script id="smartmenus-js" src="{{asset('asset/js/jquery.smartmenus.min.js')}}"></script>
<script id="swiper-js" src="{{asset('asset/js/swiper.min.js')}}"></script>
<script id="ekit-core-js" src="{{asset('asset/js/core.js')}}"></script>
<script id="ekit-testimonial-js" src="{{asset('asset/js/testimonial.js')}}"></script>
<script id="imagesloaded-js" src="{{asset('asset/js/imagesloaded.min.js')}}"></script>
<script id="page-links-to-js" src="{{asset('asset/js/new-tab.js')}}"></script>
<script id="elementor-pro-webpack-runtime-js" src="{{asset('asset/js/webpack-pro.runtime.min.js')}}"></script>
<script id="wp-hooks-js" src="{{asset('asset/js/dist/hooks.min.js')}}"></script>
<script id="wp-i18n-js" src="{{asset('asset/js/dist/i18n.min.js')}}"></script>
<script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
    //# sourceURL=wp-i18n-js-after
</script>
<script id="elementor-pro-frontend-js-before">
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/drgilgockley.com\/wp-admin\/admin-ajax.php",
        "nonce": "3d6577605a",
        "urls": {
            "assets": "https:\/\/drgilgockley.com\/wp-content\/plugins\/elementor-pro\/assets\/",
            "rest": "https:\/\/drgilgockley.com\/wp-json\/"
        },
        "settings": {
            "lazy_load_background_images": true
        },
        "popup": {
            "hasPopUps": false
        },
        "shareButtonsNetworks": {
            "facebook": {
                "title": "Facebook",
                "has_counter": true
            },
            "twitter": {
                "title": "Twitter"
            },
            "linkedin": {
                "title": "LinkedIn",
                "has_counter": true
            },
            "pinterest": {
                "title": "Pinterest",
                "has_counter": true
            },
            "reddit": {
                "title": "Reddit",
                "has_counter": true
            },
            "vk": {
                "title": "VK",
                "has_counter": true
            },
            "odnoklassniki": {
                "title": "OK",
                "has_counter": true
            },
            "tumblr": {
                "title": "Tumblr"
            },
            "digg": {
                "title": "Digg"
            },
            "skype": {
                "title": "Skype"
            },
            "stumbleupon": {
                "title": "StumbleUpon",
                "has_counter": true
            },
            "mix": {
                "title": "Mix"
            },
            "telegram": {
                "title": "Telegram"
            },
            "pocket": {
                "title": "Pocket",
                "has_counter": true
            },
            "xing": {
                "title": "XING",
                "has_counter": true
            },
            "whatsapp": {
                "title": "WhatsApp"
            },
            "email": {
                "title": "Email"
            },
            "print": {
                "title": "Print"
            },
            "x-twitter": {
                "title": "X"
            },
            "threads": {
                "title": "Threads"
            }
        },
        "facebook_sdk": {
            "lang": "en_US",
            "app_id": ""
        },
        "lottie": {
            "defaultAnimationUrl": "https:\/\/drgilgockley.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
        }
    };
    //# sourceURL=elementor-pro-frontend-js-before
</script>
<script id="elementor-pro-frontend-js" src="{{asset('asset/js/frontend.min.js')}}"></script>
<script id="pro-elements-handlers-js" src="{{asset('asset/js/elements-handlers.min.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const animatedElements = document.querySelectorAll('.elementor-element[data-lzl-an]');

        function checkScroll() {
            animatedElements.forEach(el => {
                if (el.classList.contains('animated')) return;
                const rect = el.getBoundingClientRect();
                const windowHeight = window.innerHeight || document.documentElement.clientHeight;
                if (rect.top <= windowHeight * 0.9) {
                    const animation = el.getAttribute('data-lzl-an');
                    const delay = el.getAttribute('data-lzl-ad');

                    el.classList.add('animated');

                    function startAnimation() {
                        el.classList.remove('elementor-invisible');
                        el.classList.add(animation);
                        setTimeout(() => {
                            el.classList.add('lzl-an-ed');
                        }, 1000);
                    }

                    if (delay) {
                        setTimeout(startAnimation, parseInt(delay, 10));
                    } else {
                        startAnimation();
                    }
                }
            });
        }

        window.addEventListener('scroll', checkScroll, {
            passive: true
        });
        window.addEventListener('resize', checkScroll, {
            passive: true
        });
        checkScroll();
    });
</script>


</body>

</html>
