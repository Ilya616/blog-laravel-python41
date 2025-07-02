
@extends('layouts.category_layout')

@section('content')
    <main>
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-50 pt-50">
                <div class="post-meta-1 mb-20">
                    <a href="category.html" class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3" tabindex="0">Lifestyle</a>
                    <span class="post-date text-muted font-md">September 15, 2021</span>
                </div>
                <h1 class="entry-title mb-50 fw-700">
                    {{ $post['title'] }}
                </h1>
                <div class="row align-self-center">
                    <div class="col-md-6">
                        <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                            <a href="page-author.html" tabindex="0">
                                <img src="assets/imgs/authors/author.jpg" alt="">
                                <span class="author-namge">{{ $post->author->name }}</span>
                            </a>
                            <span class="time-to-read has-dot">6 mins to read</span>
                        </div>
                    </div>
                    <div class="col-md-6 text-right d-none d-md-inline">
                        <div class="single-social-share clearfix wow fadeIn  font-sm animated" style="visibility: visible; animation-name: fadeIn;">
                            <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                                <span class="hit-count mr-15"><i class="elegant-icon icon_comment_alt mr-5"></i>182 comments</span>
                                <span class="hit-count mr-15"><i class="elegant-icon icon_like mr-5"></i>268 likes</span>
                                <span class="hit-count"><i class="elegant-icon icon_star-half_alt mr-5"></i>Rate: 9/10</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end single header-->
            <figure class="image mb-30 m-auto text-center border-radius-10 hover-up-3">
                <img class="border-radius-10" src="assets/imgs/news/news-16.jpg" alt="post-title">
            </figure>
            <!--figure-->
            <article class="entry-wraper mb-50">

                {!! $post['content'] !!}

                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated" style="visibility: hidden; animation-name: none;">
                    <div class="tags w-50 w-sm-100">
                        <h5 class="mb-15">Tags: </h5>
                        <a href="category.html" rel="tag" class="hover-up-3">deer</a>
                        <a href="category.html" rel="tag" class="hover-up-3">nature</a>
                        <a href="category.html" rel="tag" class="hover-up-3">conserve</a>
                    </div>
                    <div class="single-social-share clearfix wow fadeIn animated mb-15 w-50 w-sm-100" style="visibility: hidden; animation-name: none;">
                        <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                            <li class="list-inline-item text-muted"><span>Share this: </span></li>
                            <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                            <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--author box-->
                <div class="author-bio mt-50 border-radius-10 bg-white wow fadeIn animated" style="visibility: hidden; animation-name: none;">
                    <div class="author-image mb-md-30">
                        <a href="page-author.html"><img src="assets/imgs/authors/author-details.jpg" alt="" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn"><a href="page-author.html" title="Posted by Barbara Cartland" rel="author">Barbara Cartland</a></span></span>
                        </h4>
                        <div class="author-description text-muted">You should write because you love the shape of Flow and sentences and the creation of different words on a page. </div>
                        <h6 class="text-grey-400">Social Media</h6>
                        <div class="author-social-small">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="elegant-icon social_twitter "></i></a></li>
                                <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="elegant-icon  social_pinterest "></i></a></li>
                                <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="elegant-icon social_instagram "></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Comments-->
                <div class="comments-area wow fadeIn animated" style="visibility: hidden; animation-name: none;">
                    <div class="widget-header-2 position-relative mb-30">
                        <h3 class="mt-5 mb-30 font-heading">Comments</h3>
                    </div>

                    @foreach($comments as $comment)
                        <div class="comment-list wow fadeIn animated" style="visibility: hidden; animation-name: none;" id="comment_{{ $comment->id }}">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="assets/imgs/authors/author-3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            {{ $comment->content }}

                                            <div>
                                                @if($comment->link != null)
                                                    <a href="{{ $comment->link }}" target="_blank">{{ $comment->link}} </a>
                                                @endif
                                           </div>
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">Danielle Steel</a>
                                                </h5>
                                                <p class="date">December 4, 2020 at 3:12 pm </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- <div class="comment-list wow fadeIn animated" style="visibility: hidden; animation-name: none;">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author-2.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Agatha Christie</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-comment depth-2 justify-content-between d-flex mt-50">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Steven</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list wow fadeIn animated" style="visibility: hidden; animation-name: none;">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author-3.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Donec in ullamcorper quam. Aenean vel nibh eu magna gravida fermentum. Praesent eget nisi pulvinar, sollicitudin eros vitae, tristique odio.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Danielle Steel</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!--comment form-->
                <div class="comment-form wow fadeIn animated pb-35" style="visibility: hidden; animation-name: none;">
                    <div class="widget-header-2 position-relative mb-30">
                        <h3 class="mt-5 mb-30 font-heading">Leave a Reply</h3>
                    </div>
                    <form class="form-contact comment_form" action="{{ url('/comment-request-form') }}" method="POST" id="commentForm">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>

                            <input class="form-control" name="post_id" id="post_id" type="hidden" value="{{ $post->id }}">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg bg-dark text-white d-inline-block">Post Comment</button>
                        </div>
                    </form>
                </div>
                <!--More posts-->
                <div class="single-more-articles border-radius-10">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mb-30 font-heading">Related posts</h5>
                        <button class="single-more-articles-close"><i class="elegant-icon icon_close"></i></button>
                    </div>
                    <div class="post-block-list post-module-1">
                        <ul class="list-post">
                            <li>
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
                            <li>
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
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </main>
@endsection