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
        Schema::create('testsuggetions', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->integer('masterId');
            $table->string('parameter');
            $table->string('value');
            $table->string('opration');
            $table->string('isDeleted');
            $table->string('deleteBy');
            $table->enum('status', ['Y', 'N', 'D']);
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
        Schema::dropIfExists('testsuggetions');
    }
};
