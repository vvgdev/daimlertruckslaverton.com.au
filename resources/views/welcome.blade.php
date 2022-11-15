@extends('layouts.app')

@section('content')
{{-- {!! dd($sliders) !!} --}}
<section class="middle-section home-page">
    <div id="home-slider1" class="banner-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @if(isset($sliders) && count($sliders)>0)
                @php $index1 = 0; @endphp
                    @foreach($sliders as $slider)
                        @php $index1++; @endphp
                        <div style="display:none;">
                            <div id="img_tagline_{{$index1}}">{{ $slider->tagline}}</div>
                            <div id="img_desc_{{$index1}}">{{ $slider->description }}</div>
                        </div>
                        @if($index1 == 0)
                            <div style="display:none;">
                                <div id="img_tagline_{{ count($sliders) + 1}}">{{ $slider->tagline}}</div>
                                <div id="img_desc_{{ count($sliders) + 1}}">{{ $slider->description }}</div>
                            </div>
                        @endif
                        <div class="swiper-slide swiper-slide-two">
                            <div class="spacer"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAMMAQMAAACIUSg1AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAM1JREFUeF7twDEBAAAAwiD7p7bGDlgYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAB3moAASHInzYAAAAASUVORK5CYII=" class="rrwp-img" alt="" aria-hidden="true">
                            </div>
                            <div class="dektop-slider-image bg responsive-bgimg" style="background-image: url('{{ $slider->desktop_img }}');">
                                <div class="swiper-image" id= "">
                                    <div class="swiper-image-inner swiper-image-two {{(($slider->text_position == 'left') ? 'vtc-text-left' : ($slider->text_position == 'right')) ? 'vtc-text-right' : (($slider->text_position == 'top' ? 'vtc-text-top' : ''))}}" onclick="navigateToURL('{{$slider->site_learn_more_url}}')">
                                        <div class="container">
                                            <h1 class="slider-title">{{ $slider->tagline}}</h1>
                                            <p class="paragraph">{{ $slider->description }}</p>
                                        </div>
                                    </div>
                                </div>  
                            </div>  
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev swiper-button-white"></div>
                            <div class="swiper-button-next swiper-button-white"></div>
                            <!-- <a href="{{$slider->site_learn_more_url}}">  <img src="{{ $slider->desktop_img }}"></a> -->
                        </div>
                    @endforeach
                @else
                    <div class="item">
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
                    </div>
                @endif
            </div>
            @if(isset($sliders) && count($sliders)>0)
                <div class="mobile-layer-title">
                    <div class="container vtc-text-left ">
                    @php $index = 0; @endphp
                    @foreach($sliders as $slider)
                        @if($index == 0)
                        <h1 class="slider-title" id="diplay_tagline">{{ $slider->tagline}}</h1>
                        <p class="paragraph" id="display_dec">{{ $slider->description }}</p>
                        @endif
                        @php $index++; @endphp
                    @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="emergency-mobile-section">
        <div class="vtc-logo text-center">
            <a href="https://www.velocitytruckcentres.com.au/">
                <img class="" src="/images/vtc_logo.png" width="220" height="75">
            </a>
        </div>
        <div class="emergency-contact text-center">
            24/7 Emergency Roadside Assistance: <br/>
            <div class="trucks-phone">Trucks: <a href="tel:1800 033 557">1800 033 557</a></div>
        </div>
    </div>
    <div class="content-blocks aos-item" data-aos="fade-in">
        <div class="col col1">
            <a href="/stock/search" target="_blank">
                <h2>Search Our <br/>Stock <i class="fa fa-arrow-right"></i></h2>
            </a>
        </div>
        <div class="col col2">
            <a href="/contact-us#service_tab_id" target="_blank">
                <h2>Book a <br/>Service <i class="fa fa-arrow-right"></i></h2>
            </a>
        </div>
        <div class="col col3">
            <a href="https://www.velocitytruckcentres.com.au/careers" target="_blank">
                <h2>Careers <i class="fa fa-arrow-right"></i></h2>
            </a>
        </div>
        <div class="col col4">
            <a href="/specials">
                <h2>Latest<br/> Offers <i class="fa fa-arrow-right"></i></h2>
            </a>
        </div>
    </div>
    <div class="welcome-text">
        <p>
            <b>Welcome to Daimler Trucks Laverton</b>
        </p>
        <p>
            A truck is more than just a vehicle. It's a choice and a way of life. We understand that and make sure you leave our dealership with not just the truck you want but the truck you need.
        </p>
        <p>
            <b>Daimler Trucks Laverton</b> in one of Australia's largest dealerships. Our brands include <b>Mercedes-Benz, Freightliner and Fuso</b>. We sell a combination of trucks, buses and vans and are a full service dealership.
        </p>
    </div>
    <div class="row no-gutter top-brands">
        <div class="col-md-6 brand-title">
            <p>brands we carry</p>
        </div>
        <div class="col-md-6 brand-lists">
            <div class="container-fluid">
                <div class="brand-carousel brand-logos">
                    <div class="item">
                        <a href="/brands/mercedes-benz/trucks" title="Mercedes-Benz Trucks" target="_self"><img src="{{ asset('images/mercedesbenztrucks-logo.jpeg') }}"> </a>
                    </div>
                    <div class="item">
                        <a href="/brands/freightliner" title="Freightliner" target="_self"><img src="{{ asset('images/freightliner-logo.jpeg') }}"> </a>
                    </div>
                    <div class="item">
                        <a href="/brands/fuso/canter" title="Fuso" target="_self"><img src="{{ asset('images/Fuso-Logo.png') }}"> </a>
                    </div>
                    <div class="item">
                        <a href="/brands/mercedes-benz/van" title="Mercedes-Benz Vans" target="_self"><img src="{{ asset('images/mercedesbenzvans-logo.jpeg') }}"> </a>
                    </div>
                    <div class="item">
                        <a href="/stock/used-trucks/" title="Used Trucks"> <img src="{{ asset('images/usedtrucks-logo.png') }}"> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="search-tab">
            <!-- <ul class="nav nav-pills">
                <li class="tab-title" id="vehicle_search"><a href="#vehicle_tab" data-toggle="tab" aria-expanded="true" class="active"><i class="dtm-icon-search-sq"></i> Vehicle Search</a></li>
                {{-- <li class="tab-title" id="budget_search"><a href="#budget_tab" data-toggle="tab" aria-expanded="false"><i class="dtm-icon-calculator"></i> Search by budget</a></li> --}}
            </ul> -->
            <div class="section-title">search inventory</div>
            <div class="tab-content">
                <div class="tab-pane vehicle-search active" id="vehicle_tab">
                    <form method="POST" action="{{ route('filter.stock') }}">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 mt-2 pt-3 d-flex">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="custom-checkbox d-inline-block ml-0">
                                    <label for="newtrucks" class="checkbox-custom">
                                        New
                                        <input type="checkbox" onclick="getData()" id="newtrucks" name="newtrucks" class="truck-condition" checked> 
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="custom-checkbox d-inline-block">
                                    <label for="demotrucks" class="checkbox-custom">
                                        Demo
                                        <input type="checkbox" onclick="getData()" id="demotrucks" name="demotrucks" class="truck-condition" checked> 
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="custom-checkbox d-inline-block">
                                    <label for="usedtrucks" class="checkbox-custom">
                                        Used
                                        <input type="checkbox" onclick="getData()" id="usedtrucks" name="usedtrucks" class="truck-condition" checked> 
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <!-- <label>Dealership Location</label> -->
                                        <select id="location" name="location" class="custom-select">
                                            <option value="-">Dealership Location</option>
                                            <option value="any">Any</option>
                                            @if(isset($locations) && count($locations)>0)
                                                @foreach($locations as $location)
                                                    <option value="{{$location->seller_identifier}}">{{$location->seller_name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <!-- <label>Make</label> -->
                                        <select id = "make" name="make" class="custom-select">
                                            <option value="-">Make</option>
                                            <option value="any">Any</option>
                                            @if(isset($make) && count($make)>0)
                                                @foreach($make as $make_model)
                                                    <option value="{{strtolower($make_model->Make)}}">{{$make_model->Make . "(" . $make_model->count . ")"}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <!-- <label>Model</label> -->
                                        <select id="model" name="model" class="custom-select">
                                            <option value="-">Model</option>
                                            <option value="any">Any</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <input type="submit" value="Search Stock" class="btn btn-red">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @if(isset($special) && isset($special->content) && count($special->content)>0)
            <div class="special-offers">
                <div class="offer-text">
                    <span class="offer-icon"></span>
                    <span class="left-triangle"></span>
                    <span class="offer-title">Special</span>
                    <span class="right-triangle"></span>
                </div>
                <div class="offers-carousel owl-carousel owl-theme">
                    @if(isset($special) && isset($special->content) && count($special->content)>0)
                        @foreach($special->content as $specialitem)
                            <div class="offer-item">
                                @if(isset($specialitem->listing_type) && strtolower($specialitem->listing_type)=="new")
                                    <a href="/stock/new-trucks/{{$specialitem->slug}}">
                                @elseif(isset($specialitem->listing_type) && strtolower($specialitem->listing_type)=="demo")
                                    <a href="/stock/demo-trucks/{{$specialitem->slug}}">
                                @elseif(isset($specialitem->listing_type) && strtolower($specialitem->listing_type)=="used")
                                    <a href="/stock/used-trucks/{{$specialitem->slug}}">
                                @else
                                    <a href="/specials">
                                @endif
                                    <div class="image-wrapper">
                                        @if(isset($specialitem->document) && count($specialitem->document)>0)
                                            <img class="owl-lazy" src="{{ $specialitem->document[0]->media_thumb}}" alt="{{$specialitem->specification_title}}">
                                        @endif
                                        <div class="offer-tag">
                                            <h5>Special<span class="triangle-right-small"></span></h5>
                                        </div>
                                        @if($specialitem->price_list_type == "EGC")
                                            <div class="price-tag">@currency_format($specialitem->price_list_amount)<small class="qualifier"> Ex. Govt. Charges</small> <sup>2</sup></div>
                                        @elseif($specialitem->price_list_type == "DAP")
                                            <div class="price-tag">@currency_format($specialitem->price_list_amount)<small class="qualifier"> Price on Application</small> <sup>3</sup></div>
                                        @else
                                            <div class="price-tag">@currency_format($specialitem->price_list_amount)<small class="qualifier"> Drive Away</small> <sup>3</sup></div>
                                        @endif
                                    </div>
                                    @if(isset($specialitem->document) && count($specialitem->document)>0)
                                        <div class="photo-counts">View {{count($specialitem->document)}} Photos</div>
                                    @else
                                        <div class="photo-counts">View Photos</div>
                                    @endif
                                    <div class="product-title">
                                        {{$specialitem->specification_title}}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        @endif
    </div>
</section>
<script>
    $(document).ready(function(){
        $("#make").change(function(){
            GetModelDataByMakeandLocation();
        });
        $("#usedtrucks, #demotrucks, #newtrucks").change(function(){
            var idNewTruck = $("#newtrucks").is(":checked");
            var idDemoTruck = $("#demotrucks").is(":checked");
            var isUsedTruck = $("#usedtrucks").is(":checked");
            var isUsed = 'used';
            if(idNewTruck || idDemoTruck) {
                isUsed = '';
            }
            if(!isUsedTruck) {
                isUsed = '';
            }
            var req_url = "{{ config('apiprovider.api.get_inventory_location')}}";
            $.ajax({
                url: req_url,
                type: "get", //send it through get method
                data: { 
                    inventory_type: isUsed,
                    seller_identifier: "{{ env('SELLER_IDENTIFIER') }}"
                },
                cache: false,
                success: function(response){
                    // console.log(response);
                    if(response && response.length>0) {
                        $('#location')
                        .find('option')
                        .remove()
                        .end()
                        .append('<option value="any">Any</option>')
                        .val('any');
                        response.forEach(element => {
                            // console.log(element);
                            $('#location').append($('<option>').val(element.seller_identifier.toLowerCase()).text(element.seller_name));
                        });
                    } else {
                        $('#location')
                        .find('option')
                        .remove()
                        .end()
                        .append('<option value="any">Any</option>')
                        .val('any');
                    }
                }
            }); 
        });
        $("#location").change(function(){
            $("#make").val("any");
            GetMakeDataByTruckConditionandDelearshipLocation();
        });    
    });
    function GetModelDataByMakeandLocation() {
        var make= $("#make").val() // Here we can get the value of selected item
            var location = $("#location").val();
            if(location == "any") {
                location="";
            }
            $("#model").val("any").change();
            var req_url = "{{ config('apiprovider.api.get_model_data_by_make_and_location')}}";
            $.ajax({
                url: req_url,
                type: "get", //send it through get method
                data: { 
                    make: make,
                    dealer_location: location,
                    seller_identifier: "{{ env('SELLER_IDENTIFIER') }}"
                },
                cache: false,
                success: function(response){
                    // console.log(response);
                    if(response && response.length>1) {
                        $('#model')
                        .find('option')
                        .remove()
                        .end()
                        .append('<option value="allmodels">All Models</option>')
                        .val('allmodels');
                        response.forEach(element => {
                            // console.log(element);
                            $('#model').append($('<option>').val(element.Model.toLowerCase()).text(element.Model + "(" + element.count + ")"));
                        });
                    } else if(response && response.length==1) { 
                        $('#model')
                        .find('option')
                        .remove()
                        .end();
                        response.forEach(element => {
                            // console.log(element);
                            $('#model').append($('<option selected>').val(element.Model.toLowerCase()).text(element.Model + "(" + element.count + ")"));
                        });
                    } else {
                        $('#model')
                        .find('option')
                        .remove()
                        .end()
                        .append('<option value="any">Any</option>')
                        .val('any');
                    }
                }
            });
    }
    function GetMakeDataByTruckConditionandDelearshipLocation() {
        var isNewTruck = $("#newtrucks").is(":checked");
        var isDemoTruck = $("#demotrucks").is(":checked");
        var isUsedTruck = $("#usedtrucks").is(":checked");
        var location = $("#location").val();
        if(location == "any") {
            location="";
        }
        $("#make").val("any");
        $("#model").val("any").change();
        var req_url = "{{ config('apiprovider.api.get_make_data')}}";
        $.ajax({
            url: req_url,
            type: "get", //send it through get method
            data: { 
                is_demo: isDemoTruck, 
                is_new: isNewTruck, 
                is_used: isUsedTruck,
                dealer_location: location,
                seller_identifier: "{{ env('SELLER_IDENTIFIER') }}"
            },
            cache: false,
            success: function(response){
                // console.log(response);
                if(response && response.length>0) {
                    $('#make')
                    .find('option')
                    .remove()
                    .end()
                    .append('<option value="any">Any</option>')
                    .val('any');
                    response.forEach(element => {
                        // console.log(element);
                        $('#make').append($('<option>').val(element.Make.toLowerCase()).text(element.Make + "(" + element.count + ")"));
                    });
                    if(response && response.length==1) {
                        $("#make").val(response[0].Make.toLowerCase()).change();
                    }
                } else {
                        $('#make')
                        .find('option')
                        .remove()
                        .end()
                        .append('<option value="any">Any</option>')
                        .val('any');
                        
                        $('#model')
                        .find('option')
                        .remove()
                        .end()
                        .append('<option value="any">Any</option>')
                        .val('any');
                }
            }
            });
    }
    function getData() {
        GetMakeDataByTruckConditionandDelearshipLocation();
    }
    function navigateToURL(url) {
        // window.open(url, '_self').focus();
        var newUrl = '';
    if (url.includes('http')) {
      newUrl = url;
    } else {
      newUrl = '/' + url;
    }
  
    window.open(newUrl, '_self');
    }
</script>
@endsection