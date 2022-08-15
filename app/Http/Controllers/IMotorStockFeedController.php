<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\APIHelper;

class IMotorStockFeedController extends Controller {

    public function headIMotorStockFeed() {
        return view('IMotorStockFeed.head');
    }
    
    public function headerIMotorStockFeed() {
        return view('IMotorStockFeed.header');
    }
    
    public function footerIMotorStockFeed() {
        return view('IMotorStockFeed.footer');
    }
}