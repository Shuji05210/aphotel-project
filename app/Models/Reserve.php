<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    public function guest()
    {
        return $this->belongsTo('App\Guest', 'user_id', 'user_id');
    }
    protected $fillable = [
        '',
        '',
        'user_id'
    ];
}
