<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->text('description');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('zip');
            $table->string('feature');
            $table->string('maps')->nullable();
            $table->string('bedrooms');
            $table->string('area');
            $table->string('bathrooms');
            $table->string('garages');
            $table->string('image');
            $table->integer('price');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
