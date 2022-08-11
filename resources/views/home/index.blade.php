<x-layout>
    <x-slot:title>Home</x-slot>

    <x-slot:banner>
        <div class="isg-intro">
            <!-- MOBILE LOGO -->
            <div class="isg-mobile-logo">
                <img src="{{ asset('images/avatar.jpeg') }}" alt="" />      
            </div>
            <!-- HEADER ICONS -->
            <ul class="isg-header-icons">
                <!-- LOGO -->
                <li class="isg-logo">
                    <img src="{{ asset('images/avatar.jpeg') }}" alt="" />      
                </li>
                <li class="isg-social">
                    <a target="_blank" href="{{ config('social.facebook') }}" class="fa fa-facebook">Facebook</a>
                </li>
                <li class="isg-social">
                    <a target="_blank" href="{{ config('social.github') }}" class="fa fa-github">GitHub</a>
                </li>
                <li class="isg-social">
                    <a target="_blank" href="{{ config('social.instagram') }}" class="fa fa-instagram" target="_blank">Instagram</a>
                </li>
                <li class="isg-social">
                    <a target="_blank" href="{{ config('social.youtube') }}" class="fa fa-youtube-play" target="_blank">Youtube</a>
                </li>
            </ul>
            <h1>KIEN T. NGUYEN</h1>
            <p class="isg-subtitle">Web Developer</p>
        </div>
    </x-slot>

    <x-slot:slot>
        <div id="isg-boxes">
            <div class="isg-box one-third" data-bgcolor="#2E4057">
                <a id="about-link" href="#about" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>PROFILE</h2>
                        <br>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third" data-bgcolor="#422040">
                <a id="resume-link" href="#resume" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>EDUCATION</h2>
                        <br>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third" data-bgcolor="#2E4057">
                <a id="portfolio-link" href="#portfolio" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>EXPERIENCE</h2>
                        <br>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third" data-bgcolor="#422040">
                <a id="contact-link" href="#contact" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>PROJECTS</h2>
                        <br>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third" data-bgcolor="#2E4057">
                <a id="contact-link" href="#contact" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>SKILLS</h2>
                        <br>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third" data-bgcolor="#422040">
                <a id="contact-link" href="#contact" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>AWARDS</h2>
                        <br>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
        </div>
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
</x-layout>
