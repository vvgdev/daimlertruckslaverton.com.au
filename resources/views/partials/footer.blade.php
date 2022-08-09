<footer class="footer" id="layout-footer">
    <div class="back-to-top">
        <a href="#top" id="back_top">
            <i class=""></i>
        </a>
    </div>
    <div class="footer-wrapper">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 onclick="accordion('specialsLinks')">Links <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></h4>
                            <ul id="specialsLinks" class="footer-links w3-container w3-hide">
                                <li>
                                    <a href="/specials" title="Specials">Specials</a>
                                </li>
                                <li>
                                    <a href="/factory-offers" title="Specials">Factory Offers</a>
                                </li>
                                <li>
                                    <a href="/service" title="Service">Service</a>
                                </li>
                                <li>
                                    <a href="/warranty" title="Warranty">Warranty</a>
                                </li>
                                <li>
                                    <a href="/roadside-assistance" title="Roadside Assistance">Roadside Assistance</a>
                                </li>
                                <li>
                                    <a href="/service-plans" title="Service Plans">Service Plans</a>
                                </li>
                                <li>
                                    <a href="/elite-support" title="Elite Support">Elite Support</a>
                                </li>
                                <li>
                                    <a href="/parts" title="Parts">Parts</a>
                                </li>
                                <li>
                                    <a href="/parts-specials" title="Parts Specials">Parts Specials</a>
                                </li>
                                <li>
                                    <a href="/finance" title="Finance">Finance</a>
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
                                    <a href="/brands/mercedes-benz/trucks" title="Mercedes-Benz Trucks" target="_self">Mercedes-Benz Trucks</a>
                                </li>
                                <li>
                                    <a href="/brands/freightliner" title="Freightliner" target="_self">Freightliner</a>
                                </li>
                                <li>
                                    <a href="/brands/fuso/canter" title="Fuso" target="_self">Fuso</a>
                                </li>
                                <!-- <li>
                                    <a href="http://www.mbvcnorthside.com.au" title="Mercedes-Benz Vans" target="_self">Mercedes-Benz Vans</a>
                                </li> -->
                                <li>
                                    <a href="/stock/used-trucks/" title="Used Trucks">Used Trucks</a>
                                </li>
                                <li><a href="/engines" title="Engines">Engines</a></li>
                                <li><a href="/transmissions" title="Transmissions">Transmissions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 onclick="accordion('stockLinks')">Our Stock <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></h4>
                            <ul id="stockLinks" class="footer-links w3-container w3-hide">
                                <li>
                                    <a href="/stock/new-trucks/" title="New Trucks">New Trucks</a>
                                </li>
                                <li>
                                    <a href="/stock/demo-trucks/" title="Demo Trucks">Demo Trucks</a>
                                </li>
                                <li>
                                    <a href="/stock/used-trucks" title="Used Trucks">Used Trucks</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 onclick="accordion('contactLinks')">Contact Us <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></h4>
                            <ul id="contactLinks" class="footer-links w3-container w3-hide">
                                <li>
                                    <a href="/contact-us#contact_tab_id" title="Contact Us">Contact Us</a>
                                </li>
                                <li>
                                    <a href="/about-us" title="About Us">About Us</a>
                                </li>
                                <li>
                                    <a href="/our-team" title="Meet Our Team">Meet Our Team</a>
                                </li>
                                <li>
                                    <a href="https://www.velocitytruckcentres.com.au/careers" target="_blank" title="Careers">Careers</a>
                                </li>
                                <li>
                                    <a href="/latest-news" title="Latest News">Latest News</a>
                                </li>
                                <li>
                                    <a href="/recent-deliveries" title="Recent Deliveries">Recent Deliveries</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="footer-icon-wrapper">
                        @if(isset($siteData->facebook_url) && !empty($siteData->facebook_url))
                            <a href="{{$siteData->facebook_url}}" target="_blank" data-ga-social="facebook" class="social-link d-inline-block"><span class="facebook-icon last"></span></a>
                        @endif 
                        @if(isset($siteData->youtube_url) && !empty($siteData->youtube_url))
                            <a href="{{$siteData->youtube_url}}" target="_blank" data-ga-social="youtube" class="social-link d-inline-block"><span class="youtube-icon last"></span></a>
                        @endif
                        @if(isset($siteData->linkedin_url) && !empty($siteData->linkedin_url))
                            <a href="{{$siteData->linkedin_url}}" target="_blank" data-ga-social="linkedin" class="social-link d-inline-block"><span class="linkedin-icon last"></span></a>
                        @endif
                        @if(isset($siteData->instagram_url) && !empty($siteData->instagram_url))
                            <a href="{{$siteData->instagram_url}}" target="_blank" data-ga-social="instagram" class="social-link d-inline-block"><span class="instagram-icon last"></span></a>
                        @endif
                        @if(isset($siteData->twitter_url) && !empty($siteData->twitter_url))
                            <a href="{{$siteData->twitter_url}}" target="_blank" data-ga-social="twitter" class="social-link d-inline-block"><span class="twitter-icon last"></span></a>
                        @endif
                    </div>
                    <p class="emergency-contact clear-both">24/7 Emergency Roadside Assistance: <br> Trucks: <a href="tel:1800 033 557">1800 033 557</a><br>
                    <a class="company-contact" href="tel:{{$siteData->primary_number}}"><i class="fa fa-phone"></i>{{$siteData->primary_number}}</a>
                    </p>
                    <span class="footer_ham_small_copyright" style="">Copyright © {{ now()->year }} Velocity Truck Centres.</span> 
                    <span class="footer_ham_small_copyright" style="">LMCT 0011636</span>
                    <a href="https://www.velocitytruckcentres.com.au/"><img class="vtc-logo pull-right pt-4" src="/images/VTC_Logo_White.png" width="125" height="75"/></a>
                    <a href="/elite-support" title="Elite Support"><img class="elite-logo pull-right mr-4 mt-3" src="/images/elite-logo.png" width="70"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var phone = document.querySelectorAll("a[href^='tel:']"),
            email = document.querySelectorAll("a[href^='mailto:']"),
            alert = document.querySelectorAll(".alert.alert-success");
        for (var i = 0; i < phone.length; i++) {
            phone[i].addEventListener("click", function () {
                gtag('event', 'phone_click', {
                    'event_category': 'phone number',
                    'event_label': 'contact'
                })
            });
        }
        for (var i = 0; i < email.length; i++) {
            email[i].addEventListener("click", function () {
                gtag('event', 'email_click', {
                    'event_category': 'email address',
                    'event_label': 'contact'
                })
            });
        }
        for (var i = 0; i < alert.length; i++) {
            if (alert[i].innerText == "Data Submitted Successfully...!") {
                gtag('event', 'form_submission', {
                    'event_category': window.location.pathname
                })
            }
        }
    }, false);
</script>