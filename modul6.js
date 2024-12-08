// Namespace untuk aplikasi
var DigitalLibrary = {
    // Inisialisasi semua komponen
    init: function() {
        this.initMobileMenu();
        this.initSlider();
        this.initFancybox();
        this.initTooltips();
        this.initAnimations();
        this.initDraggable();
        this.initSearchAutocomplete();
    },

    // Mobile Menu
    initMobileMenu: function() {
        $('.mobile-menu-btn').on('click', function() {
            $('.nav-menu').toggleClass('active');
            $(this).toggleClass('active');
        });
    },

    // Slider Buku
    initSlider: function() {
        $('.book-slider').slick({
            dots: true,
            infinite: true,
            speed: 800,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        arrows: false
                    }
                }
            ]
        });
    },

    // Fancybox untuk Gallery
    initFancybox: function() {
        $('[data-fancybox="gallery"]').fancybox({
            loop: true,
            buttons: ['slideShow', 'fullScreen', 'thumbs', 'close'],
            animationEffect: "zoom-in-out",
            transitionEffect: "slide"
        });
    },

    // Tooltips
    initTooltips: function() {
        $('.book-item').tooltipster({
            theme: 'tooltipster-noir',
            animation: 'fade',
            delay: 200,
            side: 'top',
            contentAsHTML: true
        });
    },

    // Animasi
    initAnimations: function() {
        $('.book-item').hover(
            function() {
                $(this).find('img').addClass('animate__animated animate__pulse');
            },
            function() {
                $(this).find('img').removeClass('animate__animated animate__pulse');
            }
        );
    },

    // Draggable Books (jQuery UI)
    initDraggable: function() {
        $('.book-item').draggable({
            revert: true,
            zIndex: 100,
            start: function(event, ui) {
                $(this).addClass('being-dragged');
            },
            stop: function(event, ui) {
                $(this).removeClass('being-dragged');
            }
        });
    },

    // Autocomplete Search
    initSearchAutocomplete: function() {
        var availableBooks = [
            "The Hobbit",
            "Moby Dick",
            "Pride and Prejudice",
            // Tambahkan judul buku lainnya
        ];

        $('#search-books').autocomplete({
            source: availableBooks,
            minLength: 2,
            select: function(event, ui) {
                console.log("Selected: " + ui.item.value);
            }
        });
    }
};

// Document Ready
$(function() {
    DigitalLibrary.init();
});

// Window Load
$(window).on('load', function() {
    // Hapus loading screen jika ada
    $('.loading-screen').fadeOut();
});

// Window Resize
$(window).on('resize', function() {
    // Handle resize events
    if ($(window).width() < 768) {
        $('.nav-menu').removeClass('active');
    }
});

// Error Handling
$(document).ajaxError(function(event, jqxhr, settings, thrownError) {
    console.error("Ajax error occurred:", thrownError);
});

$(document).ready(function() {
    // Initialize search functionality
    $('#searchButton').click(function() {
        performSearch();
    });

    $('#searchInput').on('keyup', function(e) {
        if (e.key === 'Enter') {
            performSearch();
        }
    });

    function performSearch() {
        const searchTerm = $('#searchInput').val().toLowerCase();
        
        $('.book-item').each(function() {
            const title = $(this).data('title').toLowerCase();
            const author = $(this).data('author').toLowerCase();
            const category = $(this).data('category').toLowerCase();
            
            if (title.includes(searchTerm) || 
                author.includes(searchTerm) || 
                category.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
});
