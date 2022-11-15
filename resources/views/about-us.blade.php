@extends('layouts.app1')
@section('title') About Truck Dealers Melbourne | Sales, Service Parts | Daimler Trucks Laverton @stop
@section('meta_title') About Truck Dealers Melbourne | Sales, Service Parts | Daimler Trucks Laverton @stop
@section('meta_keywords') About Us - Daimler Trucks Laverton @stop
@section('meta_description') Daimler Trucks Laverton is one of Australia’s largest dealerships and is located close to Melbourne City. @stop
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
                    <p><strong>Daimler Trucks Laverton, owned by Velocity Truck Vehicle Group, operating as Velocity Truck Centres</strong>, is one of Australia's largest dealerships and is located close to Melbourne City. We stock a large range of Mercedes-Benz and Freightliner Trucks, Fuso Trucks, Mercedes-Benz Vans and quality used vehicles. We also offer competitive and flexible finance options to go with your purchase. <strong>Choose the best of the best!</strong></p>
                    <p>Located on Boundary Road in Truganina, our new dealership sits of 40,000 square metre of land built to accommodate our varied range of stock and our large servicing and repairs department. At Daimler Trucks Laverton, you can find:</p>
                    <ul>
                        <li>New trucks ranging from 2 to 140 tonne</li>
                        <li>Light Duty Trucks and Prime Movers</li>
                        <li>Mercedes-Benz Vans</li>
                        <li>Quality used vehicles of all makes and models</li>
                    </ul>
                    <p class="bold">State-of-the-art Service Centre</p>
                    <p>Our state-of-the-art service centre specialise in customised truck body building solutions, and supplies genuine Mercedes-Benz, Freightliner, and Fuso parts.</p>
                    <p>We can build special-purpose vehicles for mining, construction and transportation that are tailored to your specific business needs.</p>
                    <p>Open from 7:00am to 11pm, our team of professional service technicians will work to reduce the downtime for your vehicle. We also offer a 24/7 Breakdown Service within a 300km radius of our dealership.</p>
                    <p>You can learn more about our Service Department here.</p>

                    <p>Our customer lounge area with free WIFI will ensure you can enjoy a quality cup of coffee in comfort while waiting for your vehicle.</p>
                    <p class="bold">Come and see us</p>
                    <p>You can talk to our friendly staff about our services at our Laverton dealership or give us a call <strong><a href="tel:03 9680 8777">03 9680 8777</a></strong> to find out more information or book a test drive.</p>
                    <p>Velocity Truck Centres has served the truck industry for many years. With more than {{ $emp_count }} employees spread across 5 states, we can take care of your trucking needs.</p>
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