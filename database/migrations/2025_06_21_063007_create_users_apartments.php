<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //какая связь строиться на основе такого типа таблиц (пользователи к квартирам)
        //как можно оптимизировать данную миграции для этой таблицы
        //можно ли здесь отказываться от id автоинкремента
        Schema::create('users_apartments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('apartment_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_apartments');
    }
};
