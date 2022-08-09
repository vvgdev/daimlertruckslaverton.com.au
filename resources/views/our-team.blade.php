@extends('layouts.app')

@section('content')

<section class="middle-section">
    <!--Internal Banner-->
    <section class="internal-banner">
        <img width="1441" height="179" src="{{ asset('images/inner-banner.png') }}" alt="Our Inventory">
        <div class="container">
            <h1>Meet Our Team</h1>
        </div>
    </section>
    <!--Internal Banner-->
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success"> {{ session()->get('message') }} </div> 
        @endif
        <div class="our-team">
            <!-- <h1 class="page-title">Meet Our Team</h1> -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="tab">
                        @php
                            $deptsalesnew_exist = false;
                            $deptparts_exist = false;
                            $deptsalesused_exist = false;
                            $deptfinance_exist = false;
                            $deptservice_exist = false;
                        @endphp
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            @foreach ($ourTeam as $employee)
                                @php
                                if(isset($employee->department_name)) {
                                    $department = strtolower(trim($employee->department_name));
                                    if(strpos($department, 'sales-new') !== false || strpos($department, 'sales - new') !== false
                                    || strpos($department, 'sales- new') !== false || strpos($department, 'sales -new') !== false
                                    || strpos($department, 'sale-new') !== false || strpos($department, 'sale - new') !== false
                                    || strpos($department, 'sale- new') !== false || strpos($department, 'sale -new') !== false) {
                                        $deptsalesnew_exist=true;
                                    }
                                }
                                if(strpos($department, 'parts') !== false || strpos($department, 'part') !== false) {
                                    $deptparts_exist=true;
                                }
                                if(strpos($department, 'sales-used') !== false || strpos($department, 'sales - used') !== false
                                || strpos($department, 'sales- used') !== false || strpos($department, 'sales -used') !== false
                                || strpos($department, 'sale-used') !== false || strpos($department, 'sale - used') !== false
                                || strpos($department, 'sale -used') !== false || strpos($department, 'sale- used') !== false) {
                                    $deptsalesused_exist=true;
                                }
                                if(strpos($department, 'finance') !== false || strpos($department, 'finances') !== false) {
                                    $deptfinance_exist=true;
                                }
                                if(strpos($department, 'service') !== false || strpos($department, 'services') !== false) {
                                    $deptservice_exist=true;
                                }
                                @endphp
                            @endforeach
                            <li>
                                <a class="nav-link tab-link active" id="pills-all-tab"  data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
                            </li>
                            @if($deptsalesnew_exist)
                            <li>
                                <a class="nav-link tab-link" id="pills-sales-tab" data-toggle="pill" href="#pills-sales" role="tab" aria-controls="pills-sales" aria-selected="false">Sales</a>
                            </li>
                            @endif
                            @if($deptservice_exist)
                            <li>
                                <a class="nav-link tab-link" id="pills-service-tab" data-toggle="tab" href="#pills-service" role="tab" aria-controls="pills-service" aria-selected="false">Service</a>
                            </li>
                            @endif
                            @if($deptparts_exist)
                            <li>
                                <a class="nav-link tab-link" id="pills-parts-tab" data-toggle="tab" href="#pills-parts" role="tab" aria-controls="pills-parts" aria-selected="false">Parts</a>
                            </li>
                            @endif
                            @if($deptsalesused_exist)
                            <li>
                                <a class="nav-link tab-link" id="pills-used-tab" data-toggle="tab" href="#pills-used" role="tab" aria-controls="pills-used" aria-selected="false">Used</a>
                            </li>
                            @endif
                            @if($deptfinance_exist)
                            <li>
                                <a class="nav-link tab-link" id="pills-finance-tab" data-toggle="tab" href="#pills-finance" role="tab" aria-controls="pills-finance" aria-selected="false">Finance</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        @if(isset($ourTeam) && count($ourTeam)>0)
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                                <div class="row">
                                    @foreach ($ourTeam as $employee)
                                        @php
                                            if(isset($employee->department_name)) {
                                                $department = strtolower(trim($employee->department_name));
                                            }
                                            else
                                                $department = "";
                                        @endphp
                                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 col-6 form-group">
                                            <div class="contact-person-img">
                                                @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                    <img class="member-photo" src="{{$employee->profile_image}}">
                                                @else
                                                    <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                @endif
                                            </div>
                                            <div class="contact-name-detail">
                                                <h3>{{$employee->name}}</h3>
                                                <div class="designation">{{$employee->designation}}</div>
                                            </div>
                                            <div class="view-detail-btn">
                                                <button type="submit" data-toggle="modal" data-target="#exampleModalLong{{$employee->id}}" class="btn btn-red-small">View Detail </button>
                                            </div>
                                            <div class="contact-info">
                                                <div class="contact-wrapper">
                                                    @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                        <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                    @endif
                                                </div>
                                                @if(isset($employee->email) && !empty($employee->email))
                                                    <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                @endif
                                            </div>
                                            <div class="modal fade team-description-modal" id="exampleModalLong{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                                        </div>
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="contact-person-img">
                                                                        @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                                            <img class="member-photo" src="{{$employee->profile_image}}">
                                                                        @else
                                                                            <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                                        @endif
                                                                    </div>
                                                                    <div class="contact-info">
                                                                        @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                                            <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                                        @endif
                                                                        @if(isset($employee->email) && !empty($employee->email))
                                                                            <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="contact-name-detail">
                                                                        <h3>{{$employee->name}}</h3>
                                                                        <div class="designation">{{$employee->designation}}</div>
                                                                    </div>
                                                                    @if(isset($employee->bio_data))
                                                                        <p class="about-employee">{{$employee->bio_data}}</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-sales" role="tabpanel" aria-labelledby="pills-sales-tab">
                                <div class="row">
                                    @foreach ($ourTeam as $employee)
                                        @php
                                            $dept_exist = false;
                                            if(isset($employee->department_name)) {
                                                $department = strtolower(trim($employee->department_name));
                                                if(strpos($department, 'sales-new') !== false || strpos($department, 'sales - new') !== false
                                                || strpos($department, 'sales- new') !== false || strpos($department, 'sales -new') !== false
                                                || strpos($department, 'sale-new') !== false || strpos($department, 'sale - new') !== false
                                                || strpos($department, 'sale- new') !== false || strpos($department, 'sale -new') !== false) {
                                                    $dept_exist=true;
                                                }
                                            }
                                        @endphp
                                        @if($dept_exist)
                                            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 form-group">
                                                <div class="contact-person-img">
                                                    @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                        <img class="member-photo" src="{{$employee->profile_image}}">
                                                    @else
                                                        <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                    @endif
                                                </div>
                                                <div class="contact-name-detail">
                                                    <h3>{{$employee->name}}</h3>
                                                    <div class="designation">{{$employee->designation}}</div>
                                                </div>
                                                <div class="view-detail-btn">
                                                    <button type="submit" data-toggle="modal" data-target="#Sales{{$employee->id}}" class="btn btn-red-small">View Detail </button>
                                                </div>
                                                <div class="contact-info">
                                                    <div class="contact-wrapper">
                                                        @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                            <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                        @endif
                                                    </div>
                                                    @if(isset($employee->email) && !empty($employee->email))
                                                        <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                    @endif
                                                </div>
                                                <div class="modal fade team-description-modal" id="Sales{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                            </div>
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="contact-person-img">
                                                                            @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                                                <img class="member-photo" src="{{$employee->profile_image}}">
                                                                            @else
                                                                                <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                                            @endif
                                                                        </div>
                                                                        <div class="contact-info">
                                                                            @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                                                <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                                            @endif
                                                                            @if(isset($employee->email) && !empty($employee->email))
                                                                                <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="contact-name-detail">
                                                                            <h3>{{$employee->name}}</h3>
                                                                            <div class="designation">{{$employee->designation}}</div>
                                                                        </div>
                                                                        @if(isset($employee->bio_data))
                                                                            <p class="about-employee">{{$employee->bio_data}}</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div> 
                            <div class="tab-pane fade" id="pills-service" role="tabpanel" aria-labelledby="pills-service-tab">
                                <div class="row">
                                    @foreach ($ourTeam as $employee)
                                        @php
                                        $dept_exist = false;
                                        if(isset($employee->department_name)) {
                                            $department = strtolower(trim($employee->department_name));
                                            if(strpos($department, 'service') !== false || strpos($department, 'services') !== false) {
                                                $dept_exist=true;
                                            }
                                        }
                                        @endphp
                                        @if($dept_exist)
                                            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 form-group">
                                                <div class="contact-person-img">
                                                    @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                        <img class="member-photo" src="{{$employee->profile_image}}">
                                                    @else
                                                        <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                    @endif
                                                </div>
                                                <div class="contact-name-detail">
                                                    <h3>{{$employee->name}}</h3>
                                                    <div class="designation">{{$employee->designation}}</div>
                                                </div>
                                                <div class="view-detail-btn">
                                                    <button type="submit" data-toggle="modal" data-target="#Service{{$employee->id}}" class="btn btn-red-small">View Detail </button>
                                                </div>
                                                <div class="contact-info">
                                                    <div class="contact-wrapper">
                                                        @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                            <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                        @endif
                                                    </div>
                                                    @if(isset($employee->email) && !empty($employee->email))
                                                        <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                    @endif
                                                </div>
                                                <div class="modal fade team-description-modal" id="Service{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                            </div>
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="contact-person-img">
                                                                            @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                                                <img class="member-photo" src="{{$employee->profile_image}}">
                                                                            @else
                                                                                <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                                            @endif
                                                                        </div>
                                                                        <div class="contact-info">
                                                                            @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                                                <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                                            @endif
                                                                            @if(isset($employee->email) && !empty($employee->email))
                                                                                <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="contact-name-detail">
                                                                            <h3>{{$employee->name}}</h3>
                                                                            <div class="designation">{{$employee->designation}}</div>
                                                                        </div>
                                                                        @if(isset($employee->bio_data))
                                                                            <p class="about-employee">{{$employee->bio_data}}</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-parts" role="tabpanel" aria-labelledby="pills-parts-tab">
                                <div class="row">
                                    @foreach ($ourTeam as $employee)
                                        @php
                                            $dept_exist = false;
                                            if(isset($employee->department_name)) {
                                                $department = strtolower(trim($employee->department_name));
                                                if(strpos($department, 'parts') !== false || strpos($department, 'part') !== false) {
                                                    $dept_exist=true;
                                                }
                                            }
                                        @endphp
                                        @if($dept_exist)
                                            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 form-group">
                                                <div class="contact-person-img">
                                                    @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                        <img class="member-photo" src="{{$employee->profile_image}}">
                                                    @else
                                                        <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                    @endif
                                                </div>
                                                <div class="contact-name-detail">
                                                    <h3>{{$employee->name}}</h3>
                                                    <div class="designation">{{$employee->designation}}</div>
                                                </div>
                                                <div class="view-detail-btn">
                                                    <button type="submit" data-toggle="modal" data-target="#Parts{{$employee->id}}" class="btn btn-red-small">View Detail </button>
                                                </div>
                                                <div class="contact-info">
                                                    <div class="contact-wrapper">
                                                        @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                            <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                        @endif
                                                    </div>
                                                    @if(isset($employee->email) && !empty($employee->email))
                                                        <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                    @endif
                                                </div>
                                                <div class="modal fade team-description-modal" id="Parts{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                            </div>
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="contact-person-img">
                                                                            @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                                                <img class="member-photo" src="{{$employee->profile_image}}">
                                                                            @else
                                                                                <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                                            @endif
                                                                        </div>
                                                                        <div class="contact-info">
                                                                            @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                                                <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                                            @endif
                                                                            @if(isset($employee->email) && !empty($employee->email))
                                                                                <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="contact-name-detail">
                                                                            <h3>{{$employee->name}}</h3>
                                                                            <div class="designation">{{$employee->designation}}</div>
                                                                        </div>
                                                                        @if(isset($employee->bio_data))
                                                                            <p class="about-employee">{{$employee->bio_data}}</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div> 
                                <div class="tab-pane fade" id="pills-used" role="tabpanel" aria-labelledby="pills-used-tab">
                                    <div class="row">
                                        @foreach ($ourTeam as $employee)
                                            @php
                                                $dept_exist = false;
                                                if(isset($employee->department_name)) {
                                                    $department = strtolower(trim($employee->department_name));
                                                    if(strpos($department, 'sales-used') !== false || strpos($department, 'sales - used') !== false
                                                        || strpos($department, 'sales- used') !== false || strpos($department, 'sales -used') !== false
                                                        || strpos($department, 'sale-used') !== false || strpos($department, 'sale - used') !== false
                                                        || strpos($department, 'sale -used') !== false || strpos($department, 'sale- used') !== false) {
                                                            $dept_exist=true;
                                                        }
                                                }
                                            @endphp
                                            @if($dept_exist)
                                                <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 form-group">
                                                    <div class="contact-person-img">
                                                        @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                            <img class="member-photo" src="{{$employee->profile_image}}">
                                                        @else
                                                            <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                        @endif
                                                    </div>
                                                    <div class="contact-name-detail">
                                                        <h3>{{$employee->name}}</h3>
                                                        <div class="designation">{{$employee->designation}}</div>
                                                    </div>
                                                    <div class="view-detail-btn">
                                                        <button type="submit" data-toggle="modal" data-target="#Used{{$employee->id}}" class="btn btn-red-small">View Detail </button>
                                                    </div>
                                                    <div class="contact-info">
                                                        <div class="contact-wrapper">
                                                            @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                                <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                            @endif
                                                        </div>
                                                        @if(isset($employee->email) && !empty($employee->email))
                                                            <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                        @endif
                                                    </div>
                                                    <div class="modal fade team-description-modal" id="Used{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                                </div>
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="contact-person-img">
                                                                                @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                                                    <img class="member-photo" src="{{$employee->profile_image}}">
                                                                                @else
                                                                                    <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                                                @endif
                                                                            </div>
                                                                            <div class="contact-info">
                                                                                @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                                                    <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                                                @endif
                                                                                @if(isset($employee->email) && !empty($employee->email))
                                                                                    <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="contact-name-detail">
                                                                                <h3>{{$employee->name}}</h3>
                                                                                <div class="designation">{{$employee->designation}}</div>
                                                                            </div>
                                                                            @if(isset($employee->bio_data))
                                                                                <p class="about-employee">{{$employee->bio_data}}</p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-finance" role="tabpanel" aria-labelledby="pills-finance-tab">
                                    <div class="row">
                                        @foreach ($ourTeam as $employee)
                                            @php
                                                $dept_exist = false;
                                                if(isset($employee->department_name)) {
                                                    $department = strtolower(trim($employee->department_name));
                                                    if(strpos($department, 'finance') !== false || strpos($department, 'finances') !== false) {
                                                        $dept_exist=true;
                                                    }
                                                }
                                            @endphp
                                            @if($dept_exist)
                                            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 form-group">
                                                <div class="contact-person-img">
                                                    @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                        <img class="member-photo" src="{{$employee->profile_image}}">
                                                    @else
                                                        <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                    @endif
                                                </div>
                                                <div class="contact-name-detail">
                                                    <h3>{{$employee->name}}</h3>
                                                    <div class="designation">{{$employee->designation}}</div>
                                                </div>
                                                <div class="view-detail-btn">
                                                    <button type="submit" data-toggle="modal" data-target="#Finance{{$employee->id}}" class="btn btn-red-small">View Detail </button>
                                                </div>
                                                <div class="contact-info">
                                                    <div class="contact-wrapper">
                                                        @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                            <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                        @endif
                                                    </div>
                                                    @if(isset($employee->email) && !empty($employee->email))
                                                        <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                    @endif
                                                </div>
                                                <div class="modal fade team-description-modal" id="Finance{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                            </div>
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="contact-person-img">
                                                                            @if(isset($employee->profile_image) && !empty($employee->profile_image))
                                                                                <img class="member-photo" src="{{$employee->profile_image}}">
                                                                            @else
                                                                                <img class="member-photo" src="{{ asset('images/avtar-user.jpeg') }}">
                                                                            @endif
                                                                        </div>
                                                                        <div class="contact-info">
                                                                            @if(isset($employee->phone_no) && !empty($employee->phone_no))
                                                                                <a class="contact-number" href="tel:{{$employee->phone_no}}"><i class="fa fa-phone"></i>{{$employee->phone_no}}</a>
                                                                            @endif
                                                                            @if(isset($employee->email) && !empty($employee->email))
                                                                                <a href="mailto:{{$employee->email}}" class="email"><i class="fa fa-envelope-o"></i>{{$employee->email}}</a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="contact-name-detail">
                                                                            <h3>{{$employee->name}}</h3>
                                                                            <div class="designation">{{$employee->designation}}</div>
                                                                        </div>
                                                                        @if(isset($employee->bio_data))
                                                                            <p class="about-employee">{{$employee->bio_data}}</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection