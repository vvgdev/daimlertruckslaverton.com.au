@extends('layouts.app')

@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Our Inventory</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="inventory inventory-page">
            <div class="row">
                <div class="col-md-12 col-lg-3 left-filter">
                    <h2 class="title">Trucks For Sale</h2>
                    <div class="filters">
                        <div class="filter-box">
                            <form  id="filterform" method="POST" action="{{ route('filter.stock') }}">
                                @csrf

                                @php($vehicleType = null)
                                @if((isset($is_new) && $is_new))
                                    @php($vehicleType .= isset($vehicleType) ? " & New" : "New")
                                @endif
                                @if((isset($is_demo) && $is_demo))
                                    @php($vehicleType .= isset($vehicleType) ? " & Demo" : "Demo")
                                @endif
                                @if((isset($is_used) && $is_used))
                                    @php($vehicleType .= isset($vehicleType) ? " & Used" : "Used")
                                @endif
                                @if((isset($is_used) && $is_used) && (isset($is_demo) && $is_demo) && (isset($is_new) && $is_new))
                                @elseif(isset($vehicleType) && !empty($vehicleType))
                                    <strong class="filter-title">{{$vehicleType}} Trucks</strong>
                                @endif
                                <div class="sidebar">
                                        @if(isset($keyword))
                                            <input id="keywords" class="" name="keywords" type="text" value="{{$keyword}}" placeholder="Eg: Make, Model, Rego, Body type" maxlength="80">
                                        @else
                                            <input id="keywords" class="" name="keywords" type="text" value="" placeholder="Eg: Make, Model, Rego, Body type" maxlength="80">
                                        @endif
                                    <div class="sub-title" onclick="accordion('sidebar')">filters</div>
                                    <div id="sidebar" class="filters-container w3-container w3-hide">
                                        <div class="filters-block">
                                            <p class="filter-head">Type</p>
                                            <div class="inner-wrapper type-box">
                                                <div class="custom-checkbox">
                                                    <label for="filter_newtrucks" class="checkbox-custom">
                                                        New
                                                        <input type="checkbox" id="filter_newtrucks" name="filter_newtrucks" class="truck-condition" onclick="getData()" {{ (isset($is_new) && $is_new) ? "checked" : ""}}> 
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <label for="filter_demotrucks" class="checkbox-custom">
                                                        Demo
                                                        <input type="checkbox" id="filter_demotrucks" name="filter_demotrucks" class="truck-condition" onclick="getData()" {{ (isset($is_demo) && $is_demo) ? "checked" : ""}}> 
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <label for="filter_usedtrucks" class="checkbox-custom">
                                                        Used
                                                        <input type="checkbox" id="filter_usedtrucks" name="filter_usedtrucks" class="truck-condition" onclick="getData()" {{ (isset($is_used) && $is_used) ? "checked" : ""}}> 
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filters-block">
                                            <p class="filter-head">Dealership Location</p>
                                            <div class="inner-wrapper">
                                                <select id="location" name="location" class="custom-select">
                                                    <option value="any">Any</option>
                                                    @if(isset($locations) && count($locations)>0)
                                                        @foreach($locations as $location)
                                                            @if(isset($selected_location) && $location->seller_identifier == $selected_location)
                                                                <option value="{{$location->seller_identifier}}" selected>{{$location->seller_name}}</option>
                                                            @else
                                                                <option value="{{$location->seller_identifier}}">{{$location->seller_name}}</option>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="filters-block">
                                            <p class="filter-head">Make</p>
                                            <div class="inner-wrapper">
                                                <select id = "make" name="make" class="custom-select">
                                                    <option value="any">Any</option>
                                                    @if(isset($make) && count($make)>0)
                                                        @foreach($make as $make_model)
                                                            @if(isset($selected_make) && strtolower($make_model->Make) == $selected_make)
                                                                <option value="{{strtolower($make_model->Make)}}" selected>{{$make_model->Make . "(" . $make_model->count . ")"}}</option>
                                                            @else
                                                                <option value="{{strtolower($make_model->Make)}}">{{$make_model->Make . "(" . $make_model->count . ")"}}</option>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="filters-block">
                                            <p class="filter-head">Model</p>
                                            <div class="inner-wrapper">
                                                <select id="model" name="model" class="custom-select">
                                                    <option value="any">Any</option>
                                                    @if(isset($model) && count($model)>0)
                                                        @foreach($model as $model_itm)
                                                            @if(isset($selected_model) && strtolower($model_itm->Model) == $selected_model)
                                                                <option value="{{strtolower($model_itm->Model)}}" selected>{{$model_itm->Model . "(" . $model_itm->count . ")"}}</option>
                                                            @else
                                                                <option value="{{strtolower($model_itm->Model)}}">{{$model_itm->Model . "(" . $model_itm->count . ")"}}</option>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="filters-block">
                                            <p class="filter-head">Age and Kms</p>
                                            <div class="inner-wrapper">
                                                <div class="age-wrapper d-flex">
                                                    <div class="year-from pr-1 w-50">
                                                        <label class="mb-0">Year From</label>
                                                        <select id="yearfrom" name="yearfrom" class="custom-select">
                                                            @if(isset($selected_yearfrom) && !empty($selected_yearfrom) && $selected_yearfrom =="minimum")
                                                                <option value="any" selected>Any</option>
                                                            @else
                                                                <option value="any">Any</option>
                                                            @endif
                                                            @if(isset($yearFrom) && count($yearFrom)>0)
                                                                @foreach($yearFrom as $key=>$value)
                                                                    @if(isset($selected_yearfrom) && $key == $selected_yearfrom && $selected_yearfrom !="minimum")
                                                                        <option value="{{$key}}" selected>{{$value}}</option>
                                                                    @else
                                                                        <option value="{{$key}}">{{$value}}</option>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="year-to pl-1 w-50">
                                                        <label class="mb-0">Year to</label>
                                                        <select id="yearto" name="yearto" class="custom-select">
                                                            <option value="any">Any</option>
                                                            @if(isset($yearTo) && count($yearTo)>0)
                                                                @foreach($yearTo as $key=>$value)
                                                                    @if(isset($selected_yearto) && $key == $selected_yearto)
                                                                        <option value="{{$key}}" selected>{{$value}}</option>
                                                                    @else
                                                                        <option value="{{$key}}">{{$value}}</option>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- <div class="kilometres-slider mt-3 mb-3">
                                                    Kilometres
                                                    <div class="pull-right">Up to <span id="budget_amount">990000</span>Kms</div>
                                                    <div id="kilometres_range" class="red mt-3"></div>
                                                    <input type="hidden" id="kilometres" name="kilometres" value="990000" />
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="filters-block">
                                            <p class="filter-head">Body Type</p>
                                            <div class="inner-wrapper">
                                                <div class="bodytype">
                                                    <select id = "bodytype" name="bodytype" class="custom-select">
                                                        <option value="any">Any</option>
                                                        @if(isset($bodyMakeData) && count($bodyMakeData)>0)
                                                                @foreach($bodyMakeData as $bodyMake)
                                                                    @if(isset($selected_bodytype) && strtolower($bodyMake->bodyMake) == $selected_bodytype)
                                                                        <option value="{{strtolower($bodyMake->bodyMake)}}" selected>{{$bodyMake->bodyMake}}</option>
                                                                    @else
                                                                        <option value="{{strtolower($bodyMake->bodyMake)}}">{{$bodyMake->bodyMake}}</option>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filters-block">
                                            <p class="filter-head">Transmission</p>
                                            <div class="inner-wrapper">
                                                <div class="custom-checkbox">
                                                    <label for="automatic" class="checkbox-custom">
                                                        Automatic
                                                        <input type="checkbox" id="automatic" name="automatic" class="truck-transmission" {{ (isset($is_automatic) && $is_automatic) ? "checked" : ""}}> 
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <label for="manual" class="checkbox-custom">
                                                        Manual
                                                        <input type="checkbox" id="manual" name="manual" class="truck-manual" {{ (isset($is_manual) && $is_manual) ? "checked" : ""}}> 
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filters-block">
                                            <p class="filter-head">Fuel Type</p>
                                            <div class="inner-wrapper">
                                                <div class="fueltype">
                                                    <select id = "fueltype" name="fueltype" class="custom-select">
                                                        <option value="any">Any</option>
                                                        @if(isset($selected_fueltype) && "diesel" == $selected_fueltype)
                                                            <option value="diesel" selected>Diesel</option>
                                                        @else
                                                            <option value="diesel">Diesel</option>
                                                        @endif
                                                        {{-- @if(isset($make) && count($make)>0)
                                                                @foreach($make as $make_model)
                                                                    <option value="{{strtolower($make_model->Make)}}">{{$make_model->Make . "(" . $make_model->count . ")"}}</option>
                                                                @endforeach
                                                            @endif --}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="refine-search-btn">
                                            @if(isset($sort_field) && !empty($sort_field) 
                                                && isset($sort_direction) && !empty($sort_direction))
                                                <input type="hidden" id="sortoption" name="{{$sort_field}}" value="{{$sort_direction}}" />
                                            @else
                                                <input type="hidden" id="sortoption" name="" value="" />
                                            @endif
                                            <input type="hidden" id="switch_value" name="switch_value" value="false" />
                                            <input type="hidden" id="site_slug" name="site_slug" value="{{env('APP_SLUG', 'daimler-trucks-somerton')}}" />
                                            <input type="submit" value="Search" class="btn btn-red-small"/>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9 right-inventory">
                    @if( (isset($vehicleType) && !empty($vehicleType)) && $vehicleType == 'Used')
                        <div style="float: right;">
                            <span style="padding-top: 2px;float: left;margin-right: 8px;">{{env('USED_INVENTORY_NAME')}}</span>
                            <label for="isCheck" class="switch">
                                <input type="checkbox" id="isCheck" name="isCheck" value="{{$switch_value}}" onchange="onFilterChange()" {{ (isset($switch_value) && $switch_value) ? "checked" : ""}}>
                                <span class="slider round"></span>
                            </label>
                            <span style="padding-top: 2px;float: right;margin-left: 8px;">National Stock</span>
                        </div>
                        <br/>
                    @endif
                    @if(isset($inventories) && isset($inventories->content) && count($inventories->content)>0)
                    <div class="inventory-listing" style="clear:both;">
                        <div class="search-details">
                            <div class="page-result">
                                <div class="search-details">
                                    Showing : <span>{{$inventories->totalRecords}} Results </span>
                                </div>
                            </div>
                        </div>
                        <div id="inventorieslist" class="row inventory-grid">
                            @foreach($inventories->content as $inventory)
                            <div class="item col-xs-12 col-sm-6 col-md-4">
                                <div class="listing">
                                    <div class="list-image">  <!-- data-toggle="modal" data-target="#myModal" -->
                                        @if(count($inventory->document))
                                            <img class="main-img owl-lazy" src="{{ $inventory->document[0]->media_thumb}}" alt="{{$inventory->specification_title}}">
                                        @else
                                            <img class="main-img owl-lazy" src="/images/NO-IMAGE.png" alt="{{$inventory->specification_title}}">
                                        @endif
                                    </div>
                                    <div class="list-body">
                                        <div class="list-title">{{substr($inventory->specification_title,0, 35)}}{{strlen($inventory->specification_title) > 35 ? '...' : ''}}</div>
                                        <ul>
                                            <li>
                                                <label>Stock #</label>
                                                <div>{{$inventory->stock_number}}</div>
                                            </li>
                                            <li>
                                                <label>Body Type</label>
                                                <div>{{$inventory->body_make}}</div>
                                            </li>
                                            <li>
                                                <label>Price</label>
                                                <div>{{($inventory->price_list_amount != null ? '$' : '').($inventory->price_list_amount != null ? number_format($inventory->price_list_amount, 0) : 'null')}}</div>
                                            </li>
                                        </ul>
                                        <div class="location-center">
                                            <i class="fa fa-map-marker"></i>
                                            <span>{{$inventory->seller_name}}</span>
                                        </div>
                                        @if( isset($inventory->extra_num) && !empty($inventory->extra_num) )
                                            <a href="tel:{{$inventory->extra_num}}" class="contact-details">
                                                <i class="fa fa-phone"></i>
                                                <span class="mb-2">{{$inventory->extra_num}}</span>
                                            </a>
                                        @else
                                            <a href="tel:02 8822 4800" class="contact-details">
                                                <i class="fa fa-phone"></i>
                                                <span class="mb-2">02 8822 4800</span>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="content-btn">
                                        @if(isset($inventory->listing_type) && strtolower($inventory->listing_type)=="new")
                                            <a class="btn btn-red-small list-bottom" href="/stock/new-trucks/{{$inventory->slug}}" title="{{$inventory->specification_title}}">View Details</a>
                                        @elseif(isset($inventory->listing_type) && strtolower($inventory->listing_type)=="demo")
                                            <a class="btn btn-red-small list-bottom" href="/stock/demo-trucks/{{$inventory->slug}}" title="{{$inventory->specification_title}}">View Details</a>
                                        @elseif(isset($inventory->listing_type) && strtolower($inventory->listing_type)=="used")
                                            <a class="btn btn-red-small list-bottom" href="/stock/used-trucks/{{$inventory->slug}}" title="{{$inventory->specification_title}}">View Details</a>
                                        @else
                                            <a class="btn btn-red-small list-bottom" href="/stock/new-trucks/{{$inventory->slug}}" title="{{$inventory->specification_title}}">View Details</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @if(isset($inventories) && isset($inventories->totalRecords) && $inventories->totalRecords>12)
                            <input type="hidden" id="page_no" name="page_no" value="1">
                            <input type="hidden" id="records_per_page" name="records_per_page" value="12">
                            <div id="loadmoreinventories" class="btn btn-red-small full-width mt-3 btnload-more" onclick="LoadMoreInventories()">Load More Vehicles</div>
                        @endif
                    </div>
                    @else
                        <div class="no-records text-center" style="clear:both;">
                            <i class="dtm-icon-gallery-truck"></i>
                            <h5 class="w-100">WE CURRENTLY HAVE NO TRUCKS MATCHING YOUR SEARCH.</h5>
                            <div>Try modifying or removing some choices.</div>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade inventorydetail-popup" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="custom-close" data-dismiss="modal" aria-label="Close">
                            <span>X</span>
                            </button>
                            <div class="popup-slider">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                <div class="item active">
                                    <picture>    
                                    <source type="image/webp" srcset="{{'assets/images/default-inventory.webp'}}">  
                                    <source type="image/jpg" srcset="{{'assets/images/default-inventory.jpg'}}">
                                    <img src="{{'assets/images/default-inventory.jpg'}}" alt="Velocity Truck Centers" style="width:100%;">
                                    </picture>
                                </div>
                                </div>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                            </div>
                            <div class="popup-details-container">
                                <div class="popup-title-container">
                                <div class="top-links">
                                    <a class="btn btn-red mr-4 hvr-sweep-to-right" href="javascript:void(0)" onclick="openContact();">REQUEST A QUOTE</a>
                                    <div style="display: inline-block; position: relative;">
                                    <a href="javascript:void(0)" onclick="toggleShare();" class="btn btn-blue hvr-sweep-to-right-share">Share</a>
                                    <div id="share-div" style="margin-top: 5px; position: absolute; display: none;">
                                        <div class="SocialSharingButtons">
                                        <a name="email" id="share-email" href="mailto:?subject=StockNo%20%20Model%20&amp;body=Link%20to%20Inventory:%20https://staging.vvgau.vtc.systems/inventory/new-trucks/2021-fuso-815-5a0b0690-862d-4a0f-9a40-cc7a2b956639" title="Email" target="_blank" class="btn btn-email"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Email</a>
                                        <a name="facebook" id="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fstaging.vvgau.vtc.systems%2Finventory%2Fnew-trucks%2F2021-fuso-815-5a0b0690-862d-4a0f-9a40-cc7a2b956639" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i>&nbsp;&nbsp;Facebook</a>
                                        <a name="twitter" id="share-twitter" href="https://twitter.com/share?url=https://staging.vvgau.vtc.systems/inventory/new-trucks/2021-fuso-815-5a0b0690-862d-4a0f-9a40-cc7a2b956639&amp;subject=StockNo%2520%2520Model%2520&amp;body=Link%2520to%2520Inventory:%2520https:" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i>&nbsp;&nbsp;Twitter</a>
                                        <a name="linkedin" id="share-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;amp;url=https://staging.vvgau.vtc.systems/inventory/new-trucks/2021-fuso-815-5a0b0690-862d-4a0f-9a40-cc7a2b956639" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i>&nbsp;&nbsp;LinkedIn</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="description">
                                <div class="title">Description</div>
                                <p id="descText"> StockNo: 1772583<br> Year: 2022<br> Make: FREIGHTLINER<br> Model: CASCADIA 126 SLEEPER<br> GVWR: 53300<br></p>
                                </div>
                                <div class="panel-group specification" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="more-less fa fa-plus"></i>
                                        Specification
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div id="parameter-group" class="spec-accordion">
                                        <div id="head-powertrain" class="spec-head">
                                            <h4>PRODUCT DETAILS</h4>
                                            <div class="arrow down"></div>
                                        </div>
                                        <div id="body-powertrain" class="spec-body">
                                            <table class="table table-striped">
                                                <tbody id="table-powertrain">
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="head-interior" class="spec-head">
                                            <h4>CABIN FEATURES</h4>
                                            <div class="arrow down"></div>
                                        </div>
                                        <div id="body-interior" class="spec-body">
                                            <table class="table table-striped">
                                                <tbody id="table-interior">
                                                <tr>
                                                    <td>Speed Limiter</td>
                                                    <td class="tbold">Detroit</td>
                                                </tr>
                                                <tr>
                                                    <td>GPS</td>
                                                    <td class="tbold">Detroit</td>
                                                </tr>
                                                <tr>
                                                    <td>Air Conditioning</td>
                                                    <td class="tbold">Detroit</td>
                                                </tr>
                                                <tr>
                                                    <td>Fridge</td>
                                                    <td class="tbold">Detroit</td>
                                                </tr>
                                                <tr>
                                                    <td>Stereo</td>
                                                    <td class="tbold">Detroit</td>
                                                </tr>
                                                <tr>
                                                    <td>Radio</td>
                                                    <td class="tbold">Detroit</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="head-cab-body" class="spec-head">
                                            <h4>BODY</h4>
                                            <div class="arrow down"></div>
                                        </div>
                                        <div id="body-cab-body" class="spec-body">
                                            <table class="table table-striped">
                                                <tbody id="table-chasis">
                                                <tr>
                                                    <td>Body Make</td>
                                                    <td class="tbold">Detroit</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="head-body-details" class="spec-head">
                                            <h4>ENGINE</h4>
                                            <div class="arrow down"></div>
                                        </div>
                                        <div id="body-body-details" class="spec-body">
                                            <table class="table table-striped">
                                                <tbody id="table-body-details">
                                                <tr>
                                                    <td>Engine Make</td>
                                                    <td class="tbold">Detroit</td>
                                                </tr>
                                                <tr>
                                                    <td>Fuel Type</td>
                                                    <td class="tbold">Detroit</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="head-accessories-details" class="spec-head">
                                            <h4>ACCESSORIES</h4>
                                            <div class="arrow down"></div>
                                        </div>
                                        <div id="body-body-details" class="spec-body">
                                            <table class="table table-striped">
                                                <tbody id="table-accessories-details">
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="head-transmission-details" class="spec-head">
                                            <h4>TRANSMISSION</h4>
                                            <div class="arrow down"></div>
                                        </div>
                                        <div id="body-body-details" class="spec-body">
                                            <table class="table table-striped">
                                                <tbody id="table-transmission-details">
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- panel-group -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div id="popup1" class="overlay popup-overlay">
                    <div class="popup brochure-popup">
                        <span class="popup-title" id="inv_title"></span>
                        <a class="close" id="close-inquiry" onclick="closeContact();" href="javascript:void(0)">X</a>
                        <div class="form-container">
                                <form onsubmit="$(this).request('onSubmitInquiry', {
                                        success: function(data) {
                                            closeContact(data);
                                        },
                                        error: function(data){
                                            captchaVarify();
                                        }
                                    }); return false;">
                                <input class="form-control" id="subject" name="subject" required="" type="hidden">
                                <input class="form-control" id="contact-availability" name="contact-availability" required="" type="hidden"> 
                                <input class="form-control" id="contact-location" name="contact-location" required="" type="hidden"> 
                                <div class="container-fluid">
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" id="name" name="name" required="" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" id="mobile" name="mobile" required="" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" id="email" name="email" required="" type="text">
                                        </div>
                                        <div class="form-captcha form-group">
                                        <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Le9KsAaAAAAAFqprju7gblUuE8IyepTbDM34oGc"></div>
                                        <span class="hide" id="captchaMsg">
                                            <b>Please verify captcha</b>
                                        </span>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input class="form-control" id="company" name="company" required="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Question Or Comment</label>
                                        <textarea class="form-control" type="textarea" id="message" name="message"></textarea>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <div class="btn-groups text-center">
                                    <button type="submit" id="submit" name="submit" class="btn btn-red hvr-sweep-to-right">Submit</button>
                                </div>
                                </form>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Modal -->
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $("#make").change(function(){
            GetModelDataByMakeandLocation();
        });
        $("#filter_usedtrucks").change(function(){
            var isNewTruck = $("#filter_newtrucks").is(":checked");
            var isDemoTruck = $("#filter_demotrucks").is(":checked");
            var isUsedTruck = $("#filter_usedtrucks").is(":checked");
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
        $('#kilometres_range').slider({
            change: function(event, ui) { 
                if(event.currentTarget) {
                    $("#kilometres").val(ui.value);
                }
            }
        });
        $('#inventorysort').change(function() {    
            var selected = $(this).find('option:selected');
            var optionId = selected.data('id');
            if(optionId == "price") {
                $('#sortoption').attr('name', 'price_sort');
                $('#sortoption').attr('value', selected.val());
            } else if(optionId == "make-model") {
                $('#sortoption').attr('name', 'make_model_sort');
                $('#sortoption').attr('value', selected.val());
            } else if(optionId == "kms") {
                $('#sortoption').attr('name', 'km_sort');
                $('#sortoption').attr('value', selected.val());
            } else if(optionId == "yearmade") {
                $('#sortoption').attr('name', 'year_sort');
                $('#sortoption').attr('value', selected.val());
            } else if(optionId == "latestarrivals") {
                $('#sortoption').attr('name', 'date_arrival_sort');
                $('#sortoption').attr('value', selected.val());
            } else if(optionId == "lastupdated") {
                $('#sortoption').attr('name', 'date_sort');
                $('#sortoption').attr('value', selected.val());
            } else if(optionId == "default") {
                $('#sortoption').attr('name', '');
                $('#sortoption').attr('value', '');
            }
            $('form#filterform').submit();
        });
        @if(isset($selected_kilometres) && !empty($selected_kilometres))
            $("#kilometres_range").slider('value',{{$selected_kilometres}});
        @endif
    });  
    function onFilterChange() {
        var isCheckAllUsed = $("#isCheck").is(":checked");
        // console.log(isCheckAllUsed);
        $("#switch_value").val('false');
        if(isCheckAllUsed) {
            $("#switch_value").val('true');
        }
        $('form#filterform').submit();
    }       
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
        var isNewTruck = $("#filter_newtrucks").is(":checked");
        var isDemoTruck = $("#filter_demotrucks").is(":checked");
        var isUsedTruck = $("#filter_usedtrucks").is(":checked");
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
    function LoadMoreInventories() {
        var isNewTruck = $("#filter_newtrucks").is(":checked");
        var isDemoTruck = $("#filter_demotrucks").is(":checked");
        var isUsedTruck = $("#filter_usedtrucks").is(":checked");
        var isAutomatic = $("#automatic").is(":checked");
        var isManual = $("#manual").is(":checked");
        var location = $("#location").val();
        var make = $("#make").val();
        var model = $("#model").val();
        var yearfrom = $("#yearfrom").val();
        var yearto = $("#yearto").val();
        var bodytype = $("#bodytype").val();
        var fueltype = $("#fueltype").val();
        var keyword = $("#keywords").val();
        var isChecked = $("#isCheck").is(":checked");
        if(location == "any") {
            location="";
        }
        if(make == "any") {
            make="";
        }
        if(model == "any" || model == "allmodels") {
            model="";
        }
        if(yearfrom == "any" && yearto == "any") {
            yearfrom="";
            yearto="";
        }
        if(bodytype == "any") {
            bodytype="";
        }
        if(fueltype == "any") {
            fueltype="";
        }
        if(!isDemoTruck) {
            isDemoTruck="";
        }
        if(!isNewTruck) {
            isNewTruck="";
        }
        if(!isUsedTruck) {
            isUsedTruck="";
        }
        if(!isAutomatic) {
            isAutomatic="";
        }
        if(!isManual) {
            isManual="";
        }
        var page_no = $("#page_no").val();
        page_no = Number(page_no) + 1;
        var records_per_page = $("#records_per_page").val();
        var siteslug = $("#site_slug").val();
        var req_url = "{{ config('apiprovider.api.get_inventory')}}";
        var seller_identifier = "{{ env('SELLER_IDENTIFIER') }}";
        $.ajax({
            url: req_url,
            type: "get", //send it through get method
            data: {
                page_no:page_no,
                records_per_page:records_per_page,
                is_new:isNewTruck,
                is_demo:isDemoTruck,
                is_used:isUsedTruck,
                dealer_location:location,
                make:make,
                model:model,
                start_year:yearfrom,
                end_year:yearto,
                body_make:bodytype,
                transmission_type:isAutomatic,
                fuel_type:fueltype,
                keyword:keyword,
                site_name:siteslug,
                seller_identifier:seller_identifier,
                switchValue: (isChecked) ? 1 : 0,
            },
            cache: false,
            success: function(response){
                if(response && response.content && response.content.length>0) {
                    var totalRecords = response.totalRecords;
                    var totalpages = totalRecords/records_per_page;
                    if(page_no>totalpages) {
                        $("#loadmoreinventories").hide();
                    } else {
                        $("#page_no").val(page_no);
                    }
                    response.content.forEach(element => {
                        var data = '<div class="item col-xs-12 col-sm-6 col-md-4">';
                            data += '<div class="listing">';
                            data += '<div class="list-image">';
                            if(element.document && element.document.length>0) {
                                element.document.forEach(function (img, index) {
                                    if(index==0) {
                                        data += '<img class="main-img" src="' + img.media_thumb + '" alt="' + element.specification_title + ' ' + element.colour +'">';
                                    }
                                });
                            }
                            data += '</div>';
                            data += '<div class="list-body">';
                            data += '<div class="list-title">'+ element.specification_title.substring(0,35) + (element.specification_title.length > 35 ? '...':'') +'</div>';
                            data += '<ul>';
                            data += '<li>';
                            data += '<label>Stock #</label>';
                            data += '<div>'+element.stock_number+'</div>';
                            data += '</li>';
                            data += '<li>';
                            data += '<label>Body Type</label>';
                            data += '<div>'+element.body_make+'</div>';
                            data += '</li>';
                            data += '<li>';
                            data += '<label>Price</label>';
                            data += '<div>'+ (element.price_list_amount != null ? '$' : '') + addCommas(element.price_list_amount) +'</div>';
                            data += '</li>';
                            data += '</ul>';
                            data += '<div class="location-center">';
                            data += '<i class="fa fa-map-marker"></i>';
                            data += '<span>'+element.seller_name+'</span>';
                            data += '</div>';
                            data += (element.extra_num != '') ? '<a href="tel:' + element.extra_num + '" class="contact-details">' : '<a href="tel:0288224800" class="contact-details">';
                            data += '<i class="fa fa-phone"></i>';
                            data += (element.extra_num != '') ? '<span class="mb-2">' + element.extra_num + '</span>' : '<span class="mb-2">02 8822 4800</span>';
                            data += '</a>';
                            data += '</div>';
                            data += '<div class="content-btn">';
                            if(element.listing_type && element.listing_type.toLowerCase()=="new")
                                data += '<a class="btn btn-red-small list-bottom" href="/stock/new-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                            else if(element.listing_type && element.listing_type.toLowerCase()=="demo")
                                data += '<a class="btn btn-red-small list-bottom" href="/stock/demo-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                            else if(element.listing_type && element.listing_type.toLowerCase()=="used")
                                data += '<a class="btn btn-red-small list-bottom" href="/stock/used-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                            else
                                data += '<a class="btn btn-red-small list-bottom" href="/stock/new-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                            data +='</div>';
                            data +='</div>';
                            data +='</div>';
                        // var data = '<div class="stock-list">';
                        //     data += '<div class="heading-link">';
                        //     data += '<a class="full-width" href=""><h3>' + element.specification_title + '</h3></a>';
                        //     data += '<div class="charges-section" data-toggle="modal" data-target="#headingTitleModal">';
                        //     if(element.price_list_type == "EGC")
                        //         data += '<small class="heading-quantifier">Ex. Govt. Charges <sup>2</sup></small><br/>';
                        //     else if(element.price_list_type == "DAP")
                        //         data += '<small class="heading-quantifier">Price on Application <sup>3</sup></small><br/>';
                        //     else
                        //         data += '<small class="heading-quantifier">Drive Away <sup>3</sup></small><br/>';
                        //     if(element.price_list_amount)
                        //     {
                        //         var formatter = new Intl.NumberFormat('en-US', {
                        //             style: 'currency',
                        //             currency: 'USD',
                        //             minimumFractionDigits: 0,
                        //             });                                    
                        //         data += '<span class="heading-price">' + formatter.format(element.price_list_amount) + '</span>';
                        //     }
                        //     else
                        //         data += '<span class="heading-price"></span>';
                        //     data += '</div>';
                        //     data += '</div>';
                        //     data += '<div class="content-wrapper">';
                        //     data += '<div class="left-image">';
                        //     if(element.listing_type && element.listing_type.toLowerCase()=="new")
                        //         data += '<a class="images-link" href="/stock/new-trucks/' + element.slug + '" title="' + element.specification_title +'">';
                        //     else if(element.listing_type && element.listing_type.toLowerCase()=="demo")
                        //         data += '<a class="images-link" href="/stock/demo-trucks/' + element.slug + '" title="' + element.specification_title +'">';
                        //     else if(element.listing_type && element.listing_type.toLowerCase()=="used")
                        //         data += '<a class="images-link" href="/stock/used-trucks/' + element.slug + '" title="' + element.specification_title +'">';
                        //     else
                        //         data += '<a class="images-link" href="/stock/search" title="' + element.specification_title +'">';
                        //     if(element.document && element.document.length>0) {
                        //         element.document.forEach(function (img, index) {
                        //             if(index<5) {
                        //                 data += '<div class="image1">';
                        //                 data += '<img class="" src="' + img.media_thumb + '" alt="' + element.specification_title + ' ' + element.colour +'">';
                        //                 data += '</div>';
                        //             }
                        //         });
                        //     }
                        //     if(element.featured == 1) {
                        //             data += '<div class="special-icon"></div>';
                        //     }
                        //     data += '</a>';
                        //     data += '</div>';
                        //     data += '<div class="right-description">';
                        //     data += '<div class="content-text">';
                        //     data += '<div class="spec-wrapper">';
                        //     data += '<div class="spec-text">';
                        //     data += '<span class="spec-key">Type</span>';
                        //     data += '<span class="spec-type">' + element.listing_type + '</span>';
                        //     data += '</div>';
                        //     data += '<div class="spec-text">';
                        //     data += '<span class="spec-key">Colour</span>';
                        //     data += '<span class="spec-type">' + element.colour + '</span>';
                        //     data += '</div>';
                        //     data += '<div class="spec-text">';
                        //     data += '<span class="spec-key">Trans</span>';
                        //     data += '<span class="spec-type">' + element.transmission_type + '</span>';
                        //     data += '</div>';
                        //     data += '<div class="spec-text">';
                        //     data += '<span class="spec-key">Fuel Type</span>';
                        //     data += '<span class="spec-type">' + element.fuel_type + '</span>';
                        //     data += '</div>';
                        //     data += '<div class="spec-text">';
                        //     data += '<span class="spec-key">Body Type</span>';
                        //     data += '<span class="spec-type">' + element.body_make + '</span>';
                        //     data += '</div>';
                        //     data += '<div class="spec-text">';
                        //     data += '<span class="spec-key">Stock No.</span>';
                        //     data += '<span class="spec-type">' + element.stock_number + '</span>';
                        //     data += '</div>';
                        //     data += '<div class="spec-text">';
                        //     data += '<span class="spec-key">Location</span>';
                        //     data += '<span class="spec-type">' + element.seller_name + '</span>';
                        //     data += '</div>';
                        //     data += '</div>';
                        //     data += '</div>';
                        //     data += '<div class="content-btn">';
                        //     if(element.listing_type && element.listing_type.toLowerCase()=="new")
                        //         data += '<a class="btn btn-red-small full-width" href="/stock/new-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                        //     else if(element.listing_type && element.listing_type.toLowerCase()=="demo")
                        //         data += '<a class="btn btn-red-small full-width" href="/stock/demo-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                        //     else if(element.listing_type && element.listing_type.toLowerCase()=="used")
                        //         data += '<a class="btn btn-red-small full-width" href="/stock/used-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                        //     else
                        //         data += '<a class="btn btn-red-small full-width" href="/stock/new-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                        //     data += '</div>';
                        //     data += '</div>';
                        //     data += '</div>';
                        //     data += '</div>';
                            $( "#inventorieslist").append(data);
                            data="";
                    });
                } else {
                    $("#loadmoreinventories").hide();
                }
            }
            });
    }
    function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
    function resetFilter(filtertoRemove) {
        if(filtertoRemove == 'vehicletype') {
            $('#filter_newtrucks').prop('checked', false);
            $("#filter_demotrucks").prop('checked', false);
            $("#filter_usedtrucks").prop('checked', false);
            $('table#appliedfilters tr#vehicletyperow').remove();
        } else if(filtertoRemove == 'location') {
            $('#location').val('any');
            $('table#appliedfilters tr#locationrow').remove();
        } else if(filtertoRemove == 'make') {
            $('#make').val('any');
            $('#model').val('any');
            $('table#appliedfilters tr#makerow').remove();
            $('table#appliedfilters tr#modelrow').remove();
        } else if(filtertoRemove == 'model') {
            $('#model').val('any');
            $('table#appliedfilters tr#modelrow').remove();
        } else if(filtertoRemove == 'year') {
            $('#yearfrom').val('any');
            $('#yearto').val('any');
            $('table#appliedfilters tr#yearrow').remove();
        } else if(filtertoRemove == 'fueltype') {
            $('#fueltype').val('any');
            $('table#appliedfilters tr#fueltyperow').remove();
        } else if(filtertoRemove == 'bodytype') {
            $('#bodytype').val('any');
            $('table#appliedfilters tr#bodytyperow').remove();
        } else if(filtertoRemove == 'keyword') {
            $('#keywords').val('');
            $('table#appliedfilters tr#keywordrow').remove();
        }
        $('form#filterform').submit();
    }
//});​
</script>
@endsection