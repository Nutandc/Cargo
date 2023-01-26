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
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id')->index();
            $table->foreign('location_id')->references('id')->on('locations')->cascadeOnDelete();
            $table->unsignedBigInteger('transport_id')->index();
            $table->foreign('transport_id')->references('id')->on('transports')->cascadeOnDelete();
            $table->unsignedBigInteger('courier_id')->index()->nullable();
            $table->foreign('courier_id')->references('id')->on('couriers')->nullOnDelete();
            $table->unsignedBigInteger('process_id')->index()->nullable();
            $table->foreign('process_id')->references('id')->on('processes')->nullOnDelete();
            $table->string('track')->index();
            $table->string('receiver_name');
            $table->string('receiver_phone');
            $table->string('receiver_address');
            $table->boolean('express')->default(0);
            $table->unsignedFloat('delivery_fee')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargos');
    }
};
