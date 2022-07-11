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
        Schema::create('menuses', function (Blueprint $table) {
            $table->bigIncrements('menus_id');
            $table->string('menus_name',200)->nullable();
            $table->text('menus_details')->nullable();
            $table->string('menus_price',200)->nullable();
            $table->string('menus_category',255)->nullable();
            $table->string('menus_image',80)->nullable();
            $table->string('menus_slug',60)->nullable();
            $table->integer('menus_creator')->nullable();
            $table->integer('menus_editor')->nullable();
            $table->integer('menus_status')->default(1);
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
        Schema::dropIfExists('menuses');
    }
};
