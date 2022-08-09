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
        <div class="inventory inventory-detail">
            <a class="backto" href="{{ URL::previous() }}">
                <span><i class="fa fa-arrow-left"></i> Back to Inventory</span>
            </a>
            <!-- <div class="page-head">
                <a class="back-link" href="{{ URL::previous() }}">Back</a>
                <h1 class="page-title">{{$inventory->specification_title}}</h1>
            </div> -->
            <div class="reach-us mt-3 mb-3">
                Reach us: &nbsp; 
                <img src="{{ asset('images/call-icon.png') }}"> 
                @if( isset($inventory->extra_num) && !empty($inventory->extra_num) )
                    <span class="mr-2"><a href="tel:{{$inventory->extra_num}}">{{$inventory->extra_num}}</a></span>
                @else
                    <span class="mr-2"><a href="tel:0288224800">02 8822 4800</a></span>
                @endif
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div id="carousel" class="owl-carousel main-carousel owl-theme">
                        @if(isset($inventory->document) && count($inventory->document)>0)
                            @foreach($inventory->document as $index=>$img) 
                                @if($index == 0)
                                    <a class="item" data-toggle="modal" data-target="#mainImageModal" onclick="openModal(this)">
                                @else
                                    <a class="item">
                                @endif
                                {{-- <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/183/5f9/dd1/1770264-04-thumb-1200-0auto.jpg" width="100%"/> --}}
                                @if($inventory->featured==1)
                                <div class="special-icon"></div>
                                @endif
                                    <img class="" src="{{$img->media_path}}" alt="{{$inventory->specification_title . " " . $inventory->colour}}" />
                                </a>
                            @endforeach
                        @endif
                        {{-- <a class="item" data-toggle="modal" data-target="#mainImageModal" onclick="openModal(this)">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/183/5f9/dd1/1770264-04-thumb-1200-0auto.jpg" width="100%"/>
                            <div class="special-icon"></div>
                        </a>
                        <a class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/7eb/902/59d/1770264-01-thumb-1200-0auto.jpg" width="100%"/>
                            <div class="special-icon"></div>
                        </a>
                        <a class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/baa/188/959/1770264-03-thumb-1200-0auto.jpg" width="100%"/>
                            <div class="special-icon"></div>
                        </a>
                        <a class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/183/5f9/dd1/1770264-04-thumb-1200-0auto.jpg" width="100%"/>
                            <div class="special-icon"></div>
                        </a>
                        <a class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/8b4/e64/744/1770264-05-thumb-1200-0auto.jpg" width="100%"/>
                            <div class="special-icon"></div>
                        </a>
                        <a class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/8da/32b/6fa/1770264-06-thumb-1200-0auto.jpg" width="100%"/>
                            <div class="special-icon"></div>
                        </a> --}}
                    </div>
                    <div id="thumbnails" class="owl-carousel thumbnail-carousel owl-theme">
                        @if(isset($inventory->document) && count($inventory->document)>0)
                            @foreach($inventory->document as $index=>$img) 
                                <div class="item">
                                    <img class="" src="{{$img->media_thumb}}" width="100%" />
                                </div>
                            @endforeach
                        @endif
                        {{-- <div class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/183/5f9/dd1/1770264-04-thumb-1200-0auto.jpg" width="100%"/>
                        </div>
                        <div class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/7eb/902/59d/1770264-01-thumb-1200-0auto.jpg" width="100%"/>
                        </div>
                        <div class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/baa/188/959/1770264-03-thumb-1200-0auto.jpg" width="100%"/>
                        </div>
                        <div class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/183/5f9/dd1/1770264-04-thumb-1200-0auto.jpg" width="100%"/>
                        </div>
                        <div class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/8b4/e64/744/1770264-05-thumb-1200-0auto.jpg" width="100%"/>
                        </div>
                        <div class="item">
                            <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/8da/32b/6fa/1770264-06-thumb-1200-0auto.jpg" width="100%"/>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 id="detail-inv-title">{{$inventory->specification_title}}</h1>
                    <a class="btn btn-red mt-0 mb-5" href="javascript:void(0)" data-toggle="modal" data-target="#requestQuoteModal">REQUEST A QUOTE</a>
                    <div class="description">
                        <div class="title">Description</div>
                        <ul class="spec-container">
                            <li>
                                <label class="label">Model Year</label>:
                                <strong>{{$inventory->build_date}}</strong>
                            </li>  
                            <li>
                                <label class="spec-key">Type</label>:
                                <strong>{{$inventory->listing_type}}</strong>
                            </li>  
                            <li>
                                <label class="spec-key">Kilometres</label>:
                                <strong>{{isset($inventory->odometer_readings_km) ? $inventory->odometer_readings_km . " Kms" : ""}}</strong>
                            </li> 
                            <li>
                                <label class="spec-key">Colour</label>:
                                <strong>{{$inventory->colour}}</strong>
                            </li> 
                            <li>
                                <label class="spec-key">Transmisson</label>:
                                <strong>{{$inventory->transmission_type}}</strong>
                            </li> 
                            <li>
                                <label class="spec-key">Engine</label>:
                                <strong>{{$inventory->fuel_type}}</strong>
                            </li> 
                            <li>
                                <label class="spec-key">Body</label>:
                                <strong>{{$inventory->body_make}}</strong>
                            </li> 
                            <li>
                                <label class="spec-key">VIN #</label>:
                                <strong>{{$inventory->vin_number}}</strong>
                            </li> 
                            <li>
                                <label class="spec-key">Price</label>:
                                @if(isset($inventory->price_list_amount) && !empty($inventory->price_list_amount))
                                    <strong>${{ number_format($inventory->price_list_amount, 0) }}</strong>
                                @else
                                    <strong>--</strong>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="spec-container">
                        <div class="line-item">
                            <label class="spec-key">Model Year</label>
                            <span class="spec-value">{{$inventory->build_date}}</span>
                        </div>  
                        <div class="line-item">
                            <label class="spec-key">Type</label>
                            <span class="spec-value">{{$inventory->listing_type}}</span>
                        </div>  
                        <div class="line-item">
                            <label class="spec-key">Kilometres</label>
                            <span class="spec-value">{{isset($inventory->odometer_readings_km) ? $inventory->odometer_readings_km . " Kms" : ""}}</span>
                        </div> 
                        <div class="line-item">
                            <label class="spec-key">Colour</label>
                            <span class="spec-value">{{$inventory->colour}}</span>
                        </div> 
                        <div class="line-item">
                            <label class="spec-key">Transmisson</label>
                            <span class="spec-value">{{$inventory->transmission_type}}</span>
                        </div> 
                        <div class="line-item">
                            <label class="spec-key">Engine</label>
                            <span class="spec-value">{{$inventory->fuel_type}}</span>
                        </div> 
                        <div class="line-item">
                            <label class="spec-key">Body</label>
                            <span class="spec-value">{{$inventory->body_make}}</span>
                        </div> 
                        <div class="line-item">
                            <label class="spec-key">VIN #</label>
                            <span class="spec-value">{{$inventory->vin_number}}</span>
                        </div> 
                    </div> -->
                </div>
            </div>
            <div class="spec-accordion">
                <div class="spec-head">
                    <h4>Dealer Comments</h4>
                    <div class="arrow down"></div>
                </div>
                <div class="spec-body dealer-comments">
                    <p class="comments-text">{{$inventory->description}}<br><br></p>
                </div>
                <div class="spec-head">
                    <h4>Features</h4>
                    <div class="arrow down"></div>
                </div>
                <div class="spec-body product-features">
                    <ul>
                        <li class="">Fuel Capacity: {{$inventory->fuel_capacity}}</li>
                        <li class="">Stereo: {{$inventory->stereo}}</li>
                        {{-- <li class="">Brakes: ABS - <b>Need Disc</b></li> --}}
                        <li class="">Air Conditioning: {{$inventory->air_conditioning}}</li>
                        <li class="">Radio: {{$inventory->radio}}</li>
                    </ul>
                    <em class="note">Please confirm all features with dealer.</em>
                </div>
                <div class="spec-head">
                    <h4>Dealer Details</h4>
                    <div class="arrow down"></div>
                </div>
                <div class="spec-body dealer-details">
                    <div class="line-item">
                        <label class="line-key">Name</label>
                        <div class="line-value">{{$inventory->seller_name}}</div>
                    </div>
                    @if(isset($locationDetails) && isset($locationDetails->address) && !empty($locationDetails->address))
                        <div class="line-item">
                            <label class="line-key">Location</label>
                            <label class="line-value">{{$locationDetails->address}}</label>
                        </div>
                    @endif
                    @if(isset($locationDetails) && isset($locationDetails->extra_num) && !empty($locationDetails->extra_num))
                        <div class="line-item">
                            <label class="line-key">Phone</label>
                            <div class="line-value">
                                <a href="tel:{{$locationDetails->extra_num}}">{{$locationDetails->extra_num}}</a>
                            </div>
                        </div>
                    @endif
                    @if(isset($locationDetails) && isset($locationDetails->primary_email) && !empty($locationDetails->primary_email))
                        <div class="line-item">
                            <label class="line-key">Email</label>
                            <div class="line-value">
                                <a href="mailto:{{$locationDetails->primary_email}}" rel="nofollow" class="js-analytics-email EBG13 ROT13">{{$locationDetails->primary_email}}</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
                    <!-- <div class="dealer-comments">
                        <div class="heading">Dealer Comments</div>
                        <p class="comments-text">{{$inventory->description}}<br><br></p>
                    </div>
                    <div class="product-features">
                        <div class="heading">Features</div>
                        <ul class="">
                            <li class="">Fuel Capacity: {{$inventory->fuel_capacity}}</li>
                            <li class="">Stereo: {{$inventory->stereo}}</li>
                            {{-- <li class="">Brakes: ABS - <b>Need Disc</b></li> --}}
                            <li class="">Air Conditioning: {{$inventory->air_conditioning}}</li>
                            <li class="">Radio: {{$inventory->radio}}</li>
                        </ul>
                        <em class="note">Please confirm all features with dealer.</em>
                    </div>
                    <div class="dealer-details mt-3">
                        <div class="heading">Dealer Details</div>
                        <div class="line-item">
                            <label class="line-key">Name</label>
                            <div class="line-value">{{$inventory->seller_name}}</div>
                        </div>
                        @if(isset($locationDetails) && isset($locationDetails->address) && !empty($locationDetails->address))
                            <div class="line-item">
                                <label class="line-key">Location</label>
                                <label class="line-value">{{$locationDetails->address}}</label>
                                <!--<div class="line-value">{{--$inventory->seller_address_line--}}<br>--
                                    {{--$inventory->seller_address_suburb}}<br>
                                    {{$inventory->seller_address_state}}<br>
                                    {{$inventory->seller_address_postcode--}}<!--<br>
                                </div>--
                            </div>
                        @endif
                        @if(isset($locationDetails) && isset($locationDetails->extra_num) && !empty($locationDetails->extra_num))
                            <div class="line-item">
                                <label class="line-key">Phone</label>
                                <div class="line-value">
                                    <a href="tel:{{$locationDetails->extra_num}}">{{$locationDetails->extra_num}}</a>
                                </div>
                            </div>
                        @endif
                        @if(isset($locationDetails) && isset($locationDetails->primary_email) && !empty($locationDetails->primary_email))
                            <div class="line-item">
                                <label class="line-key">Email</label>
                                <div class="line-value">
                                    <a href="mailto:{{$locationDetails->primary_email}}" rel="nofollow" class="js-analytics-email EBG13 ROT13">{{$locationDetails->primary_email}}</a>
                                </div>
                            </div>
                        @endif
                    </div> -->
                
                <!-- <div class="col-md-3 inventory-sidebar pl-md-0">
                    <div class="sidebar-toggle">
                        <a href="tel:{{$siteData->primary_number}}" class="call-phone">Call Us&nbsp;{{$siteData->primary_number}}</a>
                        <ul>
                            <!-- <li>
                                <a href="javascript:void(0)" class="form-link" data-id="make_offer">
                                    <span class="icon-wrapper"><i class="dtm-icon-make-offer"></i></span>
                                    <div class="text">Make an Offer</div>
                                </a>
                            </li> --
                            <li>
                                <a href="javascript:void(0)" class="form-link" data-id="sendto_friend">
                                    <span class="icon-wrapper"><i class="dtm-icon-email"></i></span>
                                    <div class="text">Send to a Friend</div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="form-link" data-id="make_enquiry">
                                    <span class="icon-wrapper"><i class="dtm-icon-enquiry"></i></span>
                                    <div class="text">Make an Enquiry</div>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="javascript:void(0)" class="form-link" data-id="finance_calculator">
                                    <span class="icon-wrapper"><i class="dtm-icon-calculator"></i></span>
                                    <div class="text">Finance Calculator</div>
                                </a>
                            </li> --
                            <li>
                                <a href="javascript:void(0)" class="form-link" data-id="test_drive">
                                    <span class="icon-wrapper"><i class="dtm-icon-test-drive"></i></span>
                                    <div class="text">Book a Test Drive</div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="form-link" data-id="tradein_enquiry">
                                    <span class="icon-wrapper"><i class="dtm-icon-dollar"></i></span>
                                    <div class="text">Value My Trade-In</div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="form-link" data-id="request_video">
                                    <span class="icon-wrapper"><i class="dtm-icon-video"></i></span>
                                    <div class="text">Request a Video</div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="form-link" id="print-details-page">
                                    <span class="icon-wrapper"><i class="dtm-icon-printer"></i></span>
                                    <div class="text">Print this Page</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <!-- <div class="price-disclaimer mt-5">
                @if($inventory->price_list_type == "EGC")
                    <p class="p-0"><sup>2</sup>EGC prices exclude government charges and on-road costs. Contact the dealer to determine charges applicable to you.</p>
                @elseif($inventory->price_list_type == "DAP")
                    <p class="p-0"><sup>1</sup>Drive Away - No More to Pay includes all on road and government charges.</p>
                @else
                <p class="p-0"><sup>3</sup>Price on Application - Price will be disclosed to you upon contacting us.</p>
                @endif
            </div> -->
            <!-- Modal -->
            <!-- <div class="modal fade mainimage-modal" id="mainImageModal" tabindex="-1" aria-labelledby="mainImageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <a title="Close" class="modal-close" href="javascript:;" data-dismiss="modal" aria-label="Close"></a>
                        <div class="modal-body">
                            <div id="mainImageModalCarousel" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="https://www.velocitytruckcenters.com/storage/app/uploads/public/183/5f9/dd1/1770264-04-thumb-1200-0auto.jpg" width="100%"/>
                                    <div class="product-desc mt-3 font-weight-bold">2016 MERCEDES-BENZ ECONIC 2630LL DUAL CONTROL WHITE</div>
                                </div>
                                <div class="item">
                                    <img src="https://imotorcarsearch.s3.amazonaws.com/vehicles/large/1432122_L00776_7_c738ca9e7109a63d.jpg" width="100%"/>
                                    <div class="product-desc mt-3 font-weight-bold">2016 MERCEDES-BENZ ECONIC 2630LL DUAL CONTROL WHITE</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal fade headingtitle-modal" id="headingTitleModal" tabindex="-1" aria-labelledby="headingTitleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <a title="Close" class="modal-close" href="javascript:;" data-dismiss="modal" aria-label="Close"></a>
                        <div class="modal-body">
                            <p>Excluding Government Charges / Excludes On-Road Costs</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="modal fade requestquote-modal" id="requestQuoteModal" tabindex="-1" aria-labelledby="requestQuoteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <a title="Close" class="modal-close" href="javascript:;" data-dismiss="modal" aria-label="Close"></a>
                        <div class="modal-body">
                            <div id='request_video' class="panel-slider">
                                <!-- <form action="/stock/used-trucks" method="post">
                                @csrf -->
                                    <input type="hidden" id="inventory_id" name="inventory_id" value="{{$inventory->id}}" >
                                    <input type="hidden" id="inventory_type" name="inventory_type" value="{{$inventory->listing_type}}" >
                                    <div class="form-wrapper">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- <label>Where did you hear about us?</label> -->
                                                        <label>Contacting for</label>
                                                        <select id="contact_type" name="formType" class="custom-select">
                                                            <option value="">Please Select</option>
                                                            <!-- <option value="make_offer">Make an Offer</option> -->
                                                            <!-- <option value="form_send_to_friend">Send to a Friend</option> -->
                                                            <option value="make_an_enquiry">Make an Enquiry</option>
                                                            <!-- <option value="finance_calculator">Finance Calculator</option> -->
                                                            <option value="form_book_drive">Book a Test Drive</option>
                                                            <option value="form_tradein">Value My Trade-In</option>
                                                        </select>
                                                        <span id="contact_type_validation" class="error">The type field is required.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>First Name <em class="required">*</em> </label>
                                                        <input id="firstName" name="firstName" type="text" placeholder="First Name" value="{{ Request::old('firstName') }}">
                                                        <span id="first_name_validation" class="error">The firstname field is required.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email <em class="required">*</em> </label>
                                                        <input id="email" name="email" type="email" placeholder="Email" value="{{ Request::old('email') }}">
                                                        <span id="email_validation" class="error">The email field is required.</span>
                                                        <span id="email_valid_validation" class="error">Enter valid email.</span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <select id="title" name="title" class="custom-select">
                                                            <option value="" @if (old('title') == '') selected="selected" @endif>Please Select</option>
                                                            <option value="Mr" @if (old('title') == 'Mr') selected="selected" @endif>Mr</option>
                                                            <option value="Miss" @if (old('title') == 'Miss') selected="selected" @endif>Miss</option>
                                                            <option value="Mrs"@if (old('title') == 'Mrs') selected="selected" @endif>Mrs</option>
                                                            <option value="Ms"@if (old('title') == 'Ms') selected="selected" @endif>Ms</option>
                                                            <option value="Other"@if (old('title') == 'Other') selected="selected" @endif>Other</option>
                                                        </select>
                                                        <span id="title_validation" class="error">The title field is required.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Last Name <em class="required">*</em> </label>
                                                        <input id="lastName" name="lastName" type="text" placeholder="Last Name" value="{{ Request::old('lastName') }}" required>
                                                        <span id="last_name_validation" class="error">The lastname field is required.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone <em class="required">*</em> </label>
                                                        <input id="phone" name="phone" type="tel" placeholder="Phone number" value="{{ Request::old('phone') }}">
                                                        <span id="phone_validation" class="error">The phone field is required.</span>
                                                        <span id="phone_valid_validation" class="error">Enter valid phone.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Comments (maximum 1000 characters) </label>
                                                        <textarea id="detail" name="detail" rows="5" cols="30" placeholder="Hi, I would like to see a video of this vehicle. Could you please send me one?"></textarea>
                                                        <span id="comment_validation" class="error">Maximum 1000 characters allow</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group custom-checkbox">
                                                        <label for="newtrucks" class="checkbox-custom full-width">
                                                            Yes, I would like to subscribe to receive latest offers & product updates.
                                                            <input type="checkbox" id="newtrucks" name="newtrucks" value="new-trucks" class="truck-condition"> 
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group custom-checkbox">
                                                        <label for="terms" class="checkbox-custom full-width">
                                                            I agree with the website <a href="/disclaimer/">terms of use</a> and that my information will be handled by Daimler Trucks Somerton in accordance with the <a href="https://www.velocitytruckcentres.com.au/privacy-policy">Dealer Privacy Policy</a>.<em class="required">*</em>
                                                            <input type="checkbox" id="terms" name="terms" :value=true class="truck-condition"> 
                                                            <span class="checkmark"></span>                                        
                                                        </label>
                                                        <span id="terms_validation" class="error">Check privacy policy.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Le9KsAaAAAAAFqprju7gblUuE8IyepTbDM34oGc"></div>
                                                    <span id="captcha_validation" class="error">Please check the the captcha form.</span>
                                                </div>
                                            </div>
                                            <div class="btn-groups text-center">
                                                <input type="hidden" name="formtype" value="form_request_video">
                                                <input type="hidden" name="type" value="requestvideo" >
                                                <input type="submit" class="btn btn-red" value="Submit" onclick="submitRequestQuote()"/>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $("#contact_type_validation").css('display', 'none');
        $("#title_validation").css('display', 'none');
        $("#first_name_validation").css('display', 'none');
        $("#last_name_validation").css('display', 'none');
        $("#email_validation").css('display', 'none');
        $("#email_valid_validation").css('display', 'none');
        $("#phone_validation").css('display', 'none');
        $("#phone_valid_validation").css('display', 'none');
        $("#comment_validation").css('display', 'none');
        $("#terms_validation").css('display', 'none');
        $("#captcha_validation").css('display', 'none');
    });
    function openModal() {
        // $(".modal-backdrop").addClass('show');
        // $("#requestQuoteModal").modal();
        $('#requestQuoteModal').modal('show');
    }
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    function validPhone(phone) {
        var regex = /^[0-9 -()+,-]*$/;
        return regex.test(phone);
    }
    function submitRequestQuote() {
        $("#captcha_validation").css('display', 'none');
        var response = grecaptcha.getResponse();
        // console.log(response.length); return false;
        if(response.length == 0) {
            $("#captcha_validation").css('display', 'block');
            return false;
        }
        var verify = false;
        var url = '{{ env("APP_HOST") }}' + '/api/captcha/verify';
        $.ajax({
            url: url,
            type: "post", //send it through get method
            data: {
                recaptcha_token: response,
            },
            cache: false,
            dataType: 'json',
            success: function(response) {
                if(response.code == 200) {
                    self.submitFormRequest();
                } else {
                    alert(response.message);
                }
            }
        });
    }
    function submitFormRequest() {
        var checked = true;
        var inventoryId = $("#inventory_id").val();
        var inventoryType = $("#inventory_type").val();
        var formType = $("#contact_type").val();
        var title = $("#title").val();
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var detail = $("#detail").val();
        var terms = $("#terms")[0].checked;
        
        $("#contact_type_validation").css('display', 'none');
        $("#title_validation").css('display', 'none');
        $("#first_name_validation").css('display', 'none');
        $("#last_name_validation").css('display', 'none');
        $("#email_validation").css('display', 'none');
        $("#email_valid_validation").css('display', 'none');
        $("#phone_validation").css('display', 'none');
        $("#phone_valid_validation").css('display', 'none');
        $("#comment_validation").css('display', 'none');
        $("#terms_validation").css('display', 'none');

        if(formType == '') {
            checked = false;
            $("#contact_type_validation").css('display', 'block');
        }
        if(title == '') {
            checked = false;
            $("#title_validation").css('display', 'block');
        }
        if(email == '') {
            checked = false;
            $("#email_validation").css('display', 'block');
        } else if(email != '' && !isEmail(email)) {
            checked = false;
            $("#email_valid_validation").css('display', 'block');
        }
        if(firstName == '') {
            checked = false;
            $("#first_name_validation").css('display', 'block');
        }
        if(lastName == '') {
            checked = false;
            $("#last_name_validation").css('display', 'block');
        }
        if(phone == '') {
            checked = false;
            $("#phone_validation").css('display', 'block');
        } else if(phone != '' && !validPhone(phone)) {
            checked = false;
            $("#phone_valid_validation").css('display', 'block');
        }
        if(detail != '' && detail.length > 1000) {
            checked = false;
            $("#comment_validation").css('display', 'block');
        }
        if(!terms) {
            checked = false;
            $("#terms_validation").css('display', 'block');
        }
        if (checked) {
            var url = '';
            var param = {};
            if( formType == "form_book_drive" ) {
                url = "{{ config('apiprovider.api.store_book_drive')}}";
                param['type'] = "bookadrive";
            } else if( formType == "form_send_to_friend" ) {
                url = "{{ config('apiprovider.api.store_sendtofriend_form')}}";
                param['type'] = "sendtofriend";
            } else if( formType = "make_an_enquiry" ) {
                url = "{{ config('apiprovider.api.store_enquiry_offer_form')}}";
                param['type'] = "makeanenquiry";
            } else {
                // form_tradein
                url = "{{ config('apiprovider.api.store_tradein_form')}}";
                param['type'] = "valuetrade";
            }
            param['department'] = "Sales - " + inventoryType;
            param['app_slug'] = '{{ env("APP_SLUG") }}';
            param['location_slug'] = '{{ env("APP_LOCATION_SLUG") }}';
            param['inventory_id'] = inventoryId;
            param['title'] = title;
            param['first_name'] = firstName;
            param['last_name'] = lastName;
            param['email'] = email;
            param['mobile'] = phone;
            param['comment'] = detail;
            param['terms_conditions_check'] = 1;
            $.ajax({
                url: url,
                type: "post", //send it through get method
                data: param,
                cache: false,
                dataType: 'json',
                success: function(response) {
                    // $("#contact_type").val('');
                    // $("#title").val('');
                    $("#firstName").val('');
                    $("#lastName").val('');
                    $("#email").val('');
                    $("#phone").val('');
                    $("#detail").val('');
                    // $("#terms")[0].checked;
                    alert('Data Submitted Successfully...!');
                    $('#requestQuoteModal').modal('hide');
                }
            }); 
        }
    }
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection