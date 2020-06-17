<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_cities', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('lawyer_id');
            $table->foreign('lawyer_id')
                ->references('id')->on('lawyers')
                ->onDelete('cascade');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('cascade');

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
        Schema::dropIfExists('operation_cities');
    }
}
