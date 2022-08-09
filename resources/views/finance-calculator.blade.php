@extends('layouts.app')

@section('content')
<section class="middle-section">
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="financecalc-page page-multi">
            <h1 class="page-title">Finance Calculator</h1>
            <div class="enquiry-form-toggle finance-calculator mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="finance-required">
                            <h4>Loan Details</h4>
                            <label>Finance Required</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">$</span>
                                </div>
                                <input name="finance_required" type="text" class="form-control" placeholder="25000" aria-label="Finance Required" aria-describedby="basic-addon1">
                            </div>
                            <div id="finance_range" class="red"></div>
                            <label>Total Amount Financed</label> <br/>
                            <span class="total-financed input-amount">61,000</span><br/>
                            <label>Loan Term</label><br/>
                            <span name="loan_tearm" class="loan-terms input-amount"><span id="budget_amount" class="">5</span> years</span>
                            <div id="loanterm_range" class="red"></div>
                            <label>Interest Rate p.a.(current) : 10%</label><br/>
                            <div class="input-group mb-3">
                                <input name="interest_rate" type="text" id="budget_amount" class="form-control text-right" aria-label="Recipient's username" aria-describedby="basic-addon2" value="10">
                                <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">%</span>
                                </div>
                            </div>
                            <div id="financeint_range" class="red"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="repayment-options">
                            <h4>Repayment Details</h4>
                            <label class="mb-2">Payment Frequency</label>
                            <div class="row">
                                <div class="col-4 pr-0">
                                    <input type="radio" id="weekly" class="d-none" name="frequencyGroup" checked>
                                    <label for="weekly" class="payment-labels">Weekly</label>
                                </div>
                                <div class="col-4 pr-0">
                                    <input type="radio" id="fortnightly" class="d-none" name="frequencyGroup">
                                    <label for="fortnightly" class="payment-labels">Fortnightly</label>
                                </div>
                                <div class="col-4">
                                    <input type="radio" id="monthly" class="d-none" name="frequencyGroup">
                                    <label for="monthly" class="payment-labels">Monthly</label>
                                </div>
                            </div>
                            <label class="">Your estimated Weekly Repayment is</label><br/>
                            <span class="input-amount">$122.28</span><br/>
                            <div class="loan-details mt-2">
                                <div class="mb-2">Details of your loan over time</div>
                                <div><label class="m-0">Balance</label><span class="pull-right">$31,792</span></div>
                                <div><label class="m-0">Principal</label><span class="pull-right">$31,792</span></div>
                                <div><label class="m-0">Interest</label><span class="pull-right">$31,792</span></div>
                                <div><label class="m-0">0% of your truck owned</label></div>
                                <canvas options="chart.options" data="chart.data" width="85" height="85" style="margin: 5px 0px 10px; width: 85px; height: 85px;"></canvas>
                                <label class="mt-4 mb-2 d-block">Years Elapsed</label>
                                <div id="yearselapsed_range" class="red year-elapsed"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="get-quote">
                            <form action="/finance-calculator" method="post">
                            @csrf
                                <h4>Get a Quote</h4>
                                <div class="form-group">
                                    <label>First Name <em>*</em></label>
                                    <input name="firstName" type="text" value="{{ Request::old('firstName') }}"/>
                                    <span class="error">@error('firstName'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Last Name <em>*</em></label>
                                    <input name="lastName" type="text" value="{{ Request::old('lastName') }}"/>
                                    <span class="error">@error('lastName'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Email <em>*</em></label>
                                    <input name="email" type="text" value="{{ Request::old('email') }}"/>
                                    <span class="error">@error('email'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Phone <em>*</em></label>
                                    <input name="phone" type="text" value="{{ Request::old('phone') }}"/>
                                    <span class="error">@error('phone'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Post Code <em>*</em></label>
                                    <input name="post_code" type="text" value="{{ Request::old('post_code') }}"/>
                                    <span class="error">@error('post_code'){{$message}}@enderror</span>
                                </div>
                            
                            <div class="loan-details mt-2">
                                <div class="mb-2">Loan Estimate</div>
                                <div><label class="m-0">Amount</label><span class="pull-right">25,000</span></div>
                                <div><label class="m-0">Term</label><span class="pull-right">5 years</span></div>
                                <div><label class="m-0">Interest Rate</label><span class="pull-right">10%</span></div>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0"><em class="required">*</em> indicates required field.</p>
                                <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="blank" class="d-block mb-1">Click to view Privacy Policy</a>
                                <input type="submit" class="btn btn-red-small mt-0"/>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footnote">
                    Disclaimer: This calculator is a tool for indicative use only. No result from the use of the calculator should be considered a loan application or an offer of a loan. The calculator does not take into account your personal circumstances. All interest rates displayed are guides only. Repayments as a result of this simulation can vary based on your personal circumstances including your credit worthiness. Other assumptions can apply. You should discuss your circumstances with our finance professionals or through your own independent sources.
                </div>
            </div>
            <!-- <div class="truck-location">
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
            </div> -->
            @include('partials.location_details')
        </div>
    </div>
</section>
@endsection