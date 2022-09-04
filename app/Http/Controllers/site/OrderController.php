<?php

namespace App\Http\Controllers\site;

use App\Models\Order;
use App\Helpers\Helper;
use App\Models\Service;
use App\Events\Messages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    use Helper;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        try {
            $service=Service::findOrFail($id);

            return view('order.request',compact('service'));
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


     // this function use for send request (order)
    public function send(Request $request)
    {
        try {

            // return $request;
            $photos=[];
            // check if request has file image
            if ($request->hasFile('images')) {
                // images
                foreach ($request->file('images') as  $image) {

                        // $photos[] = $i;

                        // upload images to public/assets/images/orders
                        $photos[]= $this->uploadImage("orders", $image);
                        // $photos.push($this->uploadImage("orders", $image));

                    }
                            
                }
                
                $photos = json_encode($photos, JSON_UNESCAPED_UNICODE);
                // return $photos;

            $order=Order::create([
                'description'=>$request->description,
                'images'=>$photos??'',
                'status'=>'1',
                'service_id'=>$request->service,
                'user_id'=>Auth::id(),
            ]);

            $order->address()->create([
                'state_id'=>$request->state,
                'city_id'=>$request->city,
                'description'=>$request->address_description
            ]); 
            
            $user=$order->service->user;

            event(new Messages($order, $user->id,'  طلب جديد من'));

            return redirect()->back()->with(['success' => 'تمت  العملية بنجاح']);
        } catch (\Throwable $th) {
            // return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);

            return $th->getMessage();
            //throw $th;
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
            $order=Order::with('user','service','address')->CheckOwner()->findOrFail($id);
            $images = json_decode($order->images, true);
        
            return view('order.bill',compact('order','images'));
        
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orderResponse(Request $request)
    {
        // return $request;
        try {
            $order=Order::CheckOwner()->findOrFail($request->order);
            $order->update([
                'price'=>$request->price,
                'status'=>2,
                'date'=>$request->date
            ]);
            
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
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
        //
    }
}
