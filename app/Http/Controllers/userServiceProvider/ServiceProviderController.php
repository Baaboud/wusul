<?php

namespace App\Http\Controllers\userServiceProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function home()
    {
        return view('service_provider.home');
    }

}
