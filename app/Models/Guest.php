<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'address',
        'tel'
    ];

    public function reserves(){
        return $this->hasMany(Reserve::class);
    }
}
