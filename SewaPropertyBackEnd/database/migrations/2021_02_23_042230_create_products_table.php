<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('id_type_of_rent');
            $table->string('kota');
            $table->string('kecamatan');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('spacious_room');
            $table->string('name');
            $table->integer('price');
            $table->string('address');
            $table->string('description');
            $table->integer('id_amenities');
            $table->string('image');
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
        Schema::dropIfExists('products');
    }
}
