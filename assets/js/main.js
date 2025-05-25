jQuery(document).ready(function($) {
    // Hero Slider initialization
    $('.hero-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            }
        ]
    });

    // Mobile menu toggle
    $('.mobile-menu-toggle').click(function(e) {
        e.preventDefault();
        $('.main-navigation').toggleClass('active');
        $(this).toggleClass('active');
    });

    // Smooth scroll for anchor links
    $('a[href*="#"]').not('[href="#"]').click(function(e) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
                return false;
            }
        }
    });

    // Sticky header
    var header = $('.site-header');
    var headerOffset = header.offset().top;

    $(window).scroll(function() {
        if ($(window).scrollTop() > headerOffset) {
            header.addClass('sticky');
        } else {
            header.removeClass('sticky');
        }
    });

    // Stats animation
    function animateStats() {
        $('.stat-card').each(function() {
            var $this = $(this);
            var countTo = $this.find('.stat-number').data('count');

            $({ countNum: 0 }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'linear',
                step: function() {
                    $this.find('.stat-number').text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.find('.stat-number').text(this.countNum);
                }
            });
        });
    }

    // Trigger stats animation when in viewport
    $(window).scroll(function() {
        var statsSection = $('.stats-grid');
        if (statsSection.length) {
            var statsPosition = statsSection.offset().top;
            var windowHeight = $(window).height();
            var scrollPosition = $(window).scrollTop();

            if (scrollPosition + windowHeight > statsPosition) {
                animateStats();
                $(window).off('scroll'); // Remove scroll event after animation
            }
        }
    });

    // Form validation
    $('.contact-form form').submit(function(e) {
        var valid = true;
        $(this).find('input[required], textarea[required]').each(function() {
            if (!$(this).val()) {
                valid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });

        if (!valid) {
            e.preventDefault();
            $('.form-message').html('<div class="error-message">Veuillez remplir tous les champs requis.</div>');
        }
    });

    // Remove error class on input
    $('.contact-form input, .contact-form textarea').on('input', function() {
        $(this).removeClass('error');
        $('.form-message').empty();
    });

    // Initialize AOS (Animate On Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    }

    // News card hover effect
    $('.news-card').hover(
        function() {
            $(this).find('.news-content').slideDown(200);
        },
        function() {
            $(this).find('.news-content').slideUp(200);
        }
    );

    // Handle window resize
    $(window).resize(function() {
        // Reinitialize slick slider on window resize
        $('.hero-slider').slick('resize');
        
        // Reset mobile menu state on window resize
        if ($(window).width() > 768) {
            $('.main-navigation').removeClass('active');
            $('.mobile-menu-toggle').removeClass('active');
        }
    });
});
