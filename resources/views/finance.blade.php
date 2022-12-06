
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
                <h2 class="title">VELOCITY TRUCK CENTRES’ FINANCE OPTIONS</h2>
                <p>
                    <strong class="bold">We are proud to offer competitive and flexible financial solutions, via our on-site Business Manager, who will make it convenient and easy to review your options.</strong>
                </p>
                <ul class="listings">
                    <li>Immediate finance that can be organised onsite to approved customers, saving you valuable time.</li>
                    <li>Flexible payment plans tailored to suit your individual needs and budget.</li>
                    <li>No deposit options available</li>
                    <li>Daimler Truck Financial Services Fast Track Finance and Guaranteed Buy Back</li>
                </ul>
                <h3>DAIMLER TRUCK FINANCIAL</h3>
                <p>No financier understands your business better than Daimler Truck Financial.</p>
                <p>As the dedicated finance provider for Daimler Truck Australia, our priority is financing Mercedes-Benz, Freightliner and Fuso trucks.</p>
                <p>Our extensive experience and knowledge in the commercial vehicle industry, combined with our position as an exclusive commercial finance provider, make Daimler Truck Financial the smart choice for anyone looking to run their business more efficiently and profitably.</p>
                <p>Choose from a wide variety of financial products tailored to your business requirements.</p>
                <h3>FINANCIAL SOLUTIONS AT A GLANCE</h3>
                <p>All our financial products are designed for business customers</p>
                <p><strong class="bold">Asset Loan</strong><br/>
                    An Asset Loan is an instalment plan where customers gain immediate ownership and mortgage the vehicle to Daimler Truck Financial.
                </p>
                <p><strong class="bold">Asset-Hire Purchase</strong><br/>
                    Designed for customers who ultimately want to own their truck at the end of the term.
                </p>
                <p><strong class="bold">Operating Lease</strong><br/>
                    An Operating Lease covers the costs of acquiring and financing your truck. On expiry of the lease you can simply return your truck to Daimler Truck Financial
                </p>
                <p><strong class="bold">Finance Lease</strong><br/>
                    A Finance Lease is a rental agreement offering fixed monthly repayments for the period of the contract, with the addition of a residual value negotiated at the start of the term.
                </p>
                <h3>DAIMLER GUARANTEED BUY BACK</h3>
                <p>Introducing a finance solution that lets you take advantage of flexible terms, competitive rates and best of all, a Guaranteed Buy Back. Meaning when your contract comes to an end, you have one of the following three options;</p>
                <p><strong class="bold">TRADE* <br/>Always want the latest model?</strong><br/>
                    By choosing to trade, this gives you the ability to upgrade your current truck for a new one and always have the latest in technology, safety and efficiency.
                </p>
                <p><strong class="bold">RETAIN* <br/>Wish to hand back your truck?</strong><br/>
                    By choosing the return option, simply hand back the truck and walk away, subject to the truck meeting the Fair Wear & Tear conditions.
                </p>
                <h3>FAST TRACK FINANCE</h3>
                <p>Hassle free, fast finance up to $400,000.<br/>
                    The Fast Track finance program for business customers gives you the convenience of a streamlined credit approval process with no need for income verification. As a specialised truck financier, Daimler Truck Financial Services makes it easier and faster for you to obtain credit on your Mercedes-Benz, Freightliner or Fuso truck - for up to $400,000.
                </p>
                <p class="mt-4">
                    <strong class="bold">Contact us for further details and vehicle eligibility via our <a href="/contactus#finance_tab_id" style="color: #007bff;">online form</a>.</strong>
                </p>
                <h3 class="mt-5">DISCLAIMER:</h3>
                <p>
                    <small>Daimler Truck Financial is a registered business name of Daimler Truck Financial Services Australia Pty Ltd ABN 23 651 056 825 (DTFSAu).</small>
                </p>
                <p>
                    <small>DTFSAu offers finance products for new and used (up to 8 years of age) trucks and buses to approved business customers. Vehicle eligibility applies. All finance products offered subject to terms and conditions and standard credit assessment, lending criteria and fees. DTFSAu makes no representation as to the effect of any financial product on your personal or company tax arrangements. DTFSAu recommends you seek independent financial and taxation advice before entering into any finance agreement.</small>
                </p>
                <p>
                    <small>Daimler Guaranteed Buy Back only available on Asset or Hire Purchase Loans (excluding leasing products) and is subject to vehicle eligibility. Fees and charges of up to $1,440 may apply. Any variation of the underlying loan shall terminate the repurchase agreement and your right thereunder with respect to the Daimler Guaranteed Buy Back *. *Daimler Guaranteed Buy Back is subject to Fair Wear & Tear return conditions & Excess Kilometre charges calculated at $0.15/km in excess of the agreed annual allowance.</small>
                </p>
                <p>
                    <small>Fast Track is restricted to approved business customers financing a new Mercedes-Benz, Freightliner or Fuso truck with DTFSAu who hold a current membership with a professional association recognised by DTFSAu. Approval for existing customers subject to existing customer’s current finance with DTFSAu.</small>
                </p>
                <p>
                    <small>Contact us for further details and vehicle eligibility via our <a href="/contactus#finance_tab_id">online form</a>.</small>
                </p>
            </div>
            @include('partials.location_details')
        </div>
    </div>
</section>
<a class="vtc-fixed-contact-us user-agent-ua-contact-us" href="/contact-us#finance_tab_id">Contact Us</a>
@endsection