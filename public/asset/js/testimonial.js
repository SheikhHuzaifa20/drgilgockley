(function($) {
    "use strict";
    
    $(document).ready(function() {
        $('.elementskit-testimonial-slider').each(function() {
            let slider = $(this);
            let config = slider.data('config');
            
            if (config) {
                let swiperConfig = {
                    loop: config.loop || true,
                    speed: config.speed || 1000,
                    slidesPerView: config.slidesPerView || 3,
                    spaceBetween: config.spaceBetween || 15,
                    autoplay: config.autoplay ? {
                        delay: 5000,
                        disableOnInteraction: false,
                    } : false,
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                        },
                        768: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                        },
                        1024: {
                            slidesPerView: config.slidesPerView || 3,
                            spaceBetween: config.spaceBetween || 15,
                        }
                    }
                };
                
                let swiperContainer = slider.find('.swiper');
                if (swiperContainer.length) {
                    new Swiper(swiperContainer[0], swiperConfig);
                }
            }
        });
    });
})(jQuery);