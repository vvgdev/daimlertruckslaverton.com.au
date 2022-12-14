<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\APIHelper;

class HomeController extends Controller
{
    
    public function index()
    {
        try {
            $locationDetailsArr=[];
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
            $slider = [];
            $url=config('apiprovider.api.get_slider');
            $param['site_name'] = env("APP_SLUG", 'daimler-trucks-laverton');
            $slider=APIHelper::sendGuzzleRequest($url, 'get',$param);
            // dd($slider);
            $location = [];
            $url=config('apiprovider.api.get_inventory_location');
            $param['seller_identifier'] = env("SELLER_IDENTIFIER", '');
            $param['slug'] = env("APP_SLUG", 'daimler-trucks-laverton');
            $locationData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            /* if($locationData) {
                $locationData = $locationData->locations;
            } */
            $makeData = [];
            $url=config('apiprovider.api.get_make_data');
            $param=[];
            $param['seller_identifier'] = env("SELLER_IDENTIFIER", '');
            //$param['availability'] = 'used-trucks';//env("APP_SLUG", 'daimler-trucks-laverton');
            $makeData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $special = [];
            $url=config('apiprovider.api.get_inventory');
            $param=[];
            // $param['is_demo'] = "false";//env("APP_SLUG", 'daimler-trucks-laverton');
            // $param['is_new'] = "false";
            $param['page_no'] = "1";
            $param['records_per_page'] = "5";
            $param['featured'] = "1";
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $special=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'truganina');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            //dd($locationDetailsArr[0]);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('welcome', ["sliders"=>$slider, "locations"=>$locationData, 
        "make"=>$makeData, "special"=>$special, "siteData"=>$siteData, "locationDetails" => $locationDetailsArr]);
    }
}
