<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use App\Models\ServiceCat;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public $search;
    public $category;
    public $active;
    public $stars;
    public $sortFile;
    public function render()
    {
        // ->
        // whereHas('address', function    ($query)  {
        //     $query->withFilters(
        //         request()->input('governorate', ''),
        //         request()->input('city', '')
        //     );
        // })
        $categories=ServiceCat::all();
        $services =  Service::with(['address','category','user'])
        ->withFilters(
            $this->search,
            $this->category,
            $this->active,
            $this->stars
            )->when($this->sortFile,function($query){
                $query->orderBy("$this->sortFile");
            })
            ->paginate(1);
            // dd($services);
        return view('livewire.services',compact('services','categories'));
    }


}
