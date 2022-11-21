<x-layout>
    <x-slot:title>Posts</x-slot>

    <x-slot:style>
        @vite('resources/css/posts.scss')
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <style>
            h3 {
                margin: 0 !important;
            }
            .isg-article-content {
                padding: 30px;
            }
        </style>
    </x-slot>

    <x-slot:header>
        <li><a href="{{ route('home.index') }}" data-hover="HOME">HOME</a></li>
        <li><a href="{{ route('posts.index') }}" data-hover="POSTS">POSTS</a></li>
        <li class="current"><a href="{{ route('user.index') }}" data-hover="ACCOUNT">ACCOUNT</a></li>
    </x-slot>

    <x-slot:slot>
        <div class="isg-page-content">

            <div class="isg-page-left">
                @foreach ($posts as $post)
                    <article class="isg-article-box">
                        <div class="isg-article-img">
                            <a href="single-post.html"></a>
                            <img src="/images/photos/blog-1.jpg" alt="" />
                            <div class="isg-article-icon">
                                <div><i class="fa fa-chain"></i></div>
                            </div>
                        </div>
                        <div class="isg-article-content">
                            <div class="isg-post-date">{{ strtoupper(Carbon\Carbon::parse($post->created_at)->format('d F Y')) }}</div>
                            <h3><a href="single-post.html">{{ $post->title }}</a></h3>
                        </div>
                    </article>
                @endforeach
                <!-- PAGER -->
                <div class="isg-pager">
                    <div class="isg-pager-left"><a href="#" class="isg-button">Previous</a></div>
                    <div class="isg-pager-right"><a href="#" class="isg-button">Next</a></div>
                </div>
            </div>

            <!-- SIDEBAR -->
            <aside class="isg-page-right">
                 <!-- PROFILE CARD -->
                 <div class="isg-profile-card">
                    <a class="isg-profile-thumb" href="index.html">
                        <img src="{{ $user->avatar ?? asset('/images/default_avatar.png') }}" alt="" />
                    </a>
                    <div class="isg-profile-content">
                        <h3>{{ $user->name }}</h3>
                        <ul class="isg-profile-icons">
                            <!-- SOCIAL ICONS -->
                            <li class="isg-social">
                                <a href="#" class="fa fa-facebook-f">Facebook</a>
                            </li>
                            <li class="isg-social">
                                <a href="#" class="fa fa-twitter">Twitter</a>
                            </li>
                            <li class="isg-social">
                                <a href="#" class="fa fa-google-plus">Google</a>
                            </li>
                            <li class="isg-social">
                                <a href="#" class="fa fa-instagram">Instagram</a>
                            </li>
                            <li class="isg-social">
                                <a href="#" class="fa fa-vimeo">Vimeo</a>
                            </li>
                        </ul>
                    </div>
                    <a href="index.html#about" class="isg-profile-button">LEARN MORE</a>
                </div>
                <!-- CATEGORIES -->
                <div class="isg-sidebar-box">
                    <h5>CATEGORIES</h5>
                    <ul class="isg-sidebar-list">
                        <li>
                            <a href="#">O irure nostrud non</a>
                        </li>
                        <li>
                            <a href="#">Eu multos eiusmod deserunt</a>
                        </li>
                        <li>
                            <a href="#">Ab cupidatat philosophari</a>
                        </li>
                        <li>
                            <a href="#">Commodo dolore te nostrud</a>
                        </li>
                    </ul>
                </div>
                <!-- TAGS -->
                <div class="isg-sidebar-box">
                    <h5>TAGS</h5>
                    <div class="isg-tags">
                        <a href="#">Voluptate</a>
                        <a href="#">Deserani</a>
                        <a href="#">Quo eram</a>
                        <a href="#">Mentitum amet sit</a>
                        <a href="#">Cillum</a>
                        <a href="#">Incurreret</a>
                        <a href="#">Mauris</a>
                        <a href="#">Admodum</a>
                        <a href="#">Singulis</a>
                        <a href="#">Quit</a>
                        <a href="#">Eram amet aliqua</a>
                    </div>
                </div>
            </aside>
        </div>

    </x-slot>

    <x-slot:scripts>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
            $('#summernote').summernote({
              placeholder: 'Hello stand alone ui',
              tabsize: 2,
              height: 120,
              toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
              ]
            });
          </script>
    </x-slot>
</x-layout>
