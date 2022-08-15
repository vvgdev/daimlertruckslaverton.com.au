@extends('layouts.app')

@section('content')

<section class="middle-section">
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="services-page page-multi">
            <h1 class="page-title">Service</h1>
            <div class="specification-tabs">
                <div class="responsive custom-scrollbar">
                    <ul class="nav nav-pills">
                        <li class="tab-title" id="benz_desc">
                            <a href="#benz_tab" data-toggle="tab" aria-expanded="true" class="active">
                            <i class="dtm-mercedes-logo"></i>Mercedes Benz</a>
                        </li>
                        <li class="tab-title" id="freightliner_desc">
                            <a href="#freightliner_tab" data-toggle="tab" aria-expanded="false">
                            <i class="dtm-icon-gallery-truck"></i> Freightliner</a>
                        </li>
                        <li class="tab-title" id="fuso_desc">
                            <a href="#fuso_tab" data-toggle="tab" aria-expanded="false">
                            Fuso</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="benz_tab">
                        <div class="content">
                            <h3 class="mb-4">Mercedes-Benz Service Sydney | Truck Service Sydney NSW</h3>
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
					                <p>
                                        Choosing the best truck for the job is an excellent start, but it is just the beginning.
                                    </p>
                                    <p>
                                        To get the best out of your truck and to keep it running how the Mercedes-Benz engineers intended, we recommend that you have it maintained and serviced at regular intervals at&nbsp;<strong>Daimler Trucks Huntingwood Mercedes-Benz.</strong>
                                    </p>
                                    <p>
                                        Every workshop that carries the famous three-pointed star is staffed and equipped for excellence, with access to the latest specification and up-to-date information across the model range.
                                    </p>
                                    <p>
                                        Trained technicians are essential, and every Mercedes-Benz technician completes a set number of hours of training and retraining every year to ensure they are up-to-date with technology.
                                    </p>
                                    <p>
                                        Finally, the equipment and tooling required to maintain a Mercedes-Benz truck is designed and developed by the same people who design and develop the vehicle. The investment you make in your fleet, from one truck to a major fleet of different sizes and configurations, demands the attention and expertise only genuine Mercedes-Benz service can deliver.
                                    </p>
                                    <p>
                                        It’s the best way to maximise uptime, maximise reliability and protect your investment.
                                    </p>
                                    <h3>Quick, easy and inexpensive repairs.</h3>
                                    <p>
                                        Making sure that your Mercedes-Benz truck, or your entire Mercedes-Benz truck fleet, remains in optimum operating condition is the key.
                                    </p>
                                    <p>
                                        Whether you need a larger repair, like a new body panel or have a smaller problem that needs fixing like an annoying rattle, you can trust Daimler Trucks Huntingwood Mercedes-Benz to take care of it.
                                    </p>
                                    <p>
                                        <strong>AT DAIMLER TRUCKS Huntingwood WE OFFER:</strong>
                                    </p>
                                    <ul>
                                        <li>Service and Repairs to all makes and models of trucks, buses and trailers</li>
                                        <li>Chassis modifications and wheelbase alterations</li>
                                        <li>On site servicing</li>
                                        <li>Computerised vehicle diagnosis</li>
                                        <li>Major component overhauls</li>
                                        <li>Air conditioning service and repair</li>
                                        <li>Auto electrical service</li>
                                        <li>Free pick up and return within a 5km radius of the Huntingwood dealership</li>
                                        <li>Shaker and brake roller test facility</li>
                                        <li>RTA accredited unrestricted authorised inspection station for defect clearance, blue slip, pink slip, brown slip, HVAIS and crane inspection</li>
                                    </ul>
                                    <p>
                                        <strong>WHY CHOOSE US?</strong>
                                    </p>
                                    <ul>
                                        <li>We offer Free loan cars subject to availability</li>
                                        <li>We can service while you wait and offer a late shift and clear RMS Defects (day shift only)</li>
                                        <li>We have Factory trained technicians who use genuine parts</li><li>Our Customer Lounge has</li>
                                    </ul>
                                    <ul style="color: rgb(24, 50, 71); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;" type="disc">
                                        <li style="margin-left: 36pt;">Free wifi&nbsp;</li>
                                        <li style="margin-left: 36pt;">Complementary Tea and Coffee&nbsp;</li>
                                        <li style="margin-left: 36pt;">Complimentary Newspapers, Magazines and TV&nbsp;</li>
                                        <li style="margin-left: 36pt;">Food and Drink Vending machine</li>
                                        <li style="box-sizing: border-box; margin-left: 36pt;">shower and sleeping facilities between hours of 8.00am to 5.00pm</li>
                                    </ul>
                                    <ul>
                                        <li>Trailer Parking<span style="box-sizing: border-box; word-break: break-word; word-wrap: break-word; color: rgb(31, 73, 125);">&nbsp;</span></li>
                                        <li>We are close to local shops, restaurants, train station and amenities and also a golf course!</li>
                                    </ul>
                                    <p>
                                        <strong>DAIMLER TRUCKS HUNTINGWOOD ARE AUTHORISED AGENTS AND REPAIRERS FOR -</strong>
                                    </p>
                                    <ul>
                                        <li>ORIX Australia</li>
                                        <li>State Fleet Services</li>
                                        <li>SG Fleet Australia</li>
                                        <li>LeasePlan Australia</li>
                                        <li>FleetPartners</li>
                                        <li>Custom Fleet</li>
                                        <li>Flex Fleet</li>
                                        <li>Caltex Star Fleet</li>
                                        <li>Motorpass</li>
                                    </ul>
                                    <p>
                                        For further information, please contact our friendly Service team for assistance with any enquiry regarding your Mercedes-Benz Trucks vehicle.
                                    </p>
                                    <p>
                                        The Daimler Trucks Huntingwood Mercedes-Benz team wishes you safe and pleasant motoring
                                    </p>
                                    <hr>
                                    <p>
                                        <strong>After Hours - Service&nbsp;</strong>: <a href="tel:%200438%20474%20514">0438 474 514</a>
                                    </p>
                                    <div class="truck-location">
                                        <div class="panel panel-default">
                                            <a class="panel-head">
                                                Daimler Trucks Huntingwood Mercedes-Benz Contact Details <i class="fa fa-angle-up"></i>
                                            </a>
                                            <div class="panel-body menu-mobile-close" style="display:none;">
                                                <div class="location-details">
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Address</label>
                                                        <div class="text">20 Ashford Ave, Huntingwood, NSW 2214
                                                        </div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Phone</label>
                                                        <div class="text">
                                                            <a class="no-style-inherit" href="tel:0297748585">(02) 9774 8585</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">After Hours</label>
                                                        <div class="text"><a class="no-style-inherit" href="tel:0297748585">0438 474 514</a></div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Fax</label>
                                                        <div class="text"><span class="no-style-inherit">(02) 9774 2379</span></div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Email</label>
                                                        <div class="text"><a class="no-style-inherit EBG13 ROT13" rel="nofollow" href="mailto:service@stillwelltrucks.com.au">service@stillwelltrucks.com.au</a></div>
                                                    </div>
                                                    <div class="mapper mb-2">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                                                        <a data-address="20 Ashford Ave, Huntingwood, NSW 2214" data-ga-direction="" class="btn btn-red-small mt-3" href="http://maps.google.com/maps?saddr=Current%20Location&amp;daddr=20+Ashford+Ave%2C+Milperra%2C+NSW+2214+Australia" target="_blank">Get Directions</a>
                                                        <a data-address="20 Ashford Ave, Huntingwood, NSW 2214" data-ga-map="" class="btn btn-red-small mt-3" href="http://maps.google.com/maps?q=20+Ashford+Ave%2C+Milperra%2C+NSW+2214+Australia" target="_blank">View On Map</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <a class="panel-head">
                                                Service Operating Hours <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="panel-body menu-mobile-close">
                                                <div class="location-details">
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Monday - Friday</label>
                                                        <div class="text">7:30am - 5:00pm</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Saturday</label>
                                                        <div class="text">7:00am - 12:00pm</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
				                </div>
                                <div class="col-lg-5 col-md-12">
                                    <form action="/service" method="post">
                                        @csrf
                                        <div class="form-details">
                                            <h2 class="form-head">Service Enquiry & Booking Form</h2>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-12">
                                                    <h5 class="form-title">Your Contact Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="title">Title <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <select id="title" name="title">
                                                            <option value="" @if (old('title') == '') selected="selected" @endif>Please Select</option>
                                                            <option value="Mr" @if (old('title') == 'Mr') selected="selected" @endif>Mr</option>
                                                            <option value="Miss" @if (old('title') == 'Miss') selected="selected" @endif>Miss</option>
                                                            <option value="Mrs"@if (old('title') == 'Mrs') selected="selected" @endif>Mrs</option>
                                                            <option value="Ms"@if (old('title') == 'Ms') selected="selected" @endif>Ms</option>
                                                            <option value="Other"@if (old('title') == 'Other') selected="selected" @endif>Other</option>
                                                        </select>
                                                        <span class="error">@error('title'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="firstName">First Name <em class="required">*</em></label>  
                                                        <div class="col-md-8 form-group">    
                                                        <input name="firstName" type="text" id="firstName" placeholder="First Name" value="{{ Request::old('firstName') }}">
                                                        <span class="error">@error('firstName'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="lastName">Last Name <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="lastName" type="text" id="lastName" placeholder="Last Name" value="{{Request::old('lastName') }}">
                                                        <span class="error">@error('lastName'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="email">Email <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="email" type="text" id="email" placeholder="Email Address" value="{{Request::old('email') }}">
                                                        <span class="error">@error('email'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="phone">Phone <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="phone" type="text" id="phone" placeholder="Phone Number" value="{{Request::old('phone') }}">
                                                        <span class="error">@error('phone'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="form-title">Your Address Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="address">Address <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="address" type="text" id="address" placeholder="Address" value="{{Request::old('address') }}">
                                                        <span class="error">@error('address'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="suburb">Suburb <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="suburb" type="text" id="suburb" placeholder="Suburb" value="{{Request::old('suburb') }}">
                                                        <span class="error">@error('suburb'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="state">State <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <select id="state" name="state">
                                                            <option value="" @if (old('state') == '') selected="selected" @endif>Please Select</option>
                                                            <option value="ACT" @if (old('state') == 'ACT') selected="selected" @endif>ACT</option>
                                                            <option value="NSW" @if (old('state') == 'NSW') selected="selected" @endif>NSW</option>
                                                            <option value="NT"@if (old('state') == 'NT') selected="selected" @endif>NT</option>
                                                            <option value="SA"@if (old('state') == 'SA') selected="selected" @endif>SA</option>
                                                            <option value="TAS"@if (old('state') == 'TAS') selected="selected" @endif>TAS</option>
                                                        </select>
                                                        <span class="error">@error('state'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="postcode">Postcode <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="postcode" type="text" id="postcode" placeholder="Postcode" value="{{Request::old('postcode') }}">
                                                        <span class="error">@error('postcode'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="form-title">Vehicle Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="registration">Registration <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="registration" type="text" id="registration" placeholder="Registration" value="{{Request::old('registration') }}">
                                                        <span class="error">@error('registration'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="chassisno">VIN/Chassis # <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="chassisno" type="text" id="chassisno" placeholder="VIN/#" value="{{Request::old('chassisno') }}">
                                                        <span class="error">@error('chassisno'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="year">Year </label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="year" type="text" id="year" placeholder="Year" value="{{Request::old('year') }}">
                                                        <span class="error">@error('year'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="odometer">Odometer</label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="odometer" type="text" id="odometer" placeholder="Odometer">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="make">Vehicle Make </label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="make" type="text" id="make" placeholder="Make">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="model">Vehicle Model </label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="model" type="text" id="model" placeholder="Model">
                                                        </div>
                                                    </div>
                                                    <div class="custom-checkbox form-group">
                                                        <label for="newtrucks" class="checkbox-custom full-width">
                                                        Yes, my vehicle has been serviced at your dealership previously.
                                                            <input type="checkbox" id="newtrucks" name="newtrucks" value="new-trucks" class="truck-condition"> 
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-12">
                                                    <h5 class="form-title">Preferred Booking Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="rego">Preferred Drop Off Date <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_drop_off_date" type="text" id="rego" placeholder="Rego number" value="{{Request::old('preferred_drop_off_date') }}">
                                                        <span class="error">@error('preferred_drop_off_date'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="year">Preferred Drop Off Time <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_drop_off_time" type="text" id="year" placeholder="Vehicle Year" value="{{Request::old('preferred_drop_off_time') }}">
                                                        <span class="error">@error('preferred_drop_off_time'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="model">Preferred Pick Up Date <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_pick_up_date" type="text" id="year" placeholder="Modal name" value="{{Request::old('preferred_pick_up_date') }}">
                                                        <span class="error">@error('preferred_pick_up_date'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="make">Preferred Pick Up Time <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_pick_up_time" type="text" id="make" placeholder="Vehicle Make" value="{{Request::old('preferred_pick_up_time') }}">
                                                        <span class="error">@error('preferred_pick_up_time'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="custom-checkbox form-group">
                                                        <label for="newtrucks" class="checkbox-custom full-width">
                                                        Yes, I would like to subscribe to receive the latest offers & product updates.
                                                            <input type="checkbox" id="newtrucks" name="newtrucks" value="new-trucks" class="truck-condition"> 
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox form-group">
                                                        <label for="terms" class="checkbox-custom full-width">
                                                            I agree with the website <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank">terms of use</a> and that my information will be handled by Daimler Trucks Huntingwood in accordance with the <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank">Dealer Privacy Policy</a>.<em class="required">*</em>
                                                            <input type="checkbox" id="terms" name="terms" value="new-trucks" class="truck-condition"> 
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <span class="error">@error('terms'){{$message}}@enderror</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="full-width">Work required/Comments (maximum 1000 characters) </label>
                                                        <textarea name="detail" type="text" id="detail" rows="2" cols="30"></textarea>
                                                        <span class="error">@error('detail'){{$message}}@enderror</span>           
                                                    </div>
                                                    <div class="btn-groups mt-2">
                                                        <input type="hidden" name="type" value="service" >
                                                        <input type="submit" class="btn btn-red-small mt-0" value="Submit Enquiry"/>
                                                        <p class="mb-0"><em class="required">*</em> indicates a required field.</p>
                                                        <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank" class="d-block mb-1">Click to view Privacy Policy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>            
                    </div>
                    <div class="tab-pane" id="freightliner_tab">
                        <div class="content">
                            <h3 class="mb-4">Freightliner Service Sydney | Truck Service Sydney NSW</h3>
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
					                <p>
                                        At <strong>Daimler Trucks Huntingwood Freightliner</strong> choosing your truck is just the beginning. We’re there for the life of your vehicle.
                                    </p>
                                    <p>
                                        Daimler Trucks Huntingwood Freightliner have a number of servicing and repair options and Service Contracts designed to help manage your maintenance costs with flexible and affordable options. Not only will you feel reassured that trained technicians are working on your truck, you can rest assured that they will use Freightliner Genuine Parts.
                                    </p>
                                    <h3 class="txt-uppercase">Genuine Freightliner Service</h3>
                                    <p>
                                        Having your truck serviced by an Authorised Freightliner Dealer will ensure that:
                                    </p>
                                    <ul>
                                        <li>Your truck will be serviced correctly</li>
                                        <li>Service measures identified by the factory will be undertaken to ensure that your vehicle receives all the necessary upgrades - free of charge</li>
                                        <li>Only Freightliner Genuine Parts will be fitted, reducing the chances of vehicle breakdown and inconvenience to yourself and your business</li>
                                        <li>Only the correct grade of oil will be used for your vehicle to ensure our class-leading standards for both fuel economy and length of service interval are maintained</li>
                                        <li>Work will only be undertaken by accredited Freightliner Technicians. They know the vehicles they work on. They will only replace and repair that which is necessary and which you agree to, reducing your potential costs and ensuring trouble-free motoring</li>
                                    </ul>
                                    <h3 class="txt-uppercase">Freightliner Service Plans.</h3>
                                    <p>
                                        <strong>WHAT ARE FREIGHTLINER SERVICE PLANS?</strong>
                                    </p>
                                    <p>
                                        Whether you operate one truck or a large fleet, planning your operating costs is imperative. Freightliner Service Plans is a maintenance and repair program designed to increase vehicle utilisation and protect your vehicle and your business from unexpected operating costs. Through Freightliner Service Plans, the Freightliner dealer network carries out maintenance and repairs according to an agreed schedule and pre-determined costs. Freightliner Service Plans rates are calculated and agreed by using criteria and information supplied by you, such as vehicle application, anticipated annual kilometres, operating hours, loads and working conditions. This means you can work out a budget with monthly payments and be confident that your agreed maintenance and repair costs are covered.
                                    </p>
                                    <p>
                                        <b class="txt-uppercase">What Is Express Assessment?</b>
                                    </p>
                                    <p>
                                        Express Assessment is a commitment to provide a preliminary diagnosis and communication to the customer within two hours of repair order creation. Express Assessment is a process, not a program. It is intended to become part of the way a service department performs its day-to-day work.
                                    </p>
                                    <p>
                                        Within 2 Hours Of Service Write-Up, The Daimler Trucks Huntingwood Freightliner Will:
                                    </p>
                                    <ul>
                                        <li>Communicate single service issue diagnosis</li>
                                        <li>Check part availability</li>
                                        <li>Provide an estimate of cost and repair time</li>
                                    </ul>
                                    <p>
                                        <strong>AT DAIMLER TRUCKS HUNTINGWOOD WE OFFER:</strong>
                                    </p>
                                    <ul>
                                        <li>Service and Repairs to all makes and models of trucks, buses and trailers</li>
                                        <li>Chassis modifications and wheelbase alterations</li>
                                        <li>On site servicing</li>
                                        <li>Computerised vehicle diagnosis</li>
                                        <li>Major component overhauls</li>
                                        <li>Air conditioning service and repair</li>
                                        <li>Auto electrical service</li>
                                        <li>Free pick up and return within a 5km radius of the Huntingwood dealership</li>
                                        <li>Shaker and brake roller test facility</li>
                                        <li>RTA accredited unrestricted authorised inspection station for defect clearance, blue slip, pink slip, brown slip, HVAIS and crane inspection</li>
                                    </ul>
                                    <p>
                                        <strong>WHY CHOOSE US?</strong>
                                    </p>
                                    <ul>
                                        <li>We offer Free loan cars subject to availability</li>
                                        <li>We can service while you wait and offer a late shift and clear RMS Defects (day shift only)</li>
                                        <li>We have Factory trained technicians who use genuine parts</li>
                                        <li>Our Customer Lounge has</li>
                                    </ul>
                                    <ul style="color: rgb(24, 50, 71); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;" type="disc">
                                        <li style="margin-left: 36pt;">Free wifi&nbsp;</li>
                                        <li style="margin-left: 36pt;">Complementary Tea and Coffee&nbsp;</li>
                                        <li style="margin-left: 36pt;">Complimentary Newspapers, Magazines and TV&nbsp;</li>
                                        <li style="margin-left: 36pt;">Food and Drink Vending machine</li>
                                        <li style="margin-left: 36pt;">shower and sleeping facilities between hours of 8.00am to 5.00pm</li>
                                    </ul>
                                    <ul>
                                        <li>Trailer Parking<span style="word-break: break-word; word-wrap: break-word; color: rgb(31, 73, 125);">&nbsp;</span></li>
                                        <li>We are close to local shops, restaurants, train station and amenities and also a golf course!</li>
                                    </ul>
                                    <p>
                                        <strong>DAIMLER TRUCKS HUNTINGWOOD ARE AUTHORISED AGENTS AND REPAIRERS FOR -</strong>
                                    </p>
                                    <ul>
                                        <li>ORIX Australia</li>
                                        <li>State Fleet Services</li>
                                        <li>SG Fleet Australia</li>
                                        <li>LeasePlan Australia</li>
                                        <li>FleetPartners</li>
                                        <li>Custom Fleet</li>
                                        <li>Flex Fleet</li>
                                        <li>Caltex Star Fleet</li>
                                        <li>Motorpass</li>
                                    </ul>
                                    <p>
                                        For further information, please contact our friendly Service team for assistance with any enquiry regarding your Freightliner vehicle.
                                    </p>
                                    <p>
                                        The Daimler Trucks Huntingwood Freightliner team wishes you safe and pleasant motoring
                                    </p>
                                    <hr>
                                    <p>
                                        <strong>After Hours Daimler Trucks Huntingwood Freightliner Service</strong> : 0438 474 514
                                    </p>
                                    <div class="truck-location">
                                        <div class="panel panel-default">
                                            <a class="panel-head">
                                                Daimler Trucks Huntingwood Mercedes-Benz Contact Details <i class="fa fa-angle-up"></i>
                                            </a>
                                            <div class="panel-body menu-mobile-close" style="display:none;">
                                                <div class="location-details">
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Address</label>
                                                        <div class="text">20 Ashford Ave, Huntingwood, NSW 2214
                                                        </div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Phone</label>
                                                        <div class="text">
                                                            <a class="no-style-inherit" href="tel:0297748585">(02) 9774 8585</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">After Hours</label>
                                                        <div class="text"><a class="no-style-inherit" href="tel:0297748585">0438 474 514</a></div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Fax</label>
                                                        <div class="text"><span class="no-style-inherit">(02) 9774 2379</span></div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Email</label>
                                                        <div class="text"><a class="no-style-inherit EBG13 ROT13" rel="nofollow" href="mailto:service@stillwelltrucks.com.au">service@stillwelltrucks.com.au</a></div>
                                                    </div>
                                                    <div class="mapper mb-2">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                                                        <a data-address="20 Ashford Ave, Huntingwood, NSW 2214" data-ga-direction="" class="btn btn-red-small mt-3" href="http://maps.google.com/maps?saddr=Current%20Location&amp;daddr=20+Ashford+Ave%2C+Milperra%2C+NSW+2214+Australia" target="_blank">Get Directions</a>
                                                        <a data-address="20 Ashford Ave, Huntingwood, NSW 2214" data-ga-map="" class="btn btn-red-small mt-3" href="http://maps.google.com/maps?q=20+Ashford+Ave%2C+Milperra%2C+NSW+2214+Australia" target="_blank">View On Map</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <a class="panel-head">
                                                Service Operating Hours <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="panel-body menu-mobile-close">
                                                <div class="location-details">
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Monday - Friday</label>
                                                        <div class="text">7:30am - 5:00pm</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Saturday</label>
                                                        <div class="text">7:00am - 12:00pm</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
				                </div>
                                <div class="col-lg-5 col-md-12">
                                    <form action="/service" method="post">
                                        @csrf
                                        <div class="form-details">
                                            <h2 class="form-head">Service Enquiry & Booking Form</h2>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-12">
                                                    <h5 class="form-title">Your Contact Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="title">Title <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <select id="title" name="title">
                                                            <option value="" @if (old('title') == '') selected="selected" @endif>Please Select</option>
                                                            <option value="Mr" @if (old('title') == 'Mr') selected="selected" @endif>Mr</option>
                                                            <option value="Miss" @if (old('title') == 'Miss') selected="selected" @endif>Miss</option>
                                                            <option value="Mrs"@if (old('title') == 'Mrs') selected="selected" @endif>Mrs</option>
                                                            <option value="Ms"@if (old('title') == 'Ms') selected="selected" @endif>Ms</option>
                                                            <option value="Other"@if (old('title') == 'Other') selected="selected" @endif>Other</option>
                                                        </select>
                                                        <span class="error">@error('title'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="firstName">First Name <em class="required">*</em></label>  
                                                        <div class="col-md-8 form-group">    
                                                        <input name="firstName" type="text" id="firstName" placeholder="First Name" value="{{ Request::old('firstName') }}">
                                                        <span class="error">@error('firstName'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="lastName">Last Name <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="lastName" type="text" id="lastName" placeholder="Last Name" value="{{Request::old('lastName') }}">
                                                        <span class="error">@error('lastName'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="email">Email <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="email" type="text" id="email" placeholder="Email Address" value="{{Request::old('email') }}">
                                                        <span class="error">@error('email'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="phone">Phone <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="phone" type="text" id="phone" placeholder="Phone Number" value="{{Request::old('phone') }}">
                                                        <span class="error">@error('phone'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="form-title">Your Address Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="address">Address <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="address" type="text" id="address" placeholder="Address" value="{{Request::old('address') }}">
                                                        <span class="error">@error('address'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="suburb">Suburb <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="suburb" type="text" id="suburb" placeholder="Suburb" value="{{Request::old('suburb') }}">
                                                        <span class="error">@error('suburb'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="state">State <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <select id="state" name="state">
                                                            <option value="" @if (old('state') == '') selected="selected" @endif>Please Select</option>
                                                            <option value="ACT" @if (old('state') == 'ACT') selected="selected" @endif>ACT</option>
                                                            <option value="NSW" @if (old('state') == 'NSW') selected="selected" @endif>NSW</option>
                                                            <option value="NT"@if (old('state') == 'NT') selected="selected" @endif>NT</option>
                                                            <option value="SA"@if (old('state') == 'SA') selected="selected" @endif>SA</option>
                                                            <option value="TAS"@if (old('state') == 'TAS') selected="selected" @endif>TAS</option>
                                                        </select>
                                                        <span class="error">@error('state'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="postcode">Postcode <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="postcode" type="text" id="postcode" placeholder="Postcode" value="{{Request::old('postcode') }}">
                                                        <span class="error">@error('postcode'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="form-title">Vehicle Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="registration">Registration <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="registration" type="text" id="registration" placeholder="Registration" value="{{Request::old('registration') }}">
                                                        <span class="error">@error('registration'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="chassisno">VIN/Chassis # <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="chassisno" type="text" id="chassisno" placeholder="VIN/#" value="{{Request::old('chassisno') }}">
                                                        <span class="error">@error('chassisno'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="year">Year </label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="year" type="text" id="year" placeholder="Year" value="{{Request::old('year') }}">
                                                        <span class="error">@error('year'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="odometer">Odometer</label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="odometer" type="text" id="odometer" placeholder="Odometer">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="make">Vehicle Make </label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="make" type="text" id="make" placeholder="Make">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="model">Vehicle Model </label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="model" type="text" id="model" placeholder="Model">
                                                        </div>
                                                    </div>
                                                    <div class="custom-checkbox form-group">
                                                        <label for="newtrucks" class="checkbox-custom full-width">
                                                        Yes, my vehicle has been serviced at your dealership previously.
                                                            <input type="checkbox" id="newtrucks" name="newtrucks" value="new-trucks" class="truck-condition"> 
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-12">
                                                    <h5 class="form-title">Preferred Booking Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="rego">Preferred Drop Off Date <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_drop_off_date" type="text" id="rego" placeholder="Rego number" value="{{Request::old('preferred_drop_off_date') }}">
                                                        <span class="error">@error('preferred_drop_off_date'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="year">Preferred Drop Off Time <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_drop_off_time" type="text" id="year" placeholder="Vehicle Year" value="{{Request::old('preferred_drop_off_time') }}">
                                                        <span class="error">@error('preferred_drop_off_time'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="model">Preferred Pick Up Date <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_pick_up_date" type="text" id="year" placeholder="Modal name" value="{{Request::old('preferred_pick_up_date') }}">
                                                        <span class="error">@error('preferred_pick_up_date'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="make">Preferred Pick Up Time <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_pick_up_time" type="text" id="make" placeholder="Vehicle Make" value="{{Request::old('preferred_pick_up_time') }}">
                                                        <span class="error">@error('preferred_pick_up_time'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="custom-checkbox form-group">
                                                        <label for="newtrucks" class="checkbox-custom full-width">
                                                        Yes, I would like to subscribe to receive the latest offers & product updates.
                                                            <input type="checkbox" id="newtrucks" name="newtrucks" value="new-trucks" class="truck-condition"> 
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox form-group">
                                                        <label for="terms" class="checkbox-custom full-width">
                                                            I agree with the website <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank">terms of use</a> and that my information will be handled by Daimler Trucks Huntingwood in accordance with the <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank">Dealer Privacy Policy</a>.<em class="required">*</em>
                                                            <input type="checkbox" id="terms" name="terms" value="new-trucks" class="truck-condition"> 
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <span class="error">@error('terms'){{$message}}@enderror</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="full-width">Work required/Comments (maximum 1000 characters) </label>
                                                        <textarea name="detail" type="text" id="detail" rows="2" cols="30"></textarea>
                                                        <span class="error">@error('detail'){{$message}}@enderror</span>           
                                                    </div>
                                                    <div class="btn-groups mt-2">
                                                        <input type="hidden" name="type" value="service" >
                                                        <input type="submit" class="btn btn-red-small mt-0" value="Submit Enquiry"/>
                                                        <p class="mb-0"><em class="required">*</em> indicates a required field.</p>
                                                        <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank" class="d-block mb-1">Click to view Privacy Policy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="fuso_tab">
                        <div class="content">
                            <h3 class="mb-4">Fuso Service Sydney | Truck Service Sydney NSW</h3>
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
					                <p>
                                        At <strong>Daimler Trucks Huntingwood Fuso</strong> choosing your truck or bus is just the beginning. We’re there for the life of your vehicle.
                                    </p>
                                    <p>
                                        Daimler Trucks Huntingwood Fuso has a wide range of support services designed to make maintaining and repairing your vehicle as easy as possible. With expert support from our factory trained technicians, you can be confident knowing you’ve always got a great Service team behind you.
                                    </p>
                                    <p>
                                        Best of all, at Daimler Trucks Huntingwood Fuso our service solutions are specifically tailored to minimise downtime. From our <strong>24-hour roadside assistance</strong> hotline, to overnight servicing at our dealerships, we do what it takes to keep you on the road.
                                    </p>
                                    <p>
                                        <strong>AT Daimler Trucks Huntingwood WE OFFER:</strong>
                                    </p>
                                    <ul>
                                        <li>Service and Repairs to all makes and models of trucks, buses and trailers</li>
                                        <li>Chassis modifications and wheelbase alterations</li>
                                        <li>On site servicing</li>
                                        <li>Computerised vehicle diagnosis</li>
                                        <li>Major component overhauls</li>
                                        <li>Air conditioning service and repair</li>
                                        <li>Auto electrical service</li>
                                        <li>Free pick up and return within a 5km radius of the Huntingwood dealership</li>
                                        <li>Shaker and brake roller test facility</li>
                                        <li>RTA accredited unrestricted authorised inspection station for defect clearance, blue slip, pink slip, brown slip, HVAIS and crane inspection</li>
                                    </ul>
                                    <p>
                                        <strong>WHY CHOOSE US?</strong>
                                    </p>
                                    <ul>
                                        <li>We offer Free loan cars subject to availability</li>
                                        <li>We can service while you wait and offer a late shift and clear RMS Defects (day shift only)</li>
                                        <li>We have Factory trained technicians who use genuine parts</li><li>Our Customer Lounge has</li>
                                    </ul>
                                    <ul style="color: rgb(24, 50, 71); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;" type="disc">
                                        <li style="margin-left: 36pt;">Free wifi&nbsp;</li>
                                        <li style="margin-left: 36pt;">Complementary Tea and Coffee&nbsp;</li>
                                        <li style="margin-left: 36pt;">Complimentary Newspapers, Magazines and TV&nbsp;</li>
                                        <li style="margin-left: 36pt;">Food and Drink Vending machine</li>
                                        <li style="margin-left: 36pt;">shower and sleeping facilities between hours of 8.00am to 5.00pm</li>
                                    </ul>
                                    <ul>
                                        <li>Trailer Parking<span style="word-break: break-word; word-wrap: break-word; color: rgb(31, 73, 125);">&nbsp;</span></li>
                                        <li>We are close to local shops, restaurants, train station and amenities and also a golf course!</li>
                                    </ul>
                                    <p>
                                        <strong>DAIMLER TRUCKS HUNTINGWOOD ARE AUTHORISED AGENTS AND REPAIRERS FOR -</strong>
                                    </p>
                                    <ul>
                                        <li>ORIX Australia</li>
                                        <li>State Fleet Services</li>
                                        <li>SG Fleet Australia</li>
                                        <li>LeasePlan Australia</li>
                                        <li>FleetPartners</li>
                                        <li>Custom Fleet</li>
                                        <li>Flex Fleet</li>
                                        <li>Caltex Star Fleet</li>
                                        <li>Motorpass</li>
                                    </ul>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th style="border-bottom: 1px solid #eee;">&nbsp;</th>
                                                <th style="border-bottom: 1px solid #eee;font-size:11px"><strong>Maintenance</strong></th>
                                                <th style="border-bottom: 1px solid #eee;font-size:11px"><strong>Driveline Repairs</strong></th>
                                                <th style="border-bottom: 1px solid #eee;font-size:11px"><strong>Vehicle Repairs</strong></th>
                                                <th style="border-bottom: 1px solid #eee;font-size:11px"><strong>Wear and Tear</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 40%;padding: 10px;border-bottom: 1px solid #eee;font-size:12px">
                                                    <strong>BEST BASIC</strong><br>Includes all scheduled servicing work for your vehicle as specified in the Fuso maintenance booklet, carried out to Fuso quality standards. Total flexibility allows you to select a time/kilometre structure that best suits your needs.
                                                </td>
                                                <td style="border-bottom: 1px solid #eee; color:green;">
                                                    <div>Yes</div>
                                                </td>
                                                <td style="border-bottom: 1px solid #eee;color:red;">
                                                    <div>No</div>
                                                </td>
                                                <td style="border-bottom: 1px solid #eee;color:red;">
                                                    <div>No</div>
                                                </td>
                                                <td style="border-bottom: 1px solid #eee;color:red;">
                                                    <div>No</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%;padding: 10px;border-bottom: 1px solid #eee;font-size:12px">
                                                    <strong>COMPLETE</strong><br>A full service package offering all-round protection. Complete covers all necessary repair and maintenance work including wearing parts, ensuring that your vehicle is always in the best condition.
                                                </td>
                                                <td style="border-bottom: 1px solid #eee;color:green;"><div>Yes</div></td>
                                                <td style="border-bottom: 1px solid #eee;color:green;"><div>Yes</div></td>
                                                <td style="border-bottom: 1px solid #eee;color:green;"><div>Yes</div></td>
                                                <td style="border-bottom: 1px solid #eee;color:green;"><div>Yes</div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                    <p>
                                        <a class="btn btn-red-small mt-0" href="{{ asset('pdf/fuso-serviceplans-brochure.pdf') }}" target="_blank">Click here to view Service Plans</a>
                                    </p>
                                    <p>For further information, please contact our friendly Service team for assistance with any enquiry regarding your Fuso vehicle.</p>
                                    <p>The Daimler Trucks Huntingwood Fuso team wishes you safe and pleasant motoring.</p>
                                    <hr>
                                    <p><strong>After Hours -&nbsp;</strong>Daimler Trucks Huntingwood Fuso Service : 0438 474 514</p>
                                    <div class="truck-location">
                                        <div class="panel panel-default">
                                            <a class="panel-head">
                                                Daimler Trucks Huntingwood Mercedes-Benz Contact Details <i class="fa fa-angle-up"></i>
                                            </a>
                                            <div class="panel-body menu-mobile-close" style="display:none;">
                                                <div class="location-details">
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Address</label>
                                                        <div class="text">20 Ashford Ave, Huntingwood, NSW 2214
                                                        </div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Phone</label>
                                                        <div class="text">
                                                            <a class="no-style-inherit" href="tel:0297748585">(02) 9774 8585</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">After Hours</label>
                                                        <div class="text"><a class="no-style-inherit" href="tel:0297748585">0438 474 514</a></div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Fax</label>
                                                        <div class="text"><span class="no-style-inherit">(02) 9774 2379</span></div>
                                                    </div>
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Email</label>
                                                        <div class="text"><a class="no-style-inherit EBG13 ROT13" rel="nofollow" href="mailto:service@stillwelltrucks.com.au">service@stillwelltrucks.com.au</a></div>
                                                    </div>
                                                    <div class="mapper mb-2">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                                                        <a data-address="20 Ashford Ave, Huntingwood, NSW 2214" data-ga-direction="" class="btn btn-red-small mt-3" href="http://maps.google.com/maps?saddr=Current%20Location&amp;daddr=20+Ashford+Ave%2C+Milperra%2C+NSW+2214+Australia" target="_blank">Get Directions</a>
                                                        <a data-address="20 Ashford Ave, Huntingwood, NSW 2214" data-ga-map="" class="btn btn-red-small mt-3" href="http://maps.google.com/maps?q=20+Ashford+Ave%2C+Milperra%2C+NSW+2214+Australia" target="_blank">View On Map</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <a class="panel-head">
                                                Service Operating Hours <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="panel-body menu-mobile-close">
                                                <div class="location-details">
                                                    <div class="form-group border-bottom">
                                                        <label class="font-weight-bold">Monday - Friday</label>
                                                        <div class="text">7:30am - 5:00pm</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Saturday</label>
                                                        <div class="text">7:00am - 12:00pm</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
				                </div>
                                <div class="col-lg-5 col-md-12">
                                    <form action="/service" method="post">
                                        @csrf
                                        <div class="form-details">
                                            <h2 class="form-head">Service Enquiry & Booking Form</h2>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-12">
                                                    <h5 class="form-title">Your Contact Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="title">Title <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <select id="title" name="title">
                                                            <option value="" @if (old('title') == '') selected="selected" @endif>Please Select</option>
                                                            <option value="Mr" @if (old('title') == 'Mr') selected="selected" @endif>Mr</option>
                                                            <option value="Miss" @if (old('title') == 'Miss') selected="selected" @endif>Miss</option>
                                                            <option value="Mrs"@if (old('title') == 'Mrs') selected="selected" @endif>Mrs</option>
                                                            <option value="Ms"@if (old('title') == 'Ms') selected="selected" @endif>Ms</option>
                                                            <option value="Other"@if (old('title') == 'Other') selected="selected" @endif>Other</option>
                                                        </select>
                                                        <span class="error">@error('title'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="firstName">First Name <em class="required">*</em></label>  
                                                        <div class="col-md-8 form-group">    
                                                        <input name="firstName" type="text" id="firstName" placeholder="First Name" value="{{ Request::old('firstName') }}">
                                                        <span class="error">@error('firstName'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="lastName">Last Name <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="lastName" type="text" id="lastName" placeholder="Last Name" value="{{Request::old('lastName') }}">
                                                        <span class="error">@error('lastName'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="email">Email <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="email" type="text" id="email" placeholder="Email Address" value="{{Request::old('email') }}">
                                                        <span class="error">@error('email'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="phone">Phone <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="phone" type="text" id="phone" placeholder="Phone Number" value="{{Request::old('phone') }}">
                                                        <span class="error">@error('phone'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="form-title">Your Address Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="address">Address <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="address" type="text" id="address" placeholder="Address" value="{{Request::old('address') }}">
                                                        <span class="error">@error('address'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="suburb">Suburb <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="suburb" type="text" id="suburb" placeholder="Suburb" value="{{Request::old('suburb') }}">
                                                        <span class="error">@error('suburb'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="state">State <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <select id="state" name="state">
                                                            <option value="" @if (old('state') == '') selected="selected" @endif>Please Select</option>
                                                            <option value="ACT" @if (old('state') == 'ACT') selected="selected" @endif>ACT</option>
                                                            <option value="NSW" @if (old('state') == 'NSW') selected="selected" @endif>NSW</option>
                                                            <option value="NT"@if (old('state') == 'NT') selected="selected" @endif>NT</option>
                                                            <option value="SA"@if (old('state') == 'SA') selected="selected" @endif>SA</option>
                                                            <option value="TAS"@if (old('state') == 'TAS') selected="selected" @endif>TAS</option>
                                                        </select>
                                                        <span class="error">@error('state'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="postcode">Postcode <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="postcode" type="text" id="postcode" placeholder="Postcode" value="{{Request::old('postcode') }}">
                                                        <span class="error">@error('postcode'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="form-title">Vehicle Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="registration">Registration <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="registration" type="text" id="registration" placeholder="Registration" value="{{Request::old('registration') }}">
                                                        <span class="error">@error('registration'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="chassisno">VIN/Chassis # <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="chassisno" type="text" id="chassisno" placeholder="VIN/#" value="{{Request::old('chassisno') }}">
                                                        <span class="error">@error('chassisno'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="year">Year </label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="year" type="text" id="year" placeholder="Year" value="{{Request::old('year') }}">
                                                        <span class="error">@error('year'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="odometer">Odometer</label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="odometer" type="text" id="odometer" placeholder="Odometer">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="make">Vehicle Make </label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="make" type="text" id="make" placeholder="Make">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="model">Vehicle Model </label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="model" type="text" id="model" placeholder="Model">
                                                        </div>
                                                    </div>
                                                    <div class="custom-checkbox form-group">
                                                        <label for="newtrucks" class="checkbox-custom full-width">
                                                        Yes, my vehicle has been serviced at your dealership previously.
                                                            <input type="checkbox" id="newtrucks" name="newtrucks" value="new-trucks" class="truck-condition"> 
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-12">
                                                    <h5 class="form-title">Preferred Booking Details</h5>
                                                    <div class="row">
                                                        <label class="col-md-4" for="rego">Preferred Drop Off Date <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_drop_off_date" type="text" id="rego" placeholder="Rego number" value="{{Request::old('preferred_drop_off_date') }}">
                                                        <span class="error">@error('preferred_drop_off_date'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="year">Preferred Drop Off Time <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_drop_off_time" type="text" id="year" placeholder="Vehicle Year" value="{{Request::old('preferred_drop_off_time') }}">
                                                        <span class="error">@error('preferred_drop_off_time'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="model">Preferred Pick Up Date <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_pick_up_date" type="text" id="year" placeholder="Modal name" value="{{Request::old('preferred_pick_up_date') }}">
                                                        <span class="error">@error('preferred_pick_up_date'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-md-4" for="make">Preferred Pick Up Time <em class="required">*</em></label>
                                                        <div class="col-md-8 form-group">
                                                        <input name="preferred_pick_up_time" type="text" id="make" placeholder="Vehicle Make" value="{{Request::old('preferred_pick_up_time') }}">
                                                        <span class="error">@error('preferred_pick_up_time'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="custom-checkbox form-group">
                                                        <label for="newtrucks" class="checkbox-custom full-width">
                                                        Yes, I would like to subscribe to receive the latest offers & product updates.
                                                            <input type="checkbox" id="newtrucks" name="newtrucks" value="new-trucks" class="truck-condition"> 
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="custom-checkbox form-group">
                                                        <label for="terms" class="checkbox-custom full-width">
                                                            I agree with the website <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank">terms of use</a> and that my information will be handled by Daimler Trucks Huntingwood in accordance with the <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank">Dealer Privacy Policy</a>.<em class="required">*</em>
                                                            <input type="checkbox" id="terms" name="terms" value="new-trucks" class="truck-condition"> 
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <span class="error">@error('terms'){{$message}}@enderror</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="full-width">Work required/Comments (maximum 1000 characters) </label>
                                                        <textarea name="detail" type="text" id="detail" rows="2" cols="30"></textarea>
                                                        <span class="error">@error('detail'){{$message}}@enderror</span>           
                                                    </div>
                                                    <div class="btn-groups mt-2">
                                                        <input type="hidden" name="type" value="service" >
                                                        <input type="submit" class="btn btn-red-small mt-0" value="Submit Enquiry"/>
                                                        <p class="mb-0"><em class="required">*</em> indicates a required field.</p>
                                                        <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank" class="d-block mb-1">Click to view Privacy Policy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 