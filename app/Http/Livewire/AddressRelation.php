<?php

namespace App\Http\Livewire;

use App\Models\State;
use Livewire\Component;

class AddressRelation extends Component
{
    public $state;
    public $city;
    public function mount($state_id){
        $this->state=$state_id;
    }
    public function render()
    {
        $states=State::with(['cities'=>function($q){
            if($this->state !=''){
                $q->where('state_id',$this->state);
            }
        }])->get();
        // dd($states);
        return view('livewire.address-relation',compact('states'));
    }
}
