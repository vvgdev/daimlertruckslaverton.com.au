@extends('layouts.app')

@section('content')

<div id="enquiry_link" class="form-toggle enquiry-form-toggle">
            <div class="close">
                <a class="collapsed" data-toggle="collapse" data-parent="#form_panels" href="#specials_enquiry">Close<span>X</span></a>
            </div>
            <div class="form-wrapper">
                <div class="container-fluid">
                    <h2 class="toggle-title">Latest Offer Enquiry Form</h2>
                    <form action="/specials" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title">Your Contact Details</div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <select name="title">
                                        <option>Please select</option>
                                    </select>
                                    <span class="error">@error('title'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>First Name <em class="required">*</em> </label>
                                    <input name="firstName" type="text" value="{{ Request::old('firstName') }}"/>
                                    <span class="error">@error('firstName'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Last Name <em class="required">*</em> </label>
                                    <input name="lastName" type="text" value="{{ Request::old('lastName') }}"/>
                                    <span class="error">@error('lastName'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Email <em class="required">*</em> </label>
                                    <input name="email" type="email" value="{{ Request::old('email') }}"/>
                                    <span class="error">@error('email'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Phone <em class="required">*</em> </label>
                                    <input name="phone" type="tel" value="{{ Request::old('phone') }}"/>
                                    <span class="error">@error('phone'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section-title">Additional Information</div>
                                <div class="custom-checkbox form-group">
                                    <label for="newtrucks" class="checkbox-custom">
                                        Yes, I would like to subscribe to receive latest offers & product updates.
                                        <input type="checkbox" id="newtrucks" name="newtrucks" value="new-trucks" class="truck-condition" > 
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="custom-checkbox form-group">
                                    <label for="terms" class="checkbox-custom">
                                        I agree with the website <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank">terms of use</a> and that my information will be handled by Daimler Trucks Huntingwood in accordance with the <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank">Dealer Privacy Policy</a>.<em class="required">*</em>
                                        <input type="checkbox" id="terms" name="terms" :value=true class="truck-condition"> 
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="error">@error('terms'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Particular offer of interest or comment </label>
                                    <textarea name="comment" rows="2" cols="30">Special: Temporary Full Expensing – FY2021/22.</textarea>
                                    <span class="error">@error('comment'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <p class="mb-0"><em class="required">*</em> indicates a required field.</p>
                                <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank" class="d-block mb-1">Click to view Privacy Policy</a>
                                <input type="hidden" name="type" value="offerenquiry" >
                                <input type="hidden" name="form_type" value="form_make_enquiry" >
                                <input type="submit" class="btn btn-red mt-0"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="testdrive_link" class="form-toggle testdrive-form-toggle">
            <div class="close">
                <a class="collapsed" data-toggle="collapse" data-parent="#form_panels" href="#specials_enquiry">Close<span>X</span></a>
            </div>
            <div class="form-wrapper">
                <div class="container-fluid">
                    <h2 class="toggle-title">Test Drive Enquiry Form</h2>
                    <form action="/specials" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title">Your Contact Details</div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <select name="drive_title">
                                        <option>Please select</option>
                                    </select>
                                    <span class="error">@error('title'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>First Name <em class="required">*</em> </label>
                                    <input name="drive_firstName" type="text" value="{{ Request::old('drive_firstName') }}"/>
                                    <span class="error">@error('drive_firstName'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Last Name <em class="required">*</em> </label>
                                    <input name="drive_lastName" type="text" value="{{ Request::old('drive_lastName') }}"/>
                                    <span class="error">@error('drive_lastName'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Email <em class="required">*</em> </label>
                                    <input name="drive_email" type="email" value="{{ Request::old('drive_email') }}"/>
                                    <span class="error">@error('drive_email'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Phone <em class="required">*</em> </label>
                                    <input name="drive_phone" type="tel" value="{{ Request::old('drive_phone') }}"/>
                                    <span class="error">@error('drive_phone'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="section-title">Additional Information</div>
                                <div class="custom-checkbox form-group">
                                    <label for="newtrucks" class="checkbox-custom">
                                        Yes, I would like to subscribe to receive latest offers & product updates.
                                        <input type="checkbox" id="newtrucks" name="newtrucks" value="new-trucks" class="truck-condition"> 
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="custom-checkbox form-group">
                                    <label for="terms_and_condition" class="checkbox-custom">
                                        I agree with the website <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank">terms of use</a> and that my information will be handled by Daimler Trucks Huntingwood in accordance with the <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank">Dealer Privacy Policy</a>.<em class="required">*</em>
                                        <input type="checkbox" id="terms_and_condition" name="terms_and_condition" :value=true class="truck-condition"> 
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="error">@error('terms_and_condition'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Particular offer of interest or comment </label>
                                    <textarea name="drive_detail" rows="2" cols="30">Special: Temporary Full Expensing – FY2021/22.</textarea>
                                    <span class="error">@error('drive_detail'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <p class="mb-0"><em class="required">*</em> indicates a required field.</p>
                                <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank" class="d-block mb-1">Click to view Privacy Policy</a>
                                <input type="hidden" name="form_type" value="form_book_testdrive" >
                                <input type="hidden" name="type" value="service" >
                                <input type="submit" class="btn btn-red mt-0"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<section class="middle-section">

    <div class="container">
        <div class="specials-page">
            <h1 class="page-title">Special Offers</h1>
            <img class="banner" src="{{ asset('images/specials-banner.jpeg') }}">
            <div class="sub-title">Temporary Full Expensing – FY2021/22.</div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="ds-text">
                        <p>Eligible businesses for temporary full expensing (TFE) include those with an aggregated annual turnover of less than $5 billion. TFE provides an immediate deduction on the business portion of the cost of eligible new depreciating assets. It can be applied to the full cost of a new vehicle, with no threshold. An immediate tax deduction will be available on delivery for new vehicles delivered between 6 October 2020 and 30 June 2022.</p>
                        <p>For businesses with an aggregated annual turnover less than $50 million, TFE will apply to the business portion of a new or second-hand, with no threshold. An immediate tax deduction will be available on delivery for all new and used vehicles delivered between 6 October 2020 and 30 June 2022.</p>
                        <p><sup>*</sup>Please seek further independent professional advice for your own financial circumstances.</p>
                        <p><a href="/contact-us/">Contact us&nbsp;</a>today to discuss your options.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="right-section">
                        <li>
                            <a href="javascript:void(0)" class="form-link" data-id="enquiry_link">
                                <span class="icon-wrapper"><i class="dtm-icon-specials"></i></span>
                                <div class="text">Make an Enquiry</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="form-link" data-id="testdrive_link">
                                <span class="icon-wrapper"><i class="dtm-icon-test-drive"></i></span>
                                <div class="text">Book a Test Drive</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr/>
            <div id="specialinventorieslist" class="view-specials">
                @if(isset($specials) && isset($specials->content) && count($specials->content)>0)
                    @foreach($specials->content as $special)
                        <div class="special-outer">
                            <div class="special-stock">
                                <a href="" class="special-tag-mobile">
                                    <img src="{{ asset('images/special_tag_v.png') }}" alt="special_tag" class="special-tag">
                                </a>
                                <a href="" class="special-tag-desktop">
                                    <img src="{{ asset('images/special_tag_h.png') }}" alt="special_tag" class="special-tag">
                                </a>
                            </div>
                            <a href="" title="{{$special->specification_title}}">
                                <div class="title-bar">
                                    <h2 class="special-title">{{$special->specification_title}}
                                    </h2>
                                    <div class="special-price"><span class="mr-1">
                                        @if($special->price_list_type == "EGC")
                                            <span class="sl-tool-tip" data-title="Excluding Government Charges / Excludes On-Road Costs">Ex. Govt. Charges</span> <sup>2</sup> </span>@currency_format($special->price_list_amount)
                                        @elseif($special->price_list_type == "DAP")
                                            <span class="sl-tool-tip" data-title="Price on Application">Price on Application</span> <sup>3</sup> </span>@currency_format($special->price_list_amount)
                                        @else
                                            <span class="sl-tool-tip" data-title="Price on Application">Drive Away</span> <sup>3</sup> </span>@currency_format($special->price_list_amount)
                                        @endif
                                    </div>
                                </div>
                            </a>
                            <div class="special-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="">
                                            @if(isset($special->document) && count($special->document)>0)
                                                <img class="owl-lazy" src="{{ $special->document[0]->media_thumb}}" alt="{{$special->specification_title}}">
                                            @endif
                                            {{-- <img class="lazy stock__search-img"  src="https://imotorcarsearch.s3.amazonaws.com/vehicles/medium/1432122_L00776_1_7215516248d56780.jpg" alt="{{$special->specification_title}}" style="display: block;"> --}}
                                        </a>
                                    </div>
                                    <div class="col-md-5 col-6">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td class="table-col-hide">Type</td>
                                                <td>{{$special->listing_type}}</td>
                                            </tr>
                                            <tr>
                                                <td class="table-col-hide">Colour</td>
                                                <td>{{$special->colour}}</td>
                                            </tr>
                                            <tr>
                                                <td class="table-col-hide">Transmission</td>
                                                <td>{{$special->transmission_type}}</td>
                                            </tr>
                                            <tr>
                                                <td class="table-col-hide">Engine</td>
                                                <td> {{$special->fuel_type}}</td>
                                            </tr>
                                            <tr>
                                                <td class="table-col-hide">Body Type</td>
                                                <td>{{$special->body_make}}</td>
                                            </tr>
                                            <tr>
                                                <td class="table-col-hide">Kilometres</td>
                                                <td>{{isset($special->odometer_readings_km) ? $special->odometer_readings_km . " Kms" : ""}} </td>
                                            </tr>
                                            <tr>
                                                <td class="table-col-hide">Stock No.</td>
                                                <td>{{$special->stock_number}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        @if(isset($special->listing_type) && strtolower($special->listing_type)=="new")
                                            <a class="btn btn-red-small" href="/stock/new-trucks/{{$special->slug}}" title="{{$special->specification_title}}">View Details</a>
                                        @elseif(isset($special->listing_type) && strtolower($special->listing_type)=="demo")
                                            <a class="btn btn-red-small" href="/stock/demo-trucks/{{$special->slug}}" title="{{$special->specification_title}}">View Details</a>
                                        @elseif(isset($special->listing_type) && strtolower($special->listing_type)=="used")
                                            <a class="btn btn-red-small" href="/stock/used-trucks/{{$special->slug}}" title="{{$special->specification_title}}">View Details</a>
                                        @else
                                            <a class="btn btn-red-small" href="/stock/new-trucks/{{$special->slug}}" title="{{$special->specification_title}}">View Details</a>
                                        @endif                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                {{-- <div class="special-outer">
                    <div class="special-stock">
                        <a href="" class="special-tag-mobile">
                            <img src="{{ asset('images/special_tag_v.png') }}" alt="special_tag" class="special-tag">
                        </a>
                        <a href="" class="special-tag-desktop">
                            <img src="{{ asset('images/special_tag_h.png') }}" alt="special_tag" class="special-tag">
                        </a>
                    </div>
                    <a href="" title="2016 Mercedes-Benz Econic 2630LL Dual Control">
                        <div class="title-bar">
                            <h2 class="special-title">2016 Mercedes-Benz Econic 2630LL Dual Control
                            </h2>
                            <div class="special-price"><span class="mr-1">
                                <span class="sl-tool-tip" data-title="Excluding Government Charges / Excludes On-Road Costs">Ex. Govt. Charges</span> <sup>2</sup> </span>$242,000
                            </div>
                        </div>
                    </a>
                    <div class="special-body">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="">
                                    <img class="lazy stock__search-img"  src="https://imotorcarsearch.s3.amazonaws.com/vehicles/medium/1432122_L00776_1_7215516248d56780.jpg" alt="2016 MERCEDES-BENZ ECONIC 2630LL DUAL CONTROL null null WHITE" style="display: block;">
                                </a>
                            </div>
                            <div class="col-md-5 col-6">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="table-col-hide">Type</td>
                                        <td>Used</td>
                                    </tr>
                                    <tr>
                                        <td class="table-col-hide">Colour</td>
                                        <td>White</td>
                                    </tr>
                                    <tr>
                                        <td class="table-col-hide">Transmission</td>
                                        <td>Automatic</td>
                                    </tr>
                                    <tr>
                                        <td class="table-col-hide">Engine</td>
                                        <td> Diesel</td>
                                    </tr>
                                    <tr>
                                        <td class="table-col-hide">Body Type</td>
                                        <td>Compactor</td>
                                    </tr>
                                    <tr>
                                        <td class="table-col-hide">Kilometres</td>
                                        <td>13,862 Kms</td>
                                    </tr>
                                    <tr>
                                        <td class="table-col-hide">Stock No.</td>
                                        <td>L00776</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="/used-trucks/for-sale/mercedes-benz/econic-2630ll-dual-control/2016/1432122" class="btn btn-red-small">View Details</a>
                                
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="mt-2 mb-2">
                <input type="hidden" id="site_slug" name="site_slug" value="{{env('APP_SLUG', 'daimler-trucks-somerton')}}" />
                @if(isset($specials) && isset($specials->totalRecords) && $specials->totalRecords>10)
                    <input type="hidden" id="page_no" name="page_no" value="1">
                    <input type="hidden" id="records_per_page" name="records_per_page" value="10">
                    <div id="loadmoreinventories" class="btn btn-red-small full-width mt-3" onclick="LoadMoreInventories()"> To Load More Vehicles Click Here </div>
                    <br />
                @endif
            </div>
            @include('partials.location_details')
            {{-- <div class="truck-location">
                <a class="panel-head">
                    Daimler Trucks Perth - Perth Airport<i class="fa fa-angle-up"></i>
                </a>
                <div class="panel-body menu-mobile-close">
                    <div class="row location-details">
                        <div class="col-md-7 mb-3">
                            <div class="form-group">
                                <label class="font-weight-bold">Address</label>
                                <div class="text">4 Ulm Place, Perth Airport WA 6105</div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Phone</label>
                                <div class="text"><a class="no-style-inherit" href="tel:{{$siteData->primary_number}}">{{$siteData->primary_number}}</a></div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <div class="text"><a href="mailto:sales@daimlertrucksperth.com.au" rel="nofollow" class="js-analytics-email EBG13 ROT13">sales@daimlertrucksperth.com.au</a></div>
                            </div>
                            <div class="location-subtitle">Sales Operating Hours</div>
                            <div class="inner-group">
                                <label>Monday - Friday</label>
                                <div class="text">8:00am - 6:00pm</div>
                            </div>
                            <div class="inner-group">
                                <label>Monday - Friday</label>
                                <div class="text">8:00am - 6:00pm</div>
                            </div>
                            <div class="inner-group">
                                <label>Monday - Friday</label>
                                <div class="text">8:00am - 6:00pm</div>
                            </div>
                            <div class="location-subtitle">Sales Operating Hours</div>
                            <div class="inner-group">
                                <label>Monday - Friday</label>
                                <div class="text">8:00am - 6:00pm</div>
                            </div>
                            <div class="inner-group">
                                <label>Monday - Friday</label>
                                <div class="text">8:00am - 6:00pm</div>
                            </div>
                            <div class="inner-group">
                                <label>Monday - Friday</label>
                                <div class="text">8:00am - 6:00pm</div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                            <a href="" class="btn btn-red-small mt-3">Get Directions</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<script>
    function LoadMoreInventories() {
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
                site_name:siteslug,
                featured:1,
                seller_identifier:seller_identifier
            },
            cache: false,
            success: function(response){
                if(response && response.content && response.content.length>0) {
                    var totalRecords = response.totalRecords;
                    var totalpages = totalRecords/records_per_page;
                    if(page_no>=totalpages) {
                        $("#loadmoreinventories").hide();
                    } else {
                        $("#page_no").val(page_no);
                    }
                    response.content.forEach(element => {
                        var data = '<div class="special-outer">';
                            data += '<div class="special-stock">';
                            data += '<a href="" class="special-tag-mobile">';
                            data += '<img src="images/special_tag_v.png" alt="special_tag" class="special-tag">';
                            data += '</a>';
                            data += '<a href="" class="special-tag-desktop">';
                            data += '<img src="images/special_tag_h.png" alt="special_tag" class="special-tag">';
                            data += '</a>';
                            data += '</div>';
                            // data += '<a href="">' + element.specification_title;
                            data += '<div class="title-bar">';
                            data += '<h2 class="special-title">'+element.specification_title+'</h2>';
                            data += '<div class="special-price"><span class="mr-1">';
                            var price = "";
                            if(element.price_list_amount)
                            {
                                var formatter = new Intl.NumberFormat('en-US', {
                                    style: 'currency',
                                    currency: 'USD',
                                    minimumFractionDigits: 0,
                                    });     
                                price =  formatter.format(element.price_list_amount);                        
                                
                            }
                            if(element.price_list_type == "EGC")
                                data += '<span class="sl-tool-tip" data-title="Excluding Government Charges / Excludes On-Road Costs">Ex. Govt. Charges</span> <sup>2</sup> </span>'+ price;
                            else if(element.price_list_type == "DAP")
                                data += '<span class="sl-tool-tip" data-title="Price on Application">Price on Application</span> <sup>3</sup> </span>'+ price;
                            else
                                data += '<span class="sl-tool-tip" data-title="Price on Application">Drive Away</span> <sup>3</sup> </span>'+ price;
                            
                            data += '</div>';
                            data += '</div>';
                            // data += '</a>';
                            data += '<div class="special-body">';
                            data += '<div class="row">';
                            data += '<div class="col-md-4">';
                            data += '<a href="">';
                            if(element.document && element.document.length>0) {
                                data += '<img class="owl-lazy" src="'+element.document[0].media_thumb+'" alt="'+element.specification_title+'">';
                            }
                            data += '</a></div>';
                            data += '<div class="col-md-5 col-6">';
                            data += '<table width="100%" cellpadding="0" cellspacing="0">';
                            data += '<tr>';
                            data += '<td class="table-col-hide">Type</td>';
                            data += '<td>'+element.listing_type+'</td>';
                            data += '</tr>';
                            data += '<tr>';
                            data += '<td class="table-col-hide">Colour</td>';
                            data += '<td>'+element.colour+'</td>';
                            data += '</tr>';
                            data += '<tr>';
                            data += '<td class="table-col-hide">Transmission</td>';
                            data += '<td>'+element.transmission_type+'</td>';
                            data += '</tr>';
                            data += '<tr>';
                            data += '<td class="table-col-hide">Engine</td>';
                            data += '<td>'+element.fuel_type+'</td>';
                            data += '</tr>';
                            data += '<tr>';
                            data += '<td class="table-col-hide">Body Type</td>';
                            data += '<td>'+element.body_make+'</td>';
                            data += '</tr>';
                            data += '<tr>';
                            data += '<td class="table-col-hide">Kilometres</td>';
                            data += '<td>'+element.odometer_readings_km+'</td>';
                            data += '</tr>';
                            data += '<tr>';
                            data += '<td class="table-col-hide">Stock No.</td>';
                            data += '<td>'+element.stock_number+'</td>';
                            data += '</tr>';
                            data += '<tr>';
                            data += '<td class="table-col-hide">Stock No.</td>';
                            data += '<td>'+element.stock_number+'</td>';
                            data += '</tr>';
                            data += '</table>';
                            data += '</div>';
                            data += '<div class="col-md-3 col-6">';
                            if(element.listing_type && element.listing_type.toLowerCase()=="new")
                                data += '<a class="btn btn-red-small" href="/stock/new-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                            else if(element.listing_type && element.listing_type.toLowerCase()=="demo")
                                data += '<a class="btn btn-red-small" href="/stock/demo-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                            else if(element.listing_type && element.listing_type.toLowerCase()=="used")
                                data += '<a class="btn btn-red-small" href="/stock/used-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                            else
                                data += '<a class="btn btn-red-small" href="/stock/new-trucks/' + element.slug + '" title="'+element.specification_title+'">View Details</a>';
                            data += '</div>';
                            data += '</div>';
                            data += '</div>';
                            data += '</div>';
                            $("#specialinventorieslist").append(data);
                            data="";
                    });
                } else {
                    $("#loadmoreinventories").hide();
                }
            }
            });
    }
</script>
@endsection 