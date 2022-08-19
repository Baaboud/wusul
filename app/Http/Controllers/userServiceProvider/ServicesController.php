<?php

namespace App\Http\Controllers\userServiceProvider;

use App\Helpers\Helper;
use App\Models\Service;
use App\Models\ServersCat;
use App\Models\ServiceCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ServerProviderRequest;

class ServicesController extends Controller
{
    use Helper;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ServiceCat::all();
        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServerProviderRequest $request)
    {
        try {
    
            // $request->validate([
            //     'name' => 'required|string',
            //     'description'=>'string|required',
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            //     'service_cat_id'=>'required|numeric',
            //     'price'=>'numeric',
            //     'type'=>'numeric'
            // ],
            // [
            //     'name.required'=>'هذا الحقل مطلوب',
            //     'description.required'=>'هذا الحقل مطلوب',
            //     'service_cat_id.required'=>'هذا الحقل مطلوب',
            //     'image.required'=>'هذا الحقل مطلوب',
            //     'price.numeric'=>'يجب ملئ الحقل بأرقام فقط',
            //     'type.numeric'=>'يجب ملئ الحقل بأرقام فقط',
            //     'image.image'=>' يجب ان يكون صوره',
            //     'accept.required' => 'يجب ان توافق على الشروط ',
            //     'name.string'=>'هذا الحقل يجب ان يكون نص',
            //     'description.string'=>'هذا الحقل يجب ان يكون نص'
            // ]);
            
                $photo = "";


            if ($request->hasFile('image')) {
                

                $photo = $this->uploadImage('services', $request->image);

            }

            // create Service
            $service = Service::create([
                'name' => $request['name'],
                'user_id' => Auth::id()??3,
                'description' => $request['description'],
                'type' => $request['type']?? 0,
                'image' => $photo,
                'price' => $request['price']??'1',
                'service_cat_id' => $request['service_cat_id'],
                'stars' => 0,
            ]);



            // event(new notfiy($));
                return $service;
            return redirect()->route('serviceProvider.home');
        } catch (\Exception $ex) {
            return $ex->getMessage();

            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $service = Service::findOrFail($id);

            if(!$service){
                return redirect()->back();
            }
            return $service;
        } catch (\Throwable $th) {
            // throw $th;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $service = Service::where('user_id', Auth::id())->findOrFail($id);
            $categories = ServersCat::all();

            if(!$service){
                return redirect()->back();
            }
            return $service;
        } catch (\Throwable $th) {
            return $th->getMessage();

            // throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServerProviderRequest $request, $id)
    {
        try {
            $service = Service::
            // where('user_id', Auth::id())->
            findOrFail($id);
            // $photo;
            if ($request->hasFile('image')) {
    
    
                if($service->image){
                    Storage::disk('services')->delete($service->image);
                }
                $photo = $this->uploadImage('services',$request->file('image'));
    
            }else{
                $photo =$service->image;
            }
    
            // create Service
            $service->update([
                'name' => $request['name'],
                'description' => $request['description'],
                'type' => $request['type']?? 0,
                'image' => $photo,
                'price' => $request['price']??'1',
                'service_cat_id' => $request['service_cat_id'],
            ]);        
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $service = Service::findOrFail($id);

            if ($service->image != '') { // check if pharmacy has image
                
                // remove image
                Storage::disk('services')->delete($service->image);
            }

            $service->delete();

            return redirect()->back();

        } catch (Throwable $e) {
            return $th->getMessage();
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}