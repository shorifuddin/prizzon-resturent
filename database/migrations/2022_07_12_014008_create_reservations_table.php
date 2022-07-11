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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('rtable_id');
            $table->string('rtable_time')->nullable();
            $table->string('rtable_member')->nullable();
            $table->string('rtable_date')->nullable();
            $table->string('rtable_phone',20)->nullable();
            $table->string('rtable_name',60)->nullable();
            $table->string('rtable_email',60)->nullable();
            $table->string('rtable_sms',160)->nullable();
            $table->integer('rtable_editor')->nullable();
            $table->integer('rtable_status')->default(0);
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
        Schema::dropIfExists('reservations');
    }
};
