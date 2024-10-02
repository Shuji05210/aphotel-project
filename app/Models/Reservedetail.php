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

    //多対多のリレーション
    // belongsToMany(相手のモデル,中間テーブルの名前,中間テーブル上の相手のモデルの外部キー,中間テーブル上の自分のモデルの外部キー)
    public function room(){
        return $this->belongsToMany(Room::class, 'reservedetails', 'reserve_detail_id', 'room_id');
    }

}
