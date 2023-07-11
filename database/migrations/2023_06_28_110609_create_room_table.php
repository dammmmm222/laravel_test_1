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
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->integer("room_type_id")->comment("Id của loại phòng");
            $table->foreign('hotel_id')->comment("Id của khách sạn");
            $table->integer('room_number')->nullable();
            $table->foreign('room_type_id')->references('id')->on('room_type')->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->timestamps();
        });
    }
  
    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
