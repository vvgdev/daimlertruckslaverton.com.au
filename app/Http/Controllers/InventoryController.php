<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\APIHelper;

class InventoryController extends Controller
{

    public function index(Request $request)
    {
        
        try {
            $inventory = [];
            $url=config('apiprovider.api.get_inventory');
            $param = array();
            $param['page_no'] = "1";
            $param['records_per_page'] = "12";
            $param['site_name'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $param['is_new'] = "true";
            $param['is_demo'] = "true";
            $param['is_used'] = "true";
            $param['our_stock_click'] = "true";
            $vehiclebody=null;
            if($request->has('vehiclebody')) {
                $vehiclebody=$request->input('vehiclebody');
                if(isset($vehiclebody)) {
                    $param['keyword'] = $vehiclebody;
                }
            }
            $inventory=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $location = [];
            $url=config('apiprovider.api.get_inventory_location');
            $param['seller_identifier'] = env("SELLER_IDENTIFIER", '');
            $param['slug'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $locationData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            /* if($locationData) {
                $locationData = $locationData->locations;
            } */
            $makeData = [];
            $url=config('apiprovider.api.get_make_data');
            // $param['availability'] = 'used-trucks';//env("APP_SLUG", 'daimler-trucks-somerton');
            $param=[];
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $makeData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $yearfrom = array();
            $yearTo = array();
            $currentYear = (int)date('Y');
            for($i=0;$i<=10;$i++) {
                $yearfrom[$currentYear] = $currentYear;
                $yearTo[$currentYear] = $currentYear;
                $currentYear = $currentYear-1;
            }
            $yearfrom["minimum"] = "Before " . ++$currentYear;
            $bodyMake = [];
            $url=config('apiprovider.api.get_bodymake');
            $param=[];
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $bodyMake=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);       
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        // dd($inventory);
        return view('inventory-page', ["inventories"=>$inventory, "locations"=>$locationData, 
        "make"=>$makeData,"is_new"=>true, "is_demo"=>true, "is_used"=>true, "yearFrom"=>$yearfrom,
        "yearTo"=>$yearTo, "bodyMakeData"=>$bodyMake, "keyword"=>$vehiclebody, "siteData"=>$siteData]);
    }

    public function filter_stockdata(Request $request)
    {
       // dd($request->all());
        try {
            $inventory = [];
            $url=config('apiprovider.api.get_inventory');
            $param = array();
            $param['page_no'] = "1";
            $param['records_per_page'] = "12";
            $param['site_name'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $is_new=false;
            $is_demo=false;
            $is_used=false;
            $location="any";
            $make="any";
            $model="any";
            $keywords = $kilometres="";
            $yearto = $year_from = $fueltype = $bodytype = "any";
            $automatic = $manual = false;
            $sortField=$sortDirection="";
            if($request->has('newtrucks') || $request->has('filter_newtrucks')) {
                $param['is_new'] = "true";
                $is_new=true;
            }
            if($request->has('demotrucks') || $request->has('filter_demotrucks')) {
                $param['is_demo'] = "true";
                $is_demo=true;
            }
            if($request->has('usedtrucks') || $request->has('filter_usedtrucks')) {
                $param['is_used'] = "true";
                $is_used=true;
            }
            if($is_used && !$is_new && !$is_demo) {
                                
            }
            else {
                $param['site_name'] = env("APP_SLUG", 'daimler-trucks-milperra');
            }
            if($request->has('location')) {
                $location=$request->input('location');
                if($location != "any") {
                    $param['dealer_location'] = $location;
                }
            }
            if($request->has('make')) {
                $make=$request->input('make');
                if($make != "any") {
                    $param['make'] = $make;
                }
            }
            if($request->has('model')) {
                $model=$request->input('model');
                if($model != "allmodels" && $model != "any") {
                    $param['model'] = $model;
                }
            }
            if($request->has('yearfrom') && $request->has('yearto')) {
                $year_from=$request->input('yearfrom');
                $yearto=$request->input('yearto');
                if($year_from != "any" && $yearto != "any") {
                    $param['start_year'] = $year_from;
                    $param['end_year'] = $yearto;
                }
            }
            if($request->has('bodytype')) {
                $bodytype=$request->input('bodytype');
                if($bodytype != "any") {
                    $param['body_make'] = $bodytype;
                }
            }
            if($request->has('automatic')) {
                $automatic=$request->input('automatic');
                if($automatic) {
                    $param['is_automatic'] = "true";
                }
            }
            if($request->has('manual')) {
                $manual=$request->input('manual');
                if($manual) {
                    $param['is_manual'] = "true";
                }
            }
            if($request->has('fueltype')) {
                $fueltype=$request->input('fueltype');
                if($fueltype != "any") {
                    $param['fuel_type'] = $fueltype;
                }
            }
            if($request->has('keywords')) {
                $keywords=$request->input('keywords');
                if(isset($keywords) && !empty($keywords)) {
                    $param['keyword'] = $keywords;
                }
            }
            if($request->has('kilometres')) {
                $kilometres=$request->input('kilometres');
                if(isset($kilometres) && !empty($kilometres) && $kilometres<990000) {
                    $param['kilometres'] = $kilometres;
                }
            }
            $switchValue = false;
            if($request->has('switch_value') && $request->input('switch_value') == 'true') {
                $switchValue = true;
                $param['switchValue'] = $switchValue;
            }
            //dd($param);
            $inventory=APIHelper::sendGuzzleRequest($url, 'get',$param);
            //dd($inventory->content[0]->document[0]->media_thumb);
            // $location = [];
            $url=config('apiprovider.api.get_inventory_location');
            $param['seller_identifier'] = env("SELLER_IDENTIFIER", '');
            $param['slug'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $locationData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            /* if($locationData) {
                $locationData = $locationData->locations;
            } */
            $makeData = [];
            $url=config('apiprovider.api.get_make_data');
            $param=[];
            if($location != "any") {
                $param["dealer_location"] = $location;
            }
            if($is_new) {
                $param["is_new"] = "true";
            }
            if($is_demo) {
                $param["is_demo"] = "true";
            }
            if($is_used) {
                $param["is_used"] = "true";
            }
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $makeData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $modelData = [];
            $url=config('apiprovider.api.get_model_data_by_make_and_location');
            $param=[];
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            if($location != "any") {
                $param["dealerlocation"] = $location;
            }
            if($make != "any") {
                $param["make"] = $make;
            }
            $modelData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $yearfrom = array();
            $yearTo = array();
            $currentYear = (int)date('Y');
            for($i=0;$i<=10;$i++) {
                $yearfrom[$currentYear] = $currentYear;
                $yearTo[$currentYear] = $currentYear;
                $currentYear = $currentYear-1;
            }
            $yearfrom["minimum"] = "Before " . ++$currentYear;
            $bodyMake = [];
            $url=config('apiprovider.api.get_bodymake');
            $param=[];
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $bodyMake=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            if($request->has('price_sort')) {
                $sortField="price_sort";
                $sortDirection=$request->input('price_sort');
            } else if($request->has('make_model_sort')) {
                $sortField="make_model_sort";
                $sortDirection=$request->input('make_model_sort');
            } else if($request->has('km_sort')) {
                $sortField="km_sort";
                $sortDirection=$request->input('km_sort');
            } else if($request->has('year_sort')) {
                $sortField="year_sort";
                $sortDirection=$request->input('year_sort');
            } else if($request->has('date_sort')) {
                $sortField="date_sort";
                $sortDirection=$request->input('date_sort');
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('inventory-page', ["inventories"=>$inventory, "locations"=>$locationData, 
        "make"=>$makeData,"is_new"=>$is_new, "is_demo"=>$is_demo, "is_used"=>$is_used, "yearFrom"=>$yearfrom,
        "yearTo"=>$yearTo, "model"=>$modelData, "selected_location"=>$location,
        "selected_model"=>$model, "selected_make"=>$make, "bodyMakeData"=>$bodyMake, 
        "selected_yearto" => $yearto, "selected_yearfrom" => $year_from, "selected_fueltype" => $fueltype, 
        "selected_bodytype" => $bodytype, "is_automatic"=>$automatic, "is_manual"=>$manual, "keyword"=>$keywords,
        "siteData"=>$siteData, "selected_kilometres"=>$kilometres, "sort_field"=>$sortField, "sort_direction"=>$sortDirection
        , "switch_value" => $switchValue]);
    }

    public function get_newtrucks()
    {
        
        try {
            $inventory = [];
            $url=config('apiprovider.api.get_inventory');
            $param = array();
            $param['is_new'] = "true";
            $param['page_no'] = "1";
            $param['records_per_page'] = "12";
            $param['site_name'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $inventory=APIHelper::sendGuzzleRequest($url, 'get',$param);
            //dd($inventory);
            $location = [];
            $url=config('apiprovider.api.get_inventory_location');
            $param['seller_identifier'] = env("SELLER_IDENTIFIER", '');
            $param['slug'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $locationData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            /* if($locationData) {
                $locationData = $locationData->locations;
            } */
            $makeData = [];
            $url=config('apiprovider.api.get_make_data');
            $param['availability'] = 'new-trucks';
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $makeData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $yearfrom = array();
            $yearTo = array();
            $currentYear = (int)date('Y');
            for($i=0;$i<=10;$i++) {
                $yearfrom[$currentYear] = $currentYear;
                $yearTo[$currentYear] = $currentYear;
                $currentYear = $currentYear-1;
            }
            $yearfrom["minimum"] = "Before " . ++$currentYear;
            $bodyMake = [];
            $url=config('apiprovider.api.get_bodymake');
            $param=[];
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $bodyMake=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);       
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('inventory-page', ["inventories"=>$inventory, "locations"=>$locationData, 
        "make"=>$makeData,"is_new"=>true, "yearFrom"=>$yearfrom,
        "yearTo"=>$yearTo, "bodyMakeData"=>$bodyMake, "siteData"=>$siteData, "switch_value" => false]);
    }
    public function get_newtrucks_detail($slug)
    {
        try {
            $inventory = [];
            $url=config('apiprovider.api.get_inventory');
            $param = array();
            $param['slug'] = $slug;
            $param['site_name'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $inventory=APIHelper::sendGuzzleRequest($url, 'get',$param);
            if(!(isset($inventory) && isset($inventory->content) && isset($inventory->content->id))) {
                return redirect()->back();
            }
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
        } catch (ClientException $e) {
            $inventory=[];
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        if(isset($inventory) && isset($inventory->content))
            return view('inventory-detail', ["locationDetails" => $locationDetailsArr, "inventory"=>$inventory->content, "is_new"=>"true", "siteData"=>$siteData]);
        else
            $this->index();
    }
    
    public function get_demotrucks()
    {
        try {
            $inventory = [];
            $url=config('apiprovider.api.get_inventory');
            $param = array();
            $param['is_demo'] = "true";
            $param['page_no'] = "1";
            $param['records_per_page'] = "12";
            $param['site_name'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $inventory=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $location = [];
            $url=config('apiprovider.api.get_inventory_location');
            $param['seller_identifier'] = env("SELLER_IDENTIFIER", '');
            $param['slug'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $locationData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            /* if($locationData) {
                $locationData = $locationData->locations;
            } */
            $makeData = [];
            $url=config('apiprovider.api.get_make_data');
            $param['availability'] = 'demo-trucks';
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $makeData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $yearfrom = array();
            $yearTo = array();
            $currentYear = (int)date('Y');
            for($i=0;$i<=10;$i++) {
                $yearfrom[$currentYear] = $currentYear;
                $yearTo[$currentYear] = $currentYear;
                $currentYear = $currentYear-1;
            }
            $yearfrom["minimum"] = "Before " . ++$currentYear;
            $bodyMake = [];
            $url=config('apiprovider.api.get_bodymake');
            $param=[];
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $bodyMake=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);       
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('inventory-page', ["inventories"=>$inventory, "locations"=>$locationData, 
        "make"=>$makeData, "is_demo"=>true, "yearFrom"=>$yearfrom,
        "yearTo"=>$yearTo, "bodyMakeData"=>$bodyMake, "siteData"=>$siteData, "switch_value" => false]);
    }
    public function get_demotrucks_detail($slug)
    {
        try {
            $inventory = [];
            $url=config('apiprovider.api.get_inventory');
            $param = array();
            $param['slug'] = $slug;
            $param['site_name'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $inventory=APIHelper::sendGuzzleRequest($url, 'get',$param);
            if(!(isset($inventory) && isset($inventory->content) && isset($inventory->content->id))) {
                return redirect()->back();
            }
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
        } catch (ClientException $e) {
            $inventory=[];
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        if(isset($inventory) && isset($inventory->content))
            return view('inventory-detail', ["locationDetails" => $locationDetailsArr, "inventory"=>$inventory->content, "is_demo"=>"true", "siteData"=>$siteData]);
        else
            $this->index();
    }
    public function get_usedtrucks()
    {
        try {
            $inventory = [];
            $switchValue = false;
            $url=config('apiprovider.api.get_inventory');
            $param = array();
            $param['is_used'] = "true";
            $param['page_no'] = "1";
            $param['records_per_page'] = "12";
            // $param['site_name'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $inventory=APIHelper::sendGuzzleRequest($url, 'get',$param);
            if(sizeof($inventory->content) == 0)
            {
                $switchValue = true;
                $param['switchValue'] = $switchValue;
                $inventory=APIHelper::sendGuzzleRequest($url, 'get',$param);
            }
            $location = [];
            $url=config('apiprovider.api.get_inventory_location');
            $param['seller_identifier'] = env("SELLER_IDENTIFIER", '');
            $param['inventory_type'] = 'used';
            $param['slug'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $locationData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            /* if($locationData) {
                $locationData = $locationData->locations;
            } */
            $makeData = [];
            $url=config('apiprovider.api.get_make_data');
            $param['availability'] = 'used-trucks';
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $makeData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $yearfrom = array();
            $yearTo = array();
            $currentYear = (int)date('Y');
            for($i=0;$i<=10;$i++) {
                $yearfrom[$currentYear] = $currentYear;
                $yearTo[$currentYear] = $currentYear;
                $currentYear = $currentYear-1;
            }
            $yearfrom["minimum"] = "Before " . ++$currentYear;
            $bodyMake = [];
            $url=config('apiprovider.api.get_bodymake');
            $param=[];
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $bodyMake=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);       
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('inventory-page', ["inventories"=>$inventory, "locations"=>$locationData, 
        "make"=>$makeData, "is_used"=>"true", "yearFrom"=>$yearfrom,
        "yearTo"=>$yearTo, "bodyMakeData"=>$bodyMake, "siteData"=>$siteData, "switch_value" => $switchValue]);
    }
    public function get_usedtrucks_detail($slug)
    {
        try {
            $inventory = [];
            $url=config('apiprovider.api.get_inventory');
            $param = array();
            $param['slug'] = $slug;
            // $param['site_name'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $inventory=APIHelper::sendGuzzleRequest($url, 'get',$param);
            if(!(isset($inventory) && isset($inventory->content) && isset($inventory->content->id))) {
                return redirect()->back();
            }
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
        } catch (ClientException $e) {
            $inventory=[];
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        if(isset($inventory) && isset($inventory->content))
            return view('inventory-detail', ["locationDetails" => $locationDetailsArr, "inventory"=>$inventory->content, "is_used"=>"true", "siteData"=>$siteData]);
        else
            $this->index();
    }
    public function get_specials()
    {
        try {
            $special = [];
            // $url=config('apiprovider.api.get_inventory');
            // $param=array();
            // $param['page_no'] = "1";
            // $param['records_per_page'] = "12";
            // $param['featured'] = "1";
            // $param['site_name'] = env("APP_SLUG", 'daimler-trucks-somerton');
            // $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $url=config('apiprovider.api.get_factory_offers');
            $param['offer_type'] = "local";
            $param['site_slug'] = env("APP_SLUG", 'daimler-trucks-somerton');;
            $special=APIHelper::sendGuzzleRequest($url, 'get',$param); 
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);       
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('specials', ["specials"=>$special, "locationDetails" => $locationDetailsArr, "siteData"=>$siteData]);
    }

    public function special_factory_offer($manufacturer=null)
    {
        try {
            $selectedTab="";
            if(isset($manufacturer) && !empty($manufacturer)) {
                if(strtolower($manufacturer)=='mb-truck') {
                    $selectedTab="mb-truck";
                } else if(strtolower($manufacturer)=='freightliner') {
                    $selectedTab="freightliner";
                } else if(strtolower($manufacturer)=='fuso') {
                    $selectedTab="fuso";
                } else if(strtolower($manufacturer)=='mb-van') {
                    $selectedTab="mb-van";
                }
            }
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $url=config('apiprovider.api.get_factory_offers');
            $param['offer_type'] = "factory";
            $param['site_slug'] = env("APP_SLUG", 'daimler-trucks-somerton');;
            $offersData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $brands = array();
            $freightliner = array();
            $fuso=array();
            $mercedes_benz = array();
            $mercedes_benzvan = array();
            foreach($offersData as $offer) {
                if(isset($offer->brand_name) && !empty($offer->brand_name)) {
                    $offer->brand_name = strtolower($offer->brand_name);
                    $brands = explode(",", $offer->brand_name);
                    if(isset($brands) && count($brands) > 0) {
                        if(in_array('freightliner', $brands)) {
                            array_push($freightliner, $offer);
                        }
                        if(in_array('fuso', $brands)) {
                            array_push($fuso, $offer);
                        }
                        if(in_array('mercedes-benz - trucks', $brands)) {
                            array_push($mercedes_benz, $offer);
                        }
                        if(in_array("mercedes-benz van", $brands)) {
                            array_push($mercedes_benzvan, $offer);
                        }
                    }
                }
            }
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('factory-offers', ["siteData"=>$siteData, "fusoData"=>$fuso, "freightlinerData"=>$freightliner, 
        "mercedes_benzData"=>$mercedes_benz, "mercedes_benzvanData"=>$mercedes_benzvan, "selectedTab"=>$selectedTab]);
    }
    public function getBrandData($brand,$subbrand_slug='',$subsubbrand_slug=''){
        $url= env('AU_API_URL').'/api/v1/get/brand';
        $param = [
            'in_array'=>'in_array',
            'slug'=>$brand,
            'subbrand_slug'=>$subbrand_slug,
            'subsubbrand_slug'=>$subsubbrand_slug
        ];
        // 'site_slug'=> env("APP_SLUG", 'daimler-trucks-somerton')
        //print_r($param);exit;
        $response = APIHelper::sendGuzzleRequest($url, 'post',$param);
        $siteData = [];
        $url=config('apiprovider.api.get_social_media');
        $param=[];
        $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
        $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
        $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
        //echo "<pre>"; print_r($response);exit;
        return view('brands',compact('response','locationDetailsArr'),["siteData"=>$siteData]);
    }
    public function getEngineDetails() {
        try {
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $engineData = [];
            $url=config('apiprovider.api.get_engine_transmission_data');
            $param=[];
            $param['type'] = 'Engine';
            $engineData=APIHelper::sendGuzzleRequest($url, 'get',$param);            
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('engines', ["siteData"=>$siteData, "engineData"=>$engineData]);
    }
    public function getTransmissionsDetails() {
        try {
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $transmissionsData = [];
            $url=config('apiprovider.api.get_engine_transmission_data');
            $param=[];
            $param['type'] = 'Transmission';
            $transmissionsData=APIHelper::sendGuzzleRequest($url, 'get',$param);  
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('transmissions', ["siteData"=>$siteData, "transmissionData"=>$transmissionsData]);
    }
}
