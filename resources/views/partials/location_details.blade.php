@if(isset($locationDetails) && count($locationDetails)>0)
@foreach($locationDetails as $locationDetail)
<div class="truck-location" id="{{$locationDetail->city}}">
    <a class="section-head">
        @if(isset($locationDetail->dealership_name) && !empty($locationDetail->dealership_name)
        && isset($locationDetail->city) && !empty($locationDetail->city))
            <!-- <i class="fa fa-angle-up"></i>--><div class="pr-4">{{$locationDetail->dealership_name}} - {{$locationDetail->city}}</div> 
        @elseif(isset($locationDetail->dealership_name) && !empty($locationDetail->dealership_name))
            <!-- <i class="fa fa-angle-up"></i> --><div class="pr-4">{{$locationDetail->dealership_name}}</div>
        @else
            <!-- <i class="fa fa-angle-up"></i> -->
        @endif
    </a>
    <div class="section-body menu-mobile-close">
        <div class="row location-details">
            <div class="col-md-12 mb-3">
                @if(isset($locationDetail->iframe_src) && !empty($locationDetail->iframe_src))
                    <iframe src="{{$locationDetail->iframe_src}}" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                    <a href="{{$locationDetail->directions_url}}" class="btn btn-red-small mt-3" target="_blank">Get Directions</a>
                @endif
            </div>
            <div class="col-md-12 ">
                <div class="form-group border-bottom">
                    <label class="font-weight-bold">Address</label>
                    @if(isset($locationDetail->address) && !empty($locationDetail->address))
                        <div class="text">{{$locationDetail->address}}</div>
                    @else
                        <div class="text"></div>
                    @endif
                </div>
                <div class="form-group border-bottom">
                    <label class="font-weight-bold">Phone</label>
                    <div class="text"><a class="no-style-inherit" href="tel:{{$siteData->primary_number}}">{{$siteData->primary_number}}</a></div>
                </div>
                @if(isset($locationDetail->primary_email) && !empty($locationDetail->primary_email))
                <div class="form-group border-bottom">
                    <label class="font-weight-bold">Email</label>
                    <div class="text"><a href="mailto:{{$locationDetail->primary_email}}" rel="nofollow" class="js-analytics-email EBG13 ROT13">{{$locationDetail->primary_email}}</a></div>
                </div>
                @endif
                @if(count($locationDetail->departments))
                    <div class="row">
                        @foreach($locationDetail->departments as $department)
                            <div class="col-md-6 form-group">
                                <div class="location-subtitle">{{$department->name}} Operating Hours</div>
                                @if(isset($department->working_hours) && !empty($department->working_hours))
                                    <div class="inner-group">
                                        <label>{!! $department->working_hours !!}</label>
                                    </div>
                                @endif
                                @if(isset($department->address) && !empty($department->address))
                                    <div class="inner-group">
                                        <label>Address: <b>{{ $department->address }}</b></label>
                                    </div>
                                @endif
                                @if(isset($department->main_num) && !empty($department->main_num))
                                    <div class="inner-group">
                                        <label>Main number: <b><a href="tel:{{ $department->main_num }}">{{ $department->main_num }}</a></b></label>
                                    </div>
                                @endif
                                @if(isset($department->mobile_num) && !empty($department->mobile_num))
                                    <div class="inner-group">
                                        <label>Mobile: <b><a href="tel:{{ $department->mobile_num }}">{{ $department->mobile_num }}</a></b></label>
                                    </div>
                                @endif
                                @if(isset($department->contact_form_email) && !empty($department->contact_form_email))
                                    <div class="inner-group">
                                        <label>Email: <b><a href="mailto:{{ $department->contact_form_email }}">{{ $department->contact_form_email }}</a></b></label>
                                    </div>
                                @endif
                                @if(isset($department->after_hours_num) && !empty($department->after_hours_num))
                                    <div class="inner-group">
                                        <label>After Hour Support: <b><a href="tel:{{ $department->after_hours_num }}">{{ $department->after_hours_num }}</a></b></label>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<br/>
@endforeach
@endif
<script>
    $(document).ready(function() {
        var splitArr = window.location.href.split("#");
        // console.log(splitArr);
        if(splitArr && splitArr.length > 1) {
            /* if(splitArr[1] == 'regency_park') {
                // var elementRegencyPark = document.getElementById('Regency Park');
                var elementMountGambier = document.getElementById('Mount Gambier');
                var elementMildura = document.getElementById('Mildura');
                // elementRegencyPark.style.display = 'none';
                elementMountGambier.style.display = 'none';
                elementMildura.style.display = 'none';
            } */
            if(splitArr[1] == 'mount_gambier') {
                var elementRegencyPark = document.getElementById('Regency Park');
                // var elementMountGambier = document.getElementById('Mount Gambier');
                var elementMildura = document.getElementById('Mildura');
                elementRegencyPark.style.display = 'none';
                // elementMountGambier.style.display = 'none';
                elementMildura.style.display = 'none';
            }
            if(splitArr[1] == 'mildura') {
                var elementRegencyPark = document.getElementById('Regency Park');
                var elementMountGambier = document.getElementById('Mount Gambier');
                // var elementMildura = document.getElementById('Mildura');
                elementRegencyPark.style.display = 'none';
                elementMountGambier.style.display = 'none';
                // elementMildura.style.display = 'none';
            }
        }
    });
</script>