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
        Schema::create('packagedetails', function (Blueprint $table) {
            $table->id();
            $table->integer('packageId');
            $table->string('emotionToConvey');
            $table->string('forPackageNames')->nullable();
            $table->string('description');
            $table->string('location');
            $table->string('sampleType');
            $table->string('testType')->nullable();
            $table->string('instructionS');
            $table->string('consultation');
            $table->string('awareness');
            $table->string('medicalHistory');
            $table->string('tests');
            $table->string('prelimenaryTest');
            $table->string('bmi');
            $table->string('radiologyImaging');
            $table->string('mri');
            $table->string('mammography');
            $table->string('cancerDetection');
            $table->string('diabetesScreening');
            $table->string('thyroidProfile');
            $table->string('sexualFertilityHormones');
            $table->string('kidney');
            $table->string('ecg');
            $table->string('lipidProfile');
            $table->string('liverFunction');
            $table->string('pregnancyTest');
            $table->string('infectionRecording');
            $table->string('electrolytes');
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
        Schema::dropIfExists('packagedetails');
    }
};
