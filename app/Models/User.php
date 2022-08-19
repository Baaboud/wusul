<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Report;
use App\Models\Address;
use App\Models\Service;
use App\Models\Location;
use App\Models\UserProfile;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Interfaces\Wallet;

class User extends Authenticatable implements Wallet
{
    use HasApiTokens, HasFactory, Notifiable , HasWallet;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'is_active',

    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // user profile
    public function profile(){
        return $this->hasOne(UserProfile::class,'user_id');
    }

    // user  address
public function address(){
    return $this->morphOne(Address::class,'address');
}
    // user  location
    public function location(){
        return $this->morphOne(Location::class,'location');
    }

    // user services
public function services()
{
    return $this->hasMany(Service::class, 'user_id');
}

// user services rating
public function rating()
{
    return $this->belongsToMany(Service::class, 'service_rating')->withPivot('stars');
}

// user social
public function social(){
    return $this->hasOne(UserProfile::class,'user_id');
}

// user Orders
public function orders(){
    return $this->hasMany(Order::class,'user_id');
}

// user reports
public function reports(){
    return $this->hasMany(Report::class,'sender_id');
}
public function admin(){
    if($this->type == 1){
        return true;
    }else{
        return false;
    }
}
public function userServiceProvider(){
    if($this->type == 2){
        return true;
    }else{
        return false;
    }
}


}