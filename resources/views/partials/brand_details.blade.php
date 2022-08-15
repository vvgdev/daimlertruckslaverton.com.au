
@if(isset($response['record']) && sizeof($response['record']) > 0)
<section class="">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Our Brands</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        <div class="inventory-application-container brand-detail">
            <?php $subbrand_slug = Request::route('subbrand_slug'); ?>
            <a class="backto" href="{{ route('get.brand.data',[$response['brand_data']['slug'],$subbrand_slug]) }}">
                <i class="fa fa-arrow-left"></i>
                back to our brands
            </a>
            <h1 id="model-name">{{$response['brand_data']['name']}} {{ $response['record']['name'] }}</h1>
            <div class="inventory-application-top aos-item" data-aos="fade-in">
                <div class="row no-gutter">
                    <div class="col-md-6">
                        <div class="internal-slider">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <!-- <ol class="carousel-indicators" id="carousel-indicators-images">
                                    <li data-target="#myCarousel" data-slide-to="" class=""></li>
                                </ol> -->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" id="carousel-inner-images">
                                    @foreach($response['record']['gallery_data'] as $key=>$gallery)
                                        <div class="item @if($key == 0) active @endif">
                                            <img src="{{ env('IMG_URL') }}{{ $gallery['gallery_image'] }}" alt="{{ $gallery['gallery_alt'] }}">
                                        </div>
                                    @endforeach
                                    <!-- <div class="item active">
                                        <img src="https://www.velocitytruckcentres.com.au/storage/app/media/MercedesBenz/trucks/mb-econic5.jpg" alt="">
                                    </div> -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 truck-desc">
                        <p class="">
                            {{ $response['record']['description'] }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="reach-us text-right mt-3">
                    Reach us: &nbsp; 
                    @if(isset($locationDetailsArr->extra_num) && !empty($locationDetailsArr->extra_num))
                        <img src="{{ asset('images/call-icon.png') }}"/> 
                        <span><a href="tel:{{$locationDetailsArr->extra_num}}">{{$locationDetailsArr->extra_num}}</a></span>
                        &nbsp;
                    @endif
                    <img src="{{ asset('images/email-icon.png') }}"/> 
                    <span class="mr-2"><a href="/contact-us">Contact-Us</a></span>
            </div>
            <div class="branddetail-tabs">
                @if(isset($response['record']['specifications']) && sizeof($response['record']['specifications'])>0)
                    <div id="exTab1" class="tabs"> 
                        <div class="responsive custom-scrollbar">
                            <ul class="nav nav-pills">
                                <?php $specification_record_no = 1; ?>
                                @foreach($response['record']['specifications'] as $key=>$specification_list)
                                    @if($specification_record_no == '1')
                                        <li class="active">
                                            <a  class="active" href="#tab{{$specification_record_no}}" data-toggle="tab">{{ $specification_list['title'] }}</a>
                                        </li>
                                    @else
                                        <li>
                                            <a  href="#tab{{$specification_record_no}}" data-toggle="tab">{{ $specification_list['title'] }}</a>
                                        </li>
                                    @endif
                                    <?php $specification_record_no = $specification_record_no + 1; ?>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content clearfix">
                            <?php $specification_detail_record_no = 1; ?>
                            @foreach($response['record']['specifications'] as $specification_list_detail)
                                @if($specification_detail_record_no == '1')
                                    <div class="tab-pane active" id="tab{{$specification_detail_record_no}}">
                                        <div class="short-desc">{{$specification_list_detail['shortdescription']}}</div>
                                        <ul>
                                            @foreach($specification_list_detail['specificationdescriptions'] as $description_data)
                                                <li>
                                                    <span class="points"><i class="dtm-angle-right"></i> </span> 
                                                    <div class="spec-desc">{{ $description_data['specification_descriptions'] }} </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div> 
                                @else
                                    <div class="tab-pane" id="tab{{$specification_detail_record_no}}">
                                        <div class="short-desc">{{$specification_list_detail['shortdescription']}}</div>
                                        <ul>
                                            @foreach($specification_list_detail['specificationdescriptions'] as $description_data)
                                                <li>
                                                    <span class="points"><i class="dtm-angle-right"></i> </span> 
                                                    <div class="spec-desc">{{ $description_data['specification_descriptions'] }} </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div> 
                                @endif
                                <?php $specification_detail_record_no = $specification_detail_record_no + 1; ?>
                            @endforeach
                        </div>
                    </div>
                    @if(isset($response['engine']) && count($response['engine'])>0)
                        <div class="download-brochure mb-4">
                            <a href="" class="icon" download>
                            <a href="/engines{{'#'.$response['engine'][0]['slug']}}" class="icon">
                                <img src="/images/engine-icon.jpeg" width="80" style="padding: 0 0 0 20px;"/>
                                <span>Engine Specification</span>
                            </a>
                        </div>
                    @endif
                    @if(isset($response['transmission']) && count($response['transmission'])>0)
                        <div class="download-brochure mb-4">
                            <a href="" class="icon" download>
                            <a href="/transmissions{{'#'.$response['transmission'][0]['slug']}}" class="icon">
                                <img src="/images/transmission-icon.png" width="80" style="padding: 0 0 0 25px;"/>
                                <span>Transmission Specification</span>
                            </a>
                        </div>
                    @endif
                    @if(isset($response['record']['brochure']) && sizeof($response['record']['brochure']) > 0)
                        @foreach($response['record']['brochure'] as $broc)
                            <div class="download-brochure">
                                <a href="{{ env('IMG_URL') }}{{ $broc['brochure_file'] }}" class="icon" download>
                                    <img src="{{ asset('images/pdf_icon.png') }}" width="80"/>
                                    <span>Download Brochure of {{ $response['record']['name'] }}</span>
                                </a>
                            </div>
                        @endforeach
                    @endif
                @endif
            </div>
            <div class="search-inventory">
                <div class="title">Sort Brochures by</div>
                    <form id="contactformfinance" 
                            data-request="onFilterClick"
                            data-request-flash
                            data-request-update="'firstchild/firstchild_list':'#firstchild_list_partial_div'">
                        <div class="search-block1 row no-gutter">
                            <div class="col-md-3 space">
                                <select name="subbrand_id" id="subbrand_id" class="custom-select" tabindex="1">
                                    <option value="">All</option>
                                </select>
                            </div>
                            <div class="col-md-4 space">
                                <select name="gvm" id="gvm" class="custom-select" tabindex="1">
                                    <option value="1">0kg - 3500kg</option> 
                                    <option value="2">3501kg - 6500kg</option> 
                                    <option value="3">6501kg - 8500kg</option> 
                                    <option value="4">8501kg - 12000kg</option> 
                                    <option value="5">12001kg - 25000kg</option> 
                                    <option value="6">>25001kg</option> 
                                </select>
                            </div>
                            <div class="col-md-3 space">
                                <select name="firstchild_id" id="firstchild_id" class="custom-select" tabindex="1">
                                    <option value="">All</option> 
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" id="submit" name="submit" class="btnsearchinv">Sort now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pdf-table table-responsive" id="firstchild_list_partial_div">
                    @include('partials.firstchild_list')
                </div>
                <div class="reach-us text-center">
                        Reach us: &nbsp;
                        @if(isset($locationDetailsArr->extra_num) && !empty($locationDetailsArr->extra_num))
                            <img src="{{ asset('images/call-icon.png') }}"/> 
                            <span><a href="tel:{{$locationDetailsArr->extra_num}}">{{$locationDetailsArr->extra_num}}</a></span>
                            &nbsp;
                        @endif
                        <img src="{{ asset('images/email-icon.png') }}"/> 
                        <span class="mr-2"><a href="/contact-us">Contact-Us</a></span>
                </div>
                <a class="backto" href="{{ route('get.brand.data',[$response['brand_data']['slug'],$subbrand_slug]) }}">
                    <i class="fa fa-arrow-left"></i>
                    back to our brands
                </a>
            </div>
        </div>
    </div>
</section>
@else
    <h1>No Details Found</h1>
@endif

