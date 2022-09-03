<?php

namespace App\Http\Controllers\site;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    // main page
    public function index(){
        $services=Service::with('user','orders','rating','category','address')->limit(8)->get();

        return view('index',compact('services'));
    }

    // filter services
    public function services(){
        return view('services');
    }

       // service
       public function service($id){
        try {
            $service = Service::with('works','rating','category','address')->findOrFail($id);

            return view('service.service_page',compact('service'));

        } catch (\Throwable $th) {
            // return $th->getMessage();
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
