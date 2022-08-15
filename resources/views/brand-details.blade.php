@extends('layouts.app')

@section('content')

<section class="middle-section">
    <div class="container">
        <div class="inventory-application-container brand-detail">
            <a class="backto" href="">
                <i class="fa fa-arrow-left"></i>
                back to our brands
            </a>
            <h1 id="model-name">FUSO PRIME MOVERS</h1>
            <div class="inventory-application-top aos-item" data-aos="fade-in">
                <div class="row no-gutter">
                    <div class="col-md-6">
                        <div class="internal-slider">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <!-- <ol class="carousel-indicators" id="carousel-indicators-images">
                                    <li data-target="#myCarousel" data-slide-to="" class=""></li>
                                </ol> -->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" id="carousel-inner-images">
                                    <div class="item active">
                                        <img src="https://www.velocitytruckcentres.com.au/storage/app/media/Fuso/Heavy/Heavy-Prime-Mover.png" alt="">
                                    </div>
                                    <div class="item active">
                                        <img src="https://www.velocitytruckcentres.com.au/storage/app/media/MercedesBenz/trucks/mb-econic5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 truck-desc">
                        <p class="">
                            Whether it’s a metro, regional or intra-state job, the Prime Mover is designed to shift freight as efficiently as possible. There are two models depending on your application; the entry level 4x2, ideal for lighter loads, and the powerful 6x4 with greater hauling capacity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="branddetail-tabs">
                <div id="exTab1" class="tabs"> 
                    <div class="responsive custom-scrollbar">
                        <ul class="nav nav-pills">
                            <li>
                                <a  href="" data-toggle="tab" class="active">Class Leading Features</a>
                            </li>
                            <li>
                                <a href="#2a" data-toggle="tab" aria-expanded="false">Technology</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="">
                            <div class="short-desc">Unique transom window in passenger side door.</div>
                            <ul>
                                <li>
                                    <span class="points"><i class="dtm-angle-right"></i> </span> 
                                    <div class="spec-desc">40,000km service intervals which are among the longest available in a Japanese truck. </div>
                                </li> 
                                <li>
                                    <span class="points"><i class="dtm-angle-right"></i> </span> 
                                    <div class="spec-desc">40,000km service intervals which are among the longest available in a Japanese truck. </div>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <div class="download-brochure">
                    <a href="" class="icon" download>
                        <img src="/images/pdf_icon.png" height="80"/>
                    </a>
                    <span>Download Brochure of 4x2 Range</span>
                </div>
            </div>
            <div class="search-inventory">
                <div class="title">Sort Brochures by</div>
                    <form id="contactformfinance" 
                            data-request="onFilterClick"
                            data-request-flash
                            data-request-update="'firstchild/firstchild_list':'#firstchild_list_partial_div'">
                        <div class="search-block1 row no-gutter">
                            <div class="col-md-3 space">
                                <select name="subbrand_id" id="subbrand_id" class="custom-select" tabindex="1">
                                    <option value="">All</option>
                                </select>
                            </div>
                            <div class="col-md-4 space">
                                <select name="gvm" id="gvm" class="custom-select" tabindex="1">
                                    <option value="1">0kg - 3500kg</option> 
                                    <option value="2">3501kg - 6500kg</option> 
                                    <option value="3">6501kg - 8500kg</option> 
                                    <option value="4">8501kg - 12000kg</option> 
                                    <option value="5">12001kg - 25000kg</option> 
                                    <option value="6">>25001kg</option> 
                                </select>
                            </div>
                            <div class="col-md-3 space">
                                <select name="firstchild_id" id="firstchild_id" class="custom-select" tabindex="1">
                                    <option value="">All</option> 
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" id="submit" name="submit" class="btnsearchinv">Sort now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pdf-table table-responsive" id="firstchild_list_partial_div">
                    <table class="table table-borderless" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate;border-spacing: 0 1em;">
                        <tr>
                            <th>Series</th>
                            <th>Category</th>
                            <th>Model</th>
                            <th>GVM</th>
                            <th>GCM</th>
                            <th>Max Power (KW/RPM)</th>
                            <th>Max Torque (NM/RPM)</th>
                            <th>Spec Sheet</th>
                        </tr>
                        <tr>
                            <td><img src="https://www.velocitytruckcentres.com.au/storage/app/media/147024_canter-413-city-cab-06-nov-19-mj.png" height="80"/> </td>
                            <td>Canter</td>
                            <td>413 City Cab</td>
                            <td>3510</td>
                            <td>3510</td>
                            <td>3510</td>
                            <td>3510</td>
                            <td>
                                <a href="" target="_blank"><img src="/images/pdf.png" alt="Our Inventory" width="45"></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <a class="backto" href="">
                    <i class="fa fa-arrow-left"></i>
                    back to our brands
                </a>
            </div>
        </div>
    </div>
</section>

@endsection