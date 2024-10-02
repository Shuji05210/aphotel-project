<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey = 'room_id';

    protected $fillable = [
        'roomtype_id',
        'room_number',
    ];
    
    public function roomtype()
    {
        //belongsTo(主テーブルの指定, 従テーブルの外部キー, 対応する主テーブルの主キー)
        return $this->belongsTo(Roomtype::class, 'roomtype_id', 'roomtype_id');
    }

    //リレーション 予約明細
    public function reservedetail()
    {
        return $this->belongsToMany(Reservedetail::class);
    }


}
