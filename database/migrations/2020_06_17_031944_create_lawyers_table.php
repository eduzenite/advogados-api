<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email')->unique();
            $table->string('company')->nullable();;
            $table->string('phone', 100)->nullable();;
            $table->string('document', 100);
            $table->string('oab', 100);
            $table->string('photo');
            $table->string('password');
            $table->dateTime('date_of_birth');
            $table->timestamp('email_verified_at')->nullable();

            $table->index(['name', 'company', 'oab']);

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
        Schema::dropIfExists('lawyers');
    }
}
