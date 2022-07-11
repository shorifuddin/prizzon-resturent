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
        Schema::create('chefs', function (Blueprint $table) {
            $table->bigIncrements('chef_id');
            $table->string('chef_title',200)->nullable();
            $table->text('chef_details')->nullable();
            $table->string('chef_image',80)->nullable();
            $table->string('chef_slug',60)->nullable();
            $table->integer('chef_creator')->nullable();
            $table->integer('chef_editor')->nullable();
            $table->integer('chef_status')->default(1);
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
        Schema::dropIfExists('chefs');
    }
};
