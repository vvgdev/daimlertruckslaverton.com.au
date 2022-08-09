<?php

namespace App\Helper;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class APIHelper {
    public static function sendGuzzleRequest($url, $request_type, $param, $token = "", $token_type = 'Bearer') {
        $client = new Client();
        $queryParams = [];
        if (isset($param) && sizeof($param) > 0) {
            $queryParams = [
                'query' => $param
            ];
        }
        //check if token is set
        if (isset($token) && $token != "") {
            $header = [
                'Accept' => 'application/json',
                'Authorization' => $token_type . ' ' . $token,
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Headers' => 'Origin, Content-Type, Authorization,X-Requested-With',
                'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
                'Access-Control-Allow-Credentials' => 'true'
            ];
            $queryParams["headers"] = $header;
        } else {
            $header = [
                'Accept' => 'application/json'
            ];
            $queryParams["headers"] = $header;
        }
        
        $data =[];
        $result = $client->request($request_type, $url, $queryParams);
        $status = $result->getStatusCode();
        if($status == 200) {
            if (isset($param['in_array']) && $param['in_array'] == "in_array") {
                $data = json_decode((string) $result->getBody(), true);
            } else {
                //$data = $result->getBody()->getContents();
                // $data = json_decode((string) $result->getBody(), true);
                $data = json_decode($result->getBody()->getContents());
            }
            // $data = json_decode($result->getBody()->getContents());
        }
        return $data;
    }

    public static function getSiteWiseLocationDepartments($departmentName=NULL) {
        try {
            $locationDetailsArr = [];
            $url = config('apiprovider.api.get_location_details_by_slug');
            $param = array();
            $param['slug'] = env("APP_SLUG", 'daimler-trucks-somerton');
            if(isset($departmentName) && !empty($departmentName)) {
                $param['department_name'] = $departmentName;
            }
            $locationDetailsArr = APIHelper::sendGuzzleRequest($url, 'get', $param); 
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $result = $response->getBody();
        }
        return $locationDetailsArr;
    }
}