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
        //belongsTo(主テーブルの指定、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo(Guest::class,'user_id','user_id');
    }
}
