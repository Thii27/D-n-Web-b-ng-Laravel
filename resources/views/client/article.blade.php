@extends('client.layouts.master')

@section('content')
    @include('client.layouts.components.page-title')

    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Posts Section -->
                <section id="blog-posts" class="blog-posts section">
                    <div class="container">
                        <div class="row gy-4 d-flex">

                        
                            @foreach ($articles as $article)
                                <div class="col-lg-6">

                                    <article class="position-relative h-100">

                                        <div class="post-img position-relative overflow-hidden">
                                            <img src="{{ Storage::url($article->image)}}" class="img-fluid" alt="">
                                            
                                        </div>

                                        <div class="post-content d-flex flex-column">

                                            <h3 class="post-title">{{$article->title}}</h3>

                                            <div class="meta d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-person"></i> <span class="ps-2">{{$article->user->name}}</span>
                                                </div>
                                                <span class="px-3 text-black-50">/</span>
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-folder2"></i> <span class="ps-2">{{$article->category->name}}</span>
                                                </div>
                                            </div>

                                            <p>{{$article->summary}}</p>

                                            <hr>

                                            <a href="blog-details.html" class="readmore stretched-link"><span>Read
                                                    More</span><i class="bi bi-arrow-right"></i></a>

                                        </div>

                                    </article>
                                </div>
                            @endforeach
                            <!-- End post list item -->


                        </div>
                    </div>

                </section><!-- /Blog Posts Section -->

                <!-- Blog Pagination Section -->
                <section id="blog-pagination" class="blog-pagination section">

                    <div class="container">
                        <div class="d-flex justify-content-center">
                            {{ $articles->links() }}
                        </div>
                    </div>

                </section><!-- /Blog Pagination Section -->

            </div>

            @include('client.layouts.components.aside')

        </div>
    </div>
@endsection
