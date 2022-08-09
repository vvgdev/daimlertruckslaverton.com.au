@extends('layouts.app')

@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Service Plans</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="service-plans page-multi mt-5">
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
                        <div class="content para">
                            <h5>Because reliability means business.</h5>
                            <p>
                                A maintenance and repair program<sup>1</sup> designed to increase vehicle utilisation and protect your vehicle and your business from unexpected operating costs.
                            </p>
                            <p>
                                <a class="btn btn-red mt-0" href="https://www.velocitytruckcentres.com.au/storage/app/media/57761_mbtrucks-service-plan_brochure-oct20.pdf" target="_blank">Mercedes-Benz Service Plan Brochure</a>
                            </p>
                            <h5 class="mt-5">Complete Service Plan.</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>A full service package offering all round protection. Complete Service Plan covers a range of repair and maintenance work including wearing parts. Please consult inclusions and exclusions list in the brochure for more information. The best choice to ensure that your vehicle is in tip-top condition, is always available for use and that costs are kept under control.</p>
                                </div>
                                <div class="col-md-12">
                                    <p><b>Benefits at a glance.</b></p>
                                    <ul>
                                        <li>A Complete service, repair and wear and tear package for all-round protection.</li>
                                        <li>Preventative Maintenance - Parts can be replaced before they become worn, protecting you from costly repairs and unplanned time off the road.</li>
                                        <li>Predetermined payments.</li>
                                        <li>Reduced administration, leaving you free to concentrate on your core business.</li>
                                        <li>For terms of up to 60 months or 1,200,000km.</li>
                                        <li>Roadside Assistance - Repairs, maintenance and towing cost are all covered if the vehicle breaks down due to a part that's covered under the Complete Service Plan.<sup>2</sup></li>
                                    </ul>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <h3 class="mt-0">BestBasic Service Plan.</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>BestBasic includes all scheduled servicing work for your vehicle, as per the Mercedes-Benz requirements specified in the Mercedes-Benz Maintenance Manual, along with replacing globes and wiper blades when required. We offer attractive pricing on parts and labour, including a set monthly cost for an agreed term.</p>
                                </div>
                                <div class="col-md-12">
                                    <p><b>Benefits at a glance.</b></p>
                                    <ul>
                                        <li>All scheduled services are carried out by trained Technicians using genuine parts and lubricants.</li>
                                        <li>Predetermined payments.</li>
                                        <li>Available at any point in the truck's life.</li>
                                    </ul>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <p>
                                <small>
                                    [1]  Repairs include material or manufacturer defects. Terms and conditions apply. Please contact your authorised Mercedes-Benz trucks dealer for a copy of the full terms and conditions including inclusions and exclusions of items covered under each of the Service Plans offered.
                                </small>
                            </p>
                            <p>
                                <small>[2]  Terms and conditions apply. Please contact your authorised Mercedes-Benz trucks dealer for a copy of the full terms and conditions including inclusions and exclusions of items covered under each of the Service Plans offered.</small>
                            </p>
                            <div class="bestbasic-service">
                                <h1 class="page-title mt-5">BestBasic Service</h1>
                                <h5 class="mt-4 mb-3 semi-bold">Maximise use and minimise fuss with our free BestBasic Service Plan.</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>For a limited time, Mercedes-Benz tducks is pleased to include a complimentary BestBasic Service Plan for 5 years or 500,000km (whichever occurs first) with each new on-road tduck purchased.</p>
                                    </div>
                                    <div class="col-md-12">
                                        <h5>Benefits of genuine Mercedes-Benz coverage.</h5>
                                        <ul>
                                            <li>All standard scheduled servicing work for up to 5 years or 500,000km, whichever occurs first, as outlined in the maintenance manual.</li>
                                            <li>Maintenance carried out by authorised Mercedes-Benz technicians.</li>
                                            <li>Genuine Mercedes-Benz parts and lubricants.</li>
                                            <li>Replacement globes and wiper blades when required.</li>
                                            <li>Peace of mind knowing your tduck is getting the highest level of service available.</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="mb-4 semi-bold">Below are the items we check and work on, based on the inclusions of a BestBasic Service Plan that you will receive for free for 5 years or 500,000km*.</h5>
                                <div>
                                <h6><b>Maintenance</b></h6>
                                <p>Diagnostic test, brake fluid, material, top up fluids for the maintenance scopes</p>
                                <p>Inspection/adjustment of vehicle technical systems for the maintenance scopes</p>
                                <p>Inspection as per manufacturer's guidelines: engine, battery, electrical systems, safety-related parts, lamps, exhaust systems, oil during periodic maintenance, fluids: coolant level, washer fluid, antifreeze</p>
                                <p>Replacement of fluids and their filter elements as per manufacturer's guidelines</p>
                                <p>Replacement globes and wiper blades when required</p>
                                <p>Air/dust combination filter</p>
                                <p>Fuel/air/AdBlue filter</p>
                                <p>Oil filter, automatic transmission</p>
                                <p>Cartridge, air drier</p>
                                <p>Cleaning diesel particulate filter</p>
                                <h6 class="mt-4"><b>Engine</b></h6>
                                <p>Fuel/air Filter</p>
                                </div>
                                <p>&nbsp;</p>
                                <p class="bold">To discover more about the 5 year or 500,000km* BestBasic Service Plan offer, contact our Mercedes-Benz Trucks Dealership today.</p>
                                <hr>
                                <p><a class="btn btn-red-small" href="/contact-us/">Contact Us Today</a></p>
                                <p><small>*Whichever occurs first.<br>
                                Terms and conditions apply. Complimentary BestBasic 5 years/500,000kms (whichever occurs first from the date the vehicle is first delivered) Service Plan available on eligible Mercedes-Benz Trucks MY2021 and MY2022 models (on-highway Rigid and Prime Mover Actros and Arocs, up to 110 tonnes GCM). For applications where vehicle servicing is based on engine-hours as specified under the vehicle owner's manual, Complimentary BestBasic Service Plans are capped at 5 years/10,000 hours (whichever occurs first from the date the vehicle is first delivered). Valid for new vehicles purchased and delivered before 31 December 2022, unless extended. Offer excludes AWD models and Atego, Econic or Unimog trucks, and National Fleet and Government purchases. The BestBasic Service Plan covers all scheduled service work relevant to the vehicle as specified by the Mercedes-Benz Flexible Telligent System or the Mercedes-Benz Maintenance Manual, carried out in a authorised Mercedes-Benz Truck Dealership. Please contact your authorised Mercedes-Benz Truck Dealership for a copy of the full terms and conditions including inclusions and exclusions of items covered under the BestBasic Service Plan.</small></p>
                                
		                    </div>
                            <div class="preventative-maintenance">
                                <h1 class="page-title mt-5">Preventative Maintenance</h1>
                                <div class="pure-u-1 content box-first-multi">
						            <p>Prevention is always better than cure. Preventative Maintenance assists to maximise the operating life of components while minimising the chance of unscheduled and costly breakdowns. Why wait for components to wear out, risking the chance for major repairs and downtime. For any truck to work at their optimum, components need to be replaced at the right time.</p>
                                    <ul>
                                        <li>Minimises breakdowns and emergency repairs.</li>
                                        <li>Reduces unscheduled and costly downtime.</li>
                                        <li>Improves efficiency by keeping trucks operating at their optimum.</li>
                                        <li>Decreases stress on other parts caused by aging components.</li>
                                        <li>Contributes to operator peace of mind.</li>
                                    </ul>
                                    <h5 class="mb-4">Benefits</h5>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <h6 class="bold">Upfront Pricing</h6>
                                            <p>Choosing to replace a worn part at the recommended time allows our technicians to promptly provide you with a comprehensive price upfront, ensuring optimum cost transparency.</p>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <h6 class="bold">Cost Advantage</h6>
                                            <p>Not only can you save by avoiding potential costly repairs and downtime, you can save up to a further 15% by choosing to replace and return eligible Mercedes-Benz Genuine Remanufactured Parts^.</p>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <h6 class="bold">Quicker Turnaround</h6>
                                            <p>Timely replacement aligned with your existing service maintenance intervals can reduce the number of unscheduled workshop visits, helping keep your valuable time out on the road as you planned.</p>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <h6 class="bold">Operating Efficiency</h6>
                                            <p>Improves efficiency by keeping trucks operating at their optimum, decreasing stress on other parts caused by ageing components.</p>
                                        </div>
                                    </div>
                                    <p><small><sup>^</sup>Used parts are taken in part payment, provided that they meet the latest return criteria. Ask your Mercedes-Benz commercial vehicle dealership for full details.</small></p>
					            </div>
                            </div>
                        </div>            
                    </div>
                    <div class="tab-pane" id="freightliner_tab">
                        <div class="content para">
						    <h4>Freightliner Service Plans</h4>
                            <p>
                                No matter what you are carrying or what industry you are in, the primary purpose of your truck is to earn money. There are many reasons why a Service Plan from Freightliner can make this easier for you, such as attractive, predetermined maintenance and repair costs, improved vehicle operational reliability and reduced administration.*
                            </p>
                            <p>
                                Our Freightliner Service Plans are flexible, which means that whether you have a fleet of long-haul trucks or a single vehicle doing local runs, we have the right combination of Service Plans to meet your particular requirements.
                            </p>
                            <p>
                                <a class="btn btn-red mt-0" href="https://www.velocitytruckcentres.com.au/storage/app/media/57762_freightliner-service-plan-brochure-oct20.pdf" target="_blank">Freightliner Service Plan Brochure</a>
                            </p>
                            <h4 class="mt-4">Complete Service Plan</h4>
                            <p>
                                A full service package offering all round protection. Complete Service Plan covers a range of repair and maintenance work. Please consult inclusions and exclusions list in the brochure for more information. The best choice to ensure that your vehicle is in tip-top condition, is always available for use and that costs are kept under control.
                            </p>
                            <h6>Benefits at a glance</h6>
                            <ul>
                                <li>A complete service, repair wear and tear package for all-round protection</li>
                                <li>Predetermined instalments</li>
                                <li>Reduced administration, leaving you free to concentrate on your core business</li>
                                <li>For terms of up to 60 months or 1,200,000km.</li>
                                <li>Roadside Assistance - Repairs, maintenance and towing cost are all covered if the vehicle breaks down due to a part that's covered under the Complete Service Plan.*</li>
                            </ul>
                            <h4>BestBasic Service Plan</h4>
                            <p>
                                BestBasic includes all scheduled servicing work for your vehicle, as per the Freightliner requirements specified in the Freightliner Maintenance Manual, along with replacing globes and wiper blades when required. We offer attractive pricing on parts and labour, including a set monthly cost for an agreed term.
                            </p>
                            <h6>Benefits at a glance</h6>
                            <ul>
                                <li>All scheduled services are carried out by trained Technicians using genuine parts and lubricants.</li>
                                <li>Predetermined instalments</li>
                                <li>Available at any point in the truck's life.</li>
                            </ul>
                            <p>To find out even more about the Service Plans that Freightliner offers contact Daimler Trucks Somerton Freightliner or download the brochure using the below link.</p>
                            <p>To find out even more about the Service Plans that Freightliner offers contact Daimler Trucks Somerton Freightliner.</p>
                            <p>*Terms and conditions apply. Please contact your authorised Freightliner commercial dealer for a copy of the full terms.</p>
                            <h3 class="mt-5">5 YEARS/500,000KMS COMPLIMENTARY BESTBASIC SERVICE PLAN</h3>
                            <p>Need another reason to purchase the all new Cascadia? How about a 5 years/500,000kms Complimentary BestBasic Service Plan.*</p>
                            <p>Complimentary BestBasic Service Plan will cover all scheduled servicing work for your new Cascadia for the next 5 years, carried out by trained Technicians using Freightliner Genuine Parts and lubricants.* If you want more coverage for your vehicle, talk to your authorised Freightliner dealer about upgrading the offer to our Complete Service Plan.</p>
                            <br/>
                            <p>For more details of Freightliner Service Plans, click the link <a href="https://www.freightliner.com.au/Service/complimentary-servicing" style="color: #0056b3;">here</a></p>
                            <h3 class="mt-5">Terms And Conditions</h3>
                            <p><sup>*</sup>Terms and conditions apply. Complimentary BestBasic 5 years/ 500,000kms (whichever occurs first from the date the vehicle is first registered) Service Plan available on eligible Cascadia vehicles (on-highway application up to 110,000Kg GCM and maintained as per Cascadia Supplementary Maintenance Manual Service Schedules II & III). On-highway applications up to 110,000Kg GCM, maintained as per Cascadia Supplementary Maintenance Manual Service Schedule I are capped at 5 years/3,000 hours (whichever occurs first from the date the vehicle is first registered). Valid for new vehicles purchased and delivered before 31 December 2022, unless extended. Covers all scheduled service work relevant to the vehicle as specified in the Cascadia Supplementary Maintenance Manual, and can only be carried out in an authorised Freightliner dealership. Please contact your authorised Freightliner dealership for a copy of the full terms and conditions including inclusions and exclusions of items covered under the BestBasic Service Plan. Freightliner is a registered trade mark of Daimler Trucks North America LLC, distributed in Australia and New Zealand by Daimler Truck and Bus Australia Pacific Pty Ltd ACN 618 413 282 / NZCN 8039364</p>
                            <p><a class="btn btn-red mt-0" href="https://www.velocitytruckcentres.com.au/storage/app/media/ALL0098_A4%20Freightliner%20Service%20Plan%20Brochure_ISSUU.pdf" target="_blank">Freightliner Service Plan Brochure</a></p>
                        </div>
                    </div>
                    <div class="tab-pane" id="fuso_tab">
                        <div class="content capped-service para">
						    <h3 class="bold">2022 CAPPED PRICE SERVICING</h3>
                            <p>Fuso is now taking the guesswork out of your scheduled servicing. With all our authorised <a href="">Fuso dealerships</a>, you can now get capped, upfront, totally transparent pricing for your Fuso Truck or Bus through Capped Price Servicing.*</p>
                            <p>That's great value for Genuine Parts and Fuso Factory trained technicians.</p>
                            <p>* Please refer to the Annual Fuso Capped Price Servicing terms and conditions.</p>
                            <hr/>
                            <section class="dealer-accordion">
                                <h2>Capped Price Servicing Calculator</h2>
                                <p>Follow the prompts below to select your Fuso model and calculate your scheduled servicing cost through any of our authorised Fuso dealers.</p>
                                <div class="panel">
                                    <div class="heading icon icon-caret-down collapsed" data-toggle="collapse" href="#collapseEX1" aria-expanded="false">
                                        <div class="panel-title">Canter <i class="dtm-angle-right"></i></div>
                                    </div>
                                    <div class="panel-collapse collapse pt-3" id="collapseEX1" aria-expanded="false" style="height: 0px;">
                                        <div class="responsive custom-scrollbar">
                                            <ul class="nav nav-pills">
                                                <li class="tab-title" id="">
                                                    <a href="#canter_tab1" data-toggle="tab">
                                                    2015 - 2016</a>
                                                </li>
                                                <li class="tab-title" id="">
                                                    <a href="#canter_tab2" data-toggle="tab">
                                                    2017 - 2021</a>
                                                </li>
                                                <li class="tab-title" id="">
                                                    <a href="#canter_tab3" data-toggle="tab">
                                                    2022 Onwards</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="canter_tab1">
                                                <div class="responsive custom-scrollbar">
                                                    <ul class="nav nav-pills">
                                                        <li class="tab-title" id="">
                                                            <a href="#canter_duonic" data-toggle="tab" aria-expanded="true">
                                                            4 x 2 <div>Duonic</div></a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#canter_2manual" data-toggle="tab" aria-expanded="false">
                                                            4 x 2 <br/> Manual</a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#canter_4manual" data-toggle="tab" aria-expanded="false">
                                                            4 x 4 <br/> Manual</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="canter_duonic">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Canter 4x2 Duonic (2015 - 2016 Model)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>30,000km or<br>12 months</th>
                                                                        <th>60,000km or<br>24 months</th>
                                                                        <th>90,000km or<br>36 months</th>
                                                                        <th>120,000km or<br>48 months</th>
                                                                        <th>150,000km or<br>60 months</th>
                                                                        <th>180,000km or<br>72 months</th>
                                                                        <th>210,000km or<br>84 months</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td class="service">1st Service</td>
                                                                        <td class="service">2nd Service</td>
                                                                        <td class="service">3rd Service</td>
                                                                        <td class="service">4th Service</td>
                                                                        <td class="service">5th Service</td>
                                                                        <td class="service">6th Service</td>
                                                                        <td class="service">7th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$798.68</td>
                                                                        <td>$2,291.05</td>
                                                                        <td>$798.68</td>
                                                                        <td>$2,291.05</td>
                                                                        <td>$798.68</td>
                                                                        <td>$2,291.05</td>
                                                                        <td>$798.68</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="canter_2manual">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Canter 4x2 Manual (2015 - 2016 Model)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>30,000km or<br>12 months</th>
                                                                        <th>60,000km or<br>24 months</th>
                                                                        <th>90,000km or<br>36 months</th>
                                                                        <th>120,000km or<br>48 months</th>
                                                                        <th>150,000km or<br>60 months</th>
                                                                        <th>180,000km or<br>72 months</th>
                                                                        <th>210,000km or<br>84 months</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td class="service">1st Service</th>
                                                                        <td class="service">2nd Service</th>
                                                                        <td class="service">3rd Service</th>
                                                                        <td class="service">4th Service</th>
                                                                        <td class="service">5th Service</th>
                                                                        <td class="service">6th Service</th>
                                                                        <td class="service">7th Service</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$798.68</td>
                                                                        <td>$2,068.61</td>
                                                                        <td>$798.68</td>
                                                                        <td>$2,068.61</td>
                                                                        <td>$798.68</td>
                                                                        <td>$2,068.61</td>
                                                                        <td>$798.68</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="canter_4manual">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Canter 4x4 Manual (2015 - 2016 Model)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>30,000km or<br>12 months</th>
                                                                        <th>60,000km or<br>24 months</th>
                                                                        <th>90,000km or<br>36 months</th>
                                                                        <th>120,000km or<br>48 months</th>
                                                                        <th>150,000km or<br>60 months</th>
                                                                        <th>180,000km or<br>72 months</th>
                                                                        <th>210,000km or<br>84 months</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td class="service">1st Service</td>
                                                                        <td class="service">2nd Service</td>
                                                                        <td class="service">3rd Service</td>
                                                                        <td class="service">4th Service</td>
                                                                        <td class="service">5th Service</td>
                                                                        <td class="service">6th Service</td>
                                                                        <td class="service">7th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$798.68</td>
                                                                        <td>$2,133.86</td>
                                                                        <td>$798.68</td>
                                                                        <td>$2,133.86</td>
                                                                        <td>$798.68</td>
                                                                        <td>$2,133.86</td>
                                                                        <td>$798.86</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="canter_tab2">
                                                <div class="responsive custom-scrollbar">
                                                    <ul class="nav nav-pills">
                                                        <li class="tab-title" id="">
                                                            <a href="#canter_duonic1" data-toggle="tab" aria-expanded="true">
                                                            4 x 2 <div>Duonic</div></a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#canter_2manual1" data-toggle="tab" aria-expanded="false">
                                                            4 x 2 <br/> Manual</a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#canter_4manual1" data-toggle="tab" aria-expanded="false">
                                                            4 x 4 <br/> Manual</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="canter_duonic1">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Canter 4x2 Duonic (2017 - 2021 Model)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>30,000km or<br>12 months</th>
                                                                        <th>60,000km or<br>24 months</th>
                                                                        <th>90,000km or<br>36 months</th>
                                                                        <th>120,000km or<br>48 months</th>
                                                                        <th>150,000km or<br>60 months</th>
                                                                        <th>180,000km or<br>72 months</th>
                                                                        <th>210,000km or<br>84 months</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td class="service">1st Service</td>
                                                                        <td class="service">2nd Service</td>
                                                                        <td class="service">3rd Service</td>
                                                                        <td class="service">4th Service</td>
                                                                        <td class="service">5th Service</td>
                                                                        <td class="service">6th Service</td>
                                                                        <td class="service">7th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$798.68</td>
                                                                        <td>$1,806.15</td>
                                                                        <td>$1,100.45</td>
                                                                        <td>$1,806.15</td>
                                                                        <td>$798.68</td>
                                                                        <td>$2,203.62</td>
                                                                        <td>$798.68</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="canter_2manual1">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Canter 4x2 Manual (2017 - 2021 Model)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>30,000km or<br>12 months</th>
                                                                        <th>60,000km or<br>24 months</th>
                                                                        <th>90,000km or<br>36 months</th>
                                                                        <th>120,000km or<br>48 months</th>
                                                                        <th>150,000km or<br>60 months</th>
                                                                        <th>180,000km or<br>72 months</th>
                                                                        <th>210,000km or<br>84 months</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td class="service">1st Service</td>
                                                                        <td class="service">2nd Service</td>
                                                                        <td class="service">3rd Service</td>
                                                                        <td class="service">4th Service</td>
                                                                        <td class="service">5th Service</td>
                                                                        <td class="service">6th Service</td>
                                                                        <td class="service">7th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$798.68</td>
                                                                        <td>$1,615.61</td>
                                                                        <td>$1,100.45</td>
                                                                        <td>$1,615.61</td>
                                                                        <td>$798.68</td>
                                                                        <td>$2,013.08</td>
                                                                        <td>$798.68</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="canter_4manual1">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Canter 4x4 Manual (2017 - 2021 Model)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>30,000km or<br>12 months</th>
                                                                        <th>60,000km or<br>24 months</th>
                                                                        <th>90,000km or<br>36 months</th>
                                                                        <th>120,000km or<br>48 months</th>
                                                                        <th>150,000km or<br>60 months</th>
                                                                        <th>180,000km or<br>72 months</th>
                                                                        <th>210,000km or<br>84 months</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td class="service">1st Service</td>
                                                                        <td class="service">2nd Service</td>
                                                                        <td class="service">3rd Service</td>
                                                                        <td class="service">4th Service</td>
                                                                        <td class="service">5th Service</td>
                                                                        <td class="service">6th Service</td>
                                                                        <td class="service">7th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$798.68</td>
                                                                        <td>$1,761.67</td>
                                                                        <td>$1,115.34</td>
                                                                        <td>$1,761.67</td>
                                                                        <td>$798.68</td>
                                                                        <td>$2,078.34</td>
                                                                        <td>$798.68</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="canter_tab3">
                                                <div class="responsive custom-scrollbar">
                                                    <ul class="nav nav-pills">
                                                        <li class="tab-title" id="">
                                                            <a href="#canter_duonic2" data-toggle="tab" aria-expanded="true">
                                                            4 x 2 <div>Duonic</div></a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#canter_2manual2" data-toggle="tab" aria-expanded="false">
                                                            4 x 2 <br/> Manual</a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#canter_4manual2" data-toggle="tab" aria-expanded="false">
                                                            4 x 4 <br/> Manual</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="canter_duonic2">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Canter 4x2 Duonic (2022 Onwards Model)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>30,000km or<br>12 months</th>
                                                                        <th>60,000km or<br>24 months</th>
                                                                        <th>90,000km or<br>36 months</th>
                                                                        <th>120,000km or<br>48 months</th>
                                                                        <th>150,000km or<br>60 months</th>
                                                                        <th>180,000km or<br>72 months</th>
                                                                        <th>210,000km or<br>84 months</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td class="service">1st Service</td>
                                                                        <td class="service">2nd Service</td>
                                                                        <td class="service">3rd Service</td>
                                                                        <td class="service">4th Service</td>
                                                                        <td class="service">5th Service</td>
                                                                        <td class="service">6th Service</td>
                                                                        <td class="service">7th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$798.68</td>
                                                                        <td>$1,530.58</td>
                                                                        <td>$798.68</td>
                                                                        <td>$1,530.58</td>
                                                                        <td>$798.68</td>
                                                                        <td>$1,530.58</td>
                                                                        <td>$798.68</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="canter_2manual2">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Canter 4x2 Manual (2022 Onwards Model)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>30,000km or<br>12 months</th>
                                                                        <th>60,000km or<br>24 months</th>
                                                                        <th>90,000km or<br>36 months</th>
                                                                        <th>120,000km or<br>48 months</th>
                                                                        <th>150,000km or<br>60 months</th>
                                                                        <th>180,000km or<br>72 months</th>
                                                                        <th>210,000km or<br>84 months</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td class="service">1st Service</td>
                                                                        <td class="service">2nd Service</td>
                                                                        <td class="service">3rd Service</td>
                                                                        <td class="service">4th Service</td>
                                                                        <td class="service">5th Service</td>
                                                                        <td class="service">6th Service</td>
                                                                        <td class="service">7th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$798.68</td>
                                                                        <td>$1,355.99</td>
                                                                        <td>$798.68</td>
                                                                        <td>$1,355.99</td>
                                                                        <td>$798.68</td>
                                                                        <td>$1,355.99</td>
                                                                        <td>$798.68</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="canter_4manual2">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Canter 4x4 Manual (2022 Onwards Model)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>30,000km or<br>12 months</th>
                                                                        <th>60,000km or<br>24 months</th>
                                                                        <th>90,000km or<br>36 months</th>
                                                                        <th>120,000km or<br>48 months</th>
                                                                        <th>150,000km or<br>60 months</th>
                                                                        <th>180,000km or<br>72 months</th>
                                                                        <th>210,000km or<br>84 months</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td class="service">1st Service</td>
                                                                        <td class="service">2nd Service</td>
                                                                        <td class="service">3rd Service</td>
                                                                        <td class="service">4th Service</td>
                                                                        <td class="service">5th Service</td>
                                                                        <td class="service">6th Service</td>
                                                                        <td class="service">7th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$798.68</td>
                                                                        <td>$1,485.33</td>
                                                                        <td>$813.57</td>
                                                                        <td>$1,485.33</td>
                                                                        <td>$798.68</td>
                                                                        <td>$1,500.22</td>
                                                                        <td>$798.68</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="heading icon icon-caret-down collapsed" data-toggle="collapse" href="#collapseEX2" aria-expanded="false">
                                        <div class="panel-title">FIGHTER <i class="dtm-angle-right"></i></div>
                                    </div>
                                    <div class="panel-collapse collapse pt-3" id="collapseEX2" aria-expanded="false" style="height: 0px;">
                                        <div class="responsive custom-scrollbar">
                                            <ul class="nav nav-pills">
                                                <li class="tab-title" id="">
                                                    <a href="#fighter_tab1" data-toggle="tab">
                                                    Fighter Euro 5</a>
                                                </li>
                                                <li class="tab-title" id="">
                                                    <a href="#fighter_tab2" data-toggle="tab">
                                                    Fighter Euro 6</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="fighter_tab1">
                                                <div class="responsive custom-scrollbar">
                                                    <ul class="nav nav-pills">
                                                        <li class="tab-title" id="">
                                                            <a href="#fighter_fk" data-toggle="tab" aria-expanded="true">
                                                            FK</a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#fighter_fm" data-toggle="tab" aria-expanded="false">
                                                            FM</a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#fighter_fn" data-toggle="tab" aria-expanded="false">
                                                            FN</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="fighter_fk">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_automatic" data-toggle="tab" aria-expanded="true">
                                                                    4 x 2 <div>Automatic</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_manual" data-toggle="tab" aria-expanded="false">
                                                                    4 x 2 <div>Manual</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="fighter_automatic">
                                                                <div class="responsive custom-scrollbar">
                                                                    <ul class="nav nav-pills">
                                                                        <li class="tab-title" id="">
                                                                            <a href="#fighter_airover" data-toggle="tab" aria-expanded="true">
                                                                            Air Over</a>
                                                                        </li>
                                                                        <li class="tab-title" id="">
                                                                            <a href="#fighter_fullair" data-toggle="tab" aria-expanded="false">
                                                                            Full Air</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane" id="fighter_airover">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Fighter 4x2 Automatic Air Over (FK Model) <sup>#</sup></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>30,000km or<br>12 months</th>
                                                                                        <th>60,000km or<br>24 months</th>
                                                                                        <th>90,000km or<br>36 months</th>
                                                                                        <th>120,000km or<br>48 months</th>
                                                                                        <th>150,000km or<br>60 months</th>
                                                                                        <th>180,000km or<br>72 months</th>
                                                                                        <th>210,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">1st Service</td>
                                                                                        <td class="service">2nd Service</td>
                                                                                        <td class="service">3rd Service</td>
                                                                                        <td class="service">4th Service</td>
                                                                                        <td class="service">5th Service</td>
                                                                                        <td class="service">6th Service</td>
                                                                                        <td class="service">7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$896.65</td>
                                                                                        <td>$2,573.28</td>
                                                                                        <td>$1,494.15</td>
                                                                                        <td>$2,903.06</td>
                                                                                        <td>$896.65</td>
                                                                                        <td>$2,925.65</td>
                                                                                        <td>$1,075.33</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>240,000km or<br>96 months</th>
                                                                                        <th>270,000km or<br>108 months</th>
                                                                                        <th>300,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">8th Service</td>
                                                                                        <td class="service">9th Service</td>
                                                                                        <td class="service">10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$2,903.06</td>
                                                                                        <td>$1,494.15</td>
                                                                                        <td>$2,573.28</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <p># Additional charges for selected Automatic Fighters may apply. Fighter FK (2500 series) - Replace Allison Automatic Transmission Oil & Automatic Transmission Air Filter every 5 years (or when required).</p>
                                                                    </div>
                                                                    <div class="tab-pane" id="fighter_fullair">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Fighter 4x2 Automatic Full Air (FK Model) <sup>#</sup></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>30,000km or<br>12 months</th>
                                                                                        <th>60,000km or<br>24 months</th>
                                                                                        <th>90,000km or<br>36 months</th>
                                                                                        <th>120,000km or<br>48 months</th>
                                                                                        <th>150,000km or<br>60 months</th>
                                                                                        <th>180,000km or<br>72 months</th>
                                                                                        <th>210,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">1st Service</td>
                                                                                        <td class="service">2nd Service</td>
                                                                                        <td class="service">3rd Service</td>
                                                                                        <td class="service">4th Service</td>
                                                                                        <td class="service">5th Service</td>
                                                                                        <td class="service">6th Service</td>
                                                                                        <td class="service">7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,410.78</td>
                                                                                        <td>$1,514.61</td>
                                                                                        <td>$2,740.56</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,822.46</td>
                                                                                        <td>$1,036.48</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>240,000km or<br>96 months</th>
                                                                                        <th>270,000km or<br>108 months</th>
                                                                                        <th>300,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">8th Service</td>
                                                                                        <td class="service">9th Service</td>
                                                                                        <td class="service">10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$2,740.56</td>
                                                                                        <td>$1,514.61</td>
                                                                                        <td>$2,410.78</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <p># Additional charges for selected Automatic Fighters may apply. Fighter FK (2500 series) - Replace Allison Automatic Transmission Oil & Automatic Transmission Air Filter every 5 years (or when required).</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane " id="fighter_manual">
                                                                <div class="responsive custom-scrollbar">
                                                                    <ul class="nav nav-pills">
                                                                        <li class="tab-title" id="">
                                                                            <a href="#fighter_airover1" data-toggle="tab" aria-expanded="true">
                                                                            Air Over</a>
                                                                        </li>
                                                                        <li class="tab-title" id="">
                                                                            <a href="#fighter_fullair1" data-toggle="tab" aria-expanded="false">
                                                                            Full Air</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane" id="fighter_airover1">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Fighter 4x2 Manual Air Over (FK Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>30,000km or<br>12 months</th>
                                                                                        <th>60,000km or<br>24 months</th>
                                                                                        <th>90,000km or<br>36 months</th>
                                                                                        <th>120,000km or<br>48 months</th>
                                                                                        <th>150,000km or<br>60 months</th>
                                                                                        <th>180,000km or<br>72 months</th>
                                                                                        <th>210,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">1st Service</td>
                                                                                        <td class="service">2nd Service</td>
                                                                                        <td class="service">3rd Service</td>
                                                                                        <td class="service">4th Service</td>
                                                                                        <td class="service">5th Service</td>
                                                                                        <td class="service">6th Service</td>
                                                                                        <td class="service">7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,410.78</td>
                                                                                        <td>$1,514.61</td>
                                                                                        <td>$2,740.56</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,977.34</td>
                                                                                        <td>$1,036.48</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>240,000km or<br>96 months</th>
                                                                                        <th>270,000km or<br>108 months</th>
                                                                                        <th>300,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">8th Service</td>
                                                                                        <td class="service">9th Service</td>
                                                                                        <td class="service">10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$2,954.75</td>
                                                                                        <td>$1,455.30</td>
                                                                                        <td>$2,624.97</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="fighter_fullair1">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Fighter 4x2 Manual Full Air (FK Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>30,000km or<br>12 months</th>
                                                                                        <th>60,000km or<br>24 months</th>
                                                                                        <th>90,000km or<br>36 months</th>
                                                                                        <th>120,000km or<br>48 months</th>
                                                                                        <th>150,000km or<br>60 months</th>
                                                                                        <th>180,000km or<br>72 months</th>
                                                                                        <th>210,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">1st Service</td>
                                                                                        <td class="service">2nd Service</td>
                                                                                        <td class="service">3rd Service</td>
                                                                                        <td class="service">4th Service</td>
                                                                                        <td class="service">5th Service</td>
                                                                                        <td class="service">6th Service</td>
                                                                                        <td class="service">7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,515.21</td>
                                                                                        <td>$1,514.61</td>
                                                                                        <td>$2,844.99</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,926.89</td>
                                                                                        <td>$1,036.48</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>240,000km or<br>96 months</th>
                                                                                        <th>270,000km or<br>108 months</th>
                                                                                        <th>300,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">8th Service</td>
                                                                                        <td class="service">9th Service</td>
                                                                                        <td class="service">10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$2,844.99</td>
                                                                                        <td>$1,514.61</td>
                                                                                        <td>$2,515.21</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="fighter_fm">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_automaticfm" data-toggle="tab" aria-expanded="true">
                                                                    4 x 2 <div>Automatic</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_manualfm" data-toggle="tab" aria-expanded="false">
                                                                    4 x 2 <div>Manual</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="fighter_automaticfm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 4x2 Automatic (FM Model) <sup>#</sup></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>30,000km or<br>12 months</th>
                                                                                <th>60,000km or<br>24 months</th>
                                                                                <th>90,000km or<br>36 months</th>
                                                                                <th>120,000km or<br>48 months</th>
                                                                                <th>150,000km or<br>60 months</th>
                                                                                <th>180,000km or<br>72 months</th>
                                                                                <th>210,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,526.68</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$2,869.42</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,870.48</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>240,000km or<br>96 months</th>
                                                                                <th>270,000km or<br>108 months</th>
                                                                                <th>300,000km or<br>120 months</th>
                                                                                <th>330,000km or<br>132 months</th>
                                                                                <th>360,000km or<br>144 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,869.42</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$2,526.68</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,958.02</td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                </div>
                                                                <p>
                                                                # Additional charges for selected Automatic Fighters may apply. FM (3500 series) - Replace Allison Automatic Transmission Oil every 5 years (or when required).
                                                                </p>
                                                            </div>
                                                            <div class="tab-pane " id="fighter_manualfm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 4x2 Manual (FM Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>30,000km or<br>12 months</th>
                                                                                <th>60,000km or<br>24 months</th>
                                                                                <th>90,000km or<br>36 months</th>
                                                                                <th>120,000km or<br>48 months</th>
                                                                                <th>150,000km or<br>60 months</th>
                                                                                <th>180,000km or<br>72 months</th>
                                                                                <th>210,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,638.41</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$2,981.15</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,982.21</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>240,000km or<br>96 months</th>
                                                                                <th>270,000km or<br>108 months</th>
                                                                                <th>300,000km or<br>120 months</th>
                                                                                <th>330,000km or<br>132 months</th>
                                                                                <th>360,000km or<br>144 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,981.15</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$2,638.41</td>
                                                                                <td>$946.01</td>
                                                                                <td>$3,308.99</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="fighter_fn">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_automatic2fm" data-toggle="tab" aria-expanded="true">
                                                                    6 x 2 <div>Automatic</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_manual2fm" data-toggle="tab" aria-expanded="false">
                                                                    6 x 2 <div>Manual</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_automatic4fm" data-toggle="tab" aria-expanded="true">
                                                                    6 x 4 <div>Automatic</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_manual4fm" data-toggle="tab" aria-expanded="false">
                                                                    6 x 4 <div>Manual</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="fighter_automatic2fm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 6x2 Automatic (FN Model) <sup>#</sup></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>30,000km or<br>12 months</th>
                                                                                <th>60,000km or<br>24 months</th>
                                                                                <th>90,000km or<br>36 months</th>
                                                                                <th>120,000km or<br>48 months</th>
                                                                                <th>150,000km or<br>60 months</th>
                                                                                <th>180,000km or<br>72 months</th>
                                                                                <th>210,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,559.33</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$3,470.77</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,903.12</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>240,000km or<br>96 months</th>
                                                                                <th>270,000km or<br>108 months</th>
                                                                                <th>300,000km or<br>120 months</th>
                                                                                <th>330,000km or<br>132 months</th>
                                                                                <th>360,000km or<br>144 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$3,470.77</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$2,559.33</td>
                                                                                <td>$946.01</td>
                                                                                <td>$3,559.36</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <p># Additional charges for selected Automatic Fighters may apply. FN (3500 series) - Replace Allison Automatic Transmission Oil every 5 years (or when required).</p>
                                                            </div>
                                                            <div class="tab-pane " id="fighter_manual2fm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 6x2 Manual (FN Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>30,000km or<br>12 months</th>
                                                                                <th>60,000km or<br>24 months</th>
                                                                                <th>90,000km or<br>36 months</th>
                                                                                <th>120,000km or<br>48 months</th>
                                                                                <th>150,000km or<br>60 months</th>
                                                                                <th>180,000km or<br>72 months</th>
                                                                                <th>210,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</th>
                                                                                <td class="service">2nd Service</th>
                                                                                <td class="service">3rd Service</th>
                                                                                <td class="service">4th Service</th>
                                                                                <td class="service">5th Service</th>
                                                                                <td class="service">6th Service</th>
                                                                                <td class="service">7th Service</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,671.06</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$3,582.49</td>
                                                                                <td>$946.01</td>
                                                                                <td>$3,014.85</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>240,000km or<br>96 months</th>
                                                                                <th>270,000km or<br>108 months</th>
                                                                                <th>300,000km or<br>120 months</th>
                                                                                <th>330,000km or<br>132 months</th>
                                                                                <th>360,000km or<br>144 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$3,582.49</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$2,671.06</td>
                                                                                <td>$946.01</td>
                                                                                <td>$3,910.34</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane " id="fighter_automatic4fm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 6x4 Automatic (FN Model) <sup>#</sup></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>30,000km or<br>12 months</th>
                                                                                <th>60,000km or<br>24 months</th>
                                                                                <th>90,000km or<br>36 months</th>
                                                                                <th>120,000km or<br>48 months</th>
                                                                                <th>150,000km or<br>60 months</th>
                                                                                <th>180,000km or<br>72 months</th>
                                                                                <th>210,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,669.85</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$3,169.03</td>
                                                                                <td>$946.01</td>
                                                                                <td>$3,013.64</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>240,000km or<br>96 months</th>
                                                                                <th>270,000km or<br>108 months</th>
                                                                                <th>300,000km or<br>120 months</th>
                                                                                <th>330,000km or<br>132 months</th>
                                                                                <th>360,000km or<br>144 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$3,169.03</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$2,669.85</td>
                                                                                <td>$946.01</td>
                                                                                <td>$3,257.62</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <p># Additional charges for selected Automatic Fighters may apply. FN (3500 series) - Replace Allison Automatic Transmission Oil every 5 years (or when required).</p>
                                                            </div>
                                                            <div class="tab-pane " id="fighter_manual4fm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 6x4 Manual (FN Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>30,000km or<br>12 months</th>
                                                                                <th>60,000km or<br>24 months</th>
                                                                                <th>90,000km or<br>36 months</th>
                                                                                <th>120,000km or<br>48 months</th>
                                                                                <th>150,000km or<br>60 months</th>
                                                                                <th>180,000km or<br>72 months</th>
                                                                                <th>210,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,771.53</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$3,270.71</td>
                                                                                <td>$946.01</td>
                                                                                <td>$3,115.32</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>240,000km or<br>96 months</th>
                                                                                <th>270,000km or<br>108 months</th>
                                                                                <th>300,000km or<br>120 months</th>
                                                                                <th>330,000km or<br>132 months</th>
                                                                                <th>360,000km or<br>144 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$3,270.71</td>
                                                                                <td>$1,560.96</td>
                                                                                <td>$2,771.53</td>
                                                                                <td>$946.01</td>
                                                                                <td>$3,598.55</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="fighter_tab2">
                                                <div class="responsive custom-scrollbar">
                                                    <ul class="nav nav-pills">
                                                        <li class="tab-title" id="">
                                                            <a href="#fighter_eurofk" data-toggle="tab" aria-expanded="true">
                                                            FK</a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#fighter_eurofm" data-toggle="tab" aria-expanded="false">
                                                            FM</a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#fighter_eurofn" data-toggle="tab" aria-expanded="false">
                                                            FN</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="fighter_eurofk">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_euroautomatic" data-toggle="tab" aria-expanded="true">
                                                                    4 x 2 <div>Automatic</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_euromanual" data-toggle="tab" aria-expanded="false">
                                                                    4 x 2 <div>Manual</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="fighter_euroautomatic">
                                                                <div class="responsive custom-scrollbar">
                                                                    <ul class="nav nav-pills">
                                                                        <li class="tab-title" id="">
                                                                            <a href="#fighter_euroairover" data-toggle="tab" aria-expanded="true">
                                                                            Air Over</a>
                                                                        </li>
                                                                        <li class="tab-title" id="">
                                                                            <a href="#fighter_eurofullair" data-toggle="tab" aria-expanded="false">
                                                                            Full Air</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane" id="fighter_euroairover">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Fighter 4x2 Automatic Air Over (FK Model) <sup>#</sup></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>20,000km or<br>12 months</th>
                                                                                        <th>40,000km or<br>24 months</th>
                                                                                        <th>60,000km or<br>36 months</th>
                                                                                        <th>80,000km or<br>48 months</th>
                                                                                        <th>100,000km or<br>60 months</th>
                                                                                        <th>120,000km or<br>72 months</th>
                                                                                        <th>140,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">1st Service</td>
                                                                                        <td class="service">2nd Service</td>
                                                                                        <td class="service">3rd Service</td>
                                                                                        <td class="service">4th Service</td>
                                                                                        <td class="service">5th Service</td>
                                                                                        <td class="service">6th Service</td>
                                                                                        <td class="service">7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$896.65</td>
                                                                                        <td>$2,509.48</td>
                                                                                        <td>$896.65</td>
                                                                                        <td>$2,509.48</td>
                                                                                        <td>$896.65</td>
                                                                                        <td>$2,509.48</td>
                                                                                        <td>$1,075.33</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>160,000km or<br>96 months</th>
                                                                                        <th>180,000km or<br>108 months</th>
                                                                                        <th>200,000km or<br>120 months</th>
                                                                                        <th>220,000km or<br>132 months</th>
                                                                                        <th>240,000km or<br>144 months</th>
                                                                                        <th>260,000km or<br>156 months</th>
                                                                                        <th>280,000km or<br>168 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">8th Service</td>
                                                                                        <td class="service">9th Service</td>
                                                                                        <td class="service">10th Service</td>
                                                                                        <td class="service">11th Service</td>
                                                                                        <td class="service">12th Service</td>
                                                                                        <td class="service">13th Service</td>
                                                                                        <td class="service">14th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$2,509.48</td>
                                                                                        <td>$896.65</td>
                                                                                        <td>$2,509.48</td>
                                                                                        <td>$896.65</td>
                                                                                        <td>$2,509.48</td>
                                                                                        <td>$896.65</td>
                                                                                        <td>$2,688.15</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>300,000km or<br>180 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">15th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$896.65</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <p># Additional charges for selected Automatic Fighters may apply. Fighter FK (2500 series) - Replace Allison Automatic Transmission Oil & Automatic Transmission Air Filter every 5 years (or when required).</p>
                                                                    </div>
                                                                    <div class="tab-pane" id="fighter_eurofullair">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Fighter 4x2 Automatic Full Air (FK Model) <sup>#</sup></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>20,000km or<br>12 months</th>
                                                                                        <th>40,000km or<br>24 months</th>
                                                                                        <th>60,000km or<br>36 months</th>
                                                                                        <th>80,000km or<br>48 months</th>
                                                                                        <th>100,000km or<br>60 months</th>
                                                                                        <th>120,000km or<br>72 months</th>
                                                                                        <th>140,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">1st Service</td>
                                                                                        <td class="service">2nd Service</td>
                                                                                        <td class="service">3rd Service</td>
                                                                                        <td class="service">4th Service</td>
                                                                                        <td class="service">5th Service</td>
                                                                                        <td class="service">6th Service</td>
                                                                                        <td class="service">7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,346.98</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,509.48</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,346.98</td>
                                                                                        <td>$1,036.48</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>160,000km or<br>96 months</th>
                                                                                        <th>180,000km or<br>108 months</th>
                                                                                        <th>200,000km or<br>120 months</th>
                                                                                        <th>220,000km or<br>132 months</th>
                                                                                        <th>240,000km or<br>144 months</th>
                                                                                        <th>260,000km or<br>156 months</th>
                                                                                        <th>280,000km or<br>168 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">8th Service</td>
                                                                                        <td class="service">9th Service</td>
                                                                                        <td class="service">10th Service</td>
                                                                                        <td class="service">11th Service</td>
                                                                                        <td class="service">12th Service</td>
                                                                                        <td class="service">13th Service</td>
                                                                                        <td class="service">14th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$2,346.98</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,346.98</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,346.98</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,525.65</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>300,000km or<br>180 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">15th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$857.80</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <p># Additional charges for selected Automatic Fighters may apply. Fighter FK (2500 series) - Replace Allison Automatic Transmission Oil & Automatic Transmission Air Filter every 5 years (or when required).</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane " id="fighter_euromanual">
                                                                <div class="responsive custom-scrollbar">
                                                                    <ul class="nav nav-pills">
                                                                        <li class="tab-title" id="">
                                                                            <a href="#fighter_euroairover1" data-toggle="tab" aria-expanded="true">
                                                                            Air Over</a>
                                                                        </li>
                                                                        <li class="tab-title" id="">
                                                                            <a href="#fighter_eurofullair1" data-toggle="tab" aria-expanded="false">
                                                                            Full Air</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane" id="fighter_euroairover1">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Fighter 4x2 Manual Air Over (FK Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>20,000km or<br>12 months</th>
                                                                                        <th>40,000km or<br>24 months</th>
                                                                                        <th>60,000km or<br>36 months</th>
                                                                                        <th>80,000km or<br>48 months</th>
                                                                                        <th>100,000km or<br>60 months</th>
                                                                                        <th>120,000km or<br>72 months</th>
                                                                                        <th>140,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">1st Service</td>
                                                                                        <td class="service">2nd Service</td>
                                                                                        <td class="service">3rd Service</td>
                                                                                        <td class="service">4th Service</td>
                                                                                        <td class="service">5th Service</td>
                                                                                        <td class="service">6th Service</td>
                                                                                        <td class="service">7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,561.17</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,561.17</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,561.17</td>
                                                                                        <td>$1,036.48</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>160,000km or<br>96 months</th>
                                                                                        <th>180,000km or<br>108 months</th>
                                                                                        <th>200,000km or<br>120 months</th>
                                                                                        <th>220,000km or<br>132 months</th>
                                                                                        <th>240,000km or<br>144 months</th>
                                                                                        <th>260,000km or<br>156 months</th>
                                                                                        <th>280,000km or<br>168 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">8th Service</td>
                                                                                        <td class="service">9th Service</td>
                                                                                        <td class="service">10th Service</td>
                                                                                        <td class="service">11th Service</td>
                                                                                        <td class="service">12th Service</td>
                                                                                        <td class="service">13th Service</td>
                                                                                        <td class="service">14th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$2,561.17</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,561.17</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,561.17</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,739.84</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>300,000km or<br>180 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">15th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$857.80</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="fighter_eurofullair1">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Fighter 4x2 Manual Full Air (FK Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>20,000km or<br>12 months</th>
                                                                                        <th>40,000km or<br>24 months</th>
                                                                                        <th>60,000km or<br>36 months</th>
                                                                                        <th>80,000km or<br>48 months</th>
                                                                                        <th>100,000km or<br>60 months</th>
                                                                                        <th>120,000km or<br>72 months</th>
                                                                                        <th>140,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">1st Service</td>
                                                                                        <td class="service">2nd Service</td>
                                                                                        <td class="service">3rd Service</td>
                                                                                        <td class="service">4th Service</td>
                                                                                        <td class="service">5th Service</td>
                                                                                        <td class="service">6th Service</td>
                                                                                        <td class="service">7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,451.41</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,451.41</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,451.41</td>
                                                                                        <td>$1,036.48</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>160,000km or<br>96 months</th>
                                                                                        <th>180,000km or<br>108 months</th>
                                                                                        <th>200,000km or<br>120 months</th>
                                                                                        <th>220,000km or<br>132 months</th>
                                                                                        <th>240,000km or<br>144 months</th>
                                                                                        <th>260,000km or<br>156 months</th>
                                                                                        <th>280,000km or<br>168 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">8th Service</td>
                                                                                        <td class="service">9th Service</td>
                                                                                        <td class="service">10th Service</td>
                                                                                        <td class="service">11th Service</td>
                                                                                        <td class="service">12th Service</td>
                                                                                        <td class="service">13th Service</td>
                                                                                        <td class="service">14th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$2,451.41</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,451.41</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,451.41</td>
                                                                                        <td>$857.80</td>
                                                                                        <td>$2,630.08</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>300,000km or<br>180 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td class="service">15th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$857.80</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="fighter_eurofm">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_euroautomaticfm" data-toggle="tab" aria-expanded="true">
                                                                    4 x 2 <div>Automatic</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_euromanualfm" data-toggle="tab" aria-expanded="false">
                                                                    4 x 2 <div>Manual</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="fighter_euroautomaticfm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 4x2 Automatic (FM Model) <sup>#</sup></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>20,000km or<br>12 months</th>
                                                                                <th>40,000km or<br>24 months</th>
                                                                                <th>60,000km or<br>36 months</th>
                                                                                <th>80,000km or<br>48 months</th>
                                                                                <th>100,000km or<br>60 months</th>
                                                                                <th>120,000km or<br>72 months</th>
                                                                                <th>140,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,462.88</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,462.88</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,462.88</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>160,000km or<br>96 months</th>
                                                                                <th>180,000km or<br>108 months</th>
                                                                                <th>200,000km or<br>120 months</th>
                                                                                <th>220,000km or<br>132 months</th>
                                                                                <th>240,000km or<br>144 months</th>
                                                                                <th>260,000km or<br>156 months</th>
                                                                                <th>280,000km or<br>168 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                                <td class="service">13th Service</td>
                                                                                <td class="service">14th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,462.88</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,462.88</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,462.88</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,641.56</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>300,000km or<br>180 months</th>
                                                                                <th>320,000km or<br>192 months</th>
                                                                                <th>340,000km or<br>204 months</th>
                                                                                <th>360,000km or<br>216 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">15th Service</td>
                                                                                <td class="service">16th Service</td>
                                                                                <td class="service">17th Service</td>
                                                                                <td class="service">18th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,462.88</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,462.88</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <p># Additional charges for selected Automatic Fighters may apply. FM (3500 series) - Replace Allison Automatic Transmission Oil every 5 years (or when required).</p>
                                                            </div>
                                                            <div class="tab-pane" id="fighter_euromanualfm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 4x2 Manual (FM Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>20,000km or<br>12 months</th>
                                                                                <th>40,000km or<br>24 months</th>
                                                                                <th>60,000km or<br>36 months</th>
                                                                                <th>80,000km or<br>48 months</th>
                                                                                <th>100,000km or<br>60 months</th>
                                                                                <th>120,000km or<br>72 months</th>
                                                                                <th>140,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,574.61</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,574.61</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,574.61</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>160,000km or<br>96 months</th>
                                                                                <th>180,000km or<br>108 months</th>
                                                                                <th>200,000km or<br>120 months</th>
                                                                                <th>220,000km or<br>132 months</th>
                                                                                <th>240,000km or<br>144 months</th>
                                                                                <th>260,000km or<br>156 months</th>
                                                                                <th>280,000km or<br>168 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                                <td class="service">13th Service</td>
                                                                                <td class="service">14th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,574.61</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,574.61</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,574.61</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,573.28</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>300,000km or<br>180 months</th>
                                                                                <th>320,000km or<br>192 months</th>
                                                                                <th>340,000km or<br>204 months</th>
                                                                                <th>360,000km or<br>216 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">15th Service</td>
                                                                                <td class="service">16th Service</td>
                                                                                <td class="service">17th Service</td>
                                                                                <td class="service">18th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,574.61</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,574.61</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="fighter_eurofn">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_euroautomatic2fm" data-toggle="tab" aria-expanded="true">
                                                                    6 x 2 <div>Automatic</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_euromanual2fm" data-toggle="tab" aria-expanded="false">
                                                                    6 x 2 <div>Manual</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_euroautomatic4fm" data-toggle="tab" aria-expanded="true">
                                                                    6 x 4 <div>Automatic</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#fighter_euromanual4fm" data-toggle="tab" aria-expanded="false">
                                                                    6 x 4 <div>Manual</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="fighter_euroautomatic2fm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 6x2 Automatic (FN Model) <sup>#</sup></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>20,000km or<br>12 months</th>
                                                                                <th>40,000km or<br>24 months</th>
                                                                                <th>60,000km or<br>36 months</th>
                                                                                <th>80,000km or<br>48 months</th>
                                                                                <th>100,000km or<br>60 months</th>
                                                                                <th>120,000km or<br>72 months</th>
                                                                                <th>140,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,495.53</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,495.53</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,495.53</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>160,000km or<br>96 months</th>
                                                                                <th>180,000km or<br>108 months</th>
                                                                                <th>200,000km or<br>120 months</th>
                                                                                <th>220,000km or<br>132 months</th>
                                                                                <th>240,000km or<br>144 months</th>
                                                                                <th>260,000km or<br>156 months</th>
                                                                                <th>280,000km or<br>168 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                                <td class="service">13th Service</td>
                                                                                <td class="service">14th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,495.53</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,495.53</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,495.53</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,674.20</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>300,000km or<br>180 months</th>
                                                                                <th>320,000km or<br>192 months</th>
                                                                                <th>340,000km or<br>204 months</th>
                                                                                <th>360,000km or<br>216 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">15th Service</td>
                                                                                <td class="service">16th Service</td>
                                                                                <td class="service">17th Service</td>
                                                                                <td class="service">18th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,495.53</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,495.53</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <p># Additional charges for selected Automatic Fighters may apply. FN (3500 series) - Replace Allison Automatic Transmission Oil every 5 years (or when required).</p>
                                                            </div>
                                                            <div class="tab-pane " id="fighter_euromanual2fm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 6x2 Manual (FN Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>20,000km or<br>12 months</th>
                                                                                <th>40,000km or<br>24 months</th>
                                                                                <th>60,000km or<br>36 months</th>
                                                                                <th>80,000km or<br>48 months</th>
                                                                                <th>100,000km or<br>60 months</th>
                                                                                <th>120,000km or<br>72 months</th>
                                                                                <th>140,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,607.26</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,607.26</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,607.26</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>160,000km or<br>96 months</th>
                                                                                <th>180,000km or<br>108 months</th>
                                                                                <th>200,000km or<br>120 months</th>
                                                                                <th>220,000km or<br>132 months</th>
                                                                                <th>240,000km or<br>144 months</th>
                                                                                <th>260,000km or<br>156 months</th>
                                                                                <th>280,000km or<br>168 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                                <td class="service">13th Service</td>
                                                                                <td class="service">14th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,607.26</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,607.26</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,607.26</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,785.93</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>300,000km or<br>180 months</th>
                                                                                <th>320,000km or<br>192 months</th>
                                                                                <th>340,000km or<br>204 months</th>
                                                                                <th>360,000km or<br>216 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">15th Service</td>
                                                                                <td class="service">16th Service</td>
                                                                                <td class="service">17th Service</td>
                                                                                <td class="service">18th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,607.26</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,607.26</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane " id="fighter_euroautomatic4fm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 6x4 Automatic (FN Model) <sup>#</sup></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>20,000km or<br>12 months</th>
                                                                                <th>40,000km or<br>24 months</th>
                                                                                <th>60,000km or<br>36 months</th>
                                                                                <th>80,000km or<br>48 months</th>
                                                                                <th>100,000km or<br>60 months</th>
                                                                                <th>120,000km or<br>72 months</th>
                                                                                <th>140,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,606.05</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,606.05</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,606.05</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>160,000km or<br>96 months</th>
                                                                                <th>180,000km or<br>108 months</th>
                                                                                <th>200,000km or<br>120 months</th>
                                                                                <th>220,000km or<br>132 months</th>
                                                                                <th>240,000km or<br>144 months</th>
                                                                                <th>260,000km or<br>156 months</th>
                                                                                <th>280,000km or<br>168 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                                <td class="service">13th Service</td>
                                                                                <td class="service">14th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,606.05</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,606.05</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,606.05</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,784.72</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>300,000km or<br>180 months</th>
                                                                                <th>320,000km or<br>192 months</th>
                                                                                <th>340,000km or<br>204 months</th>
                                                                                <th>360,000km or<br>216 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">15th Service</td>
                                                                                <td class="service">16th Service</td>
                                                                                <td class="service">17th Service</td>
                                                                                <td class="service">18th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,606.05</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,606.05</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <p># Additional charges for selected Automatic Fighters may apply. FN (3500 series) - Replace Allison Automatic Transmission Oil every 5 years (or when required).</p>
                                                            </div>
                                                            <div class="tab-pane " id="fighter_euromanual4fm">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Fighter 6x4 Manual (FN Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>20,000km or<br>12 months</th>
                                                                                <th>40,000km or<br>24 months</th>
                                                                                <th>60,000km or<br>36 months</th>
                                                                                <th>80,000km or<br>48 months</th>
                                                                                <th>100,000km or<br>60 months</th>
                                                                                <th>120,000km or<br>72 months</th>
                                                                                <th>140,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">1st Service</td>
                                                                                <td class="service">2nd Service</td>
                                                                                <td class="service">3rd Service</td>
                                                                                <td class="service">4th Service</td>
                                                                                <td class="service">5th Service</td>
                                                                                <td class="service">6th Service</td>
                                                                                <td class="service">7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,707.73</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,707.73</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,707.73</td>
                                                                                <td>$1,124.68</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>160,000km or<br>96 months</th>
                                                                                <th>180,000km or<br>108 months</th>
                                                                                <th>200,000km or<br>120 months</th>
                                                                                <th>220,000km or<br>132 months</th>
                                                                                <th>240,000km or<br>144 months</th>
                                                                                <th>260,000km or<br>156 months</th>
                                                                                <th>280,000km or<br>168 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">8th Service</td>
                                                                                <td class="service">9th Service</td>
                                                                                <td class="service">10th Service</td>
                                                                                <td class="service">11th Service</td>
                                                                                <td class="service">12th Service</td>
                                                                                <td class="service">13th Service</td>
                                                                                <td class="service">14th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,707.73</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,707.73</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,707.73</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,886.40</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>300,000km or<br>180 months</th>
                                                                                <th>320,000km or<br>192 months</th>
                                                                                <th>340,000km or<br>204 months</th>
                                                                                <th>360,000km or<br>216 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td class="service">15th Service</td>
                                                                                <td class="service">16th Service</td>
                                                                                <td class="service">17th Service</td>
                                                                                <td class="service">18th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$946.01</td>
                                                                                <td>$2,707.73</td>
                                                                                <td>$946.01</td>
                                                                                <td>$2,707.73</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="heading icon icon-caret-down collapsed" data-toggle="collapse" href="#collapseEX3" aria-expanded="false">
                                        <div class="panel-title">Shogun <i class="dtm-angle-right"></i></div>
                                    </div>
                                    <div class="panel-collapse collapse pt-3" id="collapseEX3" aria-expanded="false" style="height: 0px;">
                                        <div class="responsive custom-scrollbar">
                                            <ul class="nav nav-pills">
                                                <li class="tab-title" id="">
                                                    <a href="#shogun_tab1" data-toggle="tab">
                                                    Shogun MY17</a>
                                                </li>
                                                <li class="tab-title" id="">
                                                    <a href="#shogun_tab2" data-toggle="tab">
                                                    Shogun MY21</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="shogun_tab1">
                                                <div class="responsive custom-scrollbar">
                                                    <ul class="nav nav-pills">
                                                        <li class="tab-title" id="">
                                                            <a href="#shogun_400" data-toggle="tab" aria-expanded="true">
                                                            400 / 460</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="shogun_400">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#shogun_mover" data-toggle="tab" aria-expanded="true">
                                                                    4 x 2 <div>Prime Mover</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#shogun_prime" data-toggle="tab" aria-expanded="false">
                                                                    6 x 4 <div>Prime Mover / Rigid</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#shogun_rigid" data-toggle="tab" aria-expanded="false">
                                                                    8 x 4 <div>Rigid</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="shogun_mover">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Shogun 4x2 Prime Mover (400 / 460 Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>50,000km or<br>12 months</th>
                                                                                <th>100,000km or<br>24 months</th>
                                                                                <th>150,000km or<br>36 months</th>
                                                                                <th>200,000km or<br>48 months</th>
                                                                                <th>250,000km or<br>60 months</th>
                                                                                <th>300,000km or<br>72 months</th>
                                                                                <th>350,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>1st Service</td>
                                                                                <td>2nd Service</td>
                                                                                <td>3rd Service</td>
                                                                                <td>4th Service</td>
                                                                                <td>5th Service</td>
                                                                                <td>6th Service</td>
                                                                                <td>7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$875.11</td>
                                                                                <td>$3,051.08</td>
                                                                                <td>$2,166.83</td>
                                                                                <td>$3,051.08</td>
                                                                                <td>$875.11</td>
                                                                                <td>$6,680.71</td>
                                                                                <td>$875.11</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>400,000km or<br>96 months</th>
                                                                                <th>450,000km or<br>108 months</th>
                                                                                <th>500,000km or<br>120 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>8th Service</td>
                                                                                <td>9th Service</td>
                                                                                <td>10th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$3,051.08</td>
                                                                                <td>$2,166.83</td>
                                                                                <td>$4,738.42</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>     
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane " id="shogun_prime">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Shogun 6x4 Prime Mover / Rigid (400 / 460 Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>50,000km or<br>12 months</th>
                                                                                <th>100,000km or<br>24 months</th>
                                                                                <th>150,000km or<br>36 months</th>
                                                                                <th>200,000km or<br>48 months</th>
                                                                                <th>250,000km or<br>60 months</th>
                                                                                <th>300,000km or<br>72 months</th>
                                                                                <th>350,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>1st Service</td>
                                                                                <td>2nd Service</td>
                                                                                <td>3rd Service</td>
                                                                                <td>4th Service</td>
                                                                                <td>5th Service</td>
                                                                                <td>6th Service</td>
                                                                                <td>7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$1,294.91</td>
                                                                                <td>$3,621.98</td>
                                                                                <td>$2,765.83</td>
                                                                                <td>$3,621.98</td>
                                                                                <td>$1,294.91</td>
                                                                                <td>$6,780.24</td>
                                                                                <td>$1,294.91</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>400,000km or<br>96 months</th>
                                                                                <th>450,000km or<br>108 months</th>
                                                                                <th>500,000km or<br>120 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>8th Service</td>
                                                                                <td>9th Service</td>
                                                                                <td>10th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$3,621.98</td>
                                                                                <td>$2,765.83</td>
                                                                                <td>$5,309.32</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>      
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane " id="shogun_rigid">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Shogun 8x4 Rigid (400 / 460 Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>50,000km or<br>12 months</th>
                                                                                <th>100,000km or<br>24 months</th>
                                                                                <th>150,000km or<br>36 months</th>
                                                                                <th>200,000km or<br>48 months</th>
                                                                                <th>250,000km or<br>60 months</th>
                                                                                <th>300,000km or<br>72 months</th>
                                                                                <th>350,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>1st Service</td>
                                                                                <td>2nd Service</td>
                                                                                <td>3rd Service</td>
                                                                                <td>4th Service</td>
                                                                                <td>5th Service</td>
                                                                                <td>6th Service</td>
                                                                                <td>7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$1,346.65</td>
                                                                                <td>$3,685.88</td>
                                                                                <td>$2,622.12</td>
                                                                                <td>$3,685.88</td>
                                                                                <td>$1,346.65</td>
                                                                                <td>$6,746.47</td>
                                                                                <td>$1,346.65</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>400,000km or<br>96 months</th>
                                                                                <th>450,000km or<br>108 months</th>
                                                                                <th>500,000km or<br>120 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>8th Service</td>
                                                                                <td>9th Service</td>
                                                                                <td>10th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$3,685.88</td>
                                                                                <td>$2,717.82</td>
                                                                                <td>$5,373.22</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>       
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="shogun_tab2">
                                                <div class="responsive custom-scrollbar">
                                                    <ul class="nav nav-pills">
                                                        <li class="tab-title" id="">
                                                            <a href="#shogun2_360" data-toggle="tab" aria-expanded="true">
                                                            360</a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#shogun2_400" data-toggle="tab" aria-expanded="false">
                                                            400 / 460</a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#shogun2_510" data-toggle="tab" aria-expanded="false">
                                                            510</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="shogun2_360">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#shogun2_2rigid" data-toggle="tab" aria-expanded="true">
                                                                    6 x 2 <div>Rigid</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#shogun2_4rigid" data-toggle="tab" aria-expanded="false">
                                                                    6 x 4 <div>Rigid</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="shogun2_2rigid">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Shogun 6x2 Rigid (360 Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>50,000km or<br>12 months</th>
                                                                                <th>100,000km or<br>24 months</th>
                                                                                <th>150,000km or<br>36 months</th>
                                                                                <th>200,000km or<br>48 months</th>
                                                                                <th>250,000km or<br>60 months</th>
                                                                                <th>300,000km or<br>72 months</th>
                                                                                <th>350,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>1st Service</td>
                                                                                <td>2nd Service</td>
                                                                                <td>3rd Service</td>
                                                                                <td>4th Service</td>
                                                                                <td>5th Service</td>
                                                                                <td>6th Service</td>
                                                                                <td>7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$823.36</td>
                                                                                <td>$2,644.37</td>
                                                                                <td>$1,871.42</td>
                                                                                <td>$2,644.37</td>
                                                                                <td>$823.36</td>
                                                                                <td>$5,456.13</td>
                                                                                <td>$823.36</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>400,000km or<br>96 months</th>
                                                                                <th>450,000km or<br>108 months</th>
                                                                                <th>500,000km or<br>120 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>8th Service</td>
                                                                                <td>9th Service</td>
                                                                                <td>10th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,644.37</td>
                                                                                <td>$1,871.42</td>
                                                                                <td>$4,331.70</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>    
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="shogun2_4rigid">
                                                                <div class="responsive custom-scrollbar">
                                                                    <ul class="nav nav-pills">
                                                                        <li class="tab-title" id="">
                                                                            <a href="#shogun2_withlsd" data-toggle="tab" aria-expanded="true">
                                                                            With LSD</a>
                                                                        </li>
                                                                        <li class="tab-title" id="">
                                                                            <a href="#shogun2_withoutlsd" data-toggle="tab" aria-expanded="false">
                                                                            Without LSD</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane" id="shogun2_withlsd">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Shogun 6x4 Rigid With LSD (360 Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>50,000km or<br>12 months</th>
                                                                                        <th>100,000km or<br>24 months</th>
                                                                                        <th>150,000km or<br>36 months</th>
                                                                                        <th>200,000km or<br>48 months</th>
                                                                                        <th>250,000km or<br>60 months</th>
                                                                                        <th>300,000km or<br>72 months</th>
                                                                                        <th>350,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>1st Service</td>
                                                                                        <td>2nd Service</td>
                                                                                        <td>3rd Service</td>
                                                                                        <td>4th Service</td>
                                                                                        <td>5th Service</td>
                                                                                        <td>6th Service</td>
                                                                                        <td>7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$1,061.20</td>
                                                                                        <td>$3,233.11</td>
                                                                                        <td>$2,088.45</td>
                                                                                        <td>$3,233.11</td>
                                                                                        <td>$1,061.20</td>
                                                                                        <td>$5,587.36</td>
                                                                                        <td>$1,061.20</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>400,000km or<br>120 months</th>
                                                                                        <th>450,000km or<br>108 months</th>
                                                                                        <th>500,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>8th Service</td>
                                                                                        <td>9th Service</td>
                                                                                        <td>10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$3,233.11</td>
                                                                                        <td>$2,088.45</td>
                                                                                        <td>$4,920.44</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="shogun2_withoutlsd">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Shogun 6x4 Rigid Without LSD (360 Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>50,000km or<br>12 months</th>
                                                                                        <th>100,000km or<br>24 months</th>
                                                                                        <th>150,000km or<br>36 months</th>
                                                                                        <th>200,000km or<br>48 months</th>
                                                                                        <th>250,000km or<br>60 months</th>
                                                                                        <th>300,000km or<br>72 months</th>
                                                                                        <th>350,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>1st Service</td>
                                                                                        <td>2nd Service</td>
                                                                                        <td>3rd Service</td>
                                                                                        <td>4th Service</td>
                                                                                        <td>5th Service</td>
                                                                                        <td>6th Service</td>
                                                                                        <td>7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$823.36</td>
                                                                                        <td>$2,995.27</td>
                                                                                        <td>$1,850.61</td>
                                                                                        <td>$2,995.27</td>
                                                                                        <td>$823.36</td>
                                                                                        <td>$5,587.36</td>
                                                                                        <td>$823.36</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>400,000km or<br>96 months</th>
                                                                                        <th>450,000km or<br>108 months</th>
                                                                                        <th>500,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>8th Service</td>
                                                                                        <td>9th Service</td>
                                                                                        <td>10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$2,995.27</td>
                                                                                        <td>$1,850.61</td>
                                                                                        <td>$4,682.60</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="shogun2_400">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#shogun2_mover" data-toggle="tab" aria-expanded="true">
                                                                    4 x 2 <div>Prime Mover</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#shogun2_prime" data-toggle="tab" aria-expanded="false">
                                                                    6 x 4 <div>Prime Mover / Rigid</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#shogun2_rigid" data-toggle="tab" aria-expanded="false">
                                                                    8 x 4 <div>Rigid</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="shogun2_mover">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Shogun 4x2 Prime Mover (400 / 460 Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>50,000km or<br>12 months</th>
                                                                                <th>100,000km or<br>24 months</th>
                                                                                <th>150,000km or<br>36 months</th>
                                                                                <th>200,000km or<br>48 months</th>
                                                                                <th>250,000km or<br>60 months</th>
                                                                                <th>300,000km or<br>72 months</th>
                                                                                <th>350,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>1st Service</td>
                                                                                <td>2nd Service</td>
                                                                                <td>3rd Service</td>
                                                                                <td>4th Service</td>
                                                                                <td>5th Service</td>
                                                                                <td>6th Service</td>
                                                                                <td>7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$823.36</td>
                                                                                <td>$2,735.74</td>
                                                                                <td>$1,871.42</td>
                                                                                <td>$2,735.74</td>
                                                                                <td>$823.36</td>
                                                                                <td>$5,547.49</td>
                                                                                <td>$823.36</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>400,000km or<br>96 months</th>
                                                                                <th>450,000km or<br>108 months</th>
                                                                                <th>500,000km or<br>120 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>8th Service</td>
                                                                                <td>9th Service</td>
                                                                                <td>10th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,735.74</td>
                                                                                <td>$1,871.42</td>
                                                                                <td>$4,423.07</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="shogun2_prime">
                                                                <div class="responsive custom-scrollbar">
                                                                    <ul class="nav nav-pills">
                                                                        <li class="tab-title" id="">
                                                                            <a href="#shogun2_withlsd2" data-toggle="tab" aria-expanded="true">
                                                                            With LSD</a>
                                                                        </li>
                                                                        <li class="tab-title" id="">
                                                                            <a href="#shogun2_withoutlsd2" data-toggle="tab" aria-expanded="false">
                                                                            Without LSD</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane" id="shogun2_withlsd2">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Shogun 6x4 Prime Mover / Rigid With LSD (400 / 460 Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>50,000km or<br>12 months</th>
                                                                                        <th>100,000km or<br>24 months</th>
                                                                                        <th>150,000km or<br>36 months</th>
                                                                                        <th>200,000km or<br>48 months</th>
                                                                                        <th>250,000km or<br>60 months</th>
                                                                                        <th>300,000km or<br>72 months</th>
                                                                                        <th>350,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>1st Service</td>
                                                                                        <td>2nd Service</td>
                                                                                        <td>3rd Service</td>
                                                                                        <td>4th Service</td>
                                                                                        <td>5th Service</td>
                                                                                        <td>6th Service</td>
                                                                                        <td>7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$1,061.20</td>
                                                                                        <td>$3,324.48</td>
                                                                                        <td>$2,220.23</td>
                                                                                        <td>$3,324.48</td>
                                                                                        <td>$1,061.20</td>
                                                                                        <td>$5,810.51</td>
                                                                                        <td>$1,061.20</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>400,000km or<br>96 months</th>
                                                                                        <th>450,000km or<br>108 months</th>
                                                                                        <th>500,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>8th Service</td>
                                                                                        <td>9th Service</td>
                                                                                        <td>10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$3,324.48</td>
                                                                                        <td>$2,220.23</td>
                                                                                        <td>$5,011.81</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="shogun2_withoutlsd2">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Shogun 6x4 Prime Mover / Rigid Without LSD (400 / 460 Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>50,000km or<br>12 months</th>
                                                                                        <th>100,000km or<br>24 months</th>
                                                                                        <th>150,000km or<br>36 months</th>
                                                                                        <th>200,000km or<br>48 months</th>
                                                                                        <th>250,000km or<br>60 months</th>
                                                                                        <th>300,000km or<br>72 months</th>
                                                                                        <th>350,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>1st Service</td>
                                                                                        <td>2nd Service</td>
                                                                                        <td>3rd Service</td>
                                                                                        <td>4th Service</td>
                                                                                        <td>5th Service</td>
                                                                                        <td>6th Service</td>
                                                                                        <td>7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$823.36</td>
                                                                                        <td>$3,086.64</td>
                                                                                        <td>$1,982.39</td>
                                                                                        <td>$3,086.64</td>
                                                                                        <td>$823.36</td>
                                                                                        <td>$5,810.51</td>
                                                                                        <td>$823.36</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>400,000km or<br>96 months</th>
                                                                                        <th>450,000km or<br>108 months</th>
                                                                                        <th>500,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>8th Service</td>
                                                                                        <td>9th Service</td>
                                                                                        <td>10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$3,086.64</td>
                                                                                        <td>$1,982.39</td>
                                                                                        <td>$4,773.97</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="shogun2_rigid">
                                                                <div class="responsive custom-scrollbar">
                                                                    <ul class="nav nav-pills">
                                                                        <li class="tab-title" id="">
                                                                            <a href="#shogun2_withlsd3" data-toggle="tab" aria-expanded="true">
                                                                            With LSD</a>
                                                                        </li>
                                                                        <li class="tab-title" id="">
                                                                            <a href="#shogun2_withoutlsd3" data-toggle="tab" aria-expanded="false">
                                                                            Without LSD</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane" id="shogun2_withlsd3">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Shogun 8x4 Rigid With LSD (400 / 460 Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>50,000km or<br>12 months</th>
                                                                                        <th>100,000km or<br>24 months</th>
                                                                                        <th>150,000km or<br>36 months</th>
                                                                                        <th>200,000km or<br>48 months</th>
                                                                                        <th>250,000km or<br>60 months</th>
                                                                                        <th>300,000km or<br>72 months</th>
                                                                                        <th>350,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>1st Service</td>
                                                                                        <td>2nd Service</td>
                                                                                        <td>3rd Service</td>
                                                                                        <td>4th Service</td>
                                                                                        <td>5th Service</td>
                                                                                        <td>6th Service</td>
                                                                                        <td>7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$1,346.65</td>
                                                                                        <td>$3,685.88</td>
                                                                                        <td>$2,622.12</td>
                                                                                        <td>$3,685.88</td>
                                                                                        <td>$1,346.65</td>
                                                                                        <td>$6,746.47</td>
                                                                                        <td>$1,346.65</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>400,000km or<br>96 months</th>
                                                                                        <th>450,000km or<br>108 months</th>
                                                                                        <th>500,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>8th Service</td>
                                                                                        <td>9th Service</td>
                                                                                        <td>10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$3,685.88</td>
                                                                                        <td>$2,717.82</td>
                                                                                        <td>$5,373.22</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="shogun2_withoutlsd3">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Shogun 8x4 Rigid Without LSD (400 / 460 Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>50,000km or<br>12 months</th>
                                                                                        <th>100,000km or<br>24 months</th>
                                                                                        <th>150,000km or<br>36 months</th>
                                                                                        <th>200,000km or<br>48 months</th>
                                                                                        <th>250,000km or<br>60 months</th>
                                                                                        <th>300,000km or<br>72 months</th>
                                                                                        <th>350,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>1st Service</td>
                                                                                        <td>2nd Service</td>
                                                                                        <td>3rd Service</td>
                                                                                        <td>4th Service</td>
                                                                                        <td>5th Service</td>
                                                                                        <td>6th Service</td>
                                                                                        <td>7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$998.81</td>
                                                                                        <td>$2,779.79</td>
                                                                                        <td>$1,978.33</td>
                                                                                        <td>$2,779.79</td>
                                                                                        <td>$998.81</td>
                                                                                        <td>$5,978.10</td>
                                                                                        <td>$998.81</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>400,000km or<br>96 months</th>
                                                                                        <th>450,000km or<br>108 months</th>
                                                                                        <th>500,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>8th Service</td>
                                                                                        <td>9th Service</td>
                                                                                        <td>10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$2,779.79</td>
                                                                                        <td>$1,978.33</td>
                                                                                        <td>$5,205.93</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="shogun2_510">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#shogun3_primerigid" data-toggle="tab" aria-expanded="true">
                                                                    6 x 4 <div>Prime Mover / Rigid</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="shogun3_primerigid">
                                                                <div class="responsive custom-scrollbar">
                                                                    <ul class="nav nav-pills">
                                                                        <li class="tab-title" id="">
                                                                            <a href="#shogun3_withlsd2" data-toggle="tab" aria-expanded="true">
                                                                            With LSD</a>
                                                                        </li>
                                                                        <li class="tab-title" id="">
                                                                            <a href="#shogun3_withoutlsd2" data-toggle="tab" aria-expanded="false">
                                                                            Without LSD</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane" id="shogun3_withlsd2">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Shogun 6x4 Prime Mover / Rigid With LSD (510 Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>50,000km or<br>12 months</th>
                                                                                        <th>100,000km or<br>24 months</th>
                                                                                        <th>150,000km or<br>36 months</th>
                                                                                        <th>200,000km or<br>48 months</th>
                                                                                        <th>250,000km or<br>60 months</th>
                                                                                        <th>300,000km or<br>72 months</th>
                                                                                        <th>350,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>1st Service</td>
                                                                                        <td>2nd Service</td>
                                                                                        <td>3rd Service</td>
                                                                                        <td>4th Service</td>
                                                                                        <td>5th Service</td>
                                                                                        <td>6th Service</td>
                                                                                        <td>7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$1,061.20</td>
                                                                                        <td>$3,332.78</td>
                                                                                        <td>$2,220.23</td>
                                                                                        <td>$3,332.78</td>
                                                                                        <td>$1,061.20</td>
                                                                                        <td>$5,818.81</td>
                                                                                        <td>$1,061.20</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>400,000km or<br>96 months</th>
                                                                                        <th>450,000km or<br>108 months</th>
                                                                                        <th>500,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>8th Service</td>
                                                                                        <td>9th Service</td>
                                                                                        <td>10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$3,332.78</td>
                                                                                        <td>$2,220.23</td>
                                                                                        <td>$5,020.12</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="shogun3_withoutlsd2">
                                                                        <div class="table-responsive">
                                                                            <table class="table customers">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th colspan="7" class="title">Shogun 6x4 Prime Mover / Rigid Without LSD (510 Model)</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>50,000km or<br>12 months</th>
                                                                                        <th>100,000km or<br>24 months</th>
                                                                                        <th>150,000km or<br>36 months</th>
                                                                                        <th>200,000km or<br>48 months</th>
                                                                                        <th>250,000km or<br>60 months</th>
                                                                                        <th>300,000km or<br>72 months</th>
                                                                                        <th>350,000km or<br>84 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>1st Service</td>
                                                                                        <td>2nd Service</td>
                                                                                        <td>3rd Service</td>
                                                                                        <td>4th Service</td>
                                                                                        <td>5th Service</td>
                                                                                        <td>6th Service</td>
                                                                                        <td>7th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$823.36</td>
                                                                                        <td>$3,094.94</td>
                                                                                        <td>$1,982.39</td>
                                                                                        <td>$3,094.94</td>
                                                                                        <td>$823.36</td>
                                                                                        <td>$5,818.81</td>
                                                                                        <td>$823.36</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>400,000km or<br>96 months</th>
                                                                                        <th>450,000km or<br>108 months</th>
                                                                                        <th>500,000km or<br>120 months</th>
                                                                                    </tr>
                                                                                    <tr class="tr-heading">
                                                                                        <td>8th Service</td>
                                                                                        <td>9th Service</td>
                                                                                        <td>10th Service</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>$3,094.94</td>
                                                                                        <td>$1,982.39</td>
                                                                                        <td>$4,782.28</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="heading icon icon-caret-down collapsed" data-toggle="collapse" href="#collapseEX4" aria-expanded="false">
                                        <div class="panel-title">Heavy <i class="dtm-angle-right"></i></div>
                                    </div>
                                    <div class="panel-collapse collapse pt-3" id="collapseEX4" aria-expanded="false" style="height: 0px;">
                                        <div class="responsive custom-scrollbar">
                                            <ul class="nav nav-pills">
                                                <li class="tab-title" id="">
                                                    <a href="#heavy_fpprime" data-toggle="tab" aria-expanded="true">
                                                    4 x 2 <div>FP Prime Mover</div></a>
                                                </li>
                                                <li class="tab-title" id="">
                                                    <a href="#heavy_fvprime" data-toggle="tab" aria-expanded="false">
                                                    6 x 4 <div>FV Prime Mover</div></a>
                                                </li>
                                                <li class="tab-title" id="">
                                                    <a href="#heavy_fvrigid" data-toggle="tab" aria-expanded="true">
                                                    6 x 4 <div>FV Rigid</div></a>
                                                </li>
                                                <li class="tab-title" id="">
                                                    <a href="#heavy_fsrigid" data-toggle="tab" aria-expanded="false">
                                                    8 x 4 <div>FS Rigid</div></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="heavy_fpprime">
                                                <div class="table-responsive">
                                                    <table class="table customers">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="7" class="title">Heavy 4x2 FP Prime Mover</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>40,000km or<br>12 months</th>
                                                                <th>80,000km or<br>24 months</th>
                                                                <th>120,000km or<br>36 months</th>
                                                                <th>160,000km or<br>48 months</th>
                                                                <th>200,000km or<br>60 months</th>
                                                                <th>240,000km or<br>72 months</th>
                                                                <th>280,000km or<br>84 months</th>
                                                            </tr>
                                                            <tr class="tr-heading">
                                                                <td>1st Service</td>
                                                                <td>2nd Service</td>
                                                                <td>3rd Service</td>
                                                                <td>4th Service</th>
                                                                <td>5th Service</td>
                                                                <td>6th Service</td>
                                                                <td>7th Service</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$1,133.48</td>
                                                                <td>$3,173.76</td>
                                                                <td>$1,721.01</td>
                                                                <td>$3,173.76</td>
                                                                <td>$1,232.40</td>
                                                                <td>$3,761.29</td>
                                                                <td>$1,133.48</td>
                                                            </tr>
                                                            <tr>
                                                                <th>320,000km or<br>96 months</th>
                                                                <th>360,000km or<br>108 months</th>
                                                                <th>400,000km or<br>120 months</th>
                                                                <th>440,000km or<br>132 months</th>
                                                                <th>480,000km or<br>144 months</th>
                                                                <th>520,000km or<br>156 months</th>
                                                            </tr>
                                                            <tr class="tr-heading">
                                                                <td>8th Service</td>
                                                                <td>9th Service</td>
                                                                <td>10th Service</td>
                                                                <td>11th Service</td>
                                                                <td>12th Service</td>
                                                                <td>13th Service</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$3,173.76</td>
                                                                <td>$1,721.01</td>
                                                                <td>$3,213.83</td>
                                                                <td>$1,133.48</td>
                                                                <td>$3,761.29</td>
                                                                <td>$1,133.48</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>                      
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="heavy_fvprime">
                                                <div class="table-responsive">
                                                    <table class="table customers">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="7" class="title">Heavy 6x4 FV Prime Mover</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>40,000km or<br>12 months</th>
                                                                <th>80,000km or<br>24 months</th>
                                                                <th>120,000km or<br>36 months</th>
                                                                <th>160,000km or<br>48 months</th>
                                                                <th>200,000km or<br>60 months</th>
                                                                <th>240,000km or<br>72 months</th>
                                                                <th>280,000km or<br>84 months</th>
                                                            </tr>
                                                            <tr class="tr-heading">
                                                                <td>1st Service</td>
                                                                <td>2nd Service</td>
                                                                <td>3rd Service</td>
                                                                <td>4th Service</td>
                                                                <td>5th Service</td>
                                                                <td>6th Service</td>
                                                                <td>7th Service</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$1,133.48</td>
                                                                <td>$3,214.32</td>
                                                                <td>$1,830.04</td>
                                                                <td>$3,214.32</td>
                                                                <td>$1,232.40</td>
                                                                <td>$3,910.89</td>
                                                                <td>$1,133.48</td>
                                                            </tr>
                                                            <tr>
                                                                <th>320,000km or<br>96 months</th>
                                                                <th>360,000km or<br>108 months</th>
                                                                <th>400,000km or<br>120 months</th>
                                                                <th>440,000km or<br>132 months</th>
                                                                <th>480,000km or<br>144 months</th>
                                                                <th>520,000km or<br>156 months</th>
                                                            </tr>
                                                            <tr class="tr-heading">
                                                                <td>8th Service</td>
                                                                <td>9th Service</td>
                                                                <td>10th Service</td>
                                                                <td>11th Service</td>
                                                                <td>12th Service</td>
                                                                <td>13th Service</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$3,214.32</td>
                                                                <td>$1,830.04</td>
                                                                <td>$3,254.40</td>
                                                                <td>$1,133.48</td>
                                                                <td>$3,910.89</td>
                                                                <td>$1,133.48</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>             
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="heavy_fvrigid">
                                                <div class="table-responsive">
                                                    <table class="table customers">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="7" class="title">Heavy 6x4 FV Rigid</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>40,000km or<br>12 months</th>
                                                                <th>80,000km or<br>24 months</th>
                                                                <th>120,000km or<br>36 months</th>
                                                                <th>160,000km or<br>48 months</th>
                                                                <th>200,000km or<br>60 months</th>
                                                                <th>240,000km or<br>96 months</th>
                                                                <th>280,000km or<br>84 months</th>
                                                            </tr>
                                                            <tr class="tr-heading">
                                                                <td>1st Service</td>
                                                                <td>2nd Service</td>
                                                                <td>3rd Service</td>
                                                                <td>4th Service</td>
                                                                <td>5th Service</td>
                                                                <td>6th Service</td>
                                                                <td>7th Service</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$1,133.48</td>
                                                                <td>$3,288.94</td>
                                                                <td>$1,830.04</td>
                                                                <td>$3,288.94</td>
                                                                <td>$1,232.40</td>
                                                                <td>$3,985.50</td>
                                                                <td>$1,133.48</td>
                                                            </tr>
                                                            <tr>
                                                                <th>320,000km or<br>96 months</th>
                                                                <th>360,000km or<br>108 months</th>
                                                                <th>400,000km or<br>120 months</th>
                                                                <th>440,000km or<br>132 months</th>
                                                                <th>480,000km or<br>144 months</th>
                                                                <th>520,000km or<br>156 months</th>
                                                            </tr>
                                                            <tr class="tr-heading">
                                                                <td>8th Service</td>
                                                                <td>9th Service</td>
                                                                <td>10th Service</td>
                                                                <td>11th Service</td>
                                                                <td>12th Service</td>
                                                                <td>13th Service</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$3,288.94</td>
                                                                <td>$1,830.04</td>
                                                                <td>$3,329.01</td>
                                                                <td>$1,133.48</td>
                                                                <td>$3,985.50</td>
                                                                <td>$1,133.48</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>               
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="heavy_fsrigid">
                                                <div class="table-responsive">
                                                    <table class="table customers">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="7" class="title">Heavy 8x4 FS Rigid</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>40,000km or<br>12 months</th>
                                                                <th>80,000km or<br>24 months</th>
                                                                <th>120,000km or<br>36 months</th>
                                                                <th>160,000km or<br>48 months</th>
                                                                <th>200,000km or<br>60 months</th>
                                                                <th>240,000km or<br>72 months</th>
                                                                <th>280,000km or<br>84 months</th>
                                                            </tr>
                                                            <tr class="tr-heading">
                                                                <td>1st Service</td>
                                                                <td>2nd Service</td>
                                                                <td>3rd Service</td>
                                                                <td>4th Service</td>
                                                                <td>5th Service</td>
                                                                <td>6th Service</td>
                                                                <td>7th Service</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$1,133.48</td>
                                                                <td>$3,278.22</td>
                                                                <td>$1,830.04</td>
                                                                <td>$3,278.22</td>
                                                                <td>$1,232.40</td>
                                                                <td>$4,214.04</td>
                                                                <td>$1,133.48</td>
                                                            </tr>
                                                            <tr>
                                                                <th>320,000km or<br>96 months</th>
                                                                <th>360,000km or<br>108 months</th>
                                                                <th>400,000km or<br>120 months</th>
                                                                <th>440,000km or<br>132 months</th>
                                                                <th>480,000km or<br>144 months</th>
                                                                <th>520,000km or<br>156 months</th>
                                                            </tr>
                                                            <tr class="tr-heading">
                                                                <td>8th Service</td>
                                                                <td>9th Service</td>
                                                                <td>10th Service</td>
                                                                <td>11th Service</td>
                                                                <td>12th Service</td>
                                                                <td>13th Service</td>
                                                            </tr>
                                                            <tr>
                                                                <td>$3,278.22</td>
                                                                <td>$1,830.04</td>
                                                                <td>$3,318.30</td>
                                                                <td>$1,133.48</td>
                                                                <td>$4,214.04</td>
                                                                <td>$1,133.48</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="heading icon icon-caret-down collapsed" data-toggle="collapse" href="#collapseEX5" aria-expanded="false">
                                        <div class="panel-title">Rosa <i class="dtm-angle-right"></i></div>
                                    </div>
                                    <div class="panel-collapse collapse pt-3" id="collapseEX5" aria-expanded="false" style="height: 0px;">
                                        <div class="responsive custom-scrollbar">
                                            <ul class="nav nav-pills">
                                                <li class="tab-title" id="">
                                                    <a href="#rosa_tab1" data-toggle="tab">
                                                    Rosa UG</a>
                                                </li>
                                                <li class="tab-title" id="">
                                                    <a href="#rosa_tab2" data-toggle="tab">
                                                    Rosa UE</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="rosa_tab1">
                                                <div class="responsive custom-scrollbar">
                                                    <ul class="nav nav-pills">
                                                        <li class="tab-title" id="">
                                                            <a href="#rosa_my20" data-toggle="tab" aria-expanded="true">
                                                            MY20</a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#rosa_my22" data-toggle="tab" aria-expanded="true">
                                                            MY22</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="rosa_my20">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#rosa_my20duonic" data-toggle="tab" aria-expanded="true">
                                                                    UG <div>Duonic</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#rosa_my20manual" data-toggle="tab" aria-expanded="false">
                                                                    UG <div>Manual</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="rosa_my20duonic">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Rosa UG Duonic (MY20 Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>15,000km or<br>6 months</th>
                                                                                <th>30,000km or<br>12 months</th>
                                                                                <th>45,000km or<br>18 months</th>
                                                                                <th>60,000km or<br>24 months</th>
                                                                                <th>75,000km or<br>30 months</th>
                                                                                <th>90,000km or<br>36 months</th>
                                                                                <th>105,000km or<br>42 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>1st Service</td>
                                                                                <td>2nd Service</td>
                                                                                <td>3rd Service</td>
                                                                                <td>4th Service</td>
                                                                                <td>5th Service</td>
                                                                                <td>6th Service</td>
                                                                                <td>7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                                <td>$661.63</td>
                                                                                <td>$2,225.58</td>
                                                                                <td>$661.63</td>
                                                                                <td>$1,238.25</td>
                                                                                <td>$661.63</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>120,000km or<br>48 months</th>
                                                                                <th>135,000km or<br>54 months</th>
                                                                                <th>150,000km or<br>60 months</th>
                                                                                <th>165,000km or<br>66 months</th>
                                                                                <th>180,000km or<br>72 months</th>
                                                                                <th>195,000km or<br>78 months</th>
                                                                                <th>210,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>8th Service</td>
                                                                                <td>9th Service</td>
                                                                                <td>10th Service</td>
                                                                                <td>11th Service</td>
                                                                                <td>12th Service</td>
                                                                                <td>13th Service</td>
                                                                                <td>14th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$2,225.58</td>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                                <td>$661.63</td>
                                                                                <td>$2,682.87</td>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>   
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane " id="rosa_my20manual">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Rosa UG Manual (MY20 Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>15,000km or<br>6 months</th>
                                                                                <th>30,000km or<br>12 months</th>
                                                                                <th>45,000km or<br>18 months</th>
                                                                                <th>60,000km or<br>24 months</th>
                                                                                <th>75,000km or<br>30 months</th>
                                                                                <th>90,000km or<br>36 months</th>
                                                                                <th>105,000km or<br>42 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>1st Service</td>
                                                                                <td>2nd Service</td>
                                                                                <td>3rd Service</th>
                                                                                <td>4th Service</th>
                                                                                <td>5th Service</td>
                                                                                <td>6th Service</td>
                                                                                <td>7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                                <td>$661.63</td>
                                                                                <td>$1,953.72</td>
                                                                                <td>$661.63</td>
                                                                                <td>$1,238.25</td>
                                                                                <td>$661.63</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>120,000km or<br>48 months</th>
                                                                                <th>135,000km or<br>54 months</th>
                                                                                <th>150,000km or<br>60 months</th>
                                                                                <th>165,000km or<br>66 months</th>
                                                                                <th>180,000km or<br>72 months</th>
                                                                                <th>195,000km or<br>78 months</th>
                                                                                <th>210,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>8th Service</td>
                                                                                <td>9th Service</td>
                                                                                <td>10th Service</td>
                                                                                <td>11th Service</td>
                                                                                <td>12th Service</td>
                                                                                <td>13th Service</td>
                                                                                <td>14th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$1,953.72</td>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                                <td>$661.63</td>
                                                                                <td>$2,411.02</td>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="rosa_my22">
                                                        <div class="responsive custom-scrollbar">
                                                            <ul class="nav nav-pills">
                                                                <li class="tab-title" id="">
                                                                    <a href="#rosa_my22duonic" data-toggle="tab" aria-expanded="true">
                                                                    UG <div>Duonic</div></a>
                                                                </li>
                                                                <li class="tab-title" id="">
                                                                    <a href="#rosa_my22manual" data-toggle="tab" aria-expanded="false">
                                                                    UG <div>Manual</div></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="rosa_my22duonic">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Rosa UG Duonic (MY22 Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>15,000km or<br>6 months</th>
                                                                                <th>30,000km or<br>12 months</th>
                                                                                <th>45,000km or<br>18 months</th>
                                                                                <th>60,000km or<br>24 months</th>
                                                                                <th>75,000km or<br>30 months</th>
                                                                                <th>90,000km or<br>36 months</th>
                                                                                <th>105,000km or<br>42 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>1st Service</td>
                                                                                <td>2nd Service</td>
                                                                                <td>3rd Service</td>
                                                                                <td>4th Service</td>
                                                                                <td>5th Service</td>
                                                                                <td>6th Service</td>
                                                                                <td>7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                                <td>$661.63</td>
                                                                                <td>$1,902.09</td>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                                <td>$661.63</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>120,000km or<br>48 months</th>
                                                                                <th>135,000km or<br>54 months</th>
                                                                                <th>150,000km or<br>60 months</th>
                                                                                <th>165,000km or<br>66 months</th>
                                                                                <th>180,000km or<br>72 months</th>
                                                                                <th>195,000km or<br>78 months</th>
                                                                                <th>210,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>8th Service</td>
                                                                                <td>9th Service</td>
                                                                                <td>10th Service</td>
                                                                                <td>11th Service</td>
                                                                                <td>12th Service</td>
                                                                                <td>13th Service</td>
                                                                                <td>14th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$1,902.09</td>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                                <td>$661.63</td>
                                                                                <td>$1,902.09</td>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane " id="rosa_my22manual">
                                                                <div class="table-responsive">
                                                                    <table class="table customers">
                                                                        <thead>
                                                                            <tr>
                                                                                <th colspan="7" class="title">Rosa UG Manual (MY22 Model)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>15,000km or<br>6 months</th>
                                                                                <th>30,000km or<br>12 months</th>
                                                                                <th>45,000km or<br>18 months</th>
                                                                                <th>60,000km or<br>24 months</th>
                                                                                <th>75,000km or<br>30 months</th>
                                                                                <th>90,000km or<br>36 months</th>
                                                                                <th>105,000km or<br>42 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>1st Service</td>
                                                                                <td>2nd Service</td>
                                                                                <td>3rd Service</td>
                                                                                <td>4th Service</td>
                                                                                <td>5th Service</td>
                                                                                <td>6th Service</td>
                                                                                <td>7th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                                <td>$661.63</td>
                                                                                <td>$1,630.24</td>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                                <td>$661.63</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>120,000km or<br>48 months</th>
                                                                                <th>135,000km or<br>54 months</th>
                                                                                <th>150,000km or<br>60 months</th>
                                                                                <th>165,000km or<br>66 months</th>
                                                                                <th>180,000km or<br>72 months</th>
                                                                                <th>195,000km or<br>78 months</th>
                                                                                <th>210,000km or<br>84 months</th>
                                                                            </tr>
                                                                            <tr class="tr-heading">
                                                                                <td>8th Service</td>
                                                                                <td>9th Service</td>
                                                                                <td>10th Service</td>
                                                                                <td>11th Service</td>
                                                                                <td>12th Service</td>
                                                                                <td>13th Service</td>
                                                                                <td>14th Service</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>$1,630.24</td>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                                <td>$661.63</td>
                                                                                <td>$1,630.24</td>
                                                                                <td>$661.63</td>
                                                                                <td>$876.66</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="rosa_tab2">
                                                <div class="responsive custom-scrollbar">
                                                    <ul class="nav nav-pills">
                                                        <li class="tab-title" id="">
                                                            <a href="#rosa_automatic" data-toggle="tab" aria-expanded="true">
                                                            UE <div>Automatic</div></a>
                                                        </li>
                                                        <li class="tab-title" id="">
                                                            <a href="#rosa_manual" data-toggle="tab" aria-expanded="false">
                                                            UE <div>Manual</div></a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="rosa_automatic">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Rosa UE Automatic</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>10,000km</th>
                                                                        <th>20,000km</th>
                                                                        <th>30,000km</th>
                                                                        <th>40,000km or<br>12 months</th>
                                                                        <th>50,000km</th>
                                                                        <th>60,000km</th>
                                                                        <th>70,000km</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td>1st Service</td>
                                                                        <td>2nd Service</td>
                                                                        <td>3rd Service</td>
                                                                        <td>4th Service</td>
                                                                        <td>5th Service</td>
                                                                        <td>6th Service</td>
                                                                        <td>7th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$633.81</td>
                                                                        <td>$758.42</td>
                                                                        <td>$758.79</td>
                                                                        <td>$897.53</td>
                                                                        <td>$1,511.67</td>
                                                                        <td>$1,707.54</td>
                                                                        <td>$633.81</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>80,000km or<br>24 months</th>
                                                                        <th>90,000km</th>
                                                                        <th>100,000km</th>
                                                                        <th>110,000km</th>
                                                                        <th>120,000km or<br>36 months</th>
                                                                        <th>130,000km</th>
                                                                        <th>140,000km</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td>8th Service</td>
                                                                        <td>9th Service</th>
                                                                        <td>10th Service</td>
                                                                        <td>11th Service</td>
                                                                        <td>12th Service</td>
                                                                        <td>13th Service</td>
                                                                        <td>14th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$1,030.87</td>
                                                                        <td>$758.79</td>
                                                                        <td>$1,636.28</td>
                                                                        <td>$1,511.06</td>
                                                                        <td>$969.40</td>
                                                                        <td>$713.56</td>
                                                                        <td>$1,396.42</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>150,000km</th>
                                                                        <th>160,000km or<br>48 months</th>
                                                                        <th>170,000km</th>
                                                                        <th>180,000km</th>
                                                                        <th>190,000km</th>
                                                                        <th>200,000km or<br>60 months</th>
                                                                        <th>210,000km</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td>15th Service</td>
                                                                        <td>16th Service</td>
                                                                        <td>17th Service</td>
                                                                        <td>18th Service</td>
                                                                        <td>19th Service</td>
                                                                        <td>20th Service</td>
                                                                        <td>21st Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$998.65</td>
                                                                        <td>$865.19</td>
                                                                        <td>$1,511.06</td>
                                                                        <td>$723.90</td>
                                                                        <td>$1,351.56</td>
                                                                        <td>$1,106.06</td>
                                                                        <td>$758.79</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>        
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="rosa_manual">
                                                        <div class="table-responsive">
                                                            <table class="table customers">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="7" class="title">Rosa UE Manual</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>10,000km</th>
                                                                        <th>20,000km</th>
                                                                        <th>30,000km</th>
                                                                        <th>40,000km or<br>12 months</th>
                                                                        <th>50,000km</th>
                                                                        <th>60,000km</th>
                                                                        <th>70,000km</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td>1st Service</td>
                                                                        <td>2nd Service</td>
                                                                        <td>3rd Service</td>
                                                                        <td>4th Service</td>
                                                                        <td>5th Service</td>
                                                                        <td>6th Service</td>
                                                                        <td>7th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$633.81</td>
                                                                        <td>$758.42</td>
                                                                        <td>$792.74</td>
                                                                        <td>$851.94</td>
                                                                        <td>$1,511.67</td>
                                                                        <td>$1,741.49</td>
                                                                        <td>$633.81</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>80,000km or<br>24 months</th>
                                                                        <th>90,000km</th>
                                                                        <th>100,000km</th>
                                                                        <th>110,000km</th>
                                                                        <th>120,000km or<br>36 months</th>
                                                                        <th>130,000km</th>
                                                                        <th>140,000km</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td>8th Service</td>
                                                                        <td>9th Service</td>
                                                                        <td>10th Service</td>
                                                                        <td>11th Service</td>
                                                                        <td>12th Service</td>
                                                                        <td>13th Service</td>
                                                                        <td>14th Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$985.29</td>
                                                                        <td>$792.74</td>
                                                                        <td>$1,636.28</td>
                                                                        <td>$1,511.06</td>
                                                                        <td>$957.76</td>
                                                                        <td>$713.56</td>
                                                                        <td>$1,396.42</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>150,000km</th>
                                                                        <th>160,000km or<br>48 months</th>
                                                                        <th>170,000km</th>
                                                                        <th>180,000km</th>
                                                                        <th>190,000km</th>
                                                                        <th>200,000km or<br>60 months</th>
                                                                        <th>210,000km</th>
                                                                    </tr>
                                                                    <tr class="tr-heading">
                                                                        <td>15th Service</td>
                                                                        <td>16th Service</th>
                                                                        <td>17th Service</th>
                                                                        <td>18th Service</td>
                                                                        <td>19th Service</td>
                                                                        <td>20th Service</td>
                                                                        <td>21st Service</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>$1,032.60</td>
                                                                        <td>$819.60</td>
                                                                        <td>$1,511.06</td>
                                                                        <td>$757.84</td>
                                                                        <td>$1,351.56</td>
                                                                        <td>$1,060.48</td>
                                                                        <td>$792.74</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>     
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <hr/>
                            <div class="">
                                <h6 class="mt-4 bold">Annual Fuso Capped Price Servicing Terms and Conditions</h6>
                                <p>These Terms and Conditions govern the Fuso Capped Price Servicing Program provided by Daimler Truck and Bus Australia Pacific Pty Ltd ABN 86 618 413 282 (“DTBAuP”).</p>
                                <h6 class="bold">Definitions</h6>
                                <div class="panel-group dealer-accordion" id="capped-servicing">
                                    <div class="panel">
                                        <div class="heading collapsed" data-toggle="collapse" href="#w1-01" aria-expanded="false"><hr>
                                            <div class="panel-title">1. In these Terms and Conditions: <i class="dtm-angle-right"></i></div>
                                        </div>
                                        <div class="panel-collapse collapse" id="w1-01" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <ol class="letter" type="a">
                                                    <li><strong>Annual Fuso Capped Price</strong> means the maximum capped price payable in accordance with these Terms and Conditions for the relevant Standard Scheduled Service, which is capped for the full calendar year.</li>
                                                    <li><strong>Eligible Period</strong> means the period commencing at the Fuso New Vehicle Warranty Start Date of the Eligible Vehicle and expiring after<br>
                                                    <strong>Canter</strong>
                                                    <ol class="letter" type="i">
                                                        <li>eighty four (84) months from the Fuso New Vehicle Warranty Start Date of the Eligible Vehicle; or</li>
                                                        <li>when the aggregate distance travelled by the Eligible Vehicle reaches over 210,000 kilometres.</li>
                                                    </ol>
                                                    </li>
                                                    <strong>Fighter FK (Euro 5)</strong>
                                                    <ol class="letter" type="i">
                                                        <li>hundred and twenty (120) months from the Fuso New Vehicle Warranty Start Date of the Eligible Vehicle; or</li>
                                                        <li>when the aggregate distance travelled by the Eligible Vehicle reaches over 300,000 kilometres.</li>
                                                    </ol>
                                                    <strong>Fighter FK (Euro 6)</strong>
                                                    <ol class="letter" type="i">
                                                        <li>hundred and eighty (180) months from the Fuso New Vehicle Warranty Start Date of the Eligible Vehicle; or</li>
                                                        <li>when the aggregate distance travelled by the Eligible Vehicle reaches over 300,000 kilometres.</li>
                                                    </ol>
                                                    <strong>Fighter FM & FN (Euro 5)</strong>
                                                    <ol class="letter" type="i">
                                                        <li>hundred and forty four(144) months from the Fuso New Vehicle Warranty Start Date of the Eligible Vehicle; or</li>
                                                        <li>when the aggregate distance travelled by the Eligible Vehicle reaches over 360,000 kilometres.</li>
                                                    </ol>
                                                    <strong>Fighter FM & FN (Euro 6)</strong>
                                                    <ol class="letter" type="i">
                                                        <li>two hundred and sixteen (216) months from the Fuso New Vehicle Warranty Start Date of the Eligible Vehicle; or</li>
                                                        <li>when the aggregate distance travelled by the Eligible Vehicle reaches over 360,000 kilometres.</li>
                                                    </ol>
                                                    <strong>Rosa UG</strong>
                                                    <ol class="letter" type="i">
                                                        <li>eighty four (84) months from the Fuso New Vehicle Warranty Start Date of the Eligible Vehicle; or</li>
                                                        <li>when the aggregate distance travelled by the Eligible Vehicle reaches over 210,000 kilometres.</li>
                                                    </ol>
                                                    <strong>Rosa UE</strong>
                                                    <ol class="letter" type="i">
                                                        <li>sixty (60) months from the Fuso New Vehicle Warranty Start Date of the Eligible Vehicle; or</li>
                                                        <li>when the aggregate distance travelled by the Eligible Vehicle reaches over 210,000 kilometres.</li>
                                                    </ol>
                                                    <strong>Shogun</strong>
                                                    <ol class="letter" type="i">
                                                        <li>hundred and twenty (120) months from the Fuso New Vehicle Warranty Start Date of the Eligible Vehicle; or</li>
                                                        <li>when the aggregate distance travelled by the Eligible Vehicle reaches over 500,000 kilometres.</li>
                                                    </ol>
                                                    <strong>Heavy</strong>
                                                    <ol class="letter" type="i">
                                                        <li>hundred and fifty six (156) months from the Fuso New Vehicle Warranty Start Date of the Eligible Vehicle; or</li>
                                                        <li>when the aggregate distance travelled by the Eligible Vehicle reaches over 520,000 kilometres.</li>
                                                    </ol>
                                                    <li><strong>Eligible Vehicle</strong> means the entire Fuso Truck and Bus range, to which the Annual Fuso Capped Price Servicing applies, but excludes the following:
                                                    <ol class="letter" type="i">
                                                        <li>'grey import' vehicles (vehicles not imported and distributed by DTBAuP for resale);</li>
                                                        <li>privately imported vehicles;</li>
                                                        <li>Hybrid vehicles</li>
                                                    </ol>
                                                    </li>
                                                    <li><strong>Participating Authorised Fuso Dealership</strong> means any Authorised Fuso Dealership, which has elected to participate in the Annual Fuso Capped Price Servicing Program and perform Standard Scheduled Servicing at the Annual Fuso Capped Price</li>
                                                    <li><strong>Program Period</strong> commences on 1st of January each calendar year until the 31st December.</li>
                                                    <li><strong>Standard Scheduled Service/ing</strong> means the fundamental and technically essential maintenance work carried out at particular intervals as outlined in the relevant Warranty &amp; Service Schedule book.</li>
                                                    <li><strong>Fuso</strong> means Fuso trucks and buses, distributed by Daimler Truck and Bus Australia Pacific Pty Ltd, ABN 86 618 413 282.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="heading collapsed" data-toggle="collapse" href="#w1-02">
                                            <div class="panel-title">2. Scope of Annual Fuso Capped Price Servicing <i class="dtm-angle-right"></i></div>
                                        </div>
                                        <div class="panel-collapse collapse" id="w1-02">
                                            <div class="panel-body">
                                                <p>Subject to these Terms and Conditions, owners of Eligible Vehicles are entitled to obtain Standard Scheduled Servicing of their Eligible Vehicle during the Program Period from Participating Authorised Fuso Dealerships for a price that is equal to or less than the applicable Annual Fuso Capped Price ("<strong>Annual Capped Price Servicing</strong>").</p>
                                                <p>Servicing conducted under the program must be carried out in accordance with relevant Standard Service Schedule recommendations. If any scheduled maintenance service is missed or delayed, additional costs may apply when the Eligible Vehicle is presented for its next scheduled maintenance service in addition to the capped price for that particular service.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="heading collapsed" data-toggle="collapse" href="#w1-03">
                                            <div class="panel-title">3. What is covered under Annual Fuso Capped Price Servicing? <i class="dtm-angle-right"></i></div>
                                        </div>
                                        <div class="panel-collapse collapse" id="w1-03">
                                            <div class="panel-body">
                                                <p>The applicable Annual Capped Price Servicing will cover the standard items in each Scheduled Service as set out in the relevant Warranty &amp; Service Schedule book.</p>
                                                <p>The standard items in each Scheduled Service are:</p>
                                                <ul class="closed-circle">
                                                    <li>labour;</li>
                                                    <li>parts;</li>
                                                    <li>lubricants; and</li>
                                                    <li>sundries which includes items such as oil and waste recycling and or removal, workshop supplies etc.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="heading collapsed" data-toggle="collapse" href="#w1-04">
                                            <div class="panel-title">4. Intermediate servicing.<i class="dtm-angle-right"></i></div>
                                        </div>
                                        <div class="panel-collapse collapse" id="w1-04">
                                            <div class="panel-body">
                                                <ol class="letter" type="i">
                                                    <li>Service intervals are determined for trucks used on sealed roads, on highway applications. If used under severe conditions such as dusty, hot, extreme cold, mining (above and below ground), exploration, then service intervals are to be reduced in accordance with these conditions.</li>
                                                    <li>Where trucks or buses are used for periods of time stationary with a transmission power take off (PTO) engaged to provide power for specialist bodies and/or applications, then service intervals must be carried out in accordance with operating hours (1 hour = 50km).</li>
                                                    <li>Should the truck be seldom or infrequently used, it should be inspected as per the time periods stated in the Canter Warranty &amp; Service Schedule book.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="heading collapsed" data-toggle="collapse" href="#w1-05">
                                            <div class="panel-title">5. Annual Fuso Capped Price Servicing does not include the following items:<i class="dtm-angle-right"></i></div>
                                        </div>
                                        <div class="panel-collapse collapse" id="w1-05">
                                            <div class="panel-body">
                                                <ul class="closed-circle">
                                                    <li>Tyre balancing and wheel alignment where required;</li>
                                                    <li>Repair of accident damage to any body, driveline or chassis components;</li>
                                                    <li>Additional maintenance due to modification from original specification;</li>
                                                    <li>Normal wear and tear consumable items and parts requiring additional maintenance (including but not limited to clutch linings, brake discs and pads, brake linings, wiper blades, globes of all types, fuses, trims, brakes, diesel particulate filters, catalytic converters, all belts, water pumps, tyres, satellite navigation update disks and all other parts of your vehicle that are subject to normal wear and tear);</li>
                                                    <li>Items or work required as a result of vehicle misuse or abuse or as a result of the Eligible Vehicle not being driven in accordance with the manufacturer’s specifications and guidelines;</li>
                                                    <li>Additional fluids and additives not specified in the Service Schedule - Warranty &amp; Service Schedule book;</li>
                                                    <li>Adjustments not specified in the Service Schedule – Warranty &amp; Service Schedule book;</li>
                                                    <li>Additional maintenance and repairs that may be recommended by your Authorised Fuso Dealer to suit your individual driving characteristics;</li>
                                                    <li>Service or maintenance of non-genuine Fuso parts;</li>
                                                    <li>Service, fitment or maintenance of any accessories, including Fuso accessories</li>
                                                </ul>
                                                <p>These items will be identified as a separate charge to the published Annual Fuso Capped Price Servicing.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="heading collapsed" data-toggle="collapse" href="#w1-06">
                                            <div class="panel-title">6. Customer’s Obligations <i class="dtm-angle-right"></i></div>
                                        </div>
                                        <div class="panel-collapse collapse" id="w1-06" style="height: 0px;">
                                            <div class="panel-body">
                                                <p><strong>6.1</strong> The Customer agrees:</p>
                                                <ol class="letter" type="a">
                                                    <li>to deliver the Eligible Vehicle to a Participating Authorised Fuso Dealership at each relevant service interval in accordance with the Eligible Vehicle’s Warranty and Service Schedule book;</li>
                                                    <li>to make the Eligible Vehicle available at a Participating Authorised Fuso Dealership by prior appointment in a reasonably clean condition; and</li>
                                                    <li>that all instructions for use of the Eligible Vehicle contained in the Warranty &amp; Service Schedule book shall be carried out accurately and fully.</li>
                                                </ol>
                                                <p><strong>6.2</strong> Should any additional work be required, above and beyond the inclusions provided under a Capped Price Standard Scheduled Service, the Participating Authorised Fuso Dealership is required to contact the Customer with the details of this and obtain the Customer’s authorisation before any additional work is carried out on the Eligible Vehicle.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="heading collapsed" data-toggle="collapse" href="#w1-07">
                                            <div class="panel-title">7. How often will the Annual Fuso Capped Price Servicing prices be changed?<i class="dtm-angle-right"></i></div>
                                        </div>
                                        <div class="panel-collapse collapse" id="w1-07" style="height: 0px;">
                                            <div class="panel-body">
                                                <p>The Annual Fuso Capped Price Servicing maximum price will apply from 1st of January each calendar year until the 31st December. A new annual Fuso Capped Price will be published for a program period of one calendar year’s duration for each subsequent calendar year following the current Program Period.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="heading collapsed" data-toggle="collapse" href="#w1-08" aria-expanded="false">
                                            <div class="panel-title">8. Transfer <i class="dtm-angle-right"></i></div>
                                        </div>
                                        <div class="panel-collapse collapse" id="w1-08" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <p>Annual Fuso Capped Price Servicing is not transferrable from one Eligible Vehicle to another. If the original owner of the relevant Eligible Vehicle transfers ownership of the Eligible Vehicle prior to the expiration of the Eligible Period, Annual Fuso Capped Price Servicing will continue to apply to the Eligible Vehicle for the remainder of the Eligible Period in accordance with these Terms and Conditions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="heading collapsed" data-toggle="collapse" href="#w1-09">
                                            <div class="panel-title">9. No Refunds <i class="dtm-angle-right"></i></div>
                                        </div>
                                        <div class="panel-collapse collapse" id="w1-09">
                                            <div class="panel-body">
                                                <p><strong>9.1</strong> No refund or deduction is payable to an owner in respect of an Eligible Vehicle which has not been presented to a Participating Authorised Fuso Dealership for an Annual Fuso Capped Price Service during the relevant time or distance travelled of the Eligible Vehicle referred to in Item 6.1(a) of these Terms and Conditions.</p>
                                                <p><strong>9.2</strong> Further, if a Scheduled Annual Fuso Capped Price Service is missed or delayed within the Eligible Vehicle’s applicable time and distance period referred to in Item 6.1(a) of these Terms and Conditions, additional work may be required to be undertaken at the next scheduled Annual Fuso Capped Price Service, and such additional work will be at the Eligible Vehicle owner’s cost.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="heading collapsed" data-toggle="collapse" href="#w1-10" aria-expanded="false">
                                            <div class="panel-title">10. Variation of Terms and Conditions <i class="dtm-angle-right"></i></div>
                                        </div>
                                        <div class="panel-collapse collapse" id="w1-10" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <p><strong>10.1</strong> Fuso may vary or in any way change eligibility criteria for the Annual Fuso Capped Price Servicing Program at any time during the Program Period, however the changes will not take effect until the beginning of the subsequent Program Period.</p>
                                                <p><strong>10.2</strong> Fuso may choose not to continue the Fuso Capped Price Servicing Program past the end of the current Program Period.</p>
                                                <p><strong>10.3</strong> Notice of any change to these terms and conditions may be announced by Fuso in writing or communicated via the Fuso website</p>
                                                <p><strong>10.4</strong> Other than as specified in this Item 10, to the extent permitted by law, these Terms and Conditions may be amended by notice and such amendments may take effect immediately upon publication. Fuso will not be liable for any loss or damage suffered or sustained by a customer resulting from a variation or change to these terms and conditions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-2">Current as at 01 January 2022</p>
                                </div>
                            </div>
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