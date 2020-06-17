<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyerAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_areas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('lawyer_id');
            $table->foreign('lawyer_id')
                ->references('id')->on('lawyers')
                ->onDelete('cascade');

            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')
                ->references('id')->on('areas')
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
        Schema::dropIfExists('lawyer_areas');
    }
}
