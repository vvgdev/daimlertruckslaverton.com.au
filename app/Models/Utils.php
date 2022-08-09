<?php

namespace App\Models;

class Utils {

    public static function FileMoveTempFolder($file, $tempFoler) {
        if (!file_exists(base_path('public/') . $tempFoler)) {
            mkdir(base_path('public') . $tempFoler, 0777, true);
        }
        $fileName = time().'-'.$file->getClientOriginalName();
        $destinationPath = public_path() . '/' . $tempFoler;  
        $file->move($destinationPath, $fileName);
        return $fileName;
    }

    public static function RemoveSpecialSymbol($file) {
        $FileArray = explode('/', $file);
        $fileNm = preg_replace("/[^a-zA-Z0-9s .\-\_]/", "", end($FileArray));
        array_pop($FileArray);
        $fileNew = '';
        foreach ($FileArray as $fnm) {
            $fileNew .= $fnm . '/';
        }
        $fileNew .= $fileNm;
        return $fileNew;
    }

    static function verifyCaptcha($captcha) {
        // POST call to verify ReCaptcha
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
                'secret' => env("CAPTCHA_SECRET"),
                'response' => $captcha,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            );

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { /* Handle error */ }

        
        $response = json_decode($result);

        return $response;
    }
}