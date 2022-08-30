<?php

namespace App\Http\Controllers\admin;

use App\Helpers\Helper;
use App\Models\ServiceCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class ServiceCategory extends Controller
{
    use Helper;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=ServiceCat::all();
        return view('admin.categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
    

            $photo = "";


            if ($request->image) {
                

                $photo = $this->uploadImage('services_cat', $request->image);

            }

            // create Service category
            $category = ServiceCat::create([
                'name' => $request['name'],
                'description' => $request['description'],
                'image' => $photo,
            ]);



            // event(new notfiy($));

            return redirect()->back();
            // return $category;
        } catch (\Exception $ex) {
            return $ex->getMessage();
            // return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
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
        //
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
            $category = ServiceCat::findOrFail($id);
            return $category;
        } catch (\Throwable $th) {
            return $ex->getMessage();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            // return $request;
            $category = ServiceCat::findOrFail($request->id);
            
            $photo;
            if ($request->hasFile('image')) {
    
    
                if($category->image){
                    Storage::disk('services_cat')->delete($category->image);
                }
                $photo = $this->uploadImage('services_cat',$request->file('image'));
    
            }else{
                $photo =$category->image;
            }
    
            // create Service category
            $category->update([
                'name' => $request['name'],
                'description' => $request['description'],
                'image' => $photo,
            ]);   
            return redirect()->back();
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
            $category = ServiceCat::findOrFail($id);
            // return $category;
            if($category->image  != ''){
                Storage::disk('services_cat')->delete($category->image);
            }
            $category->delete();
            return redirect()->route('categories');

        } catch (\Throwable $th) {
            return $th->getMessage();
            //throw $th;
        }
    }
}
