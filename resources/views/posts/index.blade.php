<x-layout>
    <x-slot:title>Posts</x-slot>

    <x-slot:style>
        @vite('resources/css/posts.scss')
    </x-slot>

    <x-slot:header>
        <li><a href="{{ route('home.index') }}" data-hover="HOME">HOME</a></li>
        <li class="current"><a href="{{ route('posts.index') }}" data-hover="POSTS">POSTS</a></li>
    </x-slot>

    <x-slot:slot>
        <div class="isg-page-content">
            <div class="isg-page-left">
                <!-- POST 1 -->
                <article class="isg-article-box">
                    <div class="isg-article-img">
                        <a href="single-post.html"></a>
                        <img src="images/photos/blog-1.jpg" alt="" />
                        <div class="isg-article-icon">
                            <div><i class="fa fa-chain"></i></div>
                        </div>
                    </div>
                    <div class="isg-article-content">
                        <div class="isg-post-date">28 JUNE 2016</div>
                        <h3><a href="single-post.html">CILLUM AMET SINGULIS</a></h3>
                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem si ita labore dolor si appellat...</p>
                        <a href="single-post.html" class="isg-button">Read More</a>
                    </div>
                </article>
                <!-- POST 2 -->
                <article class="isg-article-box">
                    <div class="isg-article-img">
                        <a href="single-post.html"></a>
                        <img src="images/photos/blog-2.jpg" alt="" />
                        <div class="isg-article-icon">
                            <div><i class="fa fa-chain"></i></div>
                        </div>
                    </div>
                    <div class="isg-article-content">
                        <div class="isg-post-date">22 JUNE 2016</div>
                        <h3><a href="single-post.html">NESCIUS LEGAM NOSTER</a></h3>
                        <p>Ne nescius exquisitaque ut nescius et legam proident. Noster vidisse ubi ingeniis in iudicem hic possumus si mandaremus tamen de cupidatat concursionibus, incurreret te legam eiusmod, esse deserunt et quem tamen...</p>
                        <a href="single-post.html" class="isg-button">Read More</a>
                    </div>
                </article>
                <!-- POST 3 -->
                <article class="isg-article-box">
                    <div class="isg-article-img">
                        <a href="single-post.html"></a>
                        <img src="images/photos/blog-3.jpg" alt="" />
                        <div class="isg-article-icon">
                            <div><i class="fa fa-chain"></i></div>
                        </div>
                    </div>
                    <div class="isg-article-content">
                        <div class="isg-post-date">19 JUNE 2016</div>
                        <h3><a href="single-post.html">DE QUORUM ELIT</a></h3>
                        <p>De quorum sunt anim consequat est a noster iis elit, tempor te tempor, ea culpa fabulas praetermissum ex illum arbitror est cillum dolore, lorem si cupidatat, deserunt cillum nam cupidatat familiaritatem...</p>
                        <a href="single-post.html" class="isg-button">Read More</a>
                    </div>
                </article>
                <!-- POST 4 -->
                <article class="isg-article-box">
                    <div class="isg-article-img">
                        <a href="single-post.html"></a>
                        <img src="images/photos/blog-4.jpg" alt="" />
                        <div class="isg-article-icon">
                            <div><i class="fa fa-chain"></i></div>
                        </div>
                    </div>
                    <div class="isg-article-content">
                        <div class="isg-post-date">17 JUNE 2016</div>
                        <h3><a href="single-post.html">EXCEPTEUR SUMMIS AUT</a></h3>
                        <p>Deserunt eram summis excepteur legam, eu esse ingeniis praesentibus. Ne quamquam praetermissum de ea a illum quae amet, ex aut summis consequat, vidisse aut litteris, ipsum ullamco ingeniis hic lorem o nam...</p>
                        <a href="single-post.html" class="isg-button">Read More</a>
                    </div>
                </article>
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
                        <img src="images/photos/square.jpg" alt="" />
                    </a>
                    <div class="isg-profile-content">
                        <h3>RYAN WEAVER</h3>
                        <p class="isg-profile-subtitle">Web Designer & Developer</p>
                        <p>Se pariatur ex aliquip ut te arbitror voluptatibus. Nam aliquip nam cernantur in qui duis culpa tamen ullamco...</p>
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
                <!-- SEARCHBOX -->
                <form id="searchform" class="isg-searchbox">
                    <input type="text" id="search" class="isg-searchtext" placeholder="Keyword..." />
                    <input type="submit" name="submit" class="fa-input" value="&#xf002;" />
                </form>
                <!-- POPULAR POSTS -->
                <div class="isg-sidebar-box">
                    <h5>POPULAR POSTS</h5>
                    <ul class="isg-popular-list">
                        <li>
                            <div class="isg-popular-left">
                                <a href="single-post.html">
                                    <img src="images/photos/blog-1-s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="isg-popular-right">
                                <p class="isg-popular-date"><a href="single-post.html">28 JUNE 2016</a></p>
                                <p class="isg-popular-title"><a href="single-post.html">Cillum Amet Singulis</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="isg-popular-left">
                                <a href="single-post.html">
                                    <img src="images/photos/blog-2-s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="isg-popular-right">
                                <p class="isg-popular-date"><a href="single-post.html">22 JUNE 2016</a></p>
                                <p class="isg-popular-title"><a href="single-post.html">Nescius Legam Noster</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="isg-popular-left">
                                <a href="single-post.html">
                                    <img src="images/photos/blog-3-s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="isg-popular-right">
                                <p class="isg-popular-date"><a href="single-post.html">19 JUNE 2016</a></p>
                                <p class="isg-popular-title"><a href="single-post.html">De Quorum Elit</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="isg-popular-left">
                                <a href="single-post.html">
                                    <img src="images/photos/blog-4-s.jpg" alt="" />
                                </a>
                            </div>
                            <div class="isg-popular-right">
                                <p class="isg-popular-date"><a href="single-post.html">17 JUNE 2016</a></p>
                                <p class="isg-popular-title"><a href="single-post.html">Excepteur Summis Aut</a></p>
                            </div>
                        </li>
                    </ul>
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
                <!-- BANNER -->
                <div class="isg-banner">
                    <a href="index.html" target="_blank"></a>
                    <img src="images/photos/banner.jpg" alt="" />
                    <div class="isg-banner-icon">
                        <div><i class="fa fa-chain"></i></div>
                    </div>
                </div>
                <div class="isg-banner-title">
                    <p><a href="index.html" target="_blank">I'm a Banner !</a></p>
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
</x-layout>
