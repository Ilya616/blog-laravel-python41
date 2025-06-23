
@extends('layouts.category_layout')

@section('content')
    
    <section class="pt-65 pb-65">
        <div class="container">
            <div class="archive-header pb-65">
                <div class="archive-header-title">
                    <h1 class="font-heading mb-30">Lifestyle
                        <sub>17 articles</sub>
                    </h1>
                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit<br> Asperiores non dolor officiis eaque corporis.</p>
                </div>
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Lifestyle
                </div>
            </div>
            <div class="hr"></div>
        </div>
    </section>
    <div class="recent-posts pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="loop-list loop-list-style-1  mb-md-30">

                        @foreach ($posts as $post)
                            <article class="hover-up-3 border-radius-10 overflow-hidden wow fadeIn animated">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="post-thumb position-relative" style="background-image: url(assets/imgs/news/thumb-3.jpg)">
                                            <a class="img-link" href="single.html"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="post-content pr-30">
                                            <div class="post-meta-1 mb-20">
                                                <a href="category.html" class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3" tabindex="0">{{ $post->category->title }}</a>
                                            </div>
                                            <h4 class="post-title mb-40">
                                                <a class="" href="single.html">{{ $post->title }}</a>
                                            </h4>
                                            <div class="d-flex">
                                                <div class="post-meta-2 font-md d-flex w-70">
                                                    <a class="align-self-center" href="page-author.html" tabindex="0">
                                                        <img src="assets/imgs/authors/author.jpg" alt="">
                                                    </a>
                                                    <div class="mb-0">
                                                        <a href="page-author.html" tabindex="0"> <strong class="author-namge">Kate Adie</strong></a>
                                                        <p class="post-on font-sm text-grey-400 mb-0">5 minutes ago</p>
                                                    </div>
                                                </div>
                                                <div class="text-right post-list-icon align-self-center w-30">
                                                    <a><i class="elegant-icon icon_ribbon_alt "></i></a>
                                                    <a><i class="elegant-icon icon_heart_alt "></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach


                        <!-- <article class="hover-up-3 border-radius-10 overflow-hidden wow fadeIn animated">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-thumb position-relative" style="background-image: url(assets/imgs/news/thumb-8.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                    </div>
                                </div>
                                <div class="col-md-7 align-self-center">
                                    <div class="post-content pr-30">
                                        <div class="post-meta-1 mb-20">
                                            <a href="category.html" class="tag-category bg-success shadown-1 text-dark button-shadow hover-up-3" tabindex="0">Travel</a>
                                        </div>
                                        <h4 class="post-title mb-40">
                                            <a class="" href="single.html">After a Few Dates, They Traveled to the Other Side of the World</a>
                                        </h4>
                                        <div class="d-flex">
                                            <div class="post-meta-2 font-md d-flex w-70">
                                                <a class="align-self-center" href="page-author.html" tabindex="0">
                                                    <img src="assets/imgs/authors/author-2.jpg" alt="">
                                                </a>
                                                <div class="mb-0">
                                                    <a href="page-author.html" tabindex="0"> <strong class="author-namge">Aten Joun</strong></a>
                                                    <p class="post-on font-sm text-grey-400 mb-0">12 minutes ago</p>
                                                </div>
                                            </div>
                                            <div class="text-right post-list-icon align-self-center w-30">
                                                <a><i class="elegant-icon icon_ribbon_alt "></i></a>
                                                <a><i class="elegant-icon icon_heart_alt "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="hover-up-3 border-radius-10 overflow-hidden wow fadeIn animated">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-thumb position-relative" style="background-image: url(assets/imgs/news/thumb-5.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                    </div>
                                </div>
                                <div class="col-md-7 align-self-center">
                                    <div class="post-content pr-30">
                                        <div class="post-meta-1 mb-20">
                                            <a href="category.html" class="tag-category bg-primary shadown-1 text-dark button-shadow hover-up-3" tabindex="0">Health</a>
                                        </div>
                                        <h4 class="post-title mb-40">
                                            <a class="" href="single.html">Jessamyn Stanley's 5-Minute Yoga for Beginners</a>
                                        </h4>
                                        <div class="d-flex">
                                            <div class="post-meta-2 font-md d-flex w-70">
                                                <a class="align-self-center" href="page-author.html" tabindex="0">
                                                    <img src="assets/imgs/authors/author-3.jpg" alt="">
                                                </a>
                                                <div class="mb-0">
                                                    <a href="page-author.html" tabindex="0"> <strong class="author-namge">J. Anna</strong></a>
                                                    <p class="post-on font-sm text-grey-400 mb-0">3 days ago</p>
                                                </div>
                                            </div>
                                            <div class="text-right post-list-icon align-self-center w-30">
                                                <a><i class="elegant-icon icon_ribbon_alt "></i></a>
                                                <a><i class="elegant-icon icon_heart_alt "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="hover-up-3 border-radius-10 overflow-hidden wow fadeIn animated">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-thumb position-relative" style="background-image: url(assets/imgs/news/thumb-6.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                    </div>
                                </div>
                                <div class="col-md-7 align-self-center">
                                    <div class="post-content pr-30">
                                        <div class="post-meta-1 mb-20">
                                            <a href="category.html" class="tag-category bg-danger shadown-1 text-dark button-shadow hover-up-3" tabindex="0">Kitchen</a>
                                        </div>
                                        <h4 class="post-title mb-40">
                                            <a class="" href="single.html">How an MS Diagnosis Changed My Relationship With Food</a>
                                        </h4>
                                        <div class="d-flex">
                                            <div class="post-meta-2 font-md d-flex w-70">
                                                <a class="align-self-center" href="page-author.html" tabindex="0">
                                                    <img src="assets/imgs/authors/author-4.jpg" alt="">
                                                </a>
                                                <div class="mb-0">
                                                    <a href="page-author.html" tabindex="0"> <strong class="author-namge">Kasumi</strong></a>
                                                    <p class="post-on font-sm text-grey-400 mb-0">September 19, 2021</p>
                                                </div>
                                            </div>
                                            <div class="text-right post-list-icon align-self-center w-30">
                                                <a><i class="elegant-icon icon_ribbon_alt "></i></a>
                                                <a><i class="elegant-icon icon_heart_alt "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article> -->
                    </div>
                </div>
                <div class="col-lg-4 primary-sidebar sticky-sidebar">
                    <div class="widget-area">
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeIn animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30 font-heading">Most popular</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    <li class="wow fadeIn animated">
                                        <div class="d-flex latest-small-thumb">
                                            <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html" tabindex="0">
                                                    <img src="assets/imgs/news/thumb-11.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body align-self-center">
                                                <h5 class="post-title mb-15 text-limit-3-row font-medium">
                                                    <a href="single.html" tabindex="0">9 Things I Love About Shaving My Head During Quarantine</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-sm">
                                                    <span class="post-on has-dot">September 15, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeIn animated">
                                        <div class="d-flex latest-small-thumb">
                                            <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html" tabindex="0">
                                                    <img src="assets/imgs/news/thumb-12.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body align-self-center">
                                                <h5 class="post-title mb-15 text-limit-3-row font-medium">
                                                    <a href="single.html" tabindex="0">Where to Score the Best Travel Deals on Cyber Monday</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-sm">
                                                    <span class="post-on has-dot">November 12, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeIn animated">
                                        <div class="d-flex latest-small-thumb">
                                            <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html" tabindex="0">
                                                    <img src="assets/imgs/news/thumb-13.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body align-self-center">
                                                <h5 class="post-title mb-15 text-limit-3-row font-medium">
                                                    <a href="single.html" tabindex="0">5 Kinds of Food-Shamers You Will Encounter (and How to Deal)</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-sm">
                                                    <span class="post-on has-dot">April 10, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeIn animated">
                                        <div class="d-flex latest-small-thumb">
                                            <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html" tabindex="0">
                                                    <img src="assets/imgs/news/thumb-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body align-self-center">
                                                <h5 class="post-title mb-15 text-limit-3-row font-medium">
                                                    <a href="single.html" tabindex="0">12 Best Books to Read at the Beach (or Anywhere) This Summer</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-sm">
                                                    <span class="post-on has-dot">June 15, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget_instagram wow fadeIn animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30 font-heading">Gallery</h5>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li>
                                        <a href="assets/imgs/thumbnail-3.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-1.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-4.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-2.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-5.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-3.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-3.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-4.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-4.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-5.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-5.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-6.jpg" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-65">
                <button class="btn btn-lg bg-dark text-white d-inline-block">Load more posts</button>
            </div>
        </div>
    </div>


@endsection