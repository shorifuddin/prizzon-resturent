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
        Schema::create('basicinfos', function (Blueprint $table) {
            $table->bigIncrements('basic_id');
            $table->string('company_name')->nullable();
            $table->string('company_title')->nullable();
            $table->string('company_favicon')->nullable();
            $table->string('company_header_logo')->nullable();
            $table->string('company_footer_logo')->nullable();
            $table->integer('basic_status')->default(1);
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
        Schema::dropIfExists('basicinfos');
    }
};
