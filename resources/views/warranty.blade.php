@extends('layouts.app')

@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Warranty</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="warranty-page page-multi mt-5">
            <!-- <h1 class="page-title">Warranty</h1> -->
            <div class="specification-tabs">
                <div class="responsive custom-scrollbar">
                    <ul class="nav nav-pills">
                        <li class="tab-title" id="benz_desc">
                            <a href="#benz_tab" data-toggle="tab" aria-expanded="true" class="active">
                            <i class="dtm-mercedes-logo"></i>Mercedes Benz</a>
                        </li>
                        <li class="tab-title" id="fuso_desc">
                            <a href="#fuso_tab" data-toggle="tab" aria-expanded="false">
                            Fuso</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="benz_tab">
                        <div class="content benz-warranty para">
                            <div class="row mb-4">
                                <div class="col-md-7">
                                    <h3 class="mt-0">Mercedes-Benz New Truck Warranty<sup>1</sup></h3>
                                    <p>As a Mercedes-Benz Trucks owner, you can be assured by our reputation for reliability and quality. To provide you with even further peace of mind, every new Mercedes-Benz Truck sold through the Mercedes-Benz dealer network comes with a comprehensive warranty period.</p>
                                    <p>Our warranty provides you with levels of support that are a measure of the confidence we have in our products.</p>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('images/warranty.jpeg') }}" alt="">
                                </div>
                            </div>
                            <h5>Actros Warranty Period<sup>2</sup></h5>
                            <div class="table-responsive">
                                <table width="100%" cellspacing="0" cellpadding="8" border="1">
                                    <thead>
                                        <tr>
                                            <th>Classification</th>
                                            <td>On Highway (vehicles &gt; 90T GCM)</td>
                                            <td>On highway (vehicles ≤ 90T GCM, 6x4, 4x2, 8x4 &amp; 6x2 configurations)</td>
                                            <td>Off Road &amp; All Wheel Drive</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Basic vehicle warranty</td>
                                            <td>12 months / unlimited kms</td>
                                            <td>24 months / unlimited kms</td>
                                            <td>12 months / unlimited kms</td>
                                        </tr>
                                        <tr>
                                            <td>Driveline&nbsp;warranty</td>
                                            <td>36 months / 450,000 kms</td>
                                            <td>48 months / 800,000 kms</td>
                                            <td>36 months / 250,000 kms</td>
                                        </tr>
                                        <tr>
                                            <td>Cabin corrosion</td>
                                            <td>36 months / unlimited kms</td>
                                            <td>36 months / unlimited kms</td>
                                            <td>36 months / unlimited kms</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6 form-group">
                                    <h5>Atego Warranty Period<sup>2</sup></h5>
                                    <div class="table-responsive">
                                        <table width="100%" cellspacing="0" cellpadding="8" border="1">
                                            <thead>
                                                <tr>
                                                    <th>Classification</th>
                                                    <td>On Highway</td>
                                                    <td>Off Road/All Wheel Drive</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Basic vehicle warranty</td>
                                                    <td>24 months / unlimited kms</td>
                                                    <td>12 momths / unlimited kms</td>
                                                </tr>
                                                <tr>
                                                    <td>Driveline warranty</td>
                                                    <td>48 months / 500,000 kms</td>
                                                    <td>36 months / 250,000 kms</td>
                                                </tr>
                                                <tr>
                                                    <td>Cabin corrosion</td>
                                                    <td>36 months / unlimited kms</td>
                                                    <td>36 months / unlimited kms</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <h5>Econic, Unimog and Zetros Warranty Period<sup>2</sup></h5>
                                    <div class="table-responsive">
                                        <table width="100%" cellspacing="0" cellpadding="8" border="1">
                                            <thead>
                                                <tr>
                                                    <td>Classification</td>
                                                    <td>On Highway</td>
                                                    <td>Off Road/All Wheel Drive</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Basic vehicle warranty</td>
                                                    <td>12 months / unlimited kms</td>
                                                    <td>12 months / unlimited kms</td>
                                                </tr>
                                                <tr>
                                                    <td>Driveline&nbsp;warranty</td>
                                                    <td>36 months / 250,000 kms</td>
                                                    <td>36 months / 250,000 kms</td>
                                                </tr>
                                                <tr>
                                                    <td>Cabin corrosion</td>
                                                    <td>36 months / unlimited kms</td>
                                                    <td>36 months / unlimited kms</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <h3 class="mt-0">Mercedes-Benz Trucks Parts Warranty</h3>
                                    <p>You have the satisfaction of knowing that any part for a Mercedes-Benz heavy commercial vehicle purchased and fitted by a Mercedes-Benz Dealer or authorised repairer is covered by a 24 month unlimited km warranty<sup>3</sup>. The warranty period commences on the date the part is sold.</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('images/parts.jpeg') }}" alt="Mercedes-Benz">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <img src="{{ asset('images/warranty-exclusions.jpeg') }}" alt="Mercedes-Benz">
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mt-0">Mercedes-Benz Trucks Warranty Exclusions.</h3>
                                    <p>The Warranty covers the repair or replacement of manufacturing defects, but does not cover the cost of any related expenses or losses caused by the defect, such as the cost of rental vehicle, hotels, taxis, downtime, inconvenience or any loss of profit, loss of revenue or contingent, consequential or indirect losses.</p>
                                    <p>The Warranty does not cover servicing, maintenance, tyres, consumables, normal wear and tear, the alignment of front and rear axles, wheel balancing and tyre rotation.</p>
                                </div>
                            </div>
                            <p>
                                <small>
                                    [1] Truck Warranty offers are subject to change at any time without notice. For further inclusions, exclusions, terms and conditions, please contact Daimler Trucks Somerton Mercedes-Benz.<br>
                                    [2] Vehicles sold as of 01.01.2018.<br>
                                    [3] Excludes batteries.
                                </small>
                            </p>
                        </div>            
                    </div>
                    <div class="tab-pane" id="fuso_tab">
                        <div class="content para">
                            <p>
                            Daimler Trucks Somerton Fuso trucks are built to last, but if something does go wrong, you can be confident knowing that you're covered because Fuso is the first and only Japanese truck manufacturer to offer up to 5 year cab chassis warranty as standard. That's up to 5 years across our truck and Rosa bus range for peace of mind year after year. 
                            </p>
                            <p>&nbsp;</p>
                            <div class="table-responsive">
                                <table style=" text-align: left; width:100%; padding: 15px ">
                                    <tbody>
                                        <tr>
                                            <th style="border-top: 1px solid #ddd; padding: 15px">Model</th>
                                            <th style="border-top: 1px solid #ddd; padding: 15px">Standard Manufacturer's Warranty (whichever comes first)</th>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #ddd; padding: 15px">Canter - Light Duty Truck</td>
                                            <td style="border-top: 1px solid #ddd; padding: 15px">5 years/200,000 kilometres</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #ddd; padding: 15px">Fighter FK - Medium Duty Truck</td>
                                            <td style="border-top: 1px solid #ddd; padding: 15px">5 years/300,000 kilometres</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #ddd; padding: 15px">Fighter FM / FN - Medium Duty Truck</td>
                                            <td style="border-top: 1px solid #ddd;padding: 15px">5 years/350,000 kilometres</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #ddd; padding: 15px">Shogun FP / FV / FS - Heavy Duty Truck</td>
                                            <td style="border-top: 1px solid #ddd;padding: 15px">5 years/500,000 kilometres</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #ddd; padding: 15px">Heavy FP / FV / FS - Heavy Duty Truck</td>
                                            <td style="border-top: 1px solid #ddd;padding: 15px">5 years/500,000 kilometres</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: 1px solid #ddd; padding: 15px">Rosa - Light Bus</td>
                                            <td style="border-top: 1px solid #ddd; padding: 15px">5 years/200,000 kilometres</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>
                                <br><br>
                                <small><strong>Note:</strong> The new vehicle warranty applies only to trucks and buses registered and operated in normal conditions in Australia. Vehicles operated in severe service applications, such as off-road, underground mining, crop spraying or on the beach covered under warranty for 12 months/50,000 kilometres.</small>
                            </p>
                            <p>
                                <a class="btn btn-red mt-0 mb-2" href="https://www.fuso.com.au/Warranty-Policy" target="_blank">VIEW WARRANTY POLICY</a>&nbsp; &nbsp; &nbsp; 
                                <a class="btn btn-red mt-0 mb-2" href="https://www.velocitytruckcentres.com.au/storage/app/media/61925_fuso-warrantyplan-brouchere-mar21.pdf" target="_blank">Click here to view Warranty Brochure</a>
                            </p>
                        </div>
                    </div>
                </div>
                <hr/>
                @include('partials.location_details')
            </div>
        </div>
    </div>
</section>

@endsection