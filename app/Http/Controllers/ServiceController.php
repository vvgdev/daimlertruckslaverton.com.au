<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Helper\APIHelper;

class ServiceController extends Controller {

    public function getServiceLocation() {
        try {
            $departmentName = 'Service';
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
        return view('service', ["locationDetails" => $locationDetailsArr, "siteData"=>$siteData]);
    }

    public function getServiceWarranty() {
        try {
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('warranty', ["siteData"=>$siteData, "locationDetails" => $locationDetailsArr]);
    }

    public function getRoadsideAssistance() {
        try {
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('roadside-assistance', ["siteData"=>$siteData, "locationDetails" => $locationDetailsArr]);
    }

    public function getServicePlans() {
        try {
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('service-plans', ["siteData"=>$siteData, "locationDetails" => $locationDetailsArr]);
    }
    public function getEliteSupport() {
        try {
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('elite-support', ["siteData"=>$siteData, "locationDetails" => $locationDetailsArr]);
    }
}
