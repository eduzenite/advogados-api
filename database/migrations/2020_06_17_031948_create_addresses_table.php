<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('lawyer_id');
            $table->foreign('lawyer_id')
                ->references('id')->on('lawyers')
                ->onDelete('cascade');

            $table->string('address1');
            $table->string('number', 100);
            $table->string('address2');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                ->references('id')->on('cities')
                ->onDelete('cascade');

            $table->string('zip_code', 100);

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
        Schema::dropIfExists('addresses');
    }
}
