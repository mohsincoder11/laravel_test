jQuery(function($) {

    // ===================================



    $('.built-carousel').owlCarousel({
        loop: false,
        margin: 30,
        dots: false,
        // center: true,
        nav: true,
        autoplay: false,
        autoHeight: true,
        autoWidth: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        navText: ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
        responsive: {

            0: {
                items: 2
            },
            768: {
                items: 3
            },
            991: {
                items: 4
            },
            1200: {
                items: 5
            },
        }
    })


    // ============================================================
    $('.partner-carousel').owlCarousel({
        loop: false,
        margin: 30,
        dots: false,
        // center: true,
        nav: true,
        autoplay: false,
        autoHeight: true,
        autoWidth: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        navText: ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
        responsive: {

            0: {
                items: 2
            },
            768: {
                items: 3
            },
            991: {
                items: 4
            },
        }
    })





    // ===================================
});