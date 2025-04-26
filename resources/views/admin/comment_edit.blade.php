@extends('admin.layouts.app')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="blog_area single-post-area section-padding">
                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form class="form-contact comment_form" action=" {{route('blog.comment.update', $comment)}} " method="post" id="commentForm">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                        placeholder="Write Comment">{{$comment->comment}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" value="{{$comment->name}}" name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" value="{{$comment->email}}" name="email" id="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" value="{{$comment->website}}" name="website" id="website" type="text" placeholder="Website">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Clivax.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="http://codebucks.in/" target="_blank" class="text-muted">Codebucks</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection