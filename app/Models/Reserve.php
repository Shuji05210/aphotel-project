<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reserve extends Model
{
    use HasFactory;

    protected $primaryKey = 'reserve_id';
    
    protected $fillable = [
        'user_id',
        'people',
        'checkin_date',
        'checkout_date',
    ];

    public function guest(){
        return $this->belongsTo(Guest::class);
    }
}
