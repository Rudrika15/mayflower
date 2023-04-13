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
        Schema::create('userdoctorhistories', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('title');
            $table->date('uploadDate');
            $table->longText('suggestion');
            $table->integer('doctorId');
            $table->enum('status',['Y','N','D']);
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
        Schema::dropIfExists('userdoctorhistories');
    }
};
