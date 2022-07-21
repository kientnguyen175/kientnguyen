<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title ?? 'Page Tittle' }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    @vite('resources/css/normalize.css')
    @vite('resources/css/font-awesome.min.css')
    @vite('resources/css/style.css')
    @vite('resources/css/slick.css')
    @vite('resources/css/lightgallery.css')
    @vite('resources/css/colors.css')
    @vite('resources/css/media.css')
    <noscript>
        @vite('resources/css/nojs.css')
    </noscript>
</head>
<body>
    <div id="isg-page-loading">
        <div class="isg-loading-table">
            <div class="isg-loading-cell">
                <div class="isg-loading-text" data-content="KTN">KTN</div>
            </div>
        </div>
        <div class="isg-loading-bar"></div>
    </div>
    <div id="isg-overlay"></div>
    <div id="isg-main">
        <nav id="isg-hidden-menu">
            <ul class="isg-menu">
                <li class="current"><a href="index.html" data-hover="HOME">HOME</a></li>
            </ul>
        </nav>
        <header id="isg-header">
            <div class="isg-hamburger">
                <span>Toggle Menu</span>
            </div>
            <a id="isg-down-arrow" href="#">
                <i class="fa fa-arrow-circle-o-down"></i>
            </a>

            {{ $banner ?? '' }}

        </header>

        {{ $slot }}

        <footer id="isg-footer">
            <div class="isg-footer-inner">
                <p>Have a good day <i class="fa fa-heart"></i> <i id="isg-back-to-top" class="fa fa-arrow-up"></i></p>
            </div>
        </footer>
    </div>

    {{ $panels ?? '' }}
    
    @vite('resources/js/jquery-3.1.0.min.js')
    <!-- PANEL -->
    @vite('resources/js/isg-panel.min.js')
    <!-- CAROUSEL -->
    @vite('resources/js/slick.min.js')
    <script type="text/javascript">
        // Testimonials carousel
        jQuery(document).ready(function () {
            "use strict";
            // Initialize the plugin
            jQuery('#testimonial-carousel').slick({
                adaptiveHeight: true, // Adaptive height
                autoplay: true, // Autoplay
                autoplaySpeed: 4000, // autoplay speed in milliseconds
                arrows: false, // Navigation arrows
                dots: true, // Navigation dots
                draggable: false, // Draggable
                infinite: true, // Infinite loop
                speed: 500, // Transition speed
                fade: true // Fade Animation
            });
            // Required to display the carousels in the panels correctly.
            jQuery("#isg-boxes").find(".isg-panel-open").on('click', function () {
                setTimeout(function () {
                    jQuery("#isg-panels").find('.isg-slick-carousel').slick('setPosition');
                }, 100);
                return false;
            });
        });
    </script>
    <!-- PORTFOLIO -->
    @vite('resources/js/lightgallery.min.js')
    @vite('resources/js/portfolio-filter.js')
    @vite('resources/js/galleries.js')
    <!-- AJAX CONTACT FORM -->
    @vite('resources/js/ajax-contact-form.js')
    <!-- HOMEPAGE -->
    @vite('resources/js/home.js')
    <!-- CUSTOM -->
    @vite('resources/js/custom.js')
</body>
</html>
