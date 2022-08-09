@extends('layouts.app')

@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Recent Deliveries</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        <div class="deliveries">
            <!-- <h1 class="page-title">Recent Deliveries</h1> -->
            <div class="row mt-5">
                @if(isset($recentDeliveries) && count($recentDeliveries)>0)
                    @foreach ($recentDeliveries as $recentDelivery)
                        <div class="col-md-4 form-group">
                            <div class="deliveries-wrapper">
                                <div class="delivery-block">
                                    <img src="{{$recentDelivery->image}}" alt="{{$recentDelivery->image_alt}}">
                                </div>
                                <div class="image-detail">
                                    <span>Delivery date: {{$recentDelivery->recent_delivery_date}}</span>
                                    <div class="shortdesc">{!! $recentDelivery->recent_deliveries_desc !!}</div>
                                </div>
                                <div class="view-detail-btn">
                                    <button type="submit" data-toggle="modal" data-target="#deliveries{{$recentDelivery->id}}" class="btn btn-red-small">View Detail </button>
                                </div>
                            </div>
                            <div class="modal fade deliveries-modal" id="deliveries{{$recentDelivery->id}}" tabindex="-1" role="dialog" aria-labelledby="deliveriesTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <div class="delivery-block">
                                                        <img src="{{$recentDelivery->image}}" alt="{{$recentDelivery->image_alt}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="image-detail">
                                                        <span>Delivery date: {{$recentDelivery->recent_delivery_date}}</span>
                                                        <div class="shortdesc">{!! $recentDelivery->recent_deliveries_desc !!}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

@endsection