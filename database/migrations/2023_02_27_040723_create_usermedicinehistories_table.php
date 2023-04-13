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
        Schema::create('usermedicinehistories', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->integer('doctorId');
            $table->string('medicine');
            $table->string('medicineDetails');
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
        Schema::dropIfExists('usermedicinehistories');
    }
};
