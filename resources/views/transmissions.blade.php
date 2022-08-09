@extends('layouts.app')

@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Transmissions</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        <div class="transmissions-page page-multi mt-5">
            <!-- <h1 class="page-title">Transmissions</h1> -->
            @if(isset($transmissionData) && count($transmissionData)>0)
                @foreach($transmissionData as $transmission)
                    <div class="sections-wrapper para">
                        <h3 id="{{$transmission->slug}}">{{$transmission->title}}</h3>
                        <div class="left-section">
                            <img class="img-no-margin image-100" src="{{$transmission->image_url}}" alt="{{$transmission->image_alt}}">
                        </div>
                        <div class="right-section">
                            {!! $transmission->description !!}
                            <a class="btn btn-red-small" href="{{$transmission->learn_more_file}}" target="_blank">Learn More</a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="section-wrapper para">
                    <p>No transmissions available.</p>
                </div>
            @endif
        </div>
    </div>
</section>

@endsection