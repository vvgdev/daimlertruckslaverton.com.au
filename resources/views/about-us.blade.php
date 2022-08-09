@extends('layouts.app')

@section('content')
<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>About Us</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="about-page page-multi mt-5">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success"> {{ session()->get('message') }} </div> 
            @endif
            <div class="row">
                <div class="col-lg-12 col-md-12 para">
                    <p>Daimler Trucks Somerton, owned by Velocity Truck Vehicle Group, operating as Velocity Truck Centres.</p>
                    <p>Are you after a Truck or Bus? Then you need to speak with us at Daimler Trucks Somerton, we are the one-stop shop for all your commercial vehicle needs.</p>
                    <p>Daimler Trucks Somerton is located within a short drive from Melbourne CBD and offers three of the world's best brands; Mercedes-Benz, Freightliner and Fuso Trucks. We back up our vehicles with a first-class Service and Parts departments which also offer late night servicing and 24-hour assistance, including emergency roadside assistance for all our vehicles.</p>
                    <p>Daimler has a proud tradition that stretches back over more than a hundred years and is marked by the pioneering achievements of automotive engineering.</p>
                    <p>Today, Daimler is a leading supplier of premium passenger cars as well as one of the world's largest manufacturers of commercial vehicles. With its strong brands and its comprehensive portfolio of automobiles, from compact cars to heavy-duty engine trucks which are complemented by tailor-made services along the automotive value chain, Daimler is active in nearly all countries in the world.</p>
                    <h3>Our Brands</h3>
                    <ul>
                        <li>Mercedes-Benz Trucks</li>
                        <li>Freightliner Trucks</li>
                        <li>Fuso Trucks and Buses</li>
                    </ul>
                    <p>We can also offer some of the best used trucks from not just our own brands, but all brands in the market through our National used truck website <a href="https://www.usedtrucks.com.au/stock/search/">usedtrucks.com.au</a></p>
                    <p>If you can't find what you are looking for, please ask!</p>
                    <h3>Sales</h3>
                    <p>At Daimler Trucks Somerton we stock the following commercial vehicle brands imported by Mercedes-Benz Trucks, Freightliner Trucks, & Fuso Trucks and Buses.</p>
                    <p>Our dedicated sales team combines over 100 years of experience in the automotive industry to provide you with the quality service we pride ourselves on. The team has a varied background of experiences including sales, technical, parts and service. These factors combined ensure you can be certain you will receive the best possible introduction to our products with the assurance that you are in the hands of trained professionals.</p>
                    <h3>Service</h3>
                    <p>As an authorised repairer for Mercedes-Benz, Freightliner and Fuso, we have a team of trained specialist technicians who will keep your vehicle on the road or get it back there as fast as possible. We'll minimise your downtime, maximise reliability and protect your investment. Our factory trained service technicians will ensure your vehicle is maintained to the highest of standards. We have the facilities to complete all jobs you may require within a timely manner.</p>
                    <p>Our customer lounge area with free WIFI will ensure you can enjoy a quality cup of coffee in comfort while waiting for your vehicle.</p>
                    <p>We also have VicRoads Certification to enable us to complete Roadworthy Certificates.</p>
                    <h3>Parts</h3>
                    <p>At Daimler Trucks Somerton, we take parts very seriously. That's because parts mean productivity - your productivity. You need parts to keep your vehicle on the road, or to get it back out there, earning money.</p>
                    <p>That's why at Daimler Trucks Somerton we carry virtually every spare part in stock and if we don't have it we'll get it for you, fast. When you deal with us, you'll be dealing with parts experts who have over 100 combined years of experience, over $4 million on-shelf stock available, with access to same-day local factory. Your productivity is our goal.</p>
                    <h3>Finance and Insurance</h3>
                    <p>We can also help you with the money. Daimler Truck Financial has 35 years' experience in commercial vehicle finance industry and we will be there to help in the good times and the bad. Our finance representative will provide you with a finance package to suit your business application. We can also provide competitive insurance rates for your vehicle.</p>
                    <p>Our Products:</p>
                    <ul>
                        <li>Asset Hire Purchase</li>
                        <li>Asset Loan</li>
                        <li>Finance Lease</li>
                        <li>Comprehensive Insurance</li>
                        <li>Gap Insurance</li>
                    </ul>
                    <p>Please contact us on <a href="tel:(03) 9305 4152"></a> or via the Enquiry Form for any further information.</p>
                    <p>Velocity Truck Centres (formerly known as Adtrans National Trucks) has served the truck industry for many years. With more than 840 employees spread across 5 states, we can take care of your trucking needs.</p>
                    <p>Our experienced workforce including many staff who have over 20 years of experience and are a testament to our ongoing commitment and passion for what we do. The employees are the heart and soul of our brand and we love sharing our knowledge and skills with our customers.</p>
                    <p>We are a division of the global brand Velocity Vehicle Group.</p>
                    <p><strong>WHY CHOOSE VELOCITY TRUCK CENTRES?</strong></p>
                    <p>What VTC offers is a wide selection of brands for your next commercial vehicle. Our team aren't just salespeople, we have a wealth of experience to help you purchase the right new or used vehicle. Whether it is a heavy truck, light commercial vehicle or even a bus, our dealer network can guide your decision process. Partnering with Velocity Truck Centres will assist you with the vehicle solution for your business needs.</p>
                    <p>With parts and service teams located all over Australia, we are never far from you. Our technicians and diagnostic teams are happy to provide maintenance and advice to optimise the performance of your vehicle. The parts network can source a range of parts from our large supply network from rubber mats to transmissions we can locate it.</p>
                    <p>At every dealership, there is a Business and Finance Manager who can arrange the finance for your purchase. We offer competitive rates with an on-site representative making sure you're 100% confident in your decision.</p>
                    <p>The VTC teams are complemented with a strong administration group who work tirelessly to support vehicle sales, supplying parts, organising registration and coordinating servicing. Our team are here to make the process seamless, from first contact to delivery.</p>
                    <p>The Velocity Truck Centres Management Team have decades of collective experience in trucks and the transport industry. Please consider us for your next purchase.</p>
                    <hr/>
                    @include('partials.location_details')
                </div>
            </div>
        </div>
    </div>
</section>

@endsection