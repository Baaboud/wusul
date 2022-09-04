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

    public function services(){
        try {
            $user = User::with('profile','address')->findOrFail(Auth::id());
//            return $user;
            return view('user.services',compact('user'));

        } catch (\Throwable $th) {
            // return $th->getMessage();
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function orders(){
        try {
            $user = User::with('profile','address')->findOrFail(Auth::id());
            return view('user.orders', compact('user'));

        } catch (\Throwable $th) {
            // return $th->getMessage();
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function wallet(){
        try {
            $user = User::with('profile','address')->findOrFail(Auth::id());
            return view('user.wallet', compact('user'));

        } catch (\Throwable $th) {
            // return $th->getMessage();
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    // show
    public function show($id){
        try {
            $user = User::with('profile','address','social')->findOrFail($id);

            return view('user.profile',compact('user'));

        } catch (\Throwable $th) {
            // return $th->getMessage();
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function showService($id){
        try {
            $user = User::with('profile','address')->findOrFail($id);
//            return $user;
            return view('user.services',compact('user'));

        } catch (\Throwable $th) {
            // return $th->getMessage();
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
