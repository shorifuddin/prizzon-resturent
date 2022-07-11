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
        Schema::create('features', function (Blueprint $table) {
            $table->bigIncrements('feature_id');
            $table->string('feature_title',200)->nullable();
            $table->text('feature_details')->nullable();
            $table->string('feature_icon',80)->nullable();
            $table->string('feature_slug',60)->nullable();
            $table->integer('feature_creator')->nullable();
            $table->integer('feature_editor')->nullable();
            $table->integer('feature_status')->default(1);
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
        Schema::dropIfExists('features');
    }
};
