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
        Schema::create('specialities', function (Blueprint $table) {
            $table->bigIncrements('special_id');
            $table->string('special_name',200)->nullable();
            $table->string('special_image',80)->nullable();
            $table->string('special_slug',60)->nullable();
            $table->integer('special_creator')->nullable();
            $table->integer('special_editor')->nullable();
            $table->integer('special_status')->default(1);
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
        Schema::dropIfExists('specialities');
    }
};
