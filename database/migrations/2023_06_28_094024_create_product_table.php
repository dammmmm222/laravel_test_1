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
        Schema::create('product', function (Blueprint $table) {
            // id: khoá chính (tăng tự động)
            $table->id();
            // $table-> kiểu dữ liệu('tên cột',giới hạn)-> ràng buộc()
            $table->string('name')->nullable();//không để trống
            $table->string('email')->unique();//không trùng lặp
            $table->string('birtday')->nullable();//không để trống
            $table->tinyInteger('gender')->default(0);// giá trị mặc định

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
