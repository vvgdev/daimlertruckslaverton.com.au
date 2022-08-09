<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Helper\APIHelper;

class NewsController extends Controller {

    public function getNewsLocation(Request $request) {
        try {
            // $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
            $newsArr = [];
            $newsTagArr = [];
            $url = config('apiprovider.api.get_news');
            $param = array();
            if($request->has('tag')) {
                $tag=$request->input('tag');
                if(isset($tag) && !empty($tag)) {
                    $param['tag_filter'] = $tag;
                }
            }
            if($request->has('year')) {
                $year=$request->input('year');
                if(isset($year) && !empty($year)) {
                    $param['post_filter'] = $year;
                }
            }
            $param['site_slug'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $param['page_no'] = "1";
            $param['records_per_page'] = "14";
            $newsArr = APIHelper::sendGuzzleRequest($url, 'get', $param);
            $newsTagArr = array_unique($newsArr->tag, SORT_REGULAR);
            //dd($newsArr);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('latest-news', ["newsData" => $newsArr, "newsTagData" => $newsTagArr, "siteData"=>$siteData]);
    }

    public function getRecentDeliveriesLocation() {
        try {
            // $locationDetailsArr = APIHelper::getSiteWiseLocationDepartments();
            $locationDetailsArr = [];
            $newsArr = [];
            $url = config('apiprovider.api.get_recent_deliveries');
            $param = array();
            $param['site_slug'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $recentDeliveries = APIHelper::sendGuzzleRequest($url, 'get', $param);
            $recentDeliveries = collect($recentDeliveries)->sortByDesc(strtotime('recent_delivery_date'));
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('recent-deliveries', ["locationDetails" => $locationDetailsArr, "recentDeliveries"=>$recentDeliveries, "siteData"=>$siteData]);
    }

    public function getNewsDetils($slug) {
        try {
            $newsArr = [];
            $url = config('apiprovider.api.get_news');
            $param = array();
            $param['site_slug'] = env("APP_SLUG", 'daimler-trucks-somerton');
            $param['slug'] = $slug;
            $newsArr = APIHelper::sendGuzzleRequest($url, 'get', $param);
            //dd($newsArr);
            $siteData = [];
            $url=config('apiprovider.api.get_social_media');
            $param=[];
            $param['slug'] = env("APP_LOCATION_SLUG", 'somerton');
            $siteData=APIHelper::sendGuzzleRequest($url, 'get',$param);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return view('blog-posts', ["newsData" => $newsArr, "siteData"=>$siteData]);
    }
}
