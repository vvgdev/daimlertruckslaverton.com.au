<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Helper\APIHelper;

class PartsController extends Controller {
    
    public function getPartsLocation() {
        try {
            $departmentName= 'Parts';
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments($departmentName);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('parts', ["locationDetails" => $locationDetailsArr, "siteData"=>$siteData]);
    }
    
    public function getPartsSpecialLocation() {
        try {
            $departmentName='Parts';
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments($departmentName);
            $flyerData=[];
            $url=config('apiprovider.api.get_flyer');
            $param['flyer_type'] = "parts";
            $param['site_slug'] = env("APP_SLUG", 'daimler-trucks-somerton');;
            $flyerData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $brands = array();
            $freightliner = array();
            $fuso=array();
            $mercedes_benz = array();
            foreach($flyerData as $flyer) {
                if(isset($flyer->brand_name) && !empty($flyer->brand_name)) {
                    $flyer->brand_name = strtolower($flyer->brand_name);
                    $brands = explode(",", $flyer->brand_name);
                    if(isset($brands) && count($brands) > 0) {
                        if(in_array('freightliner', $brands)) {
                            array_push($freightliner, $flyer);
                        }
                        if(in_array('fuso', $brands)) {
                            array_push($fuso, $flyer);
                        }
                        if(in_array('mercedes-benz - trucks', $brands) || in_array("mercedes-benz van", $brands)) {
                            array_push($mercedes_benz, $flyer);
                        }
                    }
                }
            }
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('parts-specials', ["locationDetails" => $locationDetailsArr, "siteData"=>$siteData, "fusoData"=>$fuso, "freightlinerData"=>$freightliner, "mercedes_benz"=>$mercedes_benz]);
    }
}
