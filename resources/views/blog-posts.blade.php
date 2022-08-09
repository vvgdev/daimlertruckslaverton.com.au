@extends('layouts.app')

@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Blog Post</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        <div class="blog-post mt-5">
            <!-- <h1 class="page-title">Blog: <span>Post</span></h1> -->
            @if(isset($newsData) && !empty($newsData))
                <div class="page-back">
                    <!-- <a class="back-link" href="/latest-news">Back</a> -->
                    <a class="back-link pull-right" href="{{ URL::previous() }}">Back</a>
                </div>
                <div class="row clear-both">
                    <!-- <div class="col-lg-4">
                        <div class="btn btn-red-small mobile-blog-sidebar">Filter</div>
                        <div class="blog-sidebar">
                            <a href="javascript:void(0)" class="close">×</a>
                            <h4>Recent Posts</h4> 
                            <ul class="recent-post-list">
                                @if(isset($newsData->recent_post) && count($newsData->recent_post)>0)
                                    @foreach($newsData->recent_post as $recent_post)
                                        <li class="mt-2">
                                            <a class="d-block" href="/blog-posts/{{$recent_post->slug}}">
                                                <img src="{{$recent_post->image}}">
                                                <div class="text-wrapper">
                                                    <span>{{$recent_post->news_title}}</span><br>
                                                    @php
                                                    $day = \Carbon\Carbon::parse($recent_post->news_date)->format('d');
                                                    $month = \Carbon\Carbon::parse($recent_post->news_date)->format('F');
                                                    $year = \Carbon\Carbon::parse($recent_post->news_date)->format('Y');
                                                    $reminder10 = $day % 10;
                                                    $reminder100 = $day % 100;
                                                    $daysuffix="";
                                                    if ($reminder10 == 1 && $reminder100 != 11) {
                                                        $daysuffix = "st";
                                                    } else if ($reminder10 == 2 && $reminder100 != 12) {
                                                        $daysuffix = "nd";
                                                    } else if ($reminder10 == 3 && $reminder100 != 13) {
                                                        $daysuffix = "rd";
                                                    } else {
                                                        $daysuffix = "th";
                                                    }
                                                @endphp
                                                    <span class="text-date">{{$day}}<sup>{{$daysuffix}}</sup> {{$month . ' ' . $year}}</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            <h4>All Posts</h4>
                            <ul class="all-post-list">
                                <li>
                                    <a class="view-btn" href="/latest-news">View All</a>
                                </li>
                                @if(isset($newsData->posts) && count($newsData->posts)>0)
                                    @foreach($newsData->posts as $posts)
                                        <li>
                                            <a href="/latest-news?year={{$posts}}">
                                                <span>{{$posts}}</span>
                                                {{-- <span>(2)</span> --}}
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            <h4>Tags</h4>
                            <div class="tag-wrapper">
                                @if(isset($newsData->tag) && count($newsData->tag)>0)
                                    @foreach($newsData->tag as $tag)
                                        <a class="badge" href="/latest-news?tag={{$tag}}">{{$tag}}</a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        @if(isset($newsData->news) && count($newsData->news)>0)
                            @foreach($newsData->news as $news)
                                <div class="blog-image">
                                    <img src="{{$news->image}}" alt="{{$news->image_alt}}" style="object-fit: cover;">
                                </div>
                                <div class="title">{{$news->news_title}}</div>
                                <div class="blog-tagline">
                                    <span>{{$news->news_tagline}}</span>
                                    @php
                                        $day = \Carbon\Carbon::parse($news->news_date)->format('d');
                                        $month = \Carbon\Carbon::parse($news->news_date)->format('F');
                                        $year = \Carbon\Carbon::parse($news->news_date)->format('Y');
                                        $reminder10 = $day % 10;
                                        $reminder100 = $day % 100;
                                        $daysuffix="";
                                        if ($reminder10 == 1 && $reminder100 != 11) {
                                            $daysuffix = "st";
                                        } else if ($reminder10 == 2 && $reminder100 != 12) {
                                            $daysuffix = "nd";
                                        } else if ($reminder10 == 3 && $reminder100 != 13) {
                                            $daysuffix = "rd";
                                        } else {
                                            $daysuffix = "th";
                                        }
                                        $tags = array();
                                        if(isset($news->tag) && !empty($news->tag)) {
                                            $tags=explode (",", $news->tag);
                                        }
                                    @endphp                        
                                    <span class="line-date">{{ $day }}<sup>{{$daysuffix}}</sup> {{$month . ' ' . $year}}</span>
                                    <span class="line-tag">Tags:</span>
                                    @if(@isset($tags) && count($tags)>0)
                                        @foreach ($tags as $tag)
                                            <a class="line-tag-link" rel="tag" href="/latest-news?tag={{$tag}}">{{$tag}}</a>
                                        @endforeach
                                    @endif
                                    {{-- <span>Prime Mover Magazine</span>
                                    <span class="line-date">16<sup>th</sup> July 2021</span>
                                    <span class="line-tag">Tags:</span> --}}
                                    {{-- <a class="line-tag-link" rel="tag" href="/blog/?tag=3">Community</a>
                                    <a class="line-tag-link" rel="tag" href="/blog/?tag=56">Fuso</a>
                                    <a class="line-tag-link" rel="tag" href="/blog/?tag=7">Latest News</a> --}}
                                </div>
                                <div class="content">
                                    <p>
                                        {!! $news->news_desc !!}
                                    </p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    
                </div>
            @endif
        </div>
    </div>
</section>
<div class="overlay"></div>
@endsection 