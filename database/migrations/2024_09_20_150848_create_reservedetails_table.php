<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservedetails', function (Blueprint $table) {
            $table->id('reserve_detail_id');
            $table->foreignId('reserve_id');  //複合キー
            $table->foreignId('room_id');     //複合キー
            $table->date('rest_date');
            $table->integer('room_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservedetails');
    }
};
