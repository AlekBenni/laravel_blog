@extends('layout.layout')

@section('title', $post->title)

@section('content')
                            <div class="page-wrapper">
                            <div class="blog-title-area">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('categories.single', ['slag' => $post->category->slag]) }}">{{ $post->category->title }}</a></li>
                                    <li class="breadcrumb-item active">{{ $post->title }}</li>
                                </ol>

                                <span class="color-yellow"><a href="{{ route('categories.single', ['slag' => $post->category->slag]) }}" title="">{{ $post->category->title }}</a></span>

                                <h3>{{ $post->title }}</h3>

                                <div class="blog-meta big-meta">
                                    <small>{{ $post->getPostDate() }}</small>

                                    <small><i class="fa fa-eye"></i> {{ $post->view }}</small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fab fa-facebook-f"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fab fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fab fa-google"></i></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">
                                {!! $post->content !!}
                            </div><!-- end content -->

                            <div class="blog-title-area">

                                @if($post->tags->count())
                                <div class="tag-cloud-single">
                                    <span>Tags</span>
                                    @foreach($post->tags as $tags)
                                    <small><a href="{{ route('tags.single', ['slag' => $tags->slag]) }}" title="">{{$tags->title}}</a></small>
                                    @endforeach
                                </div><!-- end meta -->
                                @endif

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fab fa-facebook-f"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fab fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fab fa-google"></i></i></a></li>
                                     </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <hr class="invis1">

                        </div><!-- end page-wrapper -->
@endsection
