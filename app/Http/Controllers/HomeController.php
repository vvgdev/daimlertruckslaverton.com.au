<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\APIHelper;

class HomeController extends Controller
{
    
    public function index()
    {
        try {

            $slider = [];
            $url=config('apiprovider.api.get_slider');
            $param['site_name'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $slider=APIHelper::sendGuzzleRequest($url, 'get',$param);
            // dd($slider);
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
            $param=[];
            $param['seller_identifier'] = env("SELLER_IDENTIFIER", '');
            //$param['availability'] = 'used-trucks';//env("APP_SLUG", 'daimler-trucks-somerton');
            $makeData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $special = [];
            $url=config('apiprovider.api.get_inventory');
            $param=[];
            // $param['is_demo'] = "false";//env("APP_SLUG", 'daimler-trucks-somerton');
            // $param['is_new'] = "false";
            $param['page_no'] = "1";
            $param['records_per_page'] = "5";
            $param['featured'] = "1";
            $param['seller_identifier'] = env('SELLER_IDENTIFIER');
            $special=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            //dd($siteData);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('welcome', ["sliders"=>$slider, "locations"=>$locationData, 
        "make"=>$makeData, "special"=>$special, "siteData"=>$siteData]);
    }
}
