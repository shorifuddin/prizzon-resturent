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
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->string('event_title',200)->nullable();
            $table->timestamp('event_time')->nullable();
            $table->string('event_image',80)->nullable();
            $table->string('event_slug',60)->nullable();
            $table->integer('event_creator')->nullable();
            $table->integer('event_editor')->nullable();
            $table->integer('event_status')->default(1);
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
        Schema::dropIfExists('events');
    }
};
