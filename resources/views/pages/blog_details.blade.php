@extends('layouts.app')
@section('content')
@include('layouts.bradcam', [
'pageTitle' => 'Blog Details',
'breadcrumb' => 'Blog Details'
])
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">

                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{Storage::url($blog->photo)}}" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>{{$blog->title}}
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> {{$blog->category?->name}}</a></li>

                            <li><a href="#"><i class="fa fa-comments"></i> {{$blog->comments->count()}} Comments</a></li>
                        </ul>
                        <p class="excert">
                            {{$blog->short_description}}
                        </p>
                        <p>
                            {{$blog->description}}
                        </p>
                    </div>
                </div>

                <div class="navigation-top">
                    <!-- <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                            <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p>
                        </div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div> -->
                    <div class="">
                        <!-- class="navigation-area" -->
                        <div class="row">
                            @if($previous)
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">

                                    <a href="{{ route('blog.details', $previous) }}">
                                        <img class="img-fluid" src="{{Storage::url($previous->photo)}}" height="60px" width="60px" alt="">
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="{{ route('blog.details', $previous) }}">
                                        <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="{{ route('blog.details', $previous) }}">
                                        <h4>{{ $previous->title }}</h4>
                                    </a>
                                </div>
                            </div>
                            @endif
                            @if($next)
                            <!-- jodi next a r blog na thake tahole @if($next) and @endif dile error dibe na -->
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="{{ route('blog.details', $next) }}">
                                        <h4>{{ $next->title }}</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="{{ route('blog.details', $next) }}">
                                        <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="{{ route('blog.details', $next) }}">
                                        <img class="img-fluid" src="{{Storage::url($next->photo)}}" height="60px" width="60px" alt="">
                                    </a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="{{asset('frontend-assets/img/blog/author.png')}}" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Harvard milan</h4>
                            </a>
                            <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                                our dominion twon Second divided from</p>
                        </div>
                    </div>
                </div> -->
                <div class="comments-area">
                    <h4>{{$blog->comments->count()}} Comments</h4>
                    @foreach($comments as $comment)
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="{{asset('frontend-assets/img/userComment.jpg')}}" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        {{$comment->comment}}
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">{{$comment->name}}</a>
                                            </h5>
                                            <p class="date">{{ $comment->created_at->timezone('Asia/Dhaka')->format('F j, Y \a\t g:i a') }} ({{ $comment->created_at->diffForHumans() }})
                                            </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply text-uppercase">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form class="form-contact comment_form" action=" {{route('blog.comment.store', $blog)}} " method="post" id="commentForm">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                        placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>
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
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="{{route('blog.details', $blog)}}" method="get">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="search" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                        </form>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        @foreach($categories as $category)
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>{{ $category->name }}</p>
                                    <p>({{$category->blogs->count()}})</p>
                                </a>
                            </li>
                        </ul>
                        @endforeach
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        @foreach($recentPosts as $post)
                        <div class="media post_item">
                            <img src="{{Storage::url($post->photo)}}" style="height: 80px; width:80px ;" alt="post">
                            <div class="media-body">
                                <a href="{{route('blog.details', $post)}}">
                                    <h3>{{$post->title}}</h3>
                                </a>
                                <p>{{ $blog->created_at->format('M d,Y') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </aside>
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('frontend-assets/img/post/post_5.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('frontend-assets/img/post/post_6.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('frontend-assets/img/post/post_7.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('frontend-assets/img/post/post_8.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('frontend-assets/img/post/post_9.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('frontend-assets/img/post/post_10.png')}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection