<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Http\Request;

class Rating extends Component
{
    public $orderId;
    public $stars;

    public function mount(Request $request){
        $order=Order::with('service','user')->CheckOwner()->findOrFail($request->id);
        $this->orderId=$request->id;
        $service_id=$order->service->id;
        $rating= $order->user->rating()->where('service_id',$service_id)->first();
        if($rating){
            $this->stars=$rating->pivot->stars;
            // $order->user->rating()->sync([$service_id => ['stars'=>'0']],false);
        }


    }
    public function render()
    {
        $order=Order::with('service','user')->CheckOwner()->findOrFail($this->orderId);
        $service = $order->service;
        $service_id = $service->id;
        $order->user->rating()->sync([$service_id =>['stars'=> $this->stars ?? '0']],false);

        $ratings=$service->rating()->get();
        $sum=0;
        foreach ($ratings as $rating) {
            $sum+=(int)$rating->pivot->stars;
        }
        $service->stars=($sum/count($ratings)); 
        $service->save();
        return view('livewire.rating');
    }
}
