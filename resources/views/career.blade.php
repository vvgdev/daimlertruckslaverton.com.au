@extends('layouts.app')

@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Careers</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="career-page page-multi mt-5">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success"> {{ session()->get('message') }} </div> 
            @endif
            <!-- <h1 class="page-title">Careers</h1> -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <iframe scrolling="yes" marginheight="0" marginwidth="0" src="https://jobs.jobvite.com/velocitytruckcentres" width="100%" height="1500" frameborder="0"></iframe>
                    <!-- <div class="content mb-4 para">
                        <p>With a company as dynamic as <strong>Daimler Trucks Huntingwood</strong>, there is a wide range of Departments, offering a variety of job opportunities.</p>
                        <p>Whether you’re a Manager, a talented sales person or passionate mechanic, there are career opportunities for you at Daimler Trucks Huntingwood.</p>
                        <p>We offer a great working environment and the chance for you to realise your dreams whilst helping us to reach our ambitious goals.</p>
                        <p>To find out more about joining a company that will assist you to develop and further your career in the automotive industry please contact us.</p>
                    </div> -->
                    {{--@include('partials.location_details')--}}
                </div>
                <!-- <div class="col-lg-5 col-md-12">
                    <form action="/career" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-details">
                            <h2 class="form-head">Enquiry Form</h2>
                            <div class="information">The size of each attached file must be less than <strong>2MB's</strong>. Files with the following extensions can be uploaded: <strong>.PDF</strong>, <strong>.DOC</strong>, <strong>.DOCX</strong> and <strong>.TXT</strong></div>
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
                                            <input name="lastName" type="text" id="lastName" placeholder="Last Name" value="{{ Request::old('lastName') }}">
                                            <span class="error">@error('lastName'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4" for="email">Email <em class="required">*</em></label>
                                        <div class="col-md-8 form-group">
                                            <input name="email" type="text" id="email" placeholder="Email Address" value="{{ Request::old('email') }}">
                                            <span class="error">@error('email'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4" for="phone">Phone <em class="required">*</em></label>
                                        <div class="col-md-8 form-group">
                                            <input name="phone" type="text" id="phone" placeholder="Phone Number" value="{{ Request::old('phone') }}">
                                            <span class="error">@error('phone'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12">
                                    <h5 class="form-title">Application Details</h5>
                                    <div class="row">
                                        <label class="col-md-4" for="position">Position </label>
                                        <div class="col-md-8 form-group">
                                            <input name="position" type="text" id="position" placeholder="Position" value="{{ Request::old('position') }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4" for="resume"> Resume </label>
                                        <div class="col-md-8 form-group">
                                            <input type="file" id="resume" name="resume" class="w-100">
                                            <span class="error">@error('resume')Only .pdf,.doc,.docx,.txt allowed.@enderror</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4" for="cover_letter">Cover Letter </label>
                                        <div class="col-md-8 form-group">
                                            <input type="file" id="cover_letter" name="cover_letter" class="w-100">
                                            <span class="error">@error('cover_letter')Only .pdf,.doc,.docx,.txt allowed.@enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12">
                                    <h5 class="form-title">Additional Information</h5>
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
                                            <input type="checkbox" id="terms" name="terms" :value=true class="truck-condition"> 
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="error">@error('terms'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail" class="full-width">Comments (maximum 1000 characters) </label>
                                        <textarea name="detail" type="text" id="detail" rows="2" cols="30"></textarea>
                                        <span class="error">@error('detail'){{$message}}@enderror</span>
                                    </div>
                                    <div class="btn-groups mt-5">
                                        <input type="hidden" name="type" value="career" >
                                        <input type="submit" class="btn btn-red-small mt-0" value="Submit Enquiry"/>
                                        <p class="mb-0"><em class="required">*</em> indicates a required field.</p>
                                        <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank" class="d-block mb-1">Click to view Privacy Policy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>     -->
            </div>
        </div>
    </div>
</section>
@endsection