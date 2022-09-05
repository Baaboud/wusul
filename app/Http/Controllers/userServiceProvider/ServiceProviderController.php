<?php

namespace App\Http\Controllers\userServiceProvider;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceProviderController extends Controller
{
    public function home()
    {
        return view('service_provider.home');
    }

}
