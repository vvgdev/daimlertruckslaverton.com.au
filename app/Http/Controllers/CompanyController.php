<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Helper\APIHelper;

class CompanyController extends Controller {

    public function getContactUsLocation() {
        try {
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
        return view('contact-us', ["locationDetails" => $locationDetailsArr, "siteData"=>$siteData]);
    }
    
    public function getAboutUsLocation() {
        try {
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
        return view('about-us', ["locationDetails" => $locationDetailsArr, "siteData"=>$siteData]);
    }
    
    public function getMeetOurTeamLocation() {
        try {
            // $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
            $locationDetailsArr = [];
            $ourTeam = [];
            $url=config('apiprovider.api.get_meet_our_team');
            $param['location_slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $ourTeam=APIHelper::sendGuzzleRequest($url, 'get',$param);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('our-team', ["locationDetails" => $locationDetailsArr, "ourTeam"=>$ourTeam, "siteData"=>$siteData]);
    }
    
    public function getCareerLocation() {
        try {
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
        return view('career', ["locationDetails" => $locationDetailsArr, "siteData"=>$siteData]);
    }
    public function getCustomerAmenities() {
        try {
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
        return view('customer-amenities', ["locationDetails" => $locationDetailsArr, "siteData"=>$siteData]);
    }
    public function getDisclaimer() {
        try {
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('disclaimer', ["siteData"=>$siteData]);
    }
}