<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reserve extends Model
{
    use HasFactory;

    // 主キーにid以外の名前を付けているなら指定する
    protected $primaryKey = 'reserve_id';
    
    protected $fillable = [
        'people',
        'checkin_date',
        'checkout_date',
        'user_id',
    ];

    public function guest(){
        //belongsTo(主テーブルの指定, 従テーブルの外部キー, 対応する主テーブルの主キー)
        return $this->belongsTo(Guest::class,'user_id','user_id');
    }

    //多対多のリレーション
    // belongsToMany(相手のモデル,中間テーブルの名前,中間テーブル上の相手のモデルの外部キー,中間テーブル上の自分のモデルの外部キー)
    public function room()
    {
        return $this->belongsToMany(Room::class, 'reservedetails', 'reserve_id', 'room_id');
    }

}
