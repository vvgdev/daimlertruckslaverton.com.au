@extends('layouts.app')

@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Special Offers</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        <div class="specials-page mt-5">
            @foreach($specials as $specialsData)
                @if(isset($specialsData->description) && !empty($specialsData->description))
                    <p>{!! $specialsData->description !!}</p>
                    <hr class="mt-5" />
                @endif
            @endforeach
            <!-- <div class="sub-title">Temporary Full Expensing – FY 2021/22 </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ds-text para">
                        <p>Eligible businesses for Temporary Full Expensing (TFE) include those with an aggregated annual turnover of less than $5 billion. TFE provides an immediate deduction on the business portion of the cost of eligible new depreciating assets. It can be applied to the full cost of a new vehicle, with no threshold. An immediate tax deduction will be available on delivery for new vehicles delivered between 6 October 2020 and 30 June 2023. </p>
                        <p>For businesses with an aggregated annual turnover less than $50 million, TFE will apply to the business portion of a new or second-hand, with no threshold. An immediate tax deduction will be available on delivery for all new and used vehicles delivered between 6 October 2020 and 30 June 2023.  </p>
                        <p><a href="/contact-us/" style="color:#0056b3;text-decoration:underline;">Contact us&nbsp;</a>today to discuss your options.</p>
                        <p><sup>*</sup>Please seek further independent professional advice for your own financial circumstances.</p>
                    </div>
                </div>
            </div> -->
            @include('partials.location_details')
        </div>
    </div>
</section>

@endsection 