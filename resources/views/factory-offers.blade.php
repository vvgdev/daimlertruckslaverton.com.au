@extends('layouts.app')

@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Factory Offers</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="factory-offers page-multi">
            <!-- <h1 class="page-title">Factory Offers</h1> -->
            <div class="specification-tabs mt-5">
                <div class="responsive custom-scrollbar">
                    <ul class="nav nav-pills">
                        @if(isset($selectedTab) && !empty($selectedTab) && $selectedTab=="mb-truck")
                            <li class="tab-title active">
                            <a href="/factory-offers/mb-truck"  aria-expanded="true" class="active">
                        @else
                            @if(!isset($selectedTab) || empty($selectedTab))
                                <li class="tab-title" id="benz_desc">
                                <a href="/factory-offers/mb-truck" aria-expanded="true" class="active">
                            @else
                                <li class="tab-title" id="benz_desc">
                                <a href="/factory-offers/mb-truck" aria-expanded="false">
                            @endif
                        @endif
                            <i class="dtm-mercedes-logo"></i>Mercedes Benz Truck</a>
                        </li>
                        <!-- @if(isset($selectedTab) && !empty($selectedTab) && $selectedTab=="mb-van")
                            <li class="tab-title active">
                            <a href="/factory-offers/mb-van"  aria-expanded="true" class="active">
                        @else
                            <li class="tab-title" id="benzvans_desc">
                            <a href="/factory-offers/mb-van" aria-expanded="false">
                        @endif
                            <i class="dtm-mercedes-logo"></i>Mercedes Benz Vans</a>
                        </li> -->
                        @if(isset($selectedTab) && !empty($selectedTab) && $selectedTab=="freightliner")
                            <li class="tab-title active" id="freightliner_desc">
                            <a href="/factory-offers/freightliner" aria-expanded="true" class="active">
                        @else
                            <li class="tab-title" id="freightliner_desc">
                            <a href="/factory-offers/freightliner" aria-expanded="false">
                        @endif
                            <i class="dtm-icon-gallery-truck"></i> Freightliner</a>
                        </li>
                        @if(isset($selectedTab) && !empty($selectedTab) && $selectedTab=="fuso")
                            <li class="tab-title active" id="fuso_desc">
                            <a href="/factory-offers/fuso" aria-expanded="true" class="active">
                        @else
                            <li class="tab-title" id="fuso_desc">
                            <a href="/factory-offers/fuso" aria-expanded="false">
                        @endif
                            Fuso</a>
                        </li>
                        <!-- @if(isset($selectedTab) && !empty($selectedTab) && $selectedTab=="mb-van")
                            <li class="tab-title active" id="benz_van_desc">
                            <a href="/factory-offers/mb-van" aria-expanded="true" class="active">
                        @else
                            <li class="tab-title" id="benz_van_desc">
                            <a href="/factory-offers/mb-van" aria-expanded="false">
                        @endif
                                Mercedes Benz Van</a>
                        </li> -->
                    </ul>
                </div>
                <div class="tab-content">
                    @if(isset($selectedTab) && !empty($selectedTab) && $selectedTab=="mb-truck")
                        <div class="tab-pane active" id="benz_tab">
                    @else
                            @if(!isset($selectedTab) || empty($selectedTab))
                                <div class="tab-pane active" id="benz_tab">
                            @else
                                <div class="tab-pane" id="benz_tab">
                            @endif
                    @endif
                        @if(isset($mercedes_benzData) && count($mercedes_benzData) > 0)
                            @foreach($mercedes_benzData as $mercedes_benz)
                                <div class="content para">
                                    <div class="">
                                        @if(isset($mercedes_benz->image_path) && !empty($mercedes_benz->image_path))
                                            <img class="type-image" src="{{ $mercedes_benz->image_path }}" alt="{{$mercedes_benz->image_alt}}">
                                        @endif
                                        @if(isset($mercedes_benz->title) && !empty($mercedes_benz->title))
                                            <h3 class="mt-5 bold">{{$mercedes_benz->title}}</h3>
                                        @endif
                                        @if(isset($mercedes_benz->description) && !empty($mercedes_benz->description))
                                            <p>{!! $mercedes_benz->description !!}</p>
                                        @endif
                                    </div>
                                    @if(isset($mercedes_benz->catalogue) && count($mercedes_benz->catalogue)>0)
                                        @php
                                            $isMercedesPDFCatlog=0;
                                        @endphp    
                                        <div class="specials-wrapper clearfix">
                                            <h3 class="bold">Mercedes-Benz Trucks - Parts Central Catalogue</h3>
                                            {{--<h5 class="mt-4 mb-4 bold">Current Part Offers</h5>
                                            <div class="row">
                                                @foreach ($mercedes_benz->catalogue as $catalogue)
                                                    @if($catalogue->catalogue_ext == "pdf")
                                                        @php
                                                            $isMercedesPDFCatlog=1;
                                                        @endphp
                                                    @else
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <a class="" href="{{$catalogue->catalogue_url}}">
                                                                    <img src="{{$catalogue->catalogue_url}}" style="max-height: 200px;">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <br/>--}}
                                            {{-- <a href="https://issuu.com/daimlertrucks_aftersales/docs/all0039_parts_central_a4_brochure_winter_2020_issu?fr=sNWMzODEzODE3Nzk" target="_blank" class="btn btn-red mt-0">View Catalogue</a> --}}
                                            <div class="dealer-accordion">
                                                {{-- <div class="panel panel-default">
                                                    <a data-toggle="collapse" class="collapsed" href="#desktop_address_11">
                                                        <div class="panel-title">View Catalogue <i class="dtm-angle-right"></i></div>
                                                    </a>
                                                    <div class="panel-collapse collapse" id="desktop_address_11" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <a href="https://issuu.com/daimlertrucks_aftersales/docs/all0039_parts_central_a4_brochure_winter_2020_issu?fr=sNWMzODEzODE3Nzk" target="_blank" class="btn btn-red mt-0">View Catalogue</a>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="panel panel-default">
                                                    <a data-toggle="collapse" class="collapsed" href="#desktop_address_12">
                                                        <div class="panel-title">Parts Partner <i class="dtm-angle-right"></i></div>
                                                    </a>
                                                    <div class="panel-collapse collapse" id="desktop_address_12" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <div style="overflow:hidden;padding-bottom:56.25%;position:relative;height:0;">
                                                                <iframe src="https://issuu.com/daimlertrucks_aftersales/docs/mb_parts_partner?fr=sNjFmZTE2ODkwNzA" style="left:0;top:0;height:100%;width:100%;position:absolute;border:0;" allowfullscreen=""></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div>
                                            @if($isMercedesPDFCatlog==1)
                                                <h5 class="mt-4 mb-4 bold">Current Part Offers Catelogue</h5>
                                                <div class="row">
                                                    @foreach ($mercedes_benz->catalogue as $catalogue)
                                                        @if($catalogue->catalogue_ext == "pdf")
                                                            <div class="col-md-4">
                                                                {{-- <a href="{{$catalogue->catalogue_url}}" target="_blank"></a> --}}
                                                                <div class="text-center">
                                                                    <a class="btn btn-red mt-0" href="{{$catalogue->catalogue_url}}" target="_blank">View Catalogue</a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        {{-- <a href="{{$catalogue->catalogue_url}}">View Catalogue</a> --}}
                                                    @endforeach
                                                </div>
                                                <br/>
                                            @endif
                                        </div>
                                    @endif
                                    <div>
                                        @if(isset($mercedes_benz->youtube_video_url) && count($mercedes_benz->youtube_video_url)>0)
                                            <h3 class="mb-4 bold">OUR LATEST YOUTUBE VIDEOS</h3>
                                            <div class="latest-videos">
                                                @foreach ($mercedes_benz->youtube_video_url as $youtube_video_url)
                                                    <iframe width="100%" height="450" src="{{$youtube_video_url->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>                                                
                                                @endforeach
                                                {{-- <iframe width="100%" height="450" src="https://www.youtube-nocookie.com/embed/BhvNhC-ilnw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

                                                <iframe width="100%" height="450" src="https://www.youtube.com/embed/5Pfjk1LLk_w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> --}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @if(!$loop->last)
                                    <hr />
                                @endif
                            @endforeach
                        @else
                            <div class="content">
                                <p>No Data Available.</p>
                            </div>
                        @endif
                    </div>
                    @if(isset($selectedTab) && !empty($selectedTab) && $selectedTab=="freightliner")
                        <div class="tab-pane active" id="freightliner_tab">
                    @else
                            <div class="tab-pane" id="freightliner_tab">
                    @endif
                        @if(isset($freightlinerData) && count($freightlinerData) > 0)
                            @foreach($freightlinerData as $freightliner)
                                <div class="content para">
                                    <div class="">
                                        @if(isset($freightliner->image_path) && !empty($freightliner->image_path))
                                            <img class="type-image" src="{{ $freightliner->image_path }}" alt="{{$freightliner->image_alt}}">
                                        @endif
                                        @if(isset($freightliner->title) && !empty($freightliner->title))
                                            <h3 class="mt-5 bold">{{$freightliner->title}}</h3>
                                        @endif
                                        @if(isset($freightliner->description) && !empty($freightliner->description))
                                            <p>{!! $freightliner->description !!}</p>
                                        @endif
                                    </div>
                                    @if(isset($freightliner->catalogue) && count($freightliner->catalogue)>0)
                                        @php
                                            $isFreightlinerPDFCatlog=0;
                                        @endphp    
                                        <div class="specials-wrapper clearfix">
                                            <h3 class="bold">Freightliner - Parts Central Catalogue</h3>
                                            <h5 class="mt-4 bold">Current Part Offers</h5>
                                            <div class="row">
                                                @foreach ($freightliner->catalogue as $catalogue)    
                                                    @if($catalogue->catalogue_ext == "pdf")
                                                        @php
                                                            $isFreightlinerPDFCatlog=1;
                                                        @endphp
                                                    @else
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <a class="" href="{{$catalogue->catalogue_url}}">
                                                                    <img src="{{$catalogue->catalogue_url}}" style="max-height: 200px;">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div>
                                            @if($isFreightlinerPDFCatlog==1)
                                                <h5 class="mt-4 mb-4 bold">Current Part Offers Catelogue</h5>
                                                <div class="row">
                                                    @foreach ($freightliner->catalogue as $catalogue)
                                                        @if($catalogue->catalogue_ext == "pdf")
                                                            <div class="col-md-4">
                                                                {{-- <a href="{{$catalogue->catalogue_url}}" target="_blank"></a> --}}
                                                                <div class="text-center">
                                                                    <a class="btn btn-red mt-0" href="{{$catalogue->catalogue_url}}" target="_blank">View Catalogue</a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        {{-- <a href="{{$catalogue->catalogue_url}}">View Catalogue</a> --}}
                                                    @endforeach
                                                </div>
                                                <br/>
                                            @endif
                                        </div>
                                    @endif
                                    <div>
                                        @if(isset($freightliner->youtube_video_url) && count($freightliner->youtube_video_url)>0)
                                            <h3 class="mb-4 bold">OUR LATEST YOUTUBE VIDEOS</h3>
                                            <div class="latest-videos">
                                                @foreach ($freightliner->youtube_video_url as $youtube_video_url)
                                                    <iframe width="100%" height="450" src="{{$youtube_video_url->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>                                                
                                                @endforeach
                                                {{-- <iframe width="100%" height="450" src="https://www.youtube-nocookie.com/embed/BhvNhC-ilnw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

                                                <iframe width="100%" height="450" src="https://www.youtube.com/embed/5Pfjk1LLk_w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> --}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @if(!$loop->last)
                                    <hr />
                                @endif
                            @endforeach
                        @else
                            <div class="content">
                                <p>No Data Available.</p>
                            </div>
                        @endif
                    </div>
                    @if(isset($selectedTab) && !empty($selectedTab) && $selectedTab=="fuso")
                        <div class="tab-pane active" id="fuso_tab">
                    @else
                        <div class="tab-pane" id="fuso_tab">
                    @endif
                        @if(isset($fusoData) && count($fusoData) > 0)
                            @foreach($fusoData as $fuso)
                                <div class="content para">
                                    <div class="">
                                        @if(isset($fuso->image_path) && !empty($fuso->image_path))
                                            <img class="type-image" src="{{ $fuso->image_path }}" alt="{{$fuso->image_alt}}">
                                        @endif
                                        @if(isset($fuso->title) && !empty($fuso->title))
                                            <h3 class="mt-5 bold">{{$fuso->title}}</h3>
                                        @endif
                                        @if(isset($fuso->description) && !empty($fuso->description))
                                            <p>{!! $fuso->description !!}</p>
                                        @endif
                                    </div>
                                    @if(isset($fuso->catalogue) && count($fuso->catalogue)>0)
                                        @php
                                            $isFusoPDFCatlog=0;
                                        @endphp    
                                        <div class="specials-wrapper clearfix">
                                            <h3 class="bold">Fuso - Parts Central Catalogue</h3>
                                            <h5 class="mt-4 bold">Current Part Offers</h5>
                                            <div class="row">
                                                @foreach ($fuso->catalogue as $catalogue)
                                                    @if($catalogue->catalogue_ext == "pdf")
                                                        @php
                                                            $isFusoPDFCatlog=1;
                                                        @endphp
                                                    @else
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                                <a class="" href="{{$catalogue->catalogue_url}}">
                                                                    <img src="{{$catalogue->catalogue_url}}" style="max-height: 200px;">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div>
                                            @if($isFusoPDFCatlog==1)
                                                <h5 class="mt-4 mb-4 bold">Current Part Offers Catelogue</h5>
                                                <div class="row">
                                                    @foreach ($fuso->catalogue as $catalogue)
                                                        @if($catalogue->catalogue_ext == "pdf")
                                                            <div class="col-md-4">
                                                                {{-- <a href="{{$catalogue->catalogue_url}}" target="_blank"></a> --}}
                                                                <div class="text-center">
                                                                    <a class="btn btn-red mt-0" href="{{$catalogue->catalogue_url}}" target="_blank">View Catalogue</a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        {{-- <a href="{{$catalogue->catalogue_url}}">View Catalogue</a> --}}
                                                    @endforeach
                                                </div>
                                                <br/>
                                            @endif
                                        </div>
                                    @endif
                                    <div>
                                        @if(isset($fuso->youtube_video_url) && count($fuso->youtube_video_url)>0)
                                            <h3 class="mb-4 bold">OUR LATEST YOUTUBE VIDEOS</h3>
                                            <div class="latest-videos">
                                                @foreach ($fuso->youtube_video_url as $youtube_video_url)
                                                    <iframe width="100%" height="450" src="{{$youtube_video_url->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>                                                
                                                @endforeach
                                                {{-- <iframe width="100%" height="450" src="https://www.youtube-nocookie.com/embed/BhvNhC-ilnw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

                                                <iframe width="100%" height="450" src="https://www.youtube.com/embed/5Pfjk1LLk_w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> --}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @if(!$loop->last)
                                    <hr />
                                @endif
                            @endforeach
                        @else
                            <div class="content">
                                <p>No Data Available.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection