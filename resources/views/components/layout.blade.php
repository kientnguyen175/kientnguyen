<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title ?? 'Page Tittle' }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon" />
    @vite('resources/css/normalize.css')
    @vite('resources/css/font-awesome.min.css')
    @vite('resources/css/style.css')
    @vite('resources/css/colors.css')
    @vite('resources/css/media.css')
    <noscript>
        @vite('resources/css/nojs.css')
    </noscript>
    {{ $style ?? '' }}
</head>
<body>
    <div id="isg-overlay"></div>
    <div id="isg-main">
        <nav id="isg-hidden-menu">
            <ul class="isg-menu">
                {{ $header ?? '' }}
            </ul>
        </nav>
        <header id="isg-header">
            <div class="isg-hamburger">
                <span>Toggle Menu</span>
            </div>
            <div class="isg-intro">
                {{ $banner ?? '' }}
            </div>
        </header>
        {{ $slot }}

        @if (isset($footer))
            {{ $footer }}
        @else
            @include('components.footer')
        @endif
    </div>
    {{ $panels ?? '' }}
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @vite('resources/js/custom.js')
    {{ $scripts ?? '' }}
</body>
</html>
