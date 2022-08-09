@extends('layouts.app')

@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Latest News</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        <div class="news-page">
            <!-- <h1 class="page-title">Latest News</h1> -->
            @if(isset($newsData) && !empty($newsData))
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="btn btn-red-small mobile-blog-sidebar">Filter</div>
                        <div class="blog-sidebar">
                            <a href="javascript:void(0)" class="close">×</a>
                            <h4 class="mt-4">Recent Posts</h4> 
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
                            <h4>All Posts <a class="view-btn" href="/latest-news">View All</a></h4>
                            <ul class="all-post-list">
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
                                @if(isset($newsTagData) && count($newsTagData)>0)
                                    @foreach($newsTagData as $tag)
                                        <a class="badge" href="/latest-news?tag={{$tag}}">{{$tag}}</a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        @if(isset($newsData->news) && count($newsData->news)>0)
                        <div class="row news-listing">
                            @foreach($newsData->news as $news)
                                <div class="col-12 col-md-6 col-sm-6 form-group">
                                    <div class="news-wrapper">
                                        <a href="/blog-posts/{{$news->slug}}">
                                            <img src="{{$news->image}}" alt="{{$news->image_alt}}" style="
                                            object-fit: cover;">
                                        </a>
                                        <div class="news-box">
                                            <h2>
                                                <a href="/blog-posts/{{$news->slug}}">{{$news->news_title}}</a>
                                            </h2>
                                            <div class="line-wrap">
                                                <div class="tagline-content">
                                                    <div class="blog-tagline">{{$news->news_tagline}}</div>
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
                                                    <span class="line-tag">Tags:</span>
                                                    @if(@isset($tags) && count($tags)>0)
                                                        @php $index = 0; @endphp
                                                        @foreach ($tags as $tag)
                                                            <a class="line-tag-link" rel="tag" href="/latest-news?tag={{$tag}}">{{$tag}}</a>@if((count($tags) - 1) != $index), @endif
                                                            @php $index++; @endphp
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="blog-content mt-3">
                                                {!! substr(strip_tags($news->news_desc), 0, 200)."..." !!}
                                                </div>
                                            </div>
                                            <div class="bottom-line">
                                                <span class="line-date">{{ $day }}<sup>{{$daysuffix}}</sup> {{$month . ' ' . $year}}</span>
                                                <a href="/blog-posts/{{$news->slug}}" class="read-more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if(isset($newsData) && isset($newsData->totalRecords) && $newsData->totalRecords>14)
                                <input type="hidden" id="page_no" name="page_no" value="1">
                                <input type="hidden" id="records_per_page" name="records_per_page" value="14">
                                <div id="loadmorenews" class="btn btn-red-small full-width mt-3 btnload-more" onclick="LoadMoreNews()">Load More News</div>
                                <input type="hidden" id="site_slug" name="site_slug" value="{{env('APP_SLUG', 'daimler-trucks-somerton')}}" />
                            @endif
                        @else
                                <p>News data not available</p>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<script>
    function LoadMoreNews() {
        var page_no = $("#page_no").val();
        page_no = Number(page_no) + 1;
        var records_per_page = $("#records_per_page").val();
        var siteslug = $("#site_slug").val();
        var req_url = "{{ config('apiprovider.api.get_news')}}";
        $.ajax({
            url: req_url,
            type: "get", //send it through get method
            data: {
                page_no:page_no,
                records_per_page:records_per_page,
                site_slug:siteslug
            },
            cache: false,
            success: function(response){
                if(response && response.news && response.news.length>0) {
                    var totalRecords = response.totalRecords;
                    var totalpages = totalRecords/records_per_page;
                    if(page_no>totalpages) {
                        $("#loadmorenews").hide();
                    } else {
                        $("#page_no").val(page_no);
                    }
                    response.news.forEach(element => {
                        var d = new Date(element.news_date);
                        var day = d.getDate();
                        var month = d.toLocaleString('default', { month: 'long' });
                        var year = d.getFullYear();
                        var reminder10 = day % 10;
                        var reminder100 = day % 100;
                        var daysuffix="";
                        if (reminder10 == 1 && reminder100 != 11) {
                            daysuffix = "st";
                        } else if (reminder10 == 2 && reminder100 != 12) {
                            daysuffix = "nd";
                        } else if (reminder10 == 3 && reminder100 != 13) {
                            daysuffix = "rd";
                        } else {
                            daysuffix = "th";
                        }
                        var tags = [];
                        if(element.tag != null && element.tag != "") {
                            tags=element.tag.split(',');
                        }
                        var data = '<div class="col-12 col-md-6 form-group">';
                                data += '<div class="news-wrapper">';
                                    data += '<a href="/blog-posts/'+element.slug+'">';
                                        data += '<img src="'+element.image+'" alt="'+element.image_alt+'" style="object-fit: cover;">';
                                    data += '</a>';
                                    data += '<div class="news-box">';
                                        data += '<h2><a href="/blog-posts/'+element.slug+'">'+ element.news_title +'</a></h2>';
                                        data += '<div class="line-wrap">';
                                            data += '<div class="tagline-content">';
                                                data += '<div class="blog-tagline">'+ element.news_tagline+'</div>';
                                                data += '<span class="line-tag">Tags: </span>';
                                                if(tags != null && tags.length > 0){
                                                    for(var i=0;i<tags.length;i++){
                                                        data += '<a class="line-tag-link" rel="tag" href="/latest-news?tag='+tags[i]+'">'+tags[i]+'</a>';
                                                        if((tags.length - 1) != i){
                                                            data+=", ";
                                                        }
                                                    }
                                                }
                                            data += '</div>';
                                            data += '<div class="blog-content mt-3">'+removeTags(element.news_desc).substring(0, 200)+'...'+'</div>';
                                        data += '</div>';
                                        data += '<div class="bottom-line"><span class="line-date">'+day+'<sup>'+daysuffix+'</sup> '+month+' '+year+'</span><a href="/blog-posts/'+element.slug+'" class="read-more">Read More</a></div>';
                                    data +='</div>';
                                data +='</div>';
                            data +='</div>';
                            $( ".news-listing").append(data);
                            data="";
                    });
                } else {
                    $("#loadmorenews").hide();
                }
            }
        });
    }
    function removeTags(str) {
        if ((str===null) || (str===''))
            return false;
        else
            str = str.toString();
            
        // Regular expression to identify HTML tags in 
        // the input string. Replacing the identified 
        // HTML tag with a null string.
        return str.replace( /(<([^>]+)>)/ig, '');
    }
</script>
@endsection