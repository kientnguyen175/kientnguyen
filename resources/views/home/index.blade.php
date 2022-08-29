<x-layout>
    <x-slot:title>Home</x-slot>

    <x-slot:style>
        @vite('resources/css/slick.css')
        @vite('resources/css/lightgallery.css')
        @vite('resources/css/home.scss')
    </x-slot>

    <x-slot:header>
        <li class="current"><a href="{{ route('home.index') }}" data-hover="HOME">HOME</a></li>
        <li><a href="{{ route('posts.index') }}" data-hover="POSTS">POSTS</a></li>
    </x-slot>

    <x-slot:banner>
        <div class="isg-intro">
            <div class="isg-mobile-logo">
                <img src="{{ asset('images/avatar.jpeg') }}" alt="" />      
            </div>
            <ul class="isg-header-icons">
                <li class="isg-logo">
                    <img src="{{ asset('images/avatar.jpeg') }}" alt="" />      
                </li>
                @foreach ($socialMedia as $item)
                    <li class="isg-social">
                        {!! $item->html !!}
                    </li>
                @endforeach
            </ul>
            <h1>KIEN T. NGUYEN</h1>
            <p class="isg-subtitle">Web Developer</p>
        </div>
    </x-slot>

    <x-slot:slot>
        <div id="isg-boxes">
            <div class="isg-box one-third">
                <a id="profile-link" href="#profile" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>PROFILE</h2>
                        <br>
                        <b>Explore</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third">
                <a id="education-link" href="#education" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>EDUCATION</h2>
                        <br>
                        <b>Explore</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third">
                <a id="experience-link" href="#experience" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>EXPERIENCE</h2>
                        <br>
                        <b>Explore</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third">
                <a id="projects-link" href="#projects" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>PROJECTS</h2>
                        <br>
                        <b>Explore</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third">
                <a id="skills-link" href="#skills" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>SKILLS</h2>
                        <br>
                        <b>Explore</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third">
                <a id="awards-link" href="#awards" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>AWARDS</h2>
                        <br>
                        <b>Explore</b>
                    </div>
                </a>
            </div>
        </div>
    </x-slot>
    
    <x-slot:footer>
        <footer id="isg-footer">
            <div class="isg-footer-inner">
                <div id="marco">
                    <div id="cielo"></div>
                    <div id="luna"></div>
                    <div id="muro"></div>
                    <div id="edificios"></div>
                </div>
            </div>
        </footer>
    </x-slot>

    <x-slot:panels>
        <div id="isg-panels">
            @include('home.components.profile')
            @include('home.components.education')
            @include('home.components.experience')
            @include('home.components.projects')
            @include('home.components.skills')
            @include('home.components.awards')
        </div>    
    </x-slot>

    <x-slot:scripts>
        @vite('resources/js/isg-panel.min.js')
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                "use strict";
                jQuery('#testimonial-carousel').slick({
                    adaptiveHeight: true,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    arrows: false,
                    dots: true,
                    draggable: false,
                    infinite: true,
                    speed: 500,
                    fade: true
                });
                jQuery("#isg-boxes").find(".isg-panel-open").on('click', function () {
                    setTimeout(function () {
                        jQuery("#isg-panels").find('.isg-slick-carousel').slick('setPosition');
                    }, 100);
                    return false;
                });
            });
        </script>
        @vite('resources/js/lightgallery.min.js')
        @vite('resources/js/portfolio-filter.js')
        @vite('resources/js/galleries.js')
        @vite('resources/js/ajax-contact-form.js')
        @vite('resources/js/home.js')
    </x-slot>
</x-layout>
