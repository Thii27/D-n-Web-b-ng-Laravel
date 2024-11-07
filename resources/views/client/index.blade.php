@extends('client.layouts.master')

@section('content')
    <!-- Slider Section -->
    <section id="slider" class="slider section dark-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">

                <script type="application/json" class="swiper-config">
                        {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "centeredSlides": true,
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        }
                        }
                    </script>

                <div class="swiper-wrapper">
                    @foreach ($sliders as $item)
                        <div class="swiper-slide" style="background-image: url('{{ Storage::url($item->image) }}') ;">
                            <div class="content">
                                <h2><a href="single-post.html">{{ $item->title }}</a></h2>
                                <p>{{ $item->summary }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Slider Section -->

    <!-- Trending Category Section -->
    <section id="trending-category" class="trending-category section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">

                        <div class="post-entry lg">
                            <a href="blog-details.html"><img src="/client/assets/img/post-landscape-1.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">văn hóa</span> <span class="mx-1">•</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2><a href="blog-details.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                                temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem?
                                Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut
                                saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum
                                animi atque eveniet, quo, praesentium dignissimos</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="/client/assets/img/person-1.jpg" alt=""
                                        class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Cameron Williamson</h3>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry">
                                    <a href="blog-details.html"><img src="/client/assets/img/post-landscape-2.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Thể Thao</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="blog-details.html">Let’s Get Back to Work, New York</a></h2>
                                </div>
                                <div class="post-entry">
                                    <a href="blog-details.html"><img src="/client/assets/img/post-landscape-5.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Food</span> <span class="mx-1">•</span>
                                        <span>Jul 17th '22</span>
                                    </div>
                                    <h2><a href="blog-details.html">How to Avoid Distraction and Stay Focused During
                                            Video Calls?</a></h2>
                                </div>
                                <div class="post-entry">
                                    <a href="blog-details.html"><img src="/client/assets/img/post-landscape-7.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Design</span> <span class="mx-1">•</span>
                                        <span>Mar 15th '22</span>
                                    </div>
                                    <h2><a href="blog-details.html">Why Craigslist Tampa Is One of The Most
                                            Interesting Places On the Web?</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry">
                                    <a href="blog-details.html"><img src="/client/assets/img/post-landscape-3.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">•</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="blog-details.html">6 Easy Steps To Create Your Own Cute Merch For
                                            Instagram</a></h2>
                                </div>
                                <div class="post-entry">
                                    <a href="blog-details.html"><img src="/client/assets/img/post-landscape-6.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">•</span>
                                        <span>Mar 1st '22</span>
                                    </div>
                                    <h2><a href="blog-details.html">10 Life-Changing Hacks Every Working Mom Should
                                            Know</a></h2>
                                </div>
                                <div class="post-entry">
                                    <a href="blog-details.html"><img src="/client/assets/img/post-landscape-8.jpg"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Travel</span> <span class="mx-1">•</span>
                                        <span>Jul 5th '22</span>
                                    </div>
                                    <h2><a href="blog-details.html">5 Great Startup Tips for Female Founders</a>
                                    </h2>
                                </div>
                            </div>

                            <!-- Trending Section -->
                            <div class="col-lg-4">

                                <div class="trending">
                                    <h3>Xu Hướng</h3>
                                    <ul class="trending-post">
                                        <li>
                                            <a href="blog-details.html">
                                                <span class="number">1</span>
                                                <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                                                <span class="author">Jane Cooper</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <span class="number">2</span>
                                                <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire
                                                    Your New Haircut</h3>
                                                <span class="author">Wade Warren</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <span class="number">3</span>
                                                <h3>13 Amazing Poems from Shel Silverstein with Valuable Life
                                                    Lessons</h3>
                                                <span class="author">Esther Howard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <span class="number">4</span>
                                                <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                                                <span class="author">Cameron Williamson</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <span class="number">5</span>
                                                <h3>Life Insurance And Pregnancy: A Working Mom’s Guide</h3>
                                                <span class="author">Jenny Wilson</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- End Trending Section -->
                        </div>
                    </div>

                </div> <!-- End .row -->
            </div>

        </div>

    </section><!-- /Trending Category Section -->
    @if (!empty($postsByCategory))
        @foreach ($categories as $category)
            <!-- Culture Category Section -->
            <section id="culture-category" class="culture-category section ">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <div class="section-title-container d-flex align-items-center justify-content-between">
                        <h2>{{ $category->name }}</h2>
                        <p><a href="{{ route('client.article', $category->id) }}">Xem tất cả</a></p>
                    </div>
                </div>
                <!-- End Section Title -->
                @php
                    $articlesGroup = $postsByCategory[$category->id] ?? null;
                @endphp

                {{-- articles --}}
                @if (isset($articlesGroup))
                    <div class="container">
                        <div class="row">
                            <div class=" d-flex">

                                <div class="d-block">
                                    <!-- Hiển thị bài viết đầu tiên -->
                                    @if (!empty($articlesGroup['firstArticle']))
                                        <div class="d-lg-flex post-entry">
                                            <a href="#" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                                <img src="{{ Storage::url($articlesGroup['firstArticle']->image) }}"
                                                    alt="{{ $articlesGroup['firstArticle']->title }}" class="img-fluid">
                                            </a>
                                            <div>
                                                <h3><a href="{{route('client.single-article', $articlesGroup['firstArticle']->id)}}">{{ $articlesGroup['firstArticle']->title }}</a></h3>
                                                <p>{{ $articlesGroup['firstArticle']->summary }}</p>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- 2 bài viết tiếp theo -->
                                    <div class="row ">
                                        @if (!empty($articlesGroup['nextTwoArticles']))
                                            @foreach ($articlesGroup['nextTwoArticles'] as $article)
                                                <div class="col-lg-4 d-block">
                                                    <div class="post-list border-bottom">
                                                        <a href="#">
                                                            <img src="{{ Storage::url($article->image) }}" alt=""
                                                                class="img-fluid">
                                                        </a>
                                                        <h2><a href="{{route('client.single-article', $article->id)}}">{{ $article->title }}</a></h2>
                                                        <span class="author">{{ $article->user->name }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>

                                <!-- 3 bài viết còn lại -->
                                <div class="row d-block">
                                    @if (isset($articlesGroup['remainingArticles']))
                                        @foreach ($articlesGroup['remainingArticles'] as $article)
                                            <div class="col-lg-4">
                                                <div class="post-list border-bottom">
                                                    <a href="#">
                                                        <img src="{{ Storage::url($article->image) }}"
                                                            alt="{{ $article->title }}" class="img-fluid">
                                                    </a>
                                                    <h2><a href="{{route('client.single-article',  $article->id)}}">{{ $article->title }}</a></h2>
                                                    <span class="author">{{ $article->author }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </section><!-- /Culture Category Section -->

            {{-- end article --}}
        @endforeach
    @endif

@endsection
