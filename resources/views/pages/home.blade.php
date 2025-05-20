@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
@include('layouts.bradcam', [
'pageTitle' => 'Blog',
'breadcrumb' => 'Home'
])
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @if($blogs->count() > 0)
                    @foreach($blogs as $blog)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{Storage::url($blog->photo)}}" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>{{ $blog->created_at->format('d') }}</h3>
                                <p>{{ $blog->created_at->format('M') }}</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{route('blog.details', $blog)}}">
                                <h2>{{$blog->title}}</h2>
                            </a>
                            <p>{{$blog->short_description}}</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> {{$blog->category?->name}}</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>{{$blog->comments->count()}} Comments</a></li>
                            </ul>
                        </div>
                    </article>
                    @endforeach
                    @else
                    <p style="color: red; font-size:50px">Blog not found</p>

                    @endif

                    <nav class="blog-pagination justify-content-center d-flex">
                        <!--blog_details পেইজে এই ভেরিয়েবল বসাতে হবে $blogs = Blog::latest()->paginate(5); // প্রতি পেজে ৫টি করে item -->
                        <!-- Laravel default pagination Bootstrap এর সাথে সাপোর্ট করে। আপনার AppServiceProvider.php ফাইলে নিচের কোডটা যুক্ত করুন: -->
                        <!-- 
                        use Illuminate\Pagination\Paginator;
                        public function boot(): void
                        {
                             Paginator::useBootstrap();
                        } -->
                        <ul class="pagination">
                            {!! $blogs->links() !!}
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="{{route('home')}}" method="get">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Search Keyword'" name="search" value="{{request()->search}}">
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
                                <a href="{{route('home',['category'=>$category->id])}}" class="d-flex">
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
                                <p>{{ $post->created_at->format('M d,Y') }}</p>
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