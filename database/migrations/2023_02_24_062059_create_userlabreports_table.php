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
        Schema::create('userlabreports', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->integer('testCenterId');
            $table->string('document');
            $table->longText('note');
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
        Schema::dropIfExists('userlabreports');
    }
};
