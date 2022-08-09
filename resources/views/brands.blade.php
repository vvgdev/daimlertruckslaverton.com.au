@extends('layouts.app')

@section('content')

<section class="middle-section">
@if(Request::route('subsubbrand_slug'))
    @include('partials.brand_details')
@elseif(isset($response['record']) && sizeof($response['record']) > 0)
    @include('partials.brand_details_withour_filte')
@else
    {{-- <div class="banner-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="spacer"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAMMAQMAAACIUSg1AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAM1JREFUeF7twDEBAAAAwiD7p7bGDlgYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAB3moAASHInzYAAAAASUVORK5CYII=" class="rrwp-img" alt="" aria-hidden="true">
                    </div>
                    <div class="dektop-slider-image bg responsive-bgimg" style="background-image: url('{{ asset('images/banner1.jpeg') }}');">
                        <div class="swiper-image" id= "">
                            <div class="swiper-image-inner swiper-image-two" onclick="navigateToURL('')"></div>
                        </div>  
                    </div>  
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
                <div class="swiper-slide">
                    <div class="spacer"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAMMAQMAAACIUSg1AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAM1JREFUeF7twDEBAAAAwiD7p7bGDlgYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAB3moAASHInzYAAAAASUVORK5CYII=" class="rrwp-img" alt="" aria-hidden="true">
                    </div>
                    <div class="dektop-slider-image bg responsive-bgimg" style="background-image: url('https://www.velocitytruckcentres.com.au/storage/app/media/Sliders/cars-intro.png');">
                        <div class="swiper-image" id= "">
                            <div class="swiper-image-inner swiper-image-two" onclick="navigateToURL('')"></div>
                        </div>  
                    </div>  
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
                <div class="swiper-slide">
                    <div class="spacer"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAMMAQMAAACIUSg1AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAM1JREFUeF7twDEBAAAAwiD7p7bGDlgYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAB3moAASHInzYAAAAASUVORK5CYII=" class="rrwp-img" alt="" aria-hidden="true">
                    </div>
                    <div class="dektop-slider-image bg responsive-bgimg" style="background-image: url('https://www.velocitytruckcentres.com.au/storage/app/media/cropped-images/Range_Hi_Res_2400x1600-0-0-0-0-1626307964.jpg');">
                        <div class="swiper-image" id= "">
                            <div class="swiper-image-inner swiper-image-two" onclick="navigateToURL('')"></div>
                        </div>  
                    </div>  
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
                <div class="swiper-slide">
                    <div class="spacer"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAMMAQMAAACIUSg1AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAM1JREFUeF7twDEBAAAAwiD7p7bGDlgYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAB3moAASHInzYAAAAASUVORK5CYII=" class="rrwp-img" alt="" aria-hidden="true">
                    </div>
                    <div class="dektop-slider-image bg responsive-bgimg" style="background-image: url('https://www.velocitytruckcentres.com.au/storage/app/media/Sliders/slider2-MBtrucks.jpg');">
                        <div class="swiper-image" id= "">
                            <div class="swiper-image-inner swiper-image-two" onclick="navigateToURL('')"></div>
                        </div>  
                    </div>  
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </div>
                
                    <!-- <div class="item">
                        <img src="{{ asset('images/banner1.jpeg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/banner2.jpeg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/banner3.jpeg') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/banner1.jpeg') }}">
                    </div> -->
            </div>
        </div>
    </div> --}}
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Our Brands</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        <div class="brand-tabs">
            {{--<div class="responsive custom-scrollbar">
                @if(isset($response['brand_data']))
                    <ul class="nav nav-tabs">
                        @if(isset($response['brand_data']))
                            <li class="brand-list active benz">
                                <a href="">
                                    <img class="lazy" src="{{ env('IMG_URL') }}{{ $response['brand_data']['logo_url'] }}" alt="{{ $response['brand_data']['logo_alt'] }}">
                                </a>
                            </li>
                        @else
                            <li class="brand-list active benz">
                                <a href="">
                                    <img class="lazy" src="/images/benz-brand.png">
                                </a>
                            </li>
                        @endif
                    </ul> 
                @endif  
            </div>--}}             
            <div class="tab-content">
                @if(isset($response['brand_data']))
                    <h1>{{ $response['brand_data']['name'] }}</h1>
                @endif
                @if(isset($response['subbrand_data_list']) && sizeof($response['subbrand_data_list']) > 0)
                    <div class="brand-subcat custom-scrollbar">
                        <div class="row no-gutter">
                            @foreach($response['subbrand_data_list'] as $subbrand)
                                {{-- @if($response['brand_data']['slug'] == "mercedes-benz")
                                    @if($subbrand['slug'] != "van")
                                        
                                    @endif
                                @else
                                    <div class="col-md-2 col-sm-6 col-6 active">
                                        @if(Request::route('subbrand_slug') && Request::route('subbrand_slug') == $subbrand['slug'])
                                            <span class="pointer-arrow"></span>
                                        @endif
                                        <a href="{{ route('get.brand.data',[$response['brand_data']['slug'],$subbrand['slug']]) }}">
                                            {{$subbrand['name']}}
                                        </a>
                                    </div>
                                @endif --}}
                                @if($subbrand['slug'] != "van")
                                <div class="col-md-2 col-sm-6 col-6 active">
                                    @if(Request::route('subbrand_slug') && Request::route('subbrand_slug') == $subbrand['slug'])
                                        <span class="pointer-arrow"></span>
                                    @endif
                                    <a href="{{ route('get.brand.data',[$response['brand_data']['slug'],$subbrand['slug']]) }}">
                                        {{$subbrand['name']}}
                                    </a>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
                
                <div class="row mt-5">
                    @if(isset($response['subbrand_data_list']) && sizeof($response['subbrand_data_list']) > 0)
                        @foreach($response['subbrand_first_child_list'] as $first_child)
                            <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                <div class="columns" ss="">
                                    <a href="{{ route('get.brand.data',[$response['brand_data']['slug'],$first_child['sub_brand_slug'],$first_child['slug']]) }}">
                                        <img class="lazy" src="{{ env('IMG_URL') }}{{ $first_child['logo_url'] }}" alt="{{ $first_child['name'] }}" />
                                    </a>
                                </div>
                                <p class="column-name">{{ $first_child['name'] }}</p>
                            </div>
                        @endforeach
                    @else
                        @if(isset($response['truck_by_slug']) && sizeof($response['truck_by_slug']) > 0)
                            @foreach($response['truck_by_slug'] as $data)
                                <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                                    <div class="columns">
                                        <a href="{{ route('get.brand.data',[$data['brand']['slug'],$data['slug']]) }}">
                                            @if(isset($data['gallery_data']) && sizeof($data['gallery_data']) > 0)
                                                <img class="lazy" src="{{ env('IMG_URL') }}{{ $data['gallery_data'][0]['gallery_image'] }}" alt="{{ $data['gallery_data'][0]['gallery_alt'] }}" />
                                            @else
                                                <img class="lazy" src="https://www.velocitytruckcentres.com.au/storage/app/media/168415_mbt-mi-econic-sep20-mr.jpg" alt="ChildData" />
                                            @endif
                                        </a>
                                    </div>
                                    <p class="column-name">{{ $data['brand']['name'] }} {{ $data['name'] }}</p>
                                </div>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif
</section>

@endsection