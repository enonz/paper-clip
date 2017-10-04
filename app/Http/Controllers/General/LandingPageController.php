<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index(){
    	return view('general.landing-page.index');
    }
}
