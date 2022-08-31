<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    protected $fillable = [
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'id');
   }
}
