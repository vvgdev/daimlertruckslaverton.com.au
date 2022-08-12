@extends('layouts.app1')
@section('title') Roadside Assistance - Daimler Trucks Laverton @stop
@section('meta_title') Roadside Assistance - Daimler Trucks Laverton @stop
@section('meta_keywords') Roadside Assistance - Daimler Trucks Laverton @stop
@section('meta_description') Roadside Assistance - Daimler Trucks Laverton @stop
@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Roadside Assistance</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="roadside-assistance page-multi mt-5">
            <!-- <h1 class="page-title">Roadside Assistance</h1> -->
            <div class="specification-tabs">
                <div class="responsive custom-scrollbar">
                    <ul class="nav nav-pills">
                        <li class="tab-title" id="benz_desc">
                            <a href="#benz_tab" data-toggle="tab" aria-expanded="true" class="active">
                            <i class="dtm-mercedes-logo"></i>Mercedes Benz</a>
                        </li>
                        <li class="tab-title" id="benz_van_desc">
                            <a href="#benz_van_tab" data-toggle="tab" aria-expanded="false">
                                <i class="dtm-mercedes-logo"></i>Mercedes Benz Van
                            </a>
                        </li>
                        <li class="tab-title" id="fuso_desc">
                            <a href="#fuso_tab" data-toggle="tab" aria-expanded="false">
                            Fuso</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="benz_tab">
                        <div class="content para">
                            <p>
                                <img src="{{ asset('images/roadside-header.jpeg') }}" alt="roadside">
                            </p>
                            <p>&nbsp;</p>
                            <h6 class="bold">Available 24 hours a day, 365 days a year.</h6>
                            <p>Mercedes-Benz Roadside Assistance is designed to provide you with assistance in the unlikely case of a breakdown in Australia.</p>
                            <h6 class="bold mt-4">How we can assist you.</h6>
                            <p>We have always placed great emphasis on providing premium quality After Sales care to our customers, care which truly matches the quality of our vehicles and enhances the enjoyment of owning a Mercedes-Benz.</p>
                            <p>Mercedes-Benz Roadside Assistance is designed to provide you with assistance in the unlikely case of a breakdown in Australia, 24 hours a day, 365 days a year. In the event of a breakdown, one call to the free hotline connects you with our Roadside Assistance Call Centre and will despatch a qualified Mercedes-Benz technician.</p>
                            <p>Equipped with state-of-the-art diagnostic and communications technology, we will identify the fault and get your vehicle back on the road, without delay.</p>
                            <p>For Emergency Roadside Assistance please call <a href="tel:1800 033 557">1800 033 557</a>.</p>
                        </div>            
                    </div>
                    <div class="tab-pane" id="benz_van_tab">
                        <div class="content para">
                            <h6 class="bold">24/7 roadside assist for Mercedes-Benz vans and utes.</h6>
                            <p>Mercedes-Benz Vans Road Care Service provides you roadside assistance in case of a breakdown in Australia, 24 hours a day, 365 days a year – at no extra cost.</p>
                            <p>You are protected for the duration of the manufacturer’s warranty period, or while the vehicle is operating under an approved ServiceCare Pre-Paid Plan. You can continue to be covered by Mercedes-Benz Vans Road Care after the warranty period by purchasing annual membership.</p>
                            <h6 class="bold mt-4">Roadside assistance by the people who know your van.</h6>
                            <p><strong>Help is just a phone call away - 1800 033 557</strong></p>
                            <p>If something happens on the road and you need assistance, simply call Vans Road Care Service, and one of our specialists will be will be on their way to help.</p>
                            <p>If you experience any of these situations, we’ll have you back on the road in no time:</p>
                            <ul>
                                <li>Flat batteries and tyres</li>
                                <li>Empty fuel tank</li>
                                <li>Locked vehicle and lost keys</li>
                                <li>Towing and transportation to the nearest authorised retailer</li>
                            </ul>
                            <p>To find out more about Mercedes-Benz Vans Road Care, and what you need to do if you require roadside assistance, make sure you read the brochure below.</p>
                            <p>
                                <a class="btn btn-red mt-0 mb-2" href="/pdf/mercedes-benz_vans_roadcare_brochure.pdf" target="_blank">Download Brochure</a> 
                            </p>
                        </div>          
                    </div>
                    <div class="tab-pane" id="fuso_tab">
                        <div class="content para">
                            <img class="mb-4" src="/images/fuso-service.jpeg"/>
                            <p>There when you need us most, Fuso’s Roadside Assistance Hotline is a 24/7 service that is committed to keeping you on the road following a breakdown or accident. Delivering emergency support in both regional and metropolitan centres, the service works in partnership with our national dealer network to ensure a priority turnaround.</p>
                            <p>Roadside Assistance Hotline:<strong><a href="tel:1800 033 557">1800 033 557</a></strong></p>
                        </div>
                    </div>
                    <hr/>
                    @include('partials.location_details') 
                </div>
            </div>
        </div>
    </div>
</section>

@endsection