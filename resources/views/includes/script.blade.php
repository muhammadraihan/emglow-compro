<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Core theme JS-->
<script src="{{ url('/js/scripts.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="{{ url('/js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ url('/js/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
    $('.awards-carousel').owlCarousel({
        margin: 36,
        loop: true,
        items: 2,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 2,
                nav: true,
            }
        }
    });

    $('#customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        items: 3,
        margin: 24,
        autoplay: true,
        dots: true,
        autoplayTimeout: 5500,
        smartSpeed: 450,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1170: {
                items: 3
            }
        }
    });

    // Youtube
    $(document).ready(function() {
        $("img").addClass("animated lightSpeedIn");
    });
</script>
<script>
    AOS.init();
</script>
