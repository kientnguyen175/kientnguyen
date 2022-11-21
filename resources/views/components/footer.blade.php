@php
    $currentYear = date('Y');
@endphp

<footer id="isg-footer">
    <div class="isg-footer-inner">
        <p>&copy; {{ $currentYear }} {{ config('app.name') }}</p>
    </div>
</footer>
