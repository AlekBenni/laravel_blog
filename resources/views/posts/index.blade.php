@extends('layout.layout')

@section('title', 'My markedia')

@section('banner')
    <section id="cta" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 align-self-center">
                        <h2>A digital marketing blog</h2>
                        <p class="lead"> Aenean ut hendrerit nibh. Duis non nibh id tortor consequat cursus at mattis felis. Praesent sed lectus et neque auctor dapibus in non velit. Donec faucibus odio semper risus rhoncus rutrum. Integer et ornare mauris.</p>
                        <a href="#" class="btn btn-primary">Try for free</a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="newsletter-widget text-center align-self-center">
                            <h3>Subscribe Today!</h3>
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <form class="form-inline" method="post">
                                <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                                <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
                            </form>
                        </div><!-- end newsletter -->
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('content')
                        <div class="page-wrapper">
                            <div class="blog-custom-build">

                                <!-- Content -->
                                @foreach($posts as $post)
                                <div class="blog-box wow fadeIn">
                                    <div class="post-media">
                                        <a href="{{route('posts.single', ['slag' => $post->slag])}}" title="">
                                            <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div>
                                            <!-- end hover -->
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center">
                                        <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="#" class="fb-button btn btn-primary"><i class="fab fa-facebook-f"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                                <li><a href="#" class="tw-button btn btn-primary"><i class="fab fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                                <li><a href="#" class="gp-button btn btn-primary"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div><!-- end post-sharing -->
                                        <h4><a href="{{route('posts.single', ['slag' => $post->slag])}}" title="">{{ $post->title }}</a></h4>
                                        <p>{!! $post->description !!}</p>
                                        <small><a href="{{ route('categories.single', ['slag' => $post->category->slag]) }}" title="">{{ $post->category->title }}</a></small>
                                        <small>{{ $post->getPostDate() }}</small>
                                        <small><i class="fa fa-eye"></i> {{$post->view}}</small>
                                    </div><!-- end meta -->
                                </div><!-- end Content -->

                                <hr class="invis">

                                @endforeach

                            </div>
                        </div>

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    {{ $posts->links() }}
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
@endsection
