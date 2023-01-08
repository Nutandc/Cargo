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
        Schema::create('cargo_processes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cargo_id')->index();
            $table->foreign('cargo_id')->references('id')->on('cargos')->cascadeOnDelete();
            $table->unsignedBigInteger('process_id')->index();
            $table->foreign('process_id')->references('id')->on('processes')->cascadeOnDelete();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('note')->nullable();
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargo_processes');
    }
};
