
@extends('layouts.app1')
@section('title') Truck Finance Melbourne | Get Finance For Trucks VIC @stop
@section('meta_title') Truck Finance Melbourne | Get Finance For Trucks VIC @stop
@section('meta_keywords') Finance - Daimler Trucks Laverton @stop
@section('meta_description') Daimler Trucks Laverton is proud to offer competitive and flexible financial loans. Our on-site Business Manager makes it convenient and easy to discuss a range of finance packages available. @stop
@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Finance</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="finance-page page-multi mt-5">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success"> {{ session()->get('message') }} </div> 
            @endif
            <div class="content para">
                <div class="row mb-4">
                    <div class="col-md-12 form-group">
                        <p>Daimler Trucks Laverton is proud to offer competitive and flexible financial loans. Our on-site Business Manager makes it convenient and easy to discuss a range of finance packages available.</p>
                        <ul>
                            <li>Immediate finance that can be organised onsite to approved customers, saving you valuable time.</li>
                            <li>Competitive finance rates we can negotiate better rates of finance than might be available from any banks.</li>
                            <li>Flexible payment plans tailored to suit your individual needs and budget.</li>
                            <li>No deposit required not all loans require a lump sum payment.</li>
                            <li>Obligation free quotes detailing our low finance rates and summarising the range of payment options available.</li>
                        </ul>
                    </div>
                </div>
                <h4>Finance Lease</h4>
                <p>A finance lease is a rental agreement offering fixed monthly repayments for the period of the contract, with a residual value negotiated at the beginning of the loan term.</p>
                <p><strong>Benefits:</strong></p>
                <ul>
                    <li>Immediate use of the vehicle with low outlay</li>
                    <li>Fixed monthly repayments make it easier to track expenses</li>
                    <li>At the end of the term, you can offer to purchase, re-lease or upgrade to a new vehicle</li>
                </ul>
                <h4>Operating Lease</h4>
                <p>An Operating Lease enables you to manage the vehicle without having to purchase it outright., you simply return your truck to Mercedes-Benz Financial on expiry of the lease. It is suitable for businesses or individuals who regularly upgrade their vehicle. The operating lease includes finance costs, finance contract stamp duty, and pre-delivery costs.</p><p><strong>Benefits:</strong></p><ul><li>Flexible terms of 24-60 months with the flexibility of choosing your annual kilometers</li><li>Competitive monthly rentals the may be fully tax deductible (check with your dealer)</li><li>This setup removes the financial liability with the vehicles value at the end of the lease term</li></ul>
                <h4>Hire Pruchase</h4>
                <p>Designed for business customers who want to own their vehicle at the end of the contract. This is available for both New and Used vehicles.</p><p><strong>Benefits:</strong></p><ul><li>Vehicle ownership at the end of the contract</li><li>Little or no deposit required</li><li>Optional final balloon payment to reduce monthly repayments</li><li>Flexibility to vary contract term</li><li>May offer tax benefits (seek independent advice on your situation)</li></ul>
                <h4>Asset Loan</h4>
                <p>A Chattel Mortgage, commonly referred to as an Asset Loan, is where the vehicle ownership is transferred to you at the end of the finance contract. It is available for individuals, sole traders, partnerships and companies where ownership of the vehicle at the start of the finance agreement is important.</p><p><strong>Benefits:</strong></p><ul><li>Reduced monthly payments by varying the deposit</li><li>Optional final balloon payment</li><li>Final balloon payment may be refinance</li><li>Available for both new and used vehicles</li></ul>
                <p>Please feel free to use our online form to get a quick and accurate response on financing your next truck.</p>
                <p>Our Business Manager has a great knowledge of all the above products and is available to discuss your business and personal finance needs.</p>
            </div>
            @include('partials.location_details')
        </div>
    </div>
</section>
<a class="vtc-fixed-contact-us user-agent-ua-contact-us" href="/contact-us#finance_tab_id">Contact Us</a>
@endsection