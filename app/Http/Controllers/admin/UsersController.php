<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Helpers\Helper;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    use Helper;

        public function account(){
            $name=explode(' ',Auth::user()->name,2);
            $profile=Auth::user()->profile;
            return view('account.person',compact('name','profile'));
        }
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

        public function update(Request $request){
            try {
                return $request;
                $user = User::with('profile','address')->findOrFail(Auth::id());
                $user->update([
                    'name'=> $request->firstName.' '.$request->lastName,
                ]);
                $user->profile()->update([
                    'birthday'=>$request->birth,
                    'phone'=>$request->phone,
                ]);
                $user->address()->update([
                    'state_id'=>$request->state,
                    'city_id'=>$request->city,
                    'description'=>$request->description
                ]);
                return redirect()->back();
            } catch (\Throwable $th) {
                return $th->getMessage();
                //throw $th;
            }

            return redirect()->back();
        }
        
        public function changePassword(Request $request) {
            if (!(Hash::check($request->current_password, Auth::user()->password))) {
    
                // The passwords matches
                return redirect()->back()->with(["error"=>" كلمة المرور لا تتطابق مع كلمة المروو الخاصه بك"]);
            }
    
            // Current password and new password same
            if(strcmp($request->current_password , $request->new_password) == 0){
    
                return redirect()->back()->with(["error"=>" كلمة المرور الجديده لا يمكن تساوي   كلمة الحاليه"]);
            }
    
            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->new_password);
            $user->save();
    
            return redirect()->back()->with(["sucess"=>" تم تغيير كلمة السر بنجاح"]);
        }
    

}
