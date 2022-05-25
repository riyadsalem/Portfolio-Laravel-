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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('services_image')->nullable();
            $table->string('services_icon')->nullable();
            $table->string('services_title')->nullable();
            $table->text('service_description')->nullable();
            $table->text('service_long_description')->nullable();

            $table->string('service_code');
            $table->string('service_qty');
            $table->string('selling_price');
            $table->string('discount_price')->nullable();

            $table->string('services__list_desc_1')->nullable();
            $table->string('services__list_desc_2')->nullable();
            $table->string('services__list_desc_3')->nullable();
            $table->string('services__list_desc_4')->nullable();
            $table->string('services__list_desc_5')->nullable();
            $table->string('services__list_desc_6')->nullable();
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
        Schema::dropIfExists('services');
    }
};
