<body>
    <link href="{{env('IMOTOR_URL')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{env('IMOTOR_URL')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{env('IMOTOR_URL')}}/css/style.css" rel="stylesheet">
    <script src="{{ env('IMOTOR_URL')}}/js/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#mobile-nav-btn").click(function(e) {
                $(".header").toggleClass('header-responsive');
                $(".mobile-nav .drop-menu").toggleClass('show-on-mobile');
                $(this).toggleClass('menu-mobile-close');
                e.preventDefault();
            });
            $(".panel-head").click(function(e) {
                $(this).children('.fa').toggleClass('fa-angle-up fa-angle-down');
                $(this).next().slideToggle();
            });
        });
    </script>
    <header id="layout-header" class="header">
        <div class="container">
            <div class="mobile-nav clearfix">
                <a id="mobile-nav-btn" type="button" class="mobile-menu"><span class="d-block">Menu</span> </a>
                <a id="mobile-nav-btn" type="button" class="mobile-call pull-right" href="tel:(03) 9680 8777"><i class="fa fa-phone"></i> Call </a>
                <a href="{{env('IMOTOR_URL')}}" class="daimler-logo">
                    <img class="company-logo" src="{{env('IMOTOR_URL')}}/images/daimlertrucks_laverton_logo.jpeg"/>
                </a>
                <div class="drop-menu">
                    <div class="panel">
                        <a class="panel-head" href="javascript:void(0)">
                            Brands<span class="fa fa-angle-down"></span>
                        </a>
                        <div class="panel-body menu-mobile-close">
                            <a href="{{env('IMOTOR_URL')}}/brands/mercedes-benz/trucks" title="Mercedes-Benz Trucks">Mercedes-Benz Trucks</a>
                            <a href="{{env('IMOTOR_URL')}}/brands/freightliner" title="Freightliner">Freightliner</a>
                            <a href="{{env('IMOTOR_URL')}}/brands/fuso/canter" title="Fuso">Fuso</a>
                            <a href="{{env('IMOTOR_URL')}}/brands/mercedes-benz/van" title="Mercedes-Benz Vans">Mercedes-Benz Vans</a>
                            <a href="{{env('IMOTOR_URL')}}/stock/used-trucks/" title="Used Trucks">Used Trucks</a>
                            <a href="{{env('IMOTOR_URL')}}/engines" title="Engines">Engines</a>
                            <a href="{{env('IMOTOR_URL')}}/transmissions" title="Transmissions">Transmissions</a>
                        </div>
                    </div>
                    <div class="panel">
                        <a class="panel-head" href="javascript:void(0)">our stock<span class="fa fa-angle-down"></span></a>
                        <div class="panel-body menu-mobile-close">
                            <a href="{{env('IMOTOR_URL')}}/stock/new-trucks/" title="New Trucks">New Trucks</a>
                            <a href="{{env('IMOTOR_URL')}}/stock/demo-trucks/" title="Demo Trucks">Demo Trucks</a>
                            <a href="{{env('IMOTOR_URL')}}/stock/used-trucks" title="Used Trucks">Used Trucks</a>
                        </div>
                    </div>
                    <div class="panel">
                        <a class="panel-head" href="javascript:void(0)">
                            Specials<span class="fa fa-angle-down"></span>
                        </a>
                        <div class="panel-body menu-mobile-close">
                            <a href="{{env('IMOTOR_URL')}}/specials" title="local-offers">Local Offers</a>
                            <a href="{{env('IMOTOR_URL')}}/factory-offers" title="factory-offers">Factory Offers</a>
                        </div>
                    </div>
                    <div class="panel">
                        <a class="panel-head" href="javascript:void(0)">
                            Services<span class="fa fa-angle-down"></span>
                        </a>
                        <div class="panel-body menu-mobile-close">
                            <a href="{{env('IMOTOR_URL')}}/service" title="Service">Services</a>
                            <a href="{{env('IMOTOR_URL')}}/warranty" title="Warranty">Warranty</a>
                            <a href="{{env('IMOTOR_URL')}}/roadside-assistance" title="Roadside Assistance">Roadside Assistance</a>
                            <a href="{{env('IMOTOR_URL')}}/service-plans" title="Service Plans">Service Plans</a>
                        </div>
                    </div>
                    <div class="panel">
                        <a class="panel-head" href="javascript:void(0)">
                            Parts<span class="fa fa-angle-down"></span>
                        </a>
                        <div class="panel-body menu-mobile-close">
                            <a href="{{env('IMOTOR_URL')}}/parts" title="Parts">Parts</a>
                            <a href="{{env('IMOTOR_URL')}}/parts-specials" title="Parts Specials">Parts Specials</a>
                        </div>
                    </div>
                    <div class="panel">
                        <a class="" href="{{env('IMOTOR_URL')}}/finance">
                            finance<span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                    <div class="panel">
                        <a class="panel-head" href="javascript:void(0)">
                            Contact us<span class="fa fa-angle-down"></span>
                        </a>
                        <div class="panel-body menu-mobile-close">
                            <a href="{{env('IMOTOR_URL')}}/contact-us#contact_tab_id" title="Contact Us">Contact Us</a>
                            <a href="{{env('IMOTOR_URL')}}/about-us" title="About Us">About Us</a>
                            <a href="{{env('IMOTOR_URL')}}/our-team" title="Meet Our Team">Meet Our Team</a>
                            <a href="https://www.velocitytruckcentres.com.au/careers" target="_blank" title="Careers">Careers</a>
                            <a href="{{env('IMOTOR_URL')}}/latest-news" title="Latest News">Latest News</a>
                            <a href="{{env('IMOTOR_URL')}}/recent-deliveries" title="Recent Deliveries">Recent Deliveries</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row desktop-nav">
                <div class="col-md-4 text-center text-md-left">
                    <a href="{{env('IMOTOR_URL')}}">
                        <img class="company-logo" src="{{env('IMOTOR_URL')}}/images/daimlertrucks_laverton_logo.jpeg"/>
                    </a>
                </div>  
                <div class="col-md-8">
                    <p class="emergency-contact clear-both">24/7 Emergency Roadside Assistance: <br> Trucks: <a href="tel:1800 033 557">1800 033 557</a>
                    </p>
                    <nav class="topmenu">
                        <div class="menu-section">
                            <ul class="company-links">
                                <li class=""><a href="https://www.velocitytruckcentres.com.au/"><img class="vtc-logo pull-right" src="{{env('IMOTOR_URL')}}/images/vtc_logo.png" width="125" height="75"/></a></li>
                                <li class=""><a href="https://www.velocitytruckcentres.com.au/careers" target="_blank"><i class="fa fa-user"></i>Careers</a> </li>
                                <li class=""><a href="{{env('IMOTOR_URL')}}/about-us"><i class="fa fa-info"></i>About us</a> </li>
                                <li class=""><a href="{{env('IMOTOR_URL')}}/contact-us#contact_tab_id"><i class="fa fa-phone"></i>Contact us </a> </li>
                            </ul>
                            <ul class="main-nav">
                                <li>
                                    <a href="javascript:void(0)">Brands <i class="fa fa-angle-down"></i></a>
                                    <ol class="nav-secondary nav-brand-list">
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/brands/mercedes-benz/trucks" title="Mercedes-Benz Trucks">Mercedes-Benz Trucks</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/brands/freightliner" title="Freightliner">Freightliner</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/brands/fuso/canter" title="Fuso">Fuso</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/brands/mercedes-benz/van" title="Mercedes-Benz Vans">Mercedes-Benz Vans</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/stock/used-trucks/" title="Used Trucks">Used Trucks</a>
                                        </li>
                                        <li><a href="{{env('IMOTOR_URL')}}/engines" title="Engines">Engines</a></li>
                                        <li><a href="{{env('IMOTOR_URL')}}/transmissions" title="Transmissions">Transmissions</a></li>
                                    </ol>
                                </li>
                                <li>
                                    <a href="{{env('IMOTOR_URL')}}/stock/search/">Our stock <i class="fa fa-angle-down"></i></a>
                                    <ol class="nav-secondary ">
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/stock/new-trucks/" title="New Trucks">New Trucks</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/stock/demo-trucks/" title="Demo Trucks">Demo Trucks</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/stock/used-trucks/" title="Used Trucks">Used Trucks</a>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <a href="{{env('IMOTOR_URL')}}/specials">Specials <i class="fa fa-angle-down"></i></a>
                                    <ol class="nav-secondary">
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/specials" title="local-offers">Local Offers</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/factory-offers" title="factory-offers">Factory Offers</a>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <a href="{{env('IMOTOR_URL')}}/service">Service <i class="fa fa-angle-down"></i></a>
                                    <ol class="nav-secondary ">
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/service" title="Service">Service</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/warranty" title="Warranty">Warranty</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/roadside-assistance" title="Roadside Assistance">Roadside Assistance</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/service-plans" title="Service Plans">Service Plans</a>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <a href="{{env('IMOTOR_URL')}}/parts">Parts <i class="fa fa-angle-down"></i></a>
                                    <ol class="nav-secondary ">
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/parts" title="Parts">Parts</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/parts-specials" title="Parts Specials">Parts Specials</a>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <a href="{{env('IMOTOR_URL')}}/finance">Finance</a>
                                </li>
                                <li class="last-menu">
                                    <a href="{{env('IMOTOR_URL')}}/contact-us#contact_tab_id">Contact <i class="fa fa-angle-down"></i></a>
                                    <ol class="nav-secondary ">
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/our-team" title="Meet Our Team">Meet Our Team</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/latest-news" title="Latest News">Latest News</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/recent-deliveries" title="Recent Deliveries">Recent Deliveries</a>
                                        </li>
                                    </ol>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>