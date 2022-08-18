<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'payment_type_id',
    ];

    public function paymentType(){
        return $this->belongsTo(PaymentType::class,'payment_type_id');
    }
}
