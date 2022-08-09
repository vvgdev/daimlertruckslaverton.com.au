        <link href="{{env('IMOTOR_URL')}}/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{env('IMOTOR_URL')}}/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{env('IMOTOR_URL')}}/css/style.css" rel="stylesheet"> 
        <script src="{{ env('IMOTOR_URL')}}/js/jquery-3.2.1.min.js"></script>
        <script>
            function accordion(id) {
                if ($(window).width() <= 943) {
                    var x = document.getElementById(id);
                    $(x).siblings().toggleClass('active');
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                    } else {
                        x.className = x.className.replace(" w3-show", "");
                    }
                }
            }
        </script>
        <footer class="footer" id="layout-footer"> 
            <div class="footer-wrapper">
                <div class="container-fluid">
                    <div class="row no-gutter">
                        <div class="col-md-12 col-lg-8">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 onclick="accordion('specialsLinks')">Links <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></h4>
                                    <ul id="specialsLinks" class="footer-links w3-container w3-hide">
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/specials" title="Specials">Specials</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/factory-offers" title="Specials">Factory Offers</a>
                                        </li>
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
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/elite-support" title="Elite Support">Elite Support</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/parts" title="Parts">Parts</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/parts-specials" title="Parts Specials">Parts Specials</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/finance" title="Finance">Finance</a>
                                        </li>
                                        <li>
                                            <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="_blank" title="Daimler Trucks Somerton Privacy policy">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="https://www.velocitytruckcentres.com.au/privacy-policy" target="_blank">Terms &amp; Conditions</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h4 onclick="accordion('brandsLinks')">Brands <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></h4>
                                    <ul id="brandsLinks" class="footer-links w3-container w3-hide">
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/brands/mercedes-benz/trucks" title="Mercedes-Benz Trucks" target="_self">Mercedes-Benz Trucks</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/brands/freightliner" title="Freightliner" target="_self">Freightliner</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/brands/fuso/canter" title="Fuso" target="_self">Fuso</a>
                                        </li>
                                        <!-- <li>
                                            <a href="http://www.mbvcnorthside.com.au" title="Mercedes-Benz Vans" target="_self">Mercedes-Benz Vans</a>
                                        </li> -->
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/stock/used-trucks/" title="Used Trucks">Used Trucks</a>
                                        </li>
                                        <li><a href="{{env('IMOTOR_URL')}}/engines" title="Engines">Engines</a></li>
                                        <li><a href="{{env('IMOTOR_URL')}}/transmissions" title="Transmissions">Transmissions</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h4 onclick="accordion('stockLinks')">Our Stock <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></h4>
                                    <ul id="stockLinks" class="footer-links w3-container w3-hide">
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/stock/new-trucks/" title="New Trucks">New Trucks</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/stock/demo-trucks/" title="Demo Trucks">Demo Trucks</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/stock/used-trucks" title="Used Trucks">Used Trucks</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h4 onclick="accordion('contactLinks')">Contact Us <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></h4>
                                    <ul id="contactLinks" class="footer-links w3-container w3-hide">
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/contact-us#contact_tab_id" title="Contact Us">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/about-us" title="About Us">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/our-team" title="Meet Our Team">Meet Our Team</a>
                                        </li>
                                        <li>
                                            <a href="https://www.velocitytruckcentres.com.au/careers" target="_blank" title="Careers">Careers</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/latest-news" title="Latest News">Latest News</a>
                                        </li>
                                        <li>
                                            <a href="{{env('IMOTOR_URL')}}/recent-deliveries" title="Recent Deliveries">Recent Deliveries</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="footer-icon-wrapper">
                                <a href="https://www.facebook.com/daimlertruckssomerton/" target="_blank" data-ga-social="facebook" class="social-link d-inline-block"><span class="facebook-icon last"></span></a>
                                <a href="https://www.youtube.com/channel/UCk341h4frB9JtySySl0e9nw" target="_blank" data-ga-social="youtube" class="social-link d-inline-block"><span class="youtube-icon last"></span></a>
                                <a href="https://www.linkedin.com/company/daimler-trucks-somerton/" target="_blank" data-ga-social="linkedin" class="social-link d-inline-block"><span class="linkedin-icon last"></span></a>
                                <a href="https://www.instagram.com/daimlertruckssomerton/" target="_blank" data-ga-social="instagram" class="social-link d-inline-block"><span class="instagram-icon last"></span></a>
                            </div>
                            <p class="emergency-contact clear-both">24/7 Emergency Roadside Assistance: <br> Trucks: <a href="tel:1800 033 557">1800 033 557</a><br>
                            <a class="company-contact" href="tel:(03) 9305 4152"><i class="fa fa-phone"></i>(03) 9305 4152</a>
                            </p>
                            <span class="footer_ham_small_copyright" style="">Copyright © {{ now()->year }} Velocity Truck Centres.</span> 
                            <span class="footer_ham_small_copyright" style="">LMCT 0011636</span>
                            <a href="https://www.velocitytruckcentres.com.au/"><img class="vtc-logo pull-right pt-4" src="{{env('IMOTOR_URL')}}/images/VTC_Logo_White.png" width="125" height="75"/></a>
                            <a href="{{env('IMOTOR_URL')}}/elite-support" title="Elite Support"><img class="elite-logo pull-right mr-4 mt-3" src="{{env('IMOTOR_URL')}}/images/elite-logo.png" width="70"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
	</body>
</html>