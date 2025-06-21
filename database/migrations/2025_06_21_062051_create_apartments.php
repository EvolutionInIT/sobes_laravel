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
        // Чтобы можно оптимизировать в рамках полей таблицы в данной миграции
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('apartment_id');
            $table->integer('rooms'); //количество комнат
            $table->integer('entrance'); //подъезд
            $table->integer('floor'); // этаж
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
