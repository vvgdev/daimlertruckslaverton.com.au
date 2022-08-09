@extends('layouts.app')

@section('content')

<section class="middle-section">
    <div class="customer-amenities page-multi">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success"> {{ session()->get('message') }} </div> 
            @endif
            <h1 class="page-title">Customer Amenities</h1>
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <p class="font-semibold">At Daimler Trucks Huntingwood we know your time is important, so we want to help you make the most of it.</p>
                    <p class="font-semibold">For your comfort and convenience, we have the following available to all our customers at all times, free of charge:</p>
                    <ul>
                        <li>Free Wi-Fi  </li>
                        <li>Comfortable semi -private waiting area</li>
                        <li>Complimentary refreshments and snacks</li>
                        <li>TV Entertainment/ Magazines</li>
                        <li>Shuttle service - this can be arranged subject to availability and scheduling. Please contact us prior if you do require our shuttle service</li>
                        <li>Our 'Customer Amenities' book is located in the customer waiting area with relevant local information should you require an overnight stay, local restaurants or transport options. Please ask us if you require any further information about the area.</li>
                    </ul>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6 form-group">
                            <img src="https://www.velocitytruckcentres.com.au/storage/app/media/customer-amenities-01.jpeg"/>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <img src="https://www.velocitytruckcentres.com.au/storage/app/media/customer-amenities-02.jpeg"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <form action="/contact-us" method="post">
                    @csrf
                    <div class="form-details">
                        <h2 class="form-head">Contact us via email</h2>
                        <p>If there is anything else we can do to make your visit more enjoyable, please contact us via the below contact form or speak to one of our friendly team members during your visit.</p>
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <!-- <h5 class="form-title">Your Contact Details</h5> -->
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
                                        <input name="lastName" type="text" id="lastName" placeholder="Last Name" value="{{ Request::old('lastName') }}">
                                        <span class="error">@error('lastName'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4" for="email">Email Address<em class="required">*</em></label>
                                    <div class="col-md-8 form-group">
                                        <input name="email" type="text" id="email" placeholder="Email Address" value="{{ Request::old('email') }}">
                                        <span class="error">@error('email'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4" for="phone">Contact Number <em class="required">*</em></label>
                                    <div class="col-md-8 form-group">
                                        <input name="phone" type="text" id="phone" placeholder="Contact Number" value="{{ Request::old('phone') }}">
                                        <span class="error">@error('phone'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4" for="phone">Postcode <em class="required">*</em></label>
                                    <div class="col-md-8 form-group">
                                        <input name="postcode" type="text" id="postcode" placeholder="Postcode" value="{{ Request::old('postcode') }}">
                                        <span class="error">@error('postcode'){{$message}}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <!-- <h5 class="form-title">Additional Information</h5>
                                <div class="custom-checkbox form-group">
                                    <label for="newtrucks" class="checkbox-custom full-width">
                                        Yes, I would like to subscribe to receive latest offers & product updates.
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
                                </div> -->
                                <div class="contact-text">
                                    <h5>Privacy</h5>
                                    <p>At Daimler Truck and Bus Australia Pacific Pty Ltd (A member of the Daimler Group) we share your concerns regarding privacy and data security. When you provide us with your personal details, we will only disclose such details with companies associated with the Daimler Group, our authorised dealer network and/or third party service providers who are acting on our behalf. You can either view our policy statement at www.daimlertrucks.com.au or by contacting our Data Protection Officer at 44 Lexia Place, Mulgrave, Victoria 3170.</p>
                                </div>
                                <div class="contact-text">
                                    <h5>Future Communications</h5>
                                    <p>In addition to the purpose of my enquiry, I provide my consent for DTBAUP and the companies associated with the Daimler Group, authorised dealer network and third parties service providers to contact me for direct marketing purposes, including but not limited to newsletters, event notifications, invitations, updates and special offers from time to time.</p>
                                    <p>In relation to this, please communicate with me via:</p>
                                </div>
                                <div class="mb-3">
                                    <div class="custom-checkbox">
                                        <label for="standardMail" class="checkbox-custom full-width">
                                            Standard Mail
                                            <input type="checkbox" id="standardMail" name="standardMail" value=""> 
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label for="comPhone" class="checkbox-custom full-width">
                                            Phone
                                            <input type="checkbox" id="comPhone" name="comPhone" value=""> 
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label for="comEmail" class="checkbox-custom full-width">
                                            Email
                                            <input type="checkbox" id="comEmail" name="comEmail" value=""> 
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <label for="comSMS" class="checkbox-custom full-width">
                                            SMS/MMS/IM
                                            <input type="checkbox" id="comSMS" name="comSMS" value=""> 
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="detail" class="full-width">Enquiry (maximum 1000 characters) </label>
                                    <textarea name="detail" type="text" id="detail" rows="2" cols="30"></textarea>
                                    <span class="error">@error('detail'){{$message}}@enderror</span>
                                </div>
                                <div class="btn-groups mt-5">
                                    <input type="submit" class="btn btn-red-small mt-0" value="Submit Enquiry"/>
                                    <input type="hidden" name="type" value="contactus" >
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
        <div class="location-map mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="400" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
</section>

@endsection