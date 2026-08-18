jQuery(document).on('ready', function() {
    jQuery(".services-slider > .vce-row-content").slick({
        centerMode: false,
        centerPadding: '0',
        slidesToShow: 4,
        autoplay: false,
        autoplaySpeed: 20000,
        infinite: true,
        dots: false,
        arrows:true,
         nextArrow: '<img src="/wp-content/uploads/2026/08/next-arrow.svg" class="slick-btn slick-next" />',
        prevArrow: '<img src="/wp-content/uploads/2026/08/previous-arrow.svg" class="slick-btn slick-prev" />',
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 766,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    })
.on('setPosition', function (event, slick) {
        slick.$slides.css('height', slick.$slideTrack.height() + 'px');
    });

});

