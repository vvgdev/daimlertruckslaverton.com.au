@extends('layouts.app1')
@section('title') Truck Dealerships Melbourne | Truck Dealers VIC @stop
@section('meta_title') Truck Dealerships Melbourne | Truck Dealers VIC @stop
@section('meta_keywords') Contact Us - Daimler Trucks Laverton @stop
@section('meta_description') Welcome to Daimler Trucks Laverton, please find below information about our business including contact details and e-mail information. @stop
@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        <div class="contact-us page-multi">
            <!-- <h1 class="page-title">Contact Us</h1> -->
            @if(session()->has('message'))
                <div class="alert alert-success"> {{ session()->get('message') }} </div> 
            @endif
            <div id="goToOperatingHours" class="operating-link">Operating hours <i class="fa fa-angle-double-down"></i></div>
            <div class="tabs">
                <div class="wrapper">
                    <ul class="nav nav-pills">
                        <li class="tab-title"><a href="#contact_tab" data-toggle="tab" class="active" id="contact_tab_id" onclick="formChangeEvent('contact_tab_id')">Contact</a></li>
                        <li class="tab-title"><a href="#parts_tab" data-toggle="tab" id="parts_tab_id" onclick="formChangeEvent('parts_tab_id')">Parts</a></li>
                        <li class="tab-title"><a href="#service_tab" data-toggle="tab" id="service_tab_id" onclick="formChangeEvent('service_tab_id')">Service</a></li>
                        <li class="tab-title"><a href="#finance_tab" data-toggle="tab" id="finance_tab_id" onclick="formChangeEvent('finance_tab_id')">Finance</a></li>
                    </ul>
                </div>
                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="contact_tab">
                        <form id="contactform" action="/contact-us" method="post">
                            @csrf
                            <div class="form-details">
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <fieldset>
                                            <select id="title" name="title" class="custom-select">
                                                <option value="" @if (old('title') == '') selected="selected" @endif>Please Select</option>
                                                <option value="Mr" @if (old('title') == 'Mr') selected="selected" @endif>Mr</option>
                                                <option value="Miss" @if (old('title') == 'Miss') selected="selected" @endif>Miss</option>
                                                <option value="Mrs"@if (old('title') == 'Mrs') selected="selected" @endif>Mrs</option>
                                                <option value="Ms"@if (old('title') == 'Ms') selected="selected" @endif>Ms</option>
                                                <option value="Other"@if (old('title') == 'Other') selected="selected" @endif>Other</option>
                                            </select>
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'contact_tab_id')
                                                <span class="error">@error('title'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <fieldset>
                                            <input name="firstName" type="text" id="firstName" placeholder="First Name *" value="{{ Request::old('firstName') }}">
                                            <!-- <label for="firstName" class="field-label">First Name <em>*</em> </label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'contact_tab_id')
                                                <span class="error">@error('firstName'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <fieldset>
                                            <input name="lastName" type="text" id="lastName" placeholder="Last Name *" value="{{ Request::old('lastName') }}">
                                            <!-- <label class="field-label" for="lastName">Last Name <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'contact_tab_id')
                                                <span class="error">@error('lastName'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="Email *" value="{{ Request::old('email') }}">
                                            <!-- <label class="field-label" for="email">Email <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'contact_tab_id')
                                                <span class="error">@error('email'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <fieldset>
                                            <input name="phone" type="text" id="phone" placeholder="Phone *" value="{{ Request::old('phone') }}">
                                            <!-- <label class="field-label" for="phone">Phone <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'contact_tab_id')
                                                <span class="error">@error('phone'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <textarea name="detail" id="detail" rows="5" cols="30" placeholder="Comments (maximum 1000 characters) *"></textarea>
                                        @if(session()->has('tab_id') && session()->get('tab_id') == 'contact_tab_id')
                                            <span class="error">@error('detail'){{$message}}@enderror</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="custom-checkbox form-group">
                                    <label for="newtrucks" class="checkbox-custom full-width">
                                        Yes, I would like to subscribe to receive latest offers & product updates.
                                        <input type="checkbox" id="newtrucks" name="newtrucks" value="new-trucks" class="truck-condition"> 
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="custom-checkbox form-group">
                                    <label for="terms" class="checkbox-custom full-width">
                                        I agree with the website <a href="/disclaimer/">terms of use</a> and that my information will be handled by Daimler Trucks Somerton in accordance with the <a href="https://www.velocitytruckcentres.com.au/privacy-policy">Dealer Privacy Policy</a>.<em class="required">*</em>
                                        <input type="checkbox" id="terms" name="terms" :value=true class="truck-condition"> 
                                        <span class="checkmark"></span>                                        
                                    </label>
                                    @if(session()->has('tab_id') && session()->get('tab_id') == 'contact_tab_id')
                                        <span class="error">@error('terms'){{$message}}@enderror</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <div id="recaptcha_token" name="recaptcha_token" class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Le9KsAaAAAAAFqprju7gblUuE8IyepTbDM34oGc"></div>
                                    </div>
                                    @if(session()->has('tab_id') && session()->get('tab_id') == 'contact_tab_id')
                                        <span style="padding-left: 14px;" class="error">@error('recaptcha_token'){{$message}}@enderror</span>
                                    @endif
                                </div>
                                <div class="btn-groups mt-5">
                                    <input type="submit" class="btn btn-red mt-0" value="Submit Enquiry"/>
                                    <input type="hidden" name="type" value="contactus" >
                                    <p class="mb-0"><em class="required">*</em> indicates a required field.</p>
                                    <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="_blank" title="Daimler Trucks Privacy policy" class="d-block mb-1">Click to view Privacy Policy</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="parts_tab">
                        <form id="partsform" action="/parts" method="post">
                            @csrf
                            <div class="form-details">
                                <h5 class="form-title">Your Contact Details</h5>
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <select id="title1" name="title" class="custom-select">
                                            <option value="" @if (old('title') == '') selected="selected" @endif>Please Select</option>
                                            <option value="Mr" @if (old('title') == 'Mr') selected="selected" @endif>Mr</option>
                                            <option value="Miss" @if (old('title') == 'Miss') selected="selected" @endif>Miss</option>
                                            <option value="Mrs"@if (old('title') == 'Mrs') selected="selected" @endif>Mrs</option>
                                            <option value="Ms"@if (old('title') == 'Ms') selected="selected" @endif>Ms</option>
                                            <option value="Other"@if (old('title') == 'Other') selected="selected" @endif>Other</option>
                                        </select>
                                        @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                            <span class="error">@error('title'){{$message}}@enderror</span>
                                        @endif
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <fieldset>
                                            <input name="firstName" type="text" id="firstName1" placeholder="First Name *" value="{{ Request::old('firstName') }}">
                                            <!-- <label class="field-label" for="firstName1">First Name <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                                <span class="error">@error('firstName'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <fieldset>
                                            <input name="lastName" type="text" id="lastName1" placeholder="Last Name *" value="{{Request::old('lastName') }}">
                                            <!-- <label class="field-label" for="lastName1">Last Name <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                                <span class="error">@error('lastName'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <fieldset>
                                            <input name="email" type="text" id="email1" placeholder="Email *" value="{{Request::old('email') }}">
                                            <!-- <label class="field-label" for="email1">Email <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                                <span class="error">@error('email'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <fieldset>
                                            <input name="phone" type="text" id="phone1" placeholder="Phone *" value="{{Request::old('phone') }}">
                                            <!-- <label class="field-label" for="phone1">Phone <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                                <span class="error">@error('phone'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                </div>
                                <h5 class="form-title">Vehicle Details</h5>
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <input name="vehicle_year" type="text" id="year1" placeholder="Vehicle Year *" value="{{Request::old('vehicle_year') }}">
                                            <!-- <label class="field-label" for="year1">Vehicle Year <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                                <span class="error">@error('vehicle_year'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <input name="vehicle_make" type="text" id="make1" placeholder="Vehicle Make *" value="{{Request::old('vehicle_make') }}">
                                            <!-- <label class="field-label" for="make1">Vehicle Make <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                                <span class="error">@error('vehicle_make'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <input name="vehicle_model" type="text" id="model1" placeholder="Vehicle Model *" value="{{Request::old('vehicle_model') }}">
                                            <!-- <label class="field-label" for="model1">Vehicle Model <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                                <span class="error">@error('vehicle_model'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <input name="rego_number" type="text" id="rego1" placeholder="Rego, VIN or Part# *" value="{{Request::old('rego_number') }}">
                                            <!-- <label class="field-label" for="rego1">Rego, VIN or Part# <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                                <span class="error">@error('rego_number'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                </div>
                                <h5 class="form-title">Order Detail</h5>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <fieldset>
                                            <textarea name="detail" type="text" id="detail1" rows="5" cols="30" placeholder="Order Detail(maximum 1000 characters) *"></textarea>
                                            <!-- <label for="detail1" class="field-label">Order Detail(maximum 1000 characters) <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                                <span class="error">@error('detail'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="custom-checkbox form-group">
                                    <label for="terms1" class="checkbox-custom full-width">
                                        I agree with the website <a href="/disclaimer/">terms of use</a> and that my information will be handled by Daimler Trucks Somerton in accordance with the <a href="https://www.velocitytruckcentres.com.au/privacy-policy">Dealer Privacy Policy</a>.<em class="required">*</em>
                                        <input type="checkbox" id="terms1" name="terms" :value=true class="truck-condition" > 
                                        <span class="checkmark"></span>
                                    </label>
                                    @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                        <span class="error">@error('terms'){{$message}}@enderror</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <div id="recaptcha_token1" name="recaptcha_token" class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Le9KsAaAAAAAFqprju7gblUuE8IyepTbDM34oGc"></div>
                                    </div>
                                    @if(session()->has('tab_id') && session()->get('tab_id') == 'parts_tab_id')
                                        <span style="padding-left: 14px;" class="error">@error('recaptcha_token'){{$message}}@enderror</span>
                                    @endif
                                </div>
                                <div class="btn-groups">
                                    <input type="hidden" name="type" value="parts" >
                                    <input type="submit" class="btn btn-red mt-0" value="Submit Enquiry"/>
                                    <p class="mb-0"><em class="required">*</em> indicates a required field.</p>
                                    <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="_blank" title="Daimler Trucks Privacy policy" class="d-block mb-1">Click to view Privacy Policy</a>
                                </div>                                                    
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="service_tab">
                        <form id="serviceform" action="/service" method="post">
                            @csrf
                            <div class="form-details">
                                <h5 class="form-title">Your Contact Details</h5>
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <select id="title2" name="title" class="custom-select">
                                            <option value="" @if (old('title') == '') selected="selected" @endif>Please Select</option>
                                            <option value="Mr" @if (old('title') == 'Mr') selected="selected" @endif>Mr</option>
                                            <option value="Miss" @if (old('title') == 'Miss') selected="selected" @endif>Miss</option>
                                            <option value="Mrs"@if (old('title') == 'Mrs') selected="selected" @endif>Mrs</option>
                                            <option value="Ms"@if (old('title') == 'Ms') selected="selected" @endif>Ms</option>
                                            <option value="Other"@if (old('title') == 'Other') selected="selected" @endif>Other</option>
                                        </select>
                                        @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                            <span class="error">@error('title'){{$message}}@enderror</span>
                                        @endif
                                    </div>
                                    <div class="col-md-5 form-group">  
                                        <fieldset>
                                            <input name="firstName" type="text" id="firstName2" placeholder="First Name *" value="{{ Request::old('firstName') }}">
                                            <!-- <label class="field-label" for="firstName2">First Name <em class="required">*</em></label>   -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('firstName'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <fieldset>
                                            <!-- <label class="field-label" for="lastName2">Last Name <em class="required">*</em></label> -->
                                            <input name="lastName" type="text" id="lastName2" placeholder="Last Name *" value="{{Request::old('lastName') }}">
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('lastName'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <fieldset>
                                            <input name="email" type="text" id="email2" placeholder="Email *" value="{{Request::old('email') }}">
                                            <!-- <label class="field-label" for="email2">Email <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('email'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <fieldset>
                                            <input name="phone" type="text" id="phone2" placeholder="Phone *" value="{{Request::old('phone') }}">
                                            <!-- <label class="field-label" for="phone2">Phone <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('phone'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                </div>
                                <h5 class="form-title">Your Address Details</h5>
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <!-- <label class="field-label" for="address2">Address <em class="required">*</em></label> -->
                                            <input name="address" type="text" id="address2" placeholder="Address *" value="{{Request::old('address') }}">
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('address'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <!-- <label class="field-label" for="suburb2">Suburb <em class="required">*</em></label> -->
                                            <input name="suburb" type="text" id="suburb2" placeholder="Suburb *" value="{{Request::old('suburb') }}">
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('suburb'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <select id="state2" name="state2" class="custom-select">
                                            <option value="" @if (old('state') == '') selected="selected" @endif>Please Select</option>
                                            <option value="ACT" @if (old('state') == 'ACT') selected="selected" @endif>ACT</option>
                                            <option value="NSW" @if (old('state') == 'NSW') selected="selected" @endif>NSW</option>
                                            <option value="NT"@if (old('state') == 'NT') selected="selected" @endif>NT</option>
                                            <option value="SA"@if (old('state') == 'SA') selected="selected" @endif>SA</option>
                                            <option value="TAS"@if (old('state') == 'TAS') selected="selected" @endif>TAS</option>
                                        </select>
                                        @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                            <span class="error">@error('state'){{$message}}@enderror</span>
                                        @endif
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <!-- <label class="field-label" for="postcode2">Postcode <em class="required">*</em></label> -->
                                            <input name="postcode" type="text" id="postcode2" placeholder="Postcode *" value="{{Request::old('postcode') }}">
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('postcode'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                </div>
                                <h5 class="form-title">Vehicle Details</h5>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <fieldset>
                                            <input name="registration" type="text" id="registration2" placeholder="Registration *" value="{{Request::old('registration') }}">
                                            <!-- <label class="field-label" for="registration2">Registration <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('registration'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <fieldset>
                                            <input name="chassisno" type="text" id="chassisno2" placeholder="VIN/Chassis# *" value="{{Request::old('chassisno') }}">
                                            <!-- <label class="field-label" for="chassisno2">VIN/Chassis # <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('chassisno'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <fieldset>
                                            <input name="year" type="text" id="year2" placeholder="Year *" value="{{Request::old('year') }}">
                                            <!-- <label class="field-label" for="year2">Year </label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('year'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <fieldset>
                                            <input name="odometer" type="text" id="odometer2" placeholder="">
                                            <label class="field-label" for="odometer2">Odometer</label>
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <fieldset>
                                            <input name="make" type="text" id="make2" placeholder="">
                                            <label class="field-label" for="make2">Vehicle Make </label>
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <fieldset>
                                            <input name="model" type="text" id="model2" placeholder="Vehicle Model">
                                            <label class="field-label" for="model2">Vehicle Model </label>
                                        </fieldset>  
                                    </div>
                                </div>
                                <div class="custom-checkbox form-group">
                                    <label for="newtrucks2" class="checkbox-custom full-width">
                                        Yes, my vehicle has been serviced at your dealership previously.
                                        <input type="checkbox" id="newtrucks2" name="newtrucks" value="new-trucks" class="truck-condition"> 
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <h5 class="form-title">Preferred Booking Details</h5>
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <input name="preferred_drop_off_date" type="text" id="dropoffdate2" placeholder="Preferred Drop Off Date *" value="{{Request::old('preferred_drop_off_date') }}">
                                            <!-- <label class="field-label" for="dropoffdate2">Preferred Drop Off Date <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('preferred_drop_off_date'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <input name="preferred_drop_off_time" type="text" id="dropofftime2" placeholder="Preferred Drop Off Time *" value="{{Request::old('preferred_drop_off_time') }}">
                                            <!-- <label class="field-label" for="dropofftime2">Preferred Drop Off Time <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('preferred_drop_off_time'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <input name="preferred_pick_up_date" type="text" id="pickupdate2" placeholder="Preferred Pick Up Date *" value="{{Request::old('preferred_pick_up_date') }}">
                                            <!-- <label class="field-label" for="pickupdate2">Preferred Pick Up Date <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('preferred_pick_up_date'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <fieldset>
                                            <input name="preferred_pick_up_time" type="text" id="pickuptime2" placeholder="Preferred Pick Up Time *" value="{{Request::old('preferred_pick_up_time') }}">
                                            <!-- <label class="field-label" for="pickuptime2">Preferred Pick Up Time <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('preferred_pick_up_time'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>  
                                    </div>
                                </div>
                                <div class="custom-checkbox form-group">
                                    <label for="subscribe" class="checkbox-custom full-width">
                                        Yes, I would like to subscribe to receive the latest offers & product updates.
                                        <input type="checkbox" id="subscribe" name="subscribe" value="new-trucks" class="truck-condition"> 
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="custom-checkbox form-group">
                                    <label for="terms2" class="checkbox-custom full-width">
                                        I agree with the website <a href="/disclaimer/">terms of use</a> and that my information will be handled by Daimler Trucks Somerton in accordance with the <a href="https://www.velocitytruckcentres.com.au/privacy-policy">Dealer Privacy Policy</a>.<em class="required">*</em>
                                        <input type="checkbox" id="terms2" name="terms2" :value=true class="truck-condition"> 
                                        <span class="checkmark"></span>
                                    </label>
                                    @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                        <span class="error">@error('terms'){{$message}}@enderror</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <fieldset>
                                            <textarea name="detail" type="text" id="detail2" rows="5" cols="30" placeholder="Work required/Comments (maximum 1000 characters) *"></textarea>
                                            <!-- <label for="detail" class="field-label">Work required/Comments (maximum 1000 characters) </label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                                <span class="error">@error('detail'){{$message}}@enderror</span>    
                                            @endif
                                        </fieldset>       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <div id="recaptcha_token2" name="recaptcha_token" class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Le9KsAaAAAAAFqprju7gblUuE8IyepTbDM34oGc"></div>
                                    </div>
                                    @if(session()->has('tab_id') && session()->get('tab_id') == 'service_tab_id')
                                        <span style="padding-left: 14px;" class="error">@error('recaptcha_token'){{$message}}@enderror</span>
                                    @endif
                                </div>
                                <div class="btn-groups mt-2">
                                    <input type="hidden" name="type" value="service" >
                                    <input type="submit" class="btn btn-red mt-0" value="Submit Enquiry"/>
                                    <p class="mb-0"><em class="required">*</em> indicates a required field.</p>
                                    <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="_blank" title="Daimler Trucks Privacy policy" class="d-block mb-1">Click to view Privacy Policy</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="finance_tab">
                        <form id="financeform" action="/finance" method="post">
                            @csrf
                            <div class="form-details">
                                <h5 class="form-title">Your Contact Details</h5>
                                <div class="row">
                                    <div class="col-md-2 form-group">
                                        <select id="title3" name="title" class="custom-select">
                                            <option value="" @if (old('title') == '') selected="selected" @endif>Please Select</option>
                                            <option value="Mr" @if (old('title') == 'Mr') selected="selected" @endif>Mr</option>
                                            <option value="Miss" @if (old('title') == 'Miss') selected="selected" @endif>Miss</option>
                                            <option value="Mrs"@if (old('title') == 'Mrs') selected="selected" @endif>Mrs</option>
                                            <option value="Ms"@if (old('title') == 'Ms') selected="selected" @endif>Ms</option>
                                            <option value="Other"@if (old('title') == 'Other') selected="selected" @endif>Other</option>
                                        </select>
                                        @if(session()->has('tab_id') && session()->get('tab_id') == 'finance_tab_id')
                                            <span class="error">@error('title'){{$message}}@enderror</span>
                                        @endif
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <fieldset>
                                            <input name="firstName" type="text" id="firstName3" placeholder="First Name *" value="{{ Request::old('firstName') }}">
                                            <!-- <label class="field-label" for="firstName3">First Name <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'finance_tab_id')
                                                <span class="error">@error('firstName'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <fieldset>
                                            <input name="lastName" type="text" id="lastName3" placeholder="Last Name *" value="{{ Request::old('lastName') }}">
                                            <!-- <label class="field-label" for="lastName3">Last Name <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'finance_tab_id')
                                                <span class="error">@error('lastName'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <fieldset>
                                            <input name="email" type="text" id="email3" placeholder="Email *" value="{{ Request::old('email') }}">
                                            <!-- <label class="field-label" for="email3">Email <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'finance_tab_id')
                                                <span class="error">@error('email'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <fieldset>
                                            <input name="phone" type="text" id="phone3" placeholder="Phone *" value="{{ Request::old('phone') }}">
                                            <!-- <label class="field-label" for="phone3">Phone <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'finance_tab_id')
                                                <span class="error">@error('phone'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                </div>
                                <h5 class="form-title">Finance Details</h5>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <fieldset>
                                            <input name="amount_required" type="text" id="amtreq3" placeholder="Amount Required *" value="{{ Request::old('amount_required') }}">
                                            <!-- <label class="field-label" for="amtreq3">Amount Required <em class="required">*</em></label> -->
                                            @if(session()->has('tab_id') && session()->get('tab_id') == 'finance_tab_id')
                                                <span class="error">@error('amount_required'){{$message}}@enderror</span>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <fieldset>
                                            <input name="loan_term3" type="text" id="loanterm3" placeholder="Loan Term" value="{{ Request::old('loan_term') }}">
                                            <!-- <label class="field-label" for="loanterm3">Loan Term </label> -->
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <fieldset>
                                        <textarea name="detail" type="text" id="detail3" rows="5" cols="30" placeholder="Comments (maximum 1000 characters) *"></textarea>
                                        <!-- <label for="detail3" class="field-label">Comments (maximum 1000 characters) </label> -->
                                        @if(session()->has('tab_id') && session()->get('tab_id') == 'finance_tab_id')
                                            <span class="error">@error('detail'){{$message}}@enderror</span>
                                        @endif
                                    </fieldset>
                                </div>
                                <div class="custom-checkbox form-group">
                                    <label for="terms3" class="checkbox-custom full-width">
                                        I agree with the website <a href="/disclaimer/">terms of use</a> and that my information will be handled by Daimler Trucks Somerton in accordance with the <a href="https://www.velocitytruckcentres.com.au/privacy-policy">Dealer Privacy Policy</a>.<em class="required">*</em>
                                        <input type="checkbox" id="terms3" name="terms3" :value=true class="truck-condition"> 
                                        <span class="checkmark"></span>
                                    </label>
                                    @if(session()->has('tab_id') && session()->get('tab_id') == 'finance_tab_id')
                                        <span class="error">@error('terms'){{$message}}@enderror</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <div id="recaptcha_token3" name="recaptcha_token" class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Le9KsAaAAAAAFqprju7gblUuE8IyepTbDM34oGc"></div>
                                    </div>
                                    @if(session()->has('tab_id') && session()->get('tab_id') == 'finance_tab_id')
                                        <span style="padding-left: 14px;" class="error">@error('recaptcha_token'){{$message}}@enderror</span>
                                    @endif
                                </div>
                                <div class="btn-groups mt-5">
                                    <input type="hidden" name="type" value="finance" >
                                    <input type="submit" class="btn btn-red mt-0" value="Submit Enquiry"/>
                                    <p class="mb-0"><em class="required">*</em> indicates a required field.</p>
                                    <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="_blank" title="Daimler Trucks Privacy policy" class="d-block mb-1">Click to view Privacy Policy</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-lg-12 col-md-12" id="OperatingHours">
                    @include('partials.location_details')
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        if("{{session()->has('tab_id')}}") {
            window.location.href += '#' + "{{session()->get('tab_id')}}";
        } else {
            /* $("#contactform")[0].reset();
            $("#partsform")[0].reset();
            $("#serviceform")[0].reset();
            $("#financeform")[0].reset(); */
        }
    });
    function formChangeEvent(tabId) {
        /* $("#contactform")[0].reset();
        $("#partsform")[0].reset();
        $("#serviceform")[0].reset();
        $("#financeform")[0].reset(); */
        var splitArr = window.location.href.split("#");
        window.location.href = splitArr[0] + '#' + tabId;
    }
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection