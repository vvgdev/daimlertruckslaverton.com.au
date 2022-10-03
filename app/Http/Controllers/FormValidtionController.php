<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Helper\APIHelper;
use App\Models\FileHandleHelper;
use App\Models\Utils;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class FormValidtionController extends Controller
{
    public function ServiceForm(Request $request) {   
        // print_r($request->all());exit;
        $recaptchaToken = $request->input('g-recaptcha-response');
        $captcha = "";
        if(isset($recaptchaToken))
            $captcha = $recaptchaToken;

        if(!$captcha) {
            return back()->withInput()->withErrors(['recaptcha_token' => 'Please check the the captcha form.'])->with('tab_id', 'service_tab_id');
        }

        $captchaResponse = Utils::verifyCaptcha($captcha);
        if($captchaResponse->success == false){
            return back()->withInput()->withErrors(['recaptcha_token' => 'There was an error while validating Captcha, Please try again.'])->with('tab_id', 'service_tab_id');
        } else {
            $validator = Validator::make($request->all(), 
            [ 
                'title'=>'required',
                'firstName'=>'required|max:255',
                'lastName'=>'required|max:255',
                'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'phone'=>'required|digits:10',
                // 'rego'=>'required|numeric',
                'year'=>'required|numeric|digits:4|integer|min:1900|max:'.(date('Y')+1),
                'preferred_drop_off_date'=>'required|date_format:Y-m-d',
                'preferred_drop_off_time'=>'required|date_format:H:i',
                'preferred_pick_up_date'=>'required|date_format:Y-m-d',
                'preferred_pick_up_time'=>'required|date_format:H:i',
                'detail'=>'required|max:1000',
                'address'=>'required|max:190',
                'suburb'=>'required|max:190',
                'state'=>'required|max:190',
                'postcode'=>'required|max:190',
                'registration'=>'required|max:190',
                'chassisno'=>'required|max:190',
                'terms2'=>'accepted' 
            ]);

            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator)->with('tab_id', 'service_tab_id');
            }
            
            $url=config('apiprovider.api.store_service_form');
            $param = array();
            $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Service";
            $param['title'] = $request->input("title");
            $param['first_name'] = $request->input("firstName");
            $param['last_name'] = $request->input("lastName");
            $param['email'] = $request->input("email");
            $param['mobile'] = $request->input("phone");
            $param['rego'] = $request->input("rego");
            $param['address'] = $request->input("address");
            $param['suburb'] = $request->input("suburb");
            $param['state'] = $request->input("state");
            $param['postcode'] = $request->input("postcode");
            $param['registration'] = $request->input("registration");
            $param['chassisno2'] = $request->input("chassisno");
            $param['vehicle_year'] = $request->input("year");
            $param['make'] = $request->input("make");
            $param['vehicle_model'] = $request->input("model2");
            $param['odometer'] = $request->input("odometer");
            $param['preferred_drop_off_date'] = date('d/m/Y', strtotime($request->input("preferred_drop_off_date")));
            $param['preferred_drop_off_time'] = $request->input("preferred_drop_off_time");
            $param['preferred_pick_up_date'] = date('d/m/Y', strtotime($request->input("preferred_pick_up_date")));
            $param['preferred_pick_up_time'] = $request->input("preferred_pick_up_time");
            $param['comment'] = $request->input("detail");
            $param['terms_conditions_check'] = ($request->input("terms2") == 'on') ? 1 : 0;
            $param['type'] = "service";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
            
            return redirect()->back()->with('message', 'Data Submitted Successfully...!')->with('tab_id', 'service_tab_id');
        }
    }

    public function PartsForm(Request $request) {
        // print_r($request->all());exit;
        $recaptchaToken = $request->input('g-recaptcha-response');
        $captcha = "";
        if(isset($recaptchaToken))
            $captcha = $recaptchaToken;

        if(!$captcha) {
            return back()->withInput()->withErrors(['recaptcha_token' => 'Please check the the captcha form.'])->with('tab_id', 'parts_tab_id');
        }

        $captchaResponse = Utils::verifyCaptcha($captcha);
        if($captchaResponse->success == false){
            return back()->withInput()->withErrors(['recaptcha_token' => 'There was an error while validating Captcha, Please try again.'])->with('tab_id', 'parts_tab_id');
        } else {
            $validator = Validator::make($request->all(), 
            [ 
                'title'=>'required',
                'firstName'=>'required|max:255',
                'lastName'=>'required|max:255',
                'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'phone'=>'required|digits:10',
                'vehicle_year'=>'required|numeric|digits:4|integer|min:1900|max:'.(date('Y')+1),
                'vehicle_make'=>'required',
                'vehicle_model'=>'required',
                'rego_number'=>'required|numeric',
                'detail'=>'required|max:1000',
                'terms1'=>'accepted'
            ]);

            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator)->with('tab_id', 'parts_tab_id');
            }
            
            $url=config('apiprovider.api.store_spare_parts_enquiry_form');
            $param = array();
            $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Parts";
            $param['title'] = $request->input("title");
            $param['first_name'] = $request->input("firstName");
            $param['last_name'] = $request->input("lastName");
            $param['email'] = $request->input("email");
            $param['mobile'] = $request->input("phone");
            $param['vehicle_year'] = $request->input("vehicle_year");
            $param['vehicle_make'] = $request->input("vehicle_make");
            $param['vehicle_model'] = $request->input("vehicle_model");
            $param['rego'] = $request->input("rego_number");
            $param['comment'] = $request->input("detail");
            $param['terms_conditions_check'] = ($request->input("terms1") == 'on') ? 1 : 0;
            $param['type'] = "parts";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
            
            return redirect()->back()->with('message', 'Data Submitted Successfully...!')->with('tab_id', 'parts_tab_id');
        }
    }

    public function PartsSpecialForm(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'title'=>'required',
            'firstName'=>'required|max:255',
            'lastName'=>'required|max:255',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'phone'=>'required|digits:10',
            'vehicle_year'=>'required|numeric|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'vehicle_make'=>'required',
            'vehicle_model'=>'required',
            'rego_number'=>'required|numeric',
            'detail'=>'required|max:1000',
            'newtrucks'=>'accepted'
        ]);

        if($validator->fails())
        {
          return back()->withInput()->withErrors($validator);
        }

        $url=config('apiprovider.api.store_spare_parts_enquiry_form');
        $param = array();
        $param['app_slug'] = env("APP_SLUG");
        $param['title'] = $request->input("title");
        $param['first_name'] = $request->input("firstName");
        $param['last_name'] = $request->input("lastName");
        $param['email'] = $request->input("email");
        $param['mobile'] = $request->input("phone");
        $param['vehicle_year'] = $request->input("vehicle_year");
        $param['vehicle_make'] = $request->input("vehicle_make");
        $param['vehicle_model'] = $request->input("vehicle_model");
        $param['rego'] = $request->input("rego_number");
        $param['comment'] = $request->input("detail");
        $param['terms_conditions_check'] = $request->input("newtrucks");
        $param['type'] = "parts_special";
        $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
        
        return redirect()->back()->with('message', 'Data Submitted Successfully...!');
    }

    public function FinanceForm(Request $request) {
        // print_r($request->all());exit;
        $recaptchaToken = $request->input('g-recaptcha-response');
        $captcha = "";
        if(isset($recaptchaToken))
            $captcha = $recaptchaToken;

        if(!$captcha) {
            return back()->withInput()->withErrors(['recaptcha_token' => 'Please check the the captcha form.'])->with('tab_id', 'finance_tab_id');
        }

        $captchaResponse = Utils::verifyCaptcha($captcha);
        if($captchaResponse->success == false){
            return back()->withInput()->withErrors(['recaptcha_token' => 'There was an error while validating Captcha, Please try again.'])->with('tab_id', 'finance_tab_id');
        } else {
            $validator = Validator::make($request->all(), 
            [ 
                'title'=>'required',
                'firstName'=>'required|max:255',
                'lastName'=>'required|max:255',
                'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'phone'=>'required|digits:10',
                'amount_required'=>'required',
                'detail'=>'required|max:1000',
                'terms3'=>'accepted' 
            ]);
            
            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator)->with('tab_id', 'finance_tab_id');
            }
            
            $url=config('apiprovider.api.store_finance_enquiry_form');
            $param = array();
            $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Finance";
            $param['title'] = $request->input("title");
            $param['first_name'] = $request->input("firstName");
            $param['last_name'] = $request->input("lastName");
            $param['email'] = $request->input("email");
            $param['mobile'] = $request->input("phone");
            $param['amount_required'] = $request->input("amount_required");
            $param['loan_term'] = $request->input("loan_term3");
            $param['comment'] = $request->input("detail");
            $param['terms_conditions_check'] = ($request->input("terms3") == 'on') ? 1 : 0;
            $param['type'] = "finance";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
            
            return redirect()->back()->with('message', 'Data Submitted Successfully...!')->with('tab_id', 'finance_tab_id');
        }
    }

    public function FinanceCalculatorForm(Request $request) {

        $validator = Validator::make($request->all(), 
        [ 
            'firstName'=>'required|max:255',
            'lastName'=>'required|max:255',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'phone'=>'required|digits:10',
            'post_code'=>'required'
        ]);
          
        if($validator->fails())
        {
        return back()->withInput()->withErrors($validator);
        }

        $url=config('apiprovider.api.store_quotation_form');
        $param = array();   
        $param['app_slug'] = env("APP_SLUG");      
        $param['first_name'] = $request->input("firstName");
        $param['last_name'] = $request->input("lastName");
        $param['email'] = $request->input("email");
        $param['post_code'] = $request->input("post_code");
        $param['mobile'] = $request->input("phone");
        $param['amount'] = $request->input("finance_required");
        $param['term'] = $request->input("loan_tearm");
        $param['inerest_rate'] = $request->input("interest_rate");
        $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
        
        return redirect()->back()->with('message', 'Data Submitted Successfully...!'); 
    }   

    public function ContactUsForm(Request $request) {
        $param = array();
        if($request->input("type") != 'contactus') {
            $validator = Validator::make($request->all(), 
            [ 
                'title'=>'required',
                'firstName'=>'required|max:255',
                'lastName'=>'required|max:255',
                'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'phone'=>'required|digits:10',
                'postcode'=>'required',
                'detail'=>'max:1000',
            ]);
            $communicationOption = [];
            if($request->has("standardMail")) {
                $communicationOption['standard_mail'] = true;
            }
            if($request->has("comPhone")) {
                $communicationOption['phone'] = true;
            }
            if($request->has("comEmail")) {
                $communicationOption['email'] = true;
            }
            if($request->has("comSMS")) {
                $communicationOption['sms_mms_im'] = true;
            }
            $param['communication_option'] = json_encode($communicationOption);
            $param['department'] = "Service";
        } else {
            $recaptchaToken = $request->input('g-recaptcha-response');
            $captcha = "";
            if(isset($recaptchaToken))
                $captcha = $recaptchaToken;
            if(!$captcha) {
                return back()->withInput()->withErrors(['recaptcha_token' => 'Please check the the captcha form.'])->with('tab_id', 'contact_tab_id');
            }
            $captchaResponse = Utils::verifyCaptcha($captcha);
            if($captchaResponse->success == false){
                return back()->withInput()->withErrors(['recaptcha_token' => 'There was an error while validating Captcha, Please try again.'])->with('tab_id', 'contact_tab_id');
            }
            $validator = Validator::make($request->all(), 
            [ 
                'title'=>'required',
                'firstName'=>'required|max:255',
                'lastName'=>'required|max:255',
                'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'phone'=>'required|digits:10',
                'detail'=>'required|max:1000',
                'terms'=>'accepted' 
            ]);
            $param['terms_conditions_check'] = ($request->input("terms") == 'on') ? 1 : 0;
            $param['department'] = "Contact-US";
        }
        if($validator->fails()) {
            return back()->withInput()->withErrors($validator)->with('tab_id', 'contact_tab_id');
        }

        $url=config('apiprovider.api.store_enquiry_form');
        $param['location_slug'] = env("APP_LOCATION_SLUG");
        $param['title'] = $request->input("title");
        $param['app_slug'] = env("APP_SLUG");
        $param['first_name'] = $request->input("firstName");
        $param['last_name'] = $request->input("lastName");
        $param['email'] = $request->input("email");
        $param['mobile'] = $request->input("phone");
        $param['comment'] = $request->input("detail");
        $param['type'] = trim($request->input("type"));
        $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
        
        return redirect()->back()->with('message', 'Data Submitted Successfully...!')->with('tab_id', 'contact_tab_id');
    }   

    public function AboutUsForm(Request $request) {

        $validator = Validator::make($request->all(), 
        [
            'title'=>'required',
            'firstName'=>'required|max:255',
            'lastName'=>'required|max:255',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'phone'=>'required|digits:10',
            'detail'=>'max:1000',
            'terms'=>'accepted'
        ]);
          
        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $url=config('apiprovider.api.store_enquiry_form');
        $param = array();
        $param['app_slug'] = env("APP_SLUG");
        $param['location_slug'] = env("APP_LOCATION_SLUG");
        $param['department'] = "About-US";
        $param['title'] = $request->input("title");
        $param['first_name'] = $request->input("firstName");
        $param['last_name'] = $request->input("lastName");
        $param['email'] = $request->input("email");
        $param['mobile'] = $request->input("phone");
        $param['comment'] = $request->input("detail");
        $param['terms_conditions_check'] = ($request->input("terms") == 'on') ? 1 : 0;
        $param['type'] = "aboutus";
        $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
        
        return redirect()->back()->with('message', 'Data Submitted Successfully...!');
    }

    public function OurTeamForm(Request $request) {

        $validator = Validator::make($request->all(), 
        [
            'title'=>'required',
            'firstName'=>'required|max:255',
            'lastName'=>'required|max:255',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'phone'=>'required|digits:10',
            'detail'=>'max:1000',
            'terms'=>'accepted'
        ]);

        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $url=config('apiprovider.api.store_enquiry_form');
        $param = array();
        $param['app_slug'] = env("APP_SLUG");
        $param['location_slug'] = env("APP_LOCATION_SLUG");
        $param['department'] = "Meet Ore Team";
        $param['title'] = $request->input("title");
        $param['first_name'] = $request->input("firstName");
        $param['last_name'] = $request->input("lastName");
        $param['email'] = $request->input("email");
        $param['mobile'] = $request->input("phone");
        $param['comment'] = $request->input("detail");
        $param['terms_conditions_check'] = ($request->input("terms") == 'on') ? 1 : 0;
        $param['type'] = "ourteam";
        $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
        
        return redirect()->back()->with('message', 'Data Submitted Successfully...!');
    }

    public function CarrerForm(Request $request) {
        // print_r(json_encode($request->all()));exit;
        $validator = Validator::make($request->all(), 
        [ 
            'title'=>'required',
            'firstName'=>'required|max:255',
            'lastName'=>'required|max:255',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'phone'=>'required|digits:10',
            'detail'=>'max:1000',
            'terms'=>'accepted',
            'resume' => 'mimes:doc,docx,pdf,txt',
            'cover_letter' => 'mimes:doc,docx,pdf,txt',
        ]);

        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $resumeFileNamePath = $resumeFileName = $resumeMime = $resumeExt = '';
        $coverLetterFileNamePath = $coverLetterFileName = $coverLetterMime = $coverLetterExt = '';
        if (!empty($_FILES)) {
            $tempFplderName = 'tempfile';
            // Resume Logic
            if(isset($_FILES['resume']) && !empty($_FILES['resume'])) {
                if(isset($_FILES['resume']['name']) && !empty($_FILES['resume']['name'])) {
                    $tmpFile = $_FILES['resume']['tmp_name'];
                    $ext = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
                    $filepath = $tempFplderName . "/";
                    $path = public_path() . '/' . $tempFplderName;
                    $tmpFileName = Utils::RemoveSpecialSymbol(time() . '-' . $_FILES['resume']['name']);
                    $filepath .= $tmpFileName;
                    $filename = $path . '/' . $tmpFileName;
                    $isFileUploaded = move_uploaded_file($tmpFile, $filename);
                    if (file_exists($filename)) {
                        chmod($filename, 0777);
                    }
                    $resumeFileNamePath = $filename;
                    $fileNameArr = (explode("/", $filename));
                    $resumeFileName = end($fileNameArr);
                    $resumeExt = $ext;
                    $resumeMime = mime_content_type($filename);
                }
            }
            // Cover Letter Logic
            if(isset($_FILES['cover_letter']) && !empty($_FILES['cover_letter'])) {
                if(isset($_FILES['cover_letter']['name']) && !empty($_FILES['cover_letter']['name'])) {
                    $tmpFile = $_FILES['cover_letter']['tmp_name'];
                    $ext = strtolower(pathinfo($_FILES['cover_letter']['name'], PATHINFO_EXTENSION));
                    $filepath = $tempFplderName . "/";
                    $path = public_path() . '/' . $tempFplderName;
                    $tmpFileName = Utils::RemoveSpecialSymbol(time() . '-' . $_FILES['cover_letter']['name']);
                    $filepath .= $tmpFileName;
                    $filename = $path . '/' . $tmpFileName;
                    $isFileUploaded = move_uploaded_file($tmpFile, $filename);
                    if (file_exists($filename)) {
                        chmod($filename, 0777);
                    }
                    $coverLetterFileNamePath = $filename;
                    $fileNameArr = (explode("/", $filename));
                    $coverLetterFileName = end($fileNameArr);
                    $coverLetterExt = $ext;
                    $coverLetterMime = mime_content_type($filename);
                }
            }
        }
        $url=config('apiprovider.api.store_careers_form');
        /* $param = array();
        $param['app_slug'] = env("APP_SLUG");
        $param['location_slug'] = env("APP_LOCATION_SLUG");
        $param['department'] = "Carrer";
        $param['title'] = $request->input("title");
        $param['first_name'] = $request->input("firstName");
        $param['last_name'] = $request->input("lastName");
        $param['email'] = $request->input("email");
        $param['mobile'] = $request->input("phone");
        $param['comment'] = $request->input("detail");
        $param['resume'] = $request->file('resume');
        $param['cover_letter'] = $request->file('cover_letter');
        $param['terms_conditions_check'] = ($request->input("terms") == 'on') ? 1 : 0;
        $param['type'] = "career"; */
        if($resumeFileNamePath != '' && $coverLetterFileNamePath != '') {
            $param = [
                'multipart' => [
                    ["name" => "app_slug", "contents" => env("APP_SLUG")],
                    ["name" => "location_slug", "contents" => env("APP_LOCATION_SLUG")],
                    ["name" => "department", "contents" => "Carrer"],
                    ["name" => "title", "contents" => $request->input("title")],
                    ["name" => "first_name", "contents" => $request->input("firstName")],
                    ["name" => "last_name", "contents" => $request->input("lastName")],
                    ["name" => "email", "contents" => $request->input("email")],
                    ["name" => "mobile", "contents" => $request->input("phone")],
                    ["name" => "comment", "contents" => $request->input("detail")],
                    ['name' => 'resume', 'filename' => $resumeFileNamePath, 'contents' => fopen($resumeFileNamePath, 'r'), 'Mime-Type' => $resumeMime],
                    ["name" => "resume_ext", "contents" => $resumeMime],
                    ["name" => "resume_file_name", "contents" => $resumeFileName],
                    ['name' => 'cover_letter', 'filename' => $coverLetterFileNamePath, 'contents' => fopen($coverLetterFileNamePath, 'r'), 'Mime-Type' => $coverLetterMime],
                    ["name" => "cover_letter_ext", "contents" => $coverLetterMime],
                    ["name" => "cover_letter_file_name", "contents" => $coverLetterFileName],
                    ["name" => "terms_conditions_check", "contents" => ($request->input("terms") == 'on') ? 1 : 0],
                    ["name" => "type", "contents" => "career"],
                ]
            ];
        } else {
            if($resumeFileNamePath != '') {
                $param = [
                    'multipart' => [
                        ["name" => "app_slug", "contents" => env("APP_SLUG")],
                        ["name" => "location_slug", "contents" => env("APP_LOCATION_SLUG")],
                        ["name" => "department", "contents" => "Carrer"],
                        ["name" => "title", "contents" => $request->input("title")],
                        ["name" => "first_name", "contents" => $request->input("firstName")],
                        ["name" => "last_name", "contents" => $request->input("lastName")],
                        ["name" => "email", "contents" => $request->input("email")],
                        ["name" => "mobile", "contents" => $request->input("phone")],
                        ["name" => "comment", "contents" => $request->input("detail")],
                        ['name' => 'resume', 'filename' => $resumeFileNamePath, 'contents' => fopen($resumeFileNamePath, 'r'), 'Mime-Type' => $resumeMime],
                        ["name" => "resume_ext", "contents" => $resumeMime],
                        ["name" => "resume_file_name", "contents" => $resumeFileName],
                        ["name" => "terms_conditions_check", "contents" => ($request->input("terms") == 'on') ? 1 : 0],
                        ["name" => "type", "contents" => "career"],
                    ]
                ];
            } else if($coverLetterFileNamePath != '') {
                $param = [
                    'multipart' => [
                        ["name" => "app_slug", "contents" => env("APP_SLUG")],
                        ["name" => "location_slug", "contents" => env("APP_LOCATION_SLUG")],
                        ["name" => "department", "contents" => "Carrer"],
                        ["name" => "title", "contents" => $request->input("title")],
                        ["name" => "first_name", "contents" => $request->input("firstName")],
                        ["name" => "last_name", "contents" => $request->input("lastName")],
                        ["name" => "email", "contents" => $request->input("email")],
                        ["name" => "mobile", "contents" => $request->input("phone")],
                        ["name" => "comment", "contents" => $request->input("detail")],
                        ['name' => 'cover_letter', 'filename' => $coverLetterFileNamePath, 'contents' => fopen($coverLetterFileNamePath, 'r'), 'Mime-Type' => $coverLetterMime],
                        ["name" => "cover_letter_ext", "contents" => $coverLetterMime],
                        ["name" => "cover_letter_file_name", "contents" => $coverLetterFileName],
                        ["name" => "terms_conditions_check", "contents" => ($request->input("terms") == 'on') ? 1 : 0],
                        ["name" => "type", "contents" => "career"],
                    ]
                ];
            } else {
                $param = [
                    'multipart' => [
                        ["name" => "app_slug", "contents" => env("APP_SLUG")],
                        ["name" => "location_slug", "contents" => env("APP_LOCATION_SLUG")],
                        ["name" => "department", "contents" => "Carrer"],
                        ["name" => "title", "contents" => $request->input("title")],
                        ["name" => "first_name", "contents" => $request->input("firstName")],
                        ["name" => "last_name", "contents" => $request->input("lastName")],
                        ["name" => "email", "contents" => $request->input("email")],
                        ["name" => "mobile", "contents" => $request->input("phone")],
                        ["name" => "comment", "contents" => $request->input("detail")],
                        ["name" => "terms_conditions_check", "contents" => ($request->input("terms") == 'on') ? 1 : 0],
                        ["name" => "type", "contents" => "career"],
                    ]
                ];
            }
        }
        $client = new Client();
        $inventory = $client->request('POST', $url, $param);
        // $inventory=APIHelper::sendGuzzleRequest($url, 'post', $param);
        if($resumeFileNamePath != '') {
            if (file_exists($resumeFileNamePath)) {
                $isRemoved = unlink($resumeFileNamePath);
            }
        }
        if($coverLetterFileNamePath != '') {
            if (file_exists($coverLetterFileNamePath)) {
                $isRemoved = unlink($coverLetterFileNamePath);
            }
        }
        return redirect()->back()->with('message', 'Data Submitted Successfully...!');
    }

    public function ViewDetailsForm(Request $request) { 
      
        if($request->input("formtype")=="form_tradein") {
            $validator = Validator::make($request->all(), 
            [ 
                'value_title'=>'required',
                'value_firstName'=>'required|max:255',
                'value_lastName'=>'required|max:255',
                'value_email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'value_phone'=>'required|digits:10',
                'value_detail'=>'required|max:1000',
                'value_brand'=>'required',
                'value_model'=>'required',
                'value_year'=>'required|numeric|digits:4|integer|min:1900|max:'.(date('Y')+1),
                'value_odometer'=>'required',
                // 'value_vehicle_condition'=>'required',
                'terms_and_conditions'=>'accepted',
                'value_upload_photo' => 'mimes:jpg,jpeg,png',
            ]);

            if($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $imagePath = $imageName = $imageMime = $imageExt = '';
            if (!empty($_FILES)) {
                $tempFplderName = 'tempfile';
                // value_upload_photo Logic
                if(isset($_FILES['value_upload_photo']) && !empty($_FILES['value_upload_photo'])) {
                    if(isset($_FILES['value_upload_photo']['name']) && !empty($_FILES['value_upload_photo']['name'])) {
                        $tmpFile = $_FILES['value_upload_photo']['tmp_name'];
                        $ext = strtolower(pathinfo($_FILES['value_upload_photo']['name'], PATHINFO_EXTENSION));
                        $filepath = $tempFplderName . "/";
                        $path = public_path() . '/' . $tempFplderName;
                        $tmpFileName = Utils::RemoveSpecialSymbol(time() . '-' . $_FILES['value_upload_photo']['name']);
                        $filepath .= $tmpFileName;
                        $filename = $path . '/' . $tmpFileName;
                        $isFileUploaded = move_uploaded_file($tmpFile, $filename);
                        if (file_exists($filename)) {
                            chmod($filename, 0777);
                        }
                        $imagePath = $filename;
                        $fileNameArr = (explode("/", $filename));
                        $imageName = end($fileNameArr);
                        $imageMime = mime_content_type($filename);
                        $imageExt = $ext;
                    }
                }
            }

            $url=config('apiprovider.api.store_tradein_form');
            $param = array();
            /* $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Sales - New";
            $param['inventory_id'] = $request->input("inventory_id");
            $param['title'] = $request->input("value_title");
            $param['first_name'] = $request->input("value_firstName");
            $param['last_name'] = $request->input("value_lastName");
            $param['email'] = $request->input("value_email");
            $param['mobile'] = $request->input("value_phone");
            $param['comment'] = $request->input("value_detail");
            $param['brand'] = $request->input("value_brand");
            $param['model'] = $request->input("value_model");
            $param['year'] = $request->input("value_year");
            $param['odometer'] = $request->input("value_odometer");
            // $param[''] = $request->input("value_upload_photo");
            $param['image_path'] = (isset($s3PhotoURL) && !empty($s3PhotoURL)) ? $s3PhotoURL : NULL;
            $param['condition'] = $request->input("value_vehicle_condition"); 
            $param['terms_conditions_check'] = ($request->input("terms_and_conditions") == 'on') ? 1 : 0;
            $param['type'] = "valuetrade";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param); */
            if($imagePath != '') {
                $param = [
                    'multipart' => [
                        ["name" => "app_slug", "contents" => env("APP_SLUG")],
                        ["name" => "location_slug", "contents" => env("APP_LOCATION_SLUG")],
                        ["name" => "department", "contents" => "Sales - New"],
                        ["name" => "inventory_id", "contents" => $request->input("inventory_id")],
                        ["name" => "title", "contents" => $request->input("value_title")],
                        ["name" => "first_name", "contents" => $request->input("value_firstName")],
                        ["name" => "last_name", "contents" => $request->input("value_lastName")],
                        ["name" => "email", "contents" => $request->input("value_email")],
                        ["name" => "mobile", "contents" => $request->input("value_phone")],
                        ["name" => "comment", "contents" => $request->input("value_detail")],
                        ["name" => "brand", "contents" => $request->input("value_brand")],
                        ["name" => "model", "contents" => $request->input("value_model")],
                        ["name" => "year", "contents" => $request->input("value_year")],
                        ["name" => "odometer", "contents" => $request->input("value_odometer")],
                        ['name' => 'image_path', 'filename' => $imagePath, 'contents' => fopen($imagePath, 'r'), 'Mime-Type' => $imageMime],
                        ["name" => "image_ext", "contents" => $imageMime],
                        ["name" => "image_file_name", "contents" => $imageName],
                        ["name" => "condition", "contents" => $request->input("value_vehicle_condition")],
                        ["name" => "terms_conditions_check", "contents" => ($request->input("terms_and_conditions") == 'on') ? 1 : 0],
                        ["name" => "type", "contents" => "valuetrade"],
                    ]
                ];
            } else {
                $param = [
                    'multipart' => [
                        ["name" => "app_slug", "contents" => env("APP_SLUG")],
                        ["name" => "location_slug", "contents" => env("APP_LOCATION_SLUG")],
                        ["name" => "department", "contents" => "Sales - New"],
                        ["name" => "inventory_id", "contents" => $request->input("inventory_id")],
                        ["name" => "title", "contents" => $request->input("value_title")],
                        ["name" => "first_name", "contents" => $request->input("value_firstName")],
                        ["name" => "last_name", "contents" => $request->input("value_lastName")],
                        ["name" => "email", "contents" => $request->input("value_email")],
                        ["name" => "mobile", "contents" => $request->input("value_phone")],
                        ["name" => "comment", "contents" => $request->input("value_detail")],
                        ["name" => "brand", "contents" => $request->input("value_brand")],
                        ["name" => "model", "contents" => $request->input("value_model")],
                        ["name" => "year", "contents" => $request->input("value_year")],
                        ["name" => "odometer", "contents" => $request->input("value_odometer")],
                        ["name" => "condition", "contents" => $request->input("value_vehicle_condition")],
                        ["name" => "terms_conditions_check", "contents" => ($request->input("terms_and_conditions") == 'on') ? 1 : 0],
                        ["name" => "type", "contents" => "valuetrade"],
                    ]
                ];
            }
            $client = new Client();
            $inventory = $client->request('POST', $url, $param);
            if($imagePath != '') {
                if (file_exists($imagePath)) {
                    $isRemoved = unlink($imagePath);
                }
            }
            return redirect()->back()->with('message', 'Data Submitted Successfully...!');
        } else if($request->input("formtype")=="make_an_enquiry") {
            $validator = Validator::make($request->all(), 
            [ 
                'make_title'=>'required',
                'make_firstName'=>'required|max:255',
                'make_lastName'=>'required|max:255',
                'make_email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'make_phone'=>'required|digits:10',
                'make_my_offer'=>'required',
                'make_detail'=>'max:1000',
                'terms'=>'accepted'
            ]);

            if($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            $url=config('apiprovider.api.store_enquiry_offer_form');
            $param = array();
            $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Sales - New";
            $param['inventory_id'] = $request->input("inventory_id");
            // $param['truck_info'] = $request->input("your_name");
            $param['title'] = $request->input("make_title");
            $param['first_name'] = $request->input("make_firstName");
            $param['last_name'] = $request->input("make_lastName");
            $param['email'] = $request->input("make_email");
            $param['mobile'] = $request->input("make_phone");
            $param['offer'] = $request->input("make_my_offer");
            $param['comment'] = $request->input("make_detail");
            $param['terms_conditions_check'] = ($request->input("terms") == 'on') ? 1 : 0;
            $param['type'] = "makeanenquiry";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
            
            return redirect()->back()->with('message', 'Data Submitted Successfully...!');
        } else if($request->input("formtype")=="form_send_to_friend") {
            $validator = Validator::make($request->all(), 
            [ 
                'your_name'=>'required|max:255',
                'your_email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'friend_name'=>'required|max:255',
                'friend_email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'detail'=>'max:1000',
                'terms'=>'accepted'
            ]);

            if($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }
            // truck_info,name,email,friend_name,friend_email,comment
            $url=config('apiprovider.api.store_sendtofriend_form');
            $param = array();
            $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Sales - New";
            // $param['truck_info'] = $request->input("your_name");
            $param['inventory_id'] = $request->input("inventory_id");
            $param['name'] = $request->input("your_name");
            $param['email'] = $request->input("your_email");
            $param['friend_name'] = $request->input("friend_name");
            $param['friend_email'] = $request->input("friend_email");
            $param['comment'] = $request->input("detail");
            $param['terms_conditions_check'] = ($request->input("terms") == "on") ? 1 : 0;
            $param['type'] = "sendtofriend";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
            
            return redirect()->back()->with('message', 'Data Submitted Successfully...!');
        } else if($request->input("formtype")=="form_book_drive") {
            $validator = Validator::make($request->all(), 
            [
                'test_drive_title'=>'required',
                'test_drive_firstName'=>'required|max:255',
                'test_drive_lastName'=>'required|max:255',
                'test_drive_email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'test_drive_phone'=>'required|digits:10',
                'preferred_date'=>'required|date_format:d/m/Y',
                'preferred_time'=>'required|date_format:H:i',
                'test_drive_detail'=>'max:1000',
                'terms_and_condition'=>'accepted'
            ]);
          
            if($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }

            $url=config('apiprovider.api.store_book_drive');
            $param = array();
            $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Sales - New";
            $param['inventory_id'] = $request->input("inventory_id");
            $param['title'] = $request->input("test_drive_title");
            $param['first_name'] = $request->input("test_drive_firstName");
            $param['last_name'] = $request->input("test_drive_lastName");
            $param['email'] = $request->input("test_drive_email");
            $param['mobile'] = $request->input("test_drive_phone");
            $param['comment'] = $request->input("preferred_date");
            $param['preferred_date'] = $request->input("preferred_time");
            $param['preferred_time'] = $request->input("test_drive_detail");
            $param['terms_conditions_check'] = ($request->input("terms_and_condition") == 'on') ? 1 : 0;
            $param['type'] = "bookadrive";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
            
            return redirect()->back()->with('message', 'Data Submitted Successfully...!');
        } else if($request->input("formtype")=="form_request_video") {
            $validator = Validator::make($request->all(), 
            [
                'a_title'=>'required',
                'a_firstName'=>'required|max:255',
                'a_lastName'=>'required|max:255',
                'a_email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'a_phone'=>'required|digits:10',
                'a_detail'=>'max:1000',
                'terms_&_condition'=>'accepted'
            ]);
          
            if($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }

            $url=config('apiprovider.api.store_enquiry_form');
            $param = array();
            $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Sales - New";
            $param['inventory_id'] = $request->input("inventory_id");
            $param['title'] = $request->input("a_title");
            $param['first_name'] = $request->input("a_firstName");
            $param['last_name'] = $request->input("a_lastName");
            $param['email'] = $request->input("a_email");
            $param['mobile'] = $request->input("a_phone");
            $param['comment'] = $request->input("a_detail");
            $param['terms_conditions_check'] = ($request->input("terms_&_condition") == 'on') ? 1 : 0;
            $param['type'] = "requestvideo";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
            
            return redirect()->back()->with('message', 'Data Submitted Successfully...!');
        }
    }
    
    public function OurStockForm(Request $request) {
        // print_r(json_encode($request->all()));exit;
        if($request->input("form_type")=="form_helpme_truck") {
            $validator = Validator::make($request->all(), 
            [ 
                'title'=>'required',
                'firstName'=>'required|max:255',
                'lastName'=>'required|max:255',
                'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'phone'=>'required|digits:10',
                'detail'=>'required|max:1000',
                'terms'=>'accepted'
            ]);

            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator);
            }

            $url=config('apiprovider.api.store_enquiry_form');
            $param = array();
            $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Sales - New";
            $param['title'] = $request->input("title");
            $param['first_name'] = $request->input("firstName");
            $param['last_name'] = $request->input("lastName");
            $param['email'] = $request->input("email");
            $param['mobile'] = $request->input("phone");
            $param['comment'] = $request->input("detail");
            $param['terms_conditions_check'] = ($request->input("terms") == 'on') ? 1 : 0;
            $param['type'] = "findatruck";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
            
            return redirect()->back()->with('message', 'Data Submitted Successfully...!');
        } else if($request->input("form_type")=="form_ourstock_tradein") {
            $validator = Validator::make($request->all(), 
            [ 
                'value_title'=>'required',
                'value_firstName'=>'required|max:255',
                'value_lastName'=>'required|max:255',
                'value_email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'value_phone'=>'required|digits:10',
                'value_detail'=>'required|max:1000',
                'value_brand'=>'required',
                'value_model'=>'required',
                'value_year'=>'required|numeric|digits:4|integer|min:1900|max:'.(date('Y')+1),
                'value_odometer'=>'required',
                // 'value_vehicle_condition'=>'required',
                'terms_and_conditions'=>'accepted',
                'value_upload_photo' => 'mimes:jpg,jpeg,png',
            ]);

            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator);
            }

            $imagePath = $imageName = $imageMime = $imageExt = '';
            if (!empty($_FILES)) {
                $tempFplderName = 'tempfile';
                // value_upload_photo Logic
                if(isset($_FILES['value_upload_photo']) && !empty($_FILES['value_upload_photo'])) {
                    if(isset($_FILES['value_upload_photo']['name']) && !empty($_FILES['value_upload_photo']['name'])) {
                        $tmpFile = $_FILES['value_upload_photo']['tmp_name'];
                        $ext = strtolower(pathinfo($_FILES['value_upload_photo']['name'], PATHINFO_EXTENSION));
                        $filepath = $tempFplderName . "/";
                        $path = public_path() . '/' . $tempFplderName;
                        $tmpFileName = Utils::RemoveSpecialSymbol(time() . '-' . $_FILES['value_upload_photo']['name']);
                        $filepath .= $tmpFileName;
                        $filename = $path . '/' . $tmpFileName;
                        $isFileUploaded = move_uploaded_file($tmpFile, $filename);
                        if (file_exists($filename)) {
                            chmod($filename, 0777);
                        }
                        $imagePath = $filename;
                        $fileNameArr = (explode("/", $filename));
                        $imageName = end($fileNameArr);
                        $imageMime = mime_content_type($filename);
                        $imageExt = $ext;
                    }
                }
            }
            
            $url=config('apiprovider.api.store_tradein_form');
            $param = array();
            /* $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Sales - New";
            $param['title'] = $request->input("value_title");
            $param['first_name'] = $request->input("value_firstName");
            $param['last_name'] = $request->input("value_lastName");
            $param['email'] = $request->input("value_email");
            $param['mobile'] = $request->input("value_phone");
            $param['comment'] = $request->input("value_detail");
            $param['brand'] = $request->input("value_brand");
            $param['model'] = $request->input("value_model");
            $param['year'] = $request->input("value_year");
            $param['odometer'] = $request->input("value_odometer");
            // $param[''] = $request->input("value_upload_photo");
            $param['image_path'] = (isset($s3PhotoURL) && !empty($s3PhotoURL)) ? $s3PhotoURL : NULL;
            $param['condition'] = $request->input("value_vehicle_condition");
            $param['terms_conditions_check'] = ($request->input("terms_and_conditions") == 'on') ? 1 : 0;
            $param['type'] = "valuemytradein";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param); */
            if($imagePath != '') {
                $param = [
                    'multipart' => [
                        ["name" => "app_slug", "contents" => env("APP_SLUG")],
                        ["name" => "location_slug", "contents" => env("APP_LOCATION_SLUG")],
                        ["name" => "department", "contents" => "Sales - New"],
                        ["name" => "inventory_id", "contents" => $request->input("inventory_id")],
                        ["name" => "title", "contents" => $request->input("value_title")],
                        ["name" => "first_name", "contents" => $request->input("value_firstName")],
                        ["name" => "last_name", "contents" => $request->input("value_lastName")],
                        ["name" => "email", "contents" => $request->input("value_email")],
                        ["name" => "mobile", "contents" => $request->input("value_phone")],
                        ["name" => "comment", "contents" => $request->input("value_detail")],
                        ["name" => "brand", "contents" => $request->input("value_brand")],
                        ["name" => "model", "contents" => $request->input("value_model")],
                        ["name" => "year", "contents" => $request->input("value_year")],
                        ["name" => "odometer", "contents" => $request->input("value_odometer")],
                        ['name' => 'image_path', 'filename' => $imagePath, 'contents' => fopen($imagePath, 'r'), 'Mime-Type' => $imageMime],
                        ["name" => "image_ext", "contents" => $imageMime],
                        ["name" => "image_file_name", "contents" => $imageName],
                        ["name" => "condition", "contents" => $request->input("value_vehicle_condition")],
                        ["name" => "terms_conditions_check", "contents" => ($request->input("terms_and_conditions") == 'on') ? 1 : 0],
                        ["name" => "type", "contents" => "valuetrade"],
                    ]
                ];
            } else {
                $param = [
                    'multipart' => [
                        ["name" => "app_slug", "contents" => env("APP_SLUG")],
                        ["name" => "location_slug", "contents" => env("APP_LOCATION_SLUG")],
                        ["name" => "department", "contents" => "Sales - New"],
                        ["name" => "inventory_id", "contents" => $request->input("inventory_id")],
                        ["name" => "title", "contents" => $request->input("value_title")],
                        ["name" => "first_name", "contents" => $request->input("value_firstName")],
                        ["name" => "last_name", "contents" => $request->input("value_lastName")],
                        ["name" => "email", "contents" => $request->input("value_email")],
                        ["name" => "mobile", "contents" => $request->input("value_phone")],
                        ["name" => "comment", "contents" => $request->input("value_detail")],
                        ["name" => "brand", "contents" => $request->input("value_brand")],
                        ["name" => "model", "contents" => $request->input("value_model")],
                        ["name" => "year", "contents" => $request->input("value_year")],
                        ["name" => "odometer", "contents" => $request->input("value_odometer")],
                        ["name" => "condition", "contents" => $request->input("value_vehicle_condition")],
                        ["name" => "terms_conditions_check", "contents" => ($request->input("terms_and_conditions") == 'on') ? 1 : 0],
                        ["name" => "type", "contents" => "valuetrade"],
                    ]
                ];
            }
            $client = new Client();
            $inventory = $client->request('POST', $url, $param);
            if($imagePath != '') {
                if (file_exists($imagePath)) {
                    $isRemoved = unlink($imagePath);
                }
            }
            return redirect()->back()->with('message', 'Data Submitted Successfully...!');
        }  
    }

    public function SpecialsForm(Request $request) {
        if($request->input("form_type")=="form_make_enquiry") {
            $validator = Validator::make($request->all(), 
            [
                'title'=>'required',
                'firstName'=>'required|max:255',
                'lastName'=>'required|max:255',
                'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'phone'=>'required|digits:10',
                'detail'=>'max:1000',
                'terms'=>'accepted' 
            ]);
            
            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator);
            }

            $url=config('apiprovider.api.store_enquiry_form');
            $param = array();
            $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Sales - New";
            $param['title'] = $request->input("title");
            $param['first_name'] = $request->input("firstName");
            $param['last_name'] = $request->input("lastName");
            $param['email'] = $request->input("email");
            $param['mobile'] = $request->input("phone");
            $param['comment'] = $request->input("detail");
            $param['terms_conditions_check'] = ($request->input("terms") == 'on') ? 1 : 0;
            $param['type'] = "offerenquiry";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
            
            return redirect()->back()->with('message', 'Data Submitted Successfully...!');
        } else if($request->input("form_type")=="form_book_testdrive") {
            $validator = Validator::make($request->all(), 
            [
                'drive_title'=>'required',
                'drive_firstName'=>'required|max:255',
                'drive_lastName'=>'required|max:255',
                'drive_email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
                'drive_phone'=>'required|digits:10',
                'drive_detail'=>'max:1000',
                'terms_and_condition'=>'accepted' 
            ]);
            
            if($validator->fails())
            {
                return back()->withInput()->withErrors($validator);
            }

            $url=config('apiprovider.api.store_enquiry_form');
            $param = array();
            $param['app_slug'] = env("APP_SLUG");
            $param['location_slug'] = env("APP_LOCATION_SLUG");
            $param['department'] = "Sales - New";
            $param['title'] = $request->input("drive_title");
            $param['first_name'] = $request->input("drive_firstName");
            $param['last_name'] = $request->input("drive_lastName");
            $param['email'] = $request->input("drive_email");
            $param['mobile'] = $request->input("drive_phone");
            $param['comment'] = $request->input("drive_detail");
            $param['terms_conditions_check'] = ($request->input("terms_and_condition") == 'on') ? 1 : 0;
            $param['type'] = "driveenquiry";
            $inventory=APIHelper::sendGuzzleRequest($url, 'post',$param);
            
            return redirect()->back()->with('message', 'Data Submitted Successfully...!');
        } 
    }   

    public function verifyCaptcha(Request $request) {
        $captcha = "";
        if(isset($request->recaptcha_token))
            $captcha = $request->recaptcha_token;

        if(!$captcha) {
            $response['code'] = 201;
            $response['status'] = 'error';
            $response['message'] = 'Please check the the captcha form.';
            return response($response, $response['code'])
                    ->header('Content_type', 'application/json');
        }

        $captchaResponse = Utils::verifyCaptcha($captcha);
        if($captchaResponse->success == false){
            $response['code'] = 201;
            $response['status'] = 'error';
            $response['message'] = 'There was an error while validating Captcha, Please try again.';
        } else {
            $response['code'] = 200;
            $response['status'] = 'success';
            $response['message'] = 'captcha verified';
        }
        return response($response, $response['code'])
                    ->header('Content_type', 'application/json');
    }
}
