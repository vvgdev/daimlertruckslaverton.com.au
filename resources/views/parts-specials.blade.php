@extends('layouts.app1')
@section('title') Truck Parts Specials Melbourne | Daimler Parts For Sale VIC @stop
@section('meta_title') Truck Parts Specials Melbourne | Daimler Parts For Sale VIC @stop
@section('meta_keywords') Parts Specials - Daimler Trucks Laverton @stop
@section('meta_description') We are your one stop shop for truck parts in VIC. We stock a huge range of truck parts and accessories, as well as some great Daimler merchandise. @stop
@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Parts Specials</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="parts-specials page-multi mt-5">
            <!-- <h1 class="page-title">Parts Specials</h1> -->
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
                        <li class="tab-title" id="benz_van_desc">
                            <a href="#benz_van_tab" data-toggle="tab" aria-expanded="true">
                            <i class="dtm-mercedes-logo"></i>Mercedes Benz Van</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="benz_tab">
                        @if(isset($mercedes_benz) && count($mercedes_benz) > 0)
                            <div class="content">
                                @foreach($mercedes_benz as $mb)
                                    <h3>{{$mb->name}}</h3>
                                    <hr/>
                                    <div class="row">
                                        @if($mb->logo != 'https://www.velocitytruckcentres.com.au/storage/app/media')
                                            <div class="col-md-6">
                                                <img class="mb-3" src="{{$mb->logo}}" alt="{{$mb->logo_alt}}">
                                            </div>
                                        @endif   
                                        <div class="col-md-6">
                                            <iframe allowfullscreen allow="fullscreen" style="border:none;width:100%;height:100%;min-height: 400px;" src="{{$mb->embedded_iframe_src}}"></iframe> 
                                        </div>
                                    </div> 
                                @endforeach
                            </div>    
                        @else
                            <div class="content">
                                <p>No Data Available.</p>
                            </div>
                        @endif                                
                    </div>
                    <div class="tab-pane" id="benz_van_tab">
                        <div class="content para">
                        @if(isset($mercedes_benz) && count($mercedes_benz) > 0)
                            <div class="content">
                                @foreach($mercedes_benz as $mb)
                                    <h3>{{$mb->name}}</h3>
                                    <iframe allowfullscreen allow="fullscreen" style="border:none;width:100%;height:100%;min-height: 400px;" src="{{$mb->embedded_iframe_src}}"></iframe> 
                                @endforeach
                            </div>    
                        @else
                            <div class="content">
                                <p>No Data Available.</p>
                            </div>
                        @endif 
                        </div>            
                    </div>
                    <div class="tab-pane" id="freightliner_tab">
                        @if(isset($freightlinerData) && count($freightlinerData) > 0)
                            <div class="content">
                            @foreach($freightlinerData as $freightliner)
                                <h3>{{$freightliner->name}}</h3>
                                <hr/>
                                <div class="row">
                                    @if($freightliner->logo != 'https://www.velocitytruckcentres.com.au/storage/app/media')
                                        <div class="col-md-6">
                                            <img class="mb-3" src="{{$freightliner->logo}}" alt="{{$freightliner->logo_alt}}">
                                        </div>
                                    @endif   
                                    <div class="col-md-6">
                                        <iframe allowfullscreen allow="fullscreen" style="border:none;width:100%;height:100%;min-height: 400px;" src="{{$freightliner->embedded_iframe_src}}"></iframe> 
                                    </div>
                                </div> 
                                <!-- <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{$freightliner->pdf_url}}" target="_blank"><img class="mb-3" src="{{$freightliner->logo}}" alt="{{$freightliner->logo_alt}}"></a>
                                        <div class="text-center">
                                            <a class="btn btn-red-small mt-0 mb-4" href="{{$freightliner->pdf_url}}" target="_blank">Click here to view brochure</a>
                                        </div>
                                    </div>
                                </div> -->
                            @endforeach
                            </div>    
                        @else
                            <div class="content">
                                <p>No Data Available.</p>
                            </div>
                        @endif
                    </div>
                    <div class="tab-pane" id="fuso_tab">
                        @if(isset($fusoData) && count($fusoData) > 0)
                            <div class="content">
                            @foreach($fusoData as $fuso)
                                <h3>{{$fuso->name}}</h3>
                                <hr/>
                                <div class="row">
                                    @if($fuso->logo != 'https://www.velocitytruckcentres.com.au/storage/app/media')
                                        <div class="col-md-6">
                                            <img class="mb-3" src="{{$fuso->logo}}" alt="{{$fuso->logo_alt}}">
                                        </div>
                                    @endif   
                                    <div class="col-md-6">
                                        <iframe allowfullscreen allow="fullscreen" style="border:none;width:100%;height:100%;min-height: 400px;" src="{{$fuso->embedded_iframe_src}}"></iframe> 
                                    </div>
                                </div> 
                                <!-- <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{$fuso->pdf_url}}" target="_blank"><img class="mb-3" src="{{$fuso->logo}}" alt="{{$fuso->logo_alt}}"></a>
                                        <div class="text-center">
                                            <a class="btn btn-red-small mt-0 mb-4" href="{{$fuso->pdf_url}}" target="_blank">Click here to view brochure</a>
                                        </div>
                                    </div>
                                </div> -->
                            @endforeach
                        @else
                            <div class="content">
                                <p>No Data Available.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @include('partials.location_details')
    </div>
</section>

<script type="text/javascript">
    var booksOptions = {
        condoLiving: {
        pdf: 'images/Parts_Central_Winter_2021_-_Daimler_Trucks_Huntingwood.pdf',
        downloadURL: 'images/Parts_Central_Winter_2021_-_Daimler_Trucks_Huntingwood.pdf',
        },
    };
    var instance = {
        scene: undefined,
        options: undefined,
        node: $('#flipBookModal .flip-book-container')
    };
    var modal = $('#flipBookModal');
        modal.addClass('light');
        modal.on('hide.bs.modal', function() {
        instance.scene.dispose();
    });
    modal.on('show.bs.modal', function() {
        instance.scene = instance.node.FlipBook(instance.options);
    });
    $('.flip-book img').click(function(e) {
        booksOptions[e.target.id].pdf = $(this).attr("data-pdfurl");
        booksOptions[e.target.id].downloadURL = $(this).attr("data-pdfurl");
        if(e.target.id) {
            instance.options = booksOptions[e.target.id];
            $('#flipBookModal').modal('show');
        }
    });
</script>
@endsection