<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Helper\APIHelper;

class FinanceController extends Controller {

    public function getFinanceLocation() {
        try {
            $departmentName='Finance';
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
        return view('finance', ["locationDetails" => $locationDetailsArr, "siteData"=>$siteData]);
    }
    
    public function getFinanceCalculatorLocation() {
        try {
            $departmentName='Finance';
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
        return view('finance-calculator', ["locationDetails" => $locationDetailsArr, "siteData"=>$siteData]);
    }
}
