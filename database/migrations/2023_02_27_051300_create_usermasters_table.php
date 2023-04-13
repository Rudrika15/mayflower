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
        Schema::create('usermasters', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->integer('age');
            $table->string('gender');
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
        Schema::dropIfExists('usermasters');
    }
};
