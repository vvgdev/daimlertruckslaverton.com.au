@extends('layouts.app')

@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Engines</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        <div class="engines-page page-multi mt-5">
            <!-- <h1 class="page-title">Engines</h1> -->
            @if(isset($engineData) && count($engineData)>0)
                @foreach($engineData as $engine)
                    <div class="sections-wrapper para">
                        <h3 class="" id="{{$engine->slug}}">{{$engine->title}}</h3>
                        <div class="left-section">
                            <img class="image-100" src="{{$engine->image_url}}" alt="{{$engine->image_alt}}">
                        </div>
                        <div class="right-section">
                            {!! $engine->description !!}
                            <a class="btn btn-red-small" href="{{$engine->learn_more_file}}" target="_blank">Learn More</a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="sections-wrapper para">
                    <p>No Engine Data Available</p>
                </div>
            @endif
        </div>
    </div>
</section>

@endsection