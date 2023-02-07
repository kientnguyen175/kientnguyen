<x-layout>
    <x-slot:title>Posts</x-slot>

    <x-slot:style>
        @vite('resources/css/posts.scss')
        <style>
            .post-title {
                margin-bottom: 10px;
            }
        </style>
    </x-slot>

    <x-slot:header>
        <li><a href="{{ route('home.index') }}" data-hover="HOME">HOME</a></li>
        <li class="current"><a href="{{ route('posts.index') }}" data-hover="POSTS">POSTS</a></li>
    </x-slot>

    <x-slot:slot>
        <div class="isg-page-content">
            <div id="post-list" class="isg-page-left">
                <article class="isg-article-box" v-for="post in posts">
                    <div class="isg-article-img">
                        <a href="single-post.html"></a>
                        <img src="images/photos/blog-1.jpg" alt="" />
                        <div class="isg-article-icon">
                            <div><i class="fa fa-chain"></i></div>
                        </div>
                    </div>
                    <div class="isg-article-content">
                        <div class="isg-popular-date post-title">
                            <i class="fa fa-globe" aria-hidden="true"></i> @{{ post.user.name }} &#183; @{{ dayjs(posts.created_at).format('DD MMMM YYYY') }}
                        </div>

                        <h3><a href="single-post.html">@{{ post.title }}</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, iste. Recusandae, dolorum! Consectetur ex voluptatem ut rerum dolore corporis, officiis quo, magnam harum nobis libero possimus nesciunt nostrum aperiam facilis.</p>
                    </div>
                </article>
                <!-- PAGER -->
                <div class="isg-pager">
                    <div class="isg-pager-left" v-if="pagination.hasPrevPage"><a href="#" class="isg-button">Previous</a></div>
                    <div class="isg-pager-right" v-if="pagination.hasNextPage"><a href="#" class="isg-button">Next</a></div>
                </div>
            </div>
            <!-- SIDEBAR -->
            <aside class="isg-page-right">
                <!-- SEARCHBOX -->
                <form id="searchform" class="isg-searchbox">
                    <input type="text" id="search" class="isg-searchtext" placeholder="Keyword..." />
                    <input type="submit" name="submit" class="fa-input" value="&#xf002;" />
                </form>
                <!-- POPULAR POSTS -->
                <div class="isg-sidebar-box">
                    <h5>FEATURED POSTS</h5>
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
        <script>
            const postList = new Vue({
                el: '#post-list',
                data: {
                    posts: [],
                    pagination: {
                        currentPage: 1,
                        hasNextPage: false,
                        hasPrevPage: false
                    }
                },
                methods: {
                    async getPosts() {
                        let self = this;
                        axios.get('/api/posts')
                            .then(function (response) {
                                let data = response.data;
                                if (data.status == 'successful') {
                                    self.posts = data.posts;
                                    self.pagination.currentPage = data.pagination.currentPage;
                                    self.pagination.hasNextPage = data.pagination.hasNextPage;
                                    self.pagination.hasPrevPage = data.pagination.hasPrevPage;
                                }
                            })
                    }
                },
                mounted() {
                    this.getPosts();
                }
            });
        </script>
    </x-slot>
</x-layout>
