<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index(){
        try {
            $user = User::with('profile','address','social')->findOrFail(Auth::id());
//            return $user;
            return view('user.profile',compact('user'));

        } catch (\Throwable $th) {
            // return $th->getMessage();
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    // service
    public function show($id){
        try {
            $profile = User::with('profile','address','social')->findOrFail($id);

            return view('user.profile',compact('profile'));

        } catch (\Throwable $th) {
            // return $th->getMessage();
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
