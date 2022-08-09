
@extends('layouts.app')

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
                <p>Maintain your financial flexibility.</p>
                <p>Talk to most finance companies about your needs and you'll probably have to spell it out for them. But as part of the Daimler Group, Mercedes-Benz Financial has a long history in the commercial vehicle industry - which means we know Mercedes-Benz trucks and the pressures truck owners face.</p>
                <p>Mercedes-Benz Financial specialises in innovative financial solutions for Mercedes-Benz trucks. Our extensive knowledge of the truck market means that you'll receive a financial solution that suits you and your business.</p>
                <p>Financial advantages for you:</p>
                <ul>
                    <li>Flexible terms: 12 - 60 months</li>
                    <li>Fixed interest rates</li>
                    <li>No ongoing monthly fees</li>
                    <li>Structured payments: We can tailor repayments to suit your cash flow</li>
                    <li>Mercedes-Benz Financial specialises in providing innovative finance solutions for Mercedes-Benz trucks, offering some of the most flexible and competitive solutions available.</li>
                </ul>
                <p>Our wide range of finance solutions include:</p>
                <ul>
                    <li>Asset hire purchase</li>
                    <li>Asset loan</li>
                    <li>Finance lease</li>
                    <li>Operating lease</li>
                    <li>Agility Programme</li>
                </ul>
                <p>Agility Programme</p>
                <p>The Mercedes-Benz Agility Finance Programme is designed to provide exceptional flexibility and peace of mind. So from the start of your journey with us, you'll remain firmly and comfortably in the driver's seat of the financial arrangement you choose for your new Mercedes-Benz truck.</p>
                <p>Best of all, Agility allows us to guarantee the future value of your truck+. This means when your agreement comes to an end you have the option to trade, retain or return your truck. Plus with flexible terms, competitive rates and the assurance and backing of the Mercedes-Benz brand, it's one of the simplest financing decisions you'll ever make.</p>
                <p>The benefits of Agility:</p>
                <ul>
                    <li>Enjoy peace of mind with the future value of your truck guaranteed by Mercedes-Benz.+</li>
                    <li>Stay in control with the flexibility to trade, retain or return at the end of the agreement.*</li>
                    <li>Benefit from the ability to increase your deposit or trade-in to reduce monthly repayments.</li>
                    <li>Available on an Asset Loan or Hire Purchase.*</li>
                </ul>
                <p>+ Guaranteed Future Value (GFV) is subject to Excess Kilometre charges calculated at $0.15/kilometre in excess of the agreed annual allowance. Fair Wear and Tear return conditions apply. * Agility Finance is restricted to approved customers of Mercedes-Benz Financial Services Australia Pty Ltd ABN 73 074 134 517 (MBFS), and is subject to standard credit assessment and lending criteria. Please contact an authorised Mercedes-Benz dealer for further details and full terms and conditions (including vehicle eligibility).</p>
                <p>Other Mercedes-Benz Financial Services Australia Pty Ltd brands include:</p>
                <ul>
                    <li>Mercedes-Benz Vans</li>
                    <li>Freightliner Finance</li>
                    <li>Fuso Financial</li>
                </ul>
            </div>
            @include('partials.location_details')
        </div>
    </div>
</section>
<a class="vtc-fixed-contact-us user-agent-ua-contact-us" href="/contact-us#finance_tab_id">Contact Us</a>
@endsection