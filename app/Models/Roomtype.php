<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    use HasFactory;

    protected $primaryKey = 'roomtype_id';

    protected $fillable = [
        'room_name',
        'max_rest_people',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
