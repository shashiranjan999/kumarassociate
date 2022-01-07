<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectoffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectoffers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('property_name')->nullable();
            $table->text('category')->nullable();
            $table->text('shop_name')->nullable();
            $table->text('offer')->nullable();
            $table->string('shoplogo')->nullable();
            $table->text('address')->nullable();
            $table->text('validity')->nullable();           
            $table->text('map_link')->nullable();
            $table->text('contact')->nullable();
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
        Schema::dropIfExists('projectoffers');
    }
}
