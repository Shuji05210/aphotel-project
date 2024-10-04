<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservedetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'reserve_detail_id';

    protected $fillable = [
        'reserve_id',
        'room_id',
        'rest_date',
        'room_price',
    ];

    

}
