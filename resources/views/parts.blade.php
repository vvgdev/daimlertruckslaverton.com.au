@extends('layouts.app')

@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Parts</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="parts-page page-multi mt-5">
            <div class="specification-tabs">
                <div class="responsive custom-scrollbar">
                    <ul class="nav nav-pills">
                        <li class="tab-title" id="benz_desc">
                            <a href="#benz_tab" data-toggle="tab" aria-expanded="true" class="active">
                            <i class="dtm-mercedes-logo"></i>Mercedes Benz</a>
                        </li>
                        <li class="tab-title" id="freightliner_desc">
                            <a href="#freightliner_tab" data-toggle="tab" aria-expanded="false" class="">
                            <i class="dtm-icon-gallery-truck"></i> Freightliner</a>
                        </li>
                        <li class="tab-title" id="fuso_desc">
                            <a href="#fuso_tab" data-toggle="tab" aria-expanded="false" class="">
                            Fuso</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="benz_tab">
                        <h3 class="page-heading mb-4">Mercedes-Benz Truck Parts North Melbourne | Truck Parts Melbourne, VIC</h3>
                        <div class="content para">
                        <p>Always insist on Mercedes-Benz Genuine Parts.</p>
                        <p>Accept no compromise when it comes to maintaining, servicing and caring for your Mercedes-Benz Truck.</p>
                        <p>Once you experience Mercedes-Benz quality, nothing else compares. That’s why every time you have your vehicle serviced or repaired we strongly recommend that you insist on using our Genuine Parts.</p>
                        <p><strong>Daimler Trucks Somerton Mercedes-Benz's</strong> qualified after sales personnel have the latest tools and equipment at their disposal to ensure they obtain the right part for the job, and that it will be fitted correctly.</p>
                        <p>With Mercedes-Benz Genuine Parts you benefit from more than one hundred years’ experience in vehicle and parts construction. Thanks to their exceptional quality, approved safety and outstanding reliability, these parts are a compelling proposition. What is more, the extreme durability and outstanding price/performance ratio of our Genuine Parts is particularly cost-effective.</p>
                        <p><strong>GENUINE ACCESSORIES</strong></p>
                        <p>Mercedes-Benz genuine accessories offer a range of exclusive products that deliver custom-fit Mercedes-Benz quality, improving everyday practicality and comfort. All have been carefully selected so you can add your own finishing touches to help you get the very best from your Truck.</p>
                        <p>Please call us directly or simply complete the online Spare<strong> Parts Enquiry Form</strong> and we'll contact you as soon as possible.</p>
                        </div>
                    </div>
                    <div class="tab-pane" id="freightliner_tab">
                        <h3 class="page-heading mb-4">Freightliner Truck Parts North Melbourne | Truck Parts Melbourne, VIC</h3>
                        <div class="content para">
                        <p>It only takes one small thing to go wrong to have a big impact on your business. When you need new parts for your Freightliner truck, always insist on Genuine Freightliner Parts to keep your truck running as efficiently and smoothly as it did the day it left the factory.</p>
                        <p>These parts are made specifically to fit your truck model and application needs, using only the highest quality materials and latest design and engineering enhancements. Thanks to <strong>Daimler Trucks Somerton Freightliner</strong> using Genuine Freightliner Parts, every part of your truck remains a genuine Freightliner for years to come.</p>
                        <p><strong>Why buy Genuine Freightliner Parts?</strong></p>
                        <ul><li>Ensure durable and reliable repairs, since Genuine Parts are made from the highest quality materials with specialised coatings and treatments.</li><li>Maintain the resale value of your truck by keeping it a "Genuine Freightliner".</li><li>Improve uptime by ensuring quality repairs are performed by factory-trained experts that get the job done right, the first time.</li><li>Provide optimal performance, as Genuine Freightliner Parts are made specifically to fit each individual truck and application. There is no "one size fits all" solution with Genuine Parts.</li><li>Receive the latest proprietary updates and revisions from Freightliner, a level of service that our competitors simply cannot match.</li></ul>
                        <p><strong><em>ACCEPT NO COMPROMISE WHEN IT COMES TO MAINTAINING, SERVICING, AND CARING FOR YOUR FREIGHTLINER TRUCK.</em></strong></p>
                        <p>Please call us directly or simply complete the online <strong>Spare Parts Enquiry Form</strong> and we'll contact you as soon as possible.</p>
                        <a class="btn btn-red-small mt-3" href="/pdf/FTL_Parts_Perfect_Fit_Campaign_Q2-DL_6PP-Proof10.pdf" target="_blank">Download Brochure</a>
                        <a class="btn btn-red-small mt-3" href="/pdf/51574_daimlertrucksstillwell-partsspecial-06-03-20-mj.pdf" target="_blank">Parts Central Magazine</a>
                        <br/>
                        <a class="btn btn-red-small mt-3" href="/pdf/57757_cascadia-accessories-brochure-oct20.pdf" target="_blank">Cascadia Parts Brochure</a>
                        </div>
                    </div>
                    <div class="tab-pane" id="fuso_tab">
                    <h3 class="page-heading mb-4">Fuso Truck Parts North Melbourne | Truck Parts Melbourne, VIC</h3>
                        <div class="content para">
                            <p><strong>Daimler Trucks Somerton Fuso</strong> stocks every spare part you will ever need for your Truck or Bus.</p>
                            <h3>Daimler Trucks Somerton Fuso Genuine Parts</h3>
                            <p>It only takes one small thing to go wrong to have a big impact on your business. Fuso genuine parts are designed to meet manufacturer specifications and are produced to the highest quality. Avoid the risk and insist on Fuso genuine parts to ensure you are covered by Fuso’s full manufacturer's warranty.</p>
                            <p>In the event that a genuine part fails, Fuso will not only replace the faulty part, we’ll cover any additional damage caused by its failure, including labour costs if it is fitted by Daimler Trucks Somerton Fuso.</p>
                            <p>Daimler Trucks Somerton Fuso's qualified after sales personnel have the latest tools and equipment at their disposal to ensure they obtain the right part for the job, and that it will be fitted correctly.</p>
                            <p>Please call us directly or simply complete the online <strong>Spare Parts Enquiry Form</strong> and we'll contact you as soon as possible.</p>
                        </div>
                    </div>
                </div>
            </div>    
            @include('partials.location_details')                    
            </div>    
        </div>
    </div>
</section>
<a class="vtc-fixed-contact-us user-agent-ua-contact-us" href="/contact-us#parts_tab_id">Contact Us</a>
@endsection