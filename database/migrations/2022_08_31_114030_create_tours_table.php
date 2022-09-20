<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->integer('tour_type_id');
            $table->integer('room_type_id');
            $table->integer('pax_id');
            $table->text('name');
            $table->text('options');
            $table->text('inclusions')->nullable();
            $table->text('exclusions')->nullable();
            $table->text('days');
            $table->text('conditions');
            $table->float('price',6, 2);
            $table->date('date');
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
        Schema::dropIfExists('tours');
    }
}
