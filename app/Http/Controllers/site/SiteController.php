<?php

namespace App\Http\Controllers\site;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    // main page
    public function index(){
        $services=Service::with('user','orders','rating','category')->limit(8)->get();

        return view('index',compact('services'));
    }

    // filter services
    public function services(){
        return view('services');
    }
}
