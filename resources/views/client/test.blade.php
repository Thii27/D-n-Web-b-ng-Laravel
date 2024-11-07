<!-- Culture Category Section -->
<section id="culture-category" class="culture-category section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <div class="section-title-container d-flex align-items-center justify-content-between">
            <h2>Văn Hóa</h2>
            <p><a href="{{ route('category', 'culture') }}">Xem tất cả</a></p>
        </div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
            <div class="col-md-9">

                <!-- Bài viết đầu tiên (bài chính) -->
                <div class="d-lg-flex post-entry">
                    <a href="{{ route('article.show', $articles[0]->id) }}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                        <img src="{{ Storage::url($articles[0]->image) }}" alt="{{ $articles[0]->title }}" class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta">
                            <span class="date">Văn hóa</span> <span class="mx-1">•</span>
                            <span>{{ $articles[0]->created_at->format('M d, Y') }}</span>
                        </div>
                        <h3><a href="{{ route('article.show', $articles[0]->id) }}">{{ $articles[0]->title }}</a></h3>
                        <p>{{ $articles[0]->summary }}</p>
                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="/client/assets/img/person-2.jpg" alt="{{ $articles[0]->author }}" class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">{{ $articles[0]->author }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Các bài viết còn lại -->
                <div class="row">
                    @foreach($articles->slice(1, 2) as $article)
                        <div class="col-lg-4">
                            <div class="post-list border-bottom">
                                <a href="{{ route('article.show', $article->id) }}">
                                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="img-fluid">
                                </a>
                                {{-- <div class="post-meta">
                                    <span class="date">Văn hóa</span> <span class="mx-1">•</span>
                                    <span>{{ $article->created_at->format('M d, Y') }}</span>
                                </div> --}}
                                <h2 class="mb-2">
                                    <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                                </h2>
                                <span class="author mb-3 d-block">{{ $article->author }}</span>
                                <p class="mb-4 d-block">{{ $article->summary }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Các bài viết bên phải -->
            <div class="col-md-3">
                @foreach($articles->slice(3, 3) as $article)
                    <div class="post-list border-bottom">
                        <div class="post-meta">
                            <span class="date">Văn hóa</span> <span class="mx-1">•</span>
                            <span>{{ $article->created_at->format('M d, Y') }}</span>
                        </div>
                        <h2 class="mb-2">
                            <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                        </h2>
                        <span class="author mb-3 d-block">{{ $article->author }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section><!-- /Culture Category Section -->
