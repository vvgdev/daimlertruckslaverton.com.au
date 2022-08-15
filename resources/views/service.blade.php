@extends('layouts.app1')
@section('title') Truck Repairs Melbourne | Daimler Truck Service Fuso Merc Freightliner VIC @stop
@section('meta_title') Truck Repairs Melbourne | Daimler Truck Service Fuso Merc Freightliner VIC @stop
@section('meta_keywords') Daimler Trucks Laverton Service @stop
@section('meta_description') Our dedicated factory-trained technicians are qualified to work on all makes and models of vehicle from light commercial vans and trucks to heavy prime movers. @stop
@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Service</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="services-page page-multi">
            <div class="specification-tabs">
                <div class="responsive custom-scrollbar">
                    <ul class="nav nav-pills">
                        <li class="tab-title" id="benz_desc">
                            <a href="#benz_tab" data-toggle="tab" aria-expanded="true" class="active">
                                <i class="dtm-mercedes-logo"></i>Mercedes Benz
                            </a>
                        </li>
                        <li class="tab-title" id="benz_van_desc">
                            <a href="#benz_van_tab" data-toggle="tab" aria-expanded="false">
                                <i class="dtm-mercedes-logo"></i>Mercedes Benz Van
                            </a>
                        </li>
                        <li class="tab-title" id="freightliner_desc">
                            <a href="#freightliner_tab" data-toggle="tab" aria-expanded="false">
                                <i class="dtm-icon-gallery-truck"></i> Freightliner
                            </a>
                        </li>
                        <li class="tab-title" id="fuso_desc">
                            <a href="#fuso_tab" data-toggle="tab" aria-expanded="false">
                                Fuso
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active" id="benz_tab">
                                <div class="content para">
                                    <h3 class="mb-4">Mercedes-Benz Service Melbourne | Truck Service Melbourne VIC</h3>
                                    <p>Choosing the best truck for the job is an excellent start, but it is just the beginning.</p>
                                    <p>To get the best out of your truck and to keep it running how the Mercedes-Benz engineers intended, we recommend that you have it maintained and serviced at regular intervals at <strong>Laverton Mercedes-Benz Trucks</strong>.</p>
                                    <p>Every workshop that carries the famous three-pointed star is staffed and equipped for excellence, with access to the latest specification and up-to-date information across the model range.</p>
                                    <p>Trained technicians are essential, and every Mercedes-Benz technician completes a set number of hours of training and retraining every year to ensure they are up-to-date with technology.</p>
                                    <p>Finally, the equipment and tooling required to maintain a Mercedes-Benz truck is designed and developed by the same people who design and develop the vehicle. The investment you make in your fleet, from one truck to a major fleet of different sizes and configurations, demands the attention and expertise only genuine Mercedes-Benz service can deliver.</p>
                                    <p>It’s the best way to maximise uptime, maximise reliability and protect your investment.</p>
                                    
                                    <h6 class="mt-4">Quick, easy and inexpensive repairs.</h6>
                                    <p>Making sure that your Mercedes-Benz truck, or your entire Mercedes-Benz truck fleet, remains in optimum operating condition is the key.</p>
                                    <p>Whether you need a larger repair, like a new body panel or have a smaller problem that needs fixing like an annoying rattle, you can trust Daimler Trucks Laverton Mercedes-Benz to take care of it.</p>
                                    <p>For further information, please contact our friendly Service team for assistance with any enquiry regarding your Mercedes-Benz Trucks vehicle.</p>
                                    <h6 class="mt-4">Customer Amenities</h6>
                                    <p>When you visit Daimler Trucks Laverton for your truck service, we want to ensure your time here is enjoyable. We have the following customer amenities available for your convenience and comfort:</p>
                                    <ul>
                                        <li>Microwave facilities</li>
                                        <li>Free WiFi</li>
                                        <li>Phone charging station</li>
                                        <li>Workstation to catch up on paperwork</li>
                                        <li>Lounge and recliners</li>
                                        <li>State-of-the-art complimentary coffee machine</li>
                                        <li>Vending machines</li>
                                        <li>TV</li>
                                        <li>Complimentary up-to-date magazines and newspapers</li>
                                        <li>Short walk to local cafes and lunch spots</li>
                                    </ul>
                                    <h6 class="mt-4">The Daimler Service Difference</h6>
                                    <ul>
                                        <li>Australia’s largest purpose-built workshop</li>
                                        <li>Most advanced diagnostics</li>
                                        <li>Customer Lounge with complimentary tea and coffee</li>
                                        <li>24-Hour Breakdown Service</li>
                                        <li>Factory-trained technicians</li>
                                    </ul>
                                </div>          
                            </div>
                            <div class="tab-pane" id="benz_van_tab">
                                <div class="content para">
                                    <h3 class="mb-4">Servicing Your Mercedes-Benz Van</h3>
                                    <p>At <strong>Mercedes-Benz Van Centre Laverton</strong> we believe choosing the best van for the job is an excellent start, but it is just the beginning.</p>
                                    <p>Making sure that your Mercedes-Benz van, or your entire Mercedes-Benz van fleet, remains in optimum operating condition is the key.</p>
                                    <p>The best way to do that is to insist on Genuine Service from an authorised Mercedes-Benz dealer.</p>
                                    <p>Every workshop that carries the famous three-pointed star is staffed and equipped for excellence, with access to the latest specification and up-to-date information across the model range.</p>
                                    <p>Trained technicians are essential, and every Mercedes-Benz technician completes a set number of hours of training and retraining every year to ensure they are up-to-date with technology.</p>
                                    <p>Finally, the equipment and tooling required to maintain a Mercedes-Benz van is designed and developed by the same people who design and develop the vehicle. The investment you make in your fleet, from one van to a major fleet of different sizes and configurations, demands the attention and expertise only genuine Mercedes-Benz service can deliver.</p>
                                    <p>It’s the best way to minimise downtime, maximise reliability and protect your investment.</p>
                                </div>          
                            </div>
                            <div class="tab-pane" id="freightliner_tab">
                                <div class="content para">
                                    <h3 class="mb-4">Freightliner Service West Melbourne | Truck Service Melbourne VIC</h3>
                                    <p>
                                        At <strong>Daimler Trucks Laverton Freightliner</strong> choosing your truck is just the beginning. We’re there for the life of your vehicle.
                                    </p>
                                    <p>
                                    Daimler Trucks Laverton Freightliner have a number of servicing and repair options and Service Contracts designed to help manage your maintenance costs with flexible and affordable options. Not only will you feel reassured that trained technicians are working on your truck, you can rest assured that they will use Freightliner Genuine Parts.
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
                                        <strong class="txt-uppercase">WHAT IS EXPRESS ASSESSMENT?</strong>
                                    </p>
                                    <p>
                                    Express Assessment is a commitment to provide a preliminary diagnosis and communication to the customer within two hours of a truck arriving at the dealership. Express Assessment is a process, not a program. It is intended to become part of the way a service department performs its day-to-day work.
                                    </p>
                                    <p>
                                        <strong>Within 2 Hours Of Service Write-Up, The Daimler Trucks Laverton Freightliner Will:</strong>
                                    </p>
                                    <ul>
                                        <li>Communicate single service issue diagnosis</li>
                                        <li>Check part availability</li>
                                        <li>Provide an estimate of cost and repair time</li>
                                    </ul>
                                    <h6 class="mt-4">Customer Amenities</h6>
                                    <p>When you visit Daimler Trucks Laverton for your truck service, we want to ensure your time here is enjoyable. We have the following customer amenities available for your convenience and comfort:</p>
                                    <ul>
                                        <li>Microwave facilities</li>
                                        <li>Free WiFi</li>
                                        <li>Phone charging station</li>
                                        <li>Workstation to catch up on paperwork</li>
                                        <li>Lounge and recliners</li>
                                        <li>State-of-the-art complimentary coffee machine</li>
                                        <li>Vending machines</li>
                                        <li>TV</li>
                                        <li>Complimentary up-to-date magazines and newspapers</li>
                                        <li>Short walk to local cafes and lunch spots</li>
                                    </ul>
                                    <h6 class="mt-4">The Daimler Service Difference</h6>
                                    <ul>
                                        <li>Australia’s largest purpose-built workshop</li>
                                        <li>Most advanced diagnostics</li>
                                        <li>Customer Lounge with complimentary tea and coffee</li>
                                        <li>24-Hour Breakdown Service</li>
                                        <li>Factory-trained technicians</li>
                                    </ul>
                                    <p>
                                    For further information, please contact our friendly Service team for assistance with any enquiry regarding your Freightliner vehicle.
                                    </p>
                                    <p>
                                    The Daimler Trucks Laverton Freightliner team wishes you safe and pleasant motoring 
                                    </p>
                                    <hr>
                                </div>
                            </div>
                            <div class="tab-pane" id="fuso_tab">
                                <div class="content para">
                                    <h3 class="mb-4">Fuso Service Melbourne | Truck Service Melbourne VIC</h3>
                                    <h5>WE’VE GOT YOUR BACK.</h5>
                                    <p>
                                        <strong>Daimler Trucks Laverton</strong> state-of-the-art service centre is focused on getting your truck, van or bus back on the road as soon as possible. We offer extended workshop hours for late night servicing, an onsite auto-electrician (available between 7am-4pm) and a 24-hour breakdown call-out service.
                                    </p>
                                    <h6>Service Centre</h6>
                                    <p>
                                    Our dedicated factory-trained technicians are qualified to work on all makes and models of vehicle from light commercial vans and trucks to heavy prime movers.
                                    </p>
                                    <p>
                                    We perform logbook services as well as ad-hoc repairs. In all of our repair and maintenance work we can ensure reliability and customer satisfaction through our use of genuine Mercedes-Benz and Freightliner manufacturer parts and accessories.
                                    </p>
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
                                    <h6 class="mt-4">Customer Amenities</h6>
                                    <p>When you visit Daimler Trucks Laverton for your truck service, we want to ensure your time here is enjoyable. <br/>
                                    <strong>We have the following customer amenities available for your convenience and comfort:</strong></p>
                                    <ul>
                                        <li>Microwave facilities</li>
                                        <li>Free WiFi</li>
                                        <li>Phone charging station</li>
                                        <li>Workstation to catch up on paperwork</li>
                                        <li>Lounge and recliners</li>
                                        <li>State-of-the-art complimentary coffee machine</li>
                                        <li>Vending machines</li>
                                        <li>TV</li>
                                        <li>Complimentary up-to-date magazines and newspapers</li>
                                        <li>Short walk to local cafes and lunch spots</li>
                                    </ul>
                                    <h6 class="mt-4">The Daimler Service Difference</h6>
                                    <ul>
                                        <li>Australia’s largest purpose-built workshop</li>
                                        <li>Most advanced diagnostics</li>
                                        <li>Customer Lounge with complimentary tea and coffee</li>
                                        <li>24-Hour Breakdown Service</li>
                                        <li>Factory-trained technicians</li>
                                    </ul>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="truck-location">
                    @include('partials.location_details')            
                </div>
            </div>
        </div>
    </div>
</section>
<a class="vtc-fixed-contact-us user-agent-ua-contact-us" href="/contact-us#service_tab_id">Contact Us</a>
@endsection 