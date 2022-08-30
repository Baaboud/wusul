<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
        // show all users
        public function users()
        {
            // all users 
            $users = User::latest()->where('id', '<>', auth()->id())->get();
    
            // users type
            $types = ['مستخدم', 'مدير', 'صاحب خدمة'];
    
            return view('admin.users');
        }

        // active user
        
        public function activation($id)
        {
            try {
                $user = User::findOrFail($id);
                $user->is_active? $user->is_active=0 : $user->is_active= 1;
                $user->save();

                return redirect()->back();

            } catch (\Throwable $th) {
                //throw $th;
            }
            
        }

}
