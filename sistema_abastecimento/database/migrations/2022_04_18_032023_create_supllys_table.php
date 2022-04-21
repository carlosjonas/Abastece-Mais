<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supllys', function (Blueprint $table) {
            $table->id('id');
            //$table->unsignedBigInteger('id_car');
            //$table->unsignedBigInteger('id_user');
            $table->timestamp('dt_supply');
            $table->timestamps();
            $table->double('km_atually');
            $table->decimal('value', $precision = 6, $scale = 2);
            $table->double('qtd_liters');
            $table->decimal('value_per_liters', $precision = 6, $scale = 2);
            $table->double('latitude');
            $table->double('longitude');

            //$table->foreign('id_user')->references('id')->on(users);
            //$table->foreign('id_car')->references('id')->on(cars);
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_car')->constrained('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supllys');
    }
};
