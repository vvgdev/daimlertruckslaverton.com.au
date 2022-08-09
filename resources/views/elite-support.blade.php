@extends('layouts.app')

@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Elite Support</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="elite-support page-multi mt-5">
        <div class="container">
            <img src="/images/elite-support.jpeg" class="mb-5"/>
            <b>WE ARE AN ELITE SUPPORT CERTIFIED DEALERSHIP!</b>
            <p>On behalf of all the team at Daimler Trucks Somerton, we are thrilled to announce our Elite Support Certification!</p>
            <p>What is Elite Support you ask? Elite Support is a joint initiative by Daimler Truck and Bus and the Daimler Truck dealer network that will deliver a new level of service for customers of Mercedes-Benz, Freightliner and Fuso in Australia. The aim of Elite Support is to maximise vehicle uptime with rapid diagnosis though Express Assessment, consistent communication and robust parts availability, as well as a premium in-dealership experience. In order to achieve Elite Support certification, Daimler Truck dealerships must satisfy more than 126 criteria, providing specific standards in a variety of areas.</p>
            <p>“Our continued goal is to deliver better value and faster turnarounds with unmatched aftersales support. This can only be possible through continuous improvement and a commitment to improving the experience for our customers.”</p>
            <p>As only the second dealership in Australia and first of the major metro dealers in the network to have achieved certification, we are well on our way to delivering a point of difference to our customers and ultimately leading the industry to new benchmarks.</p>
            <p>Congratulations again to everyone here at Daimler Trucks Somerton on this achievement.</p>
            <p>So come on down and see for yourself! We can’t wait for our customers to experience the Elite Support difference!</p>
            <hr/>
            <div class="benefits">
                <h2 style="font-size: 26px;font-weight: 600;margin-bottom: 20px;">Benefits</h2>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <h3 class="mt-0" style="font-size: 22px;font-weight: 600;">Express Assessment</h3>
                        <a class="btn btn-red-small mb-4" href="/service">Book a service</a>
                        <p>
                        All Elite Services Certified locations participate in Express Assessment which is a commitment to provide a preliminary diagnosis and communication to the customer within two hours of a truck arriving at the dealership. Express assessment is a process, not a program. It is intended to become part of the way our service department performs its day-to-day work. We commit to: communicate a preliminary diagnosis, check part availability and provide an estimate of cost and repair time.
                        </p>
                    </div>
                    <div class="col-md-4 form-group">
                        <h3 class="mt-0" style="font-size: 22px;font-weight: 600;">Maximising Uptime</h3>
                        <a class="btn btn-red-small mb-4" href="/contact-us">Contact Us</a>
                        <p>
                        The ultimate goal of the Elite Services Network is maximising vehicle uptime. Every Elite Services dealership must be recertified annually to ensure you experience a consistent, higher standard with every visit across our network.
                        </p>
                    </div>
                    <div class="col-md-4 form-group">
                        <h3 class="mt-0" style="font-size: 22px;font-weight: 600;">Best-Trained Techs</h3>
                        <a class="btn btn-red-small mb-4" href="/our-team">Meet our team</a>
                        <p>
                        Our technicians receive continual training from the experts. We focus on a solid understanding of all vehicle systems and have access to the latest tools to expedite repairs.
                        </p>
                    </div>
                    <div class="col-md-4 form-group">
                        <h3 style="font-size: 22px;font-weight: 600;">Continuous Improvement</h3>
                        <a class="btn btn-red-small mb-4" href="/contact-us">Contact Us</a>
                        <p>
                        Every dealership earning the Elite Services certification must meet 137 specific criteria across 20 customer service areas. To maintain these high standards, dealerships employ a Continuous Improvement Coordinator.
                        </p>
                    </div>
                    <div class="col-md-4 form-group">
                        <h3 style="font-size: 22px;font-weight: 600;">Robust Parts Available</h3>
                        <a class="btn btn-red-small mb-4" href="/parts">Parts Enquiry</a>
                        <p>
                        Through the combined experience of our network and close collaboration with our service team, we understand what parts we need on-hand to get you back on the road quickly. Focus Parts, our data-driven stocking program, ensures that the parts you need are never far away.
                        </p>
                    </div>
                    <div class="col-md-4 form-group">
                        <h3 style="font-size: 22px;font-weight: 600;">Exceptional Amenities</h3>
                        <a class="btn btn-red-small mb-4" href="/service">See our services</a>
                        <p>
                        We know that when we service your vehicle, we're servicing your business. Elite Service Certified dealers believe in providing quality repairs and timely communication from a friendly and familiar team. Our facilities are designed to minimise downtime and provide a comfortable environment for drivers as we work to get your truck back on the road.
                        </p>
                    </div>
                </div>
            </div>
            <iframe class="videos" src="https://www.youtube.com/embed/gDNgR9OqWHA" allowfullscreen=""></iframe>
            <iframe class="videos" src="https://www.youtube.com/embed/l2dexQJ3T3s" allowfullscreen=""></iframe>
            <hr/>
            @include('partials.location_details') 
        </div>
    </div>
</section>

@endsection