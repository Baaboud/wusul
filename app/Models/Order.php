<?php

namespace App\Models;

use App\Models\User;
use App\Models\Address;
use App\Models\Service;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'price',
        'code',
        'hash_code',
        'status',
        'payment_id',
        'service_id',
        'user_id',
        'date'
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }

        // order  address
public function Address(){
    return $this->morphOne(Address::class,'address');
}
    // order  location
    public function location(){
        return $this->morphOne(Location::class,'location');
    }
}
