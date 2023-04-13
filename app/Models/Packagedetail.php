<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packagedetail extends Model
{
    use HasFactory;
    protected $fillable = ['packageId','packageRate','emotionToConvey','forPackageNames','nameOptions','highlighted','suggesion','description','location','sampleType','testType','instructionS','consultation','awareness','medicalHistory','totalNoTest','tests','prelimenaryTest','bmi','radiologyImaging','mri','mammography','cancerDetection','diabetesScreening','thyroidProfile','sexualFertilityHormones','kidney','ecg','lipidProfile','liverFunction','pregnancyTest','infectionRecording','electrolytes','status'];

    public function setCatAttribute($value)
    {
        $this->attributes['sampletype'] = json_encode($value);
    }
    public function getCatAttribute($value)
    {
        return $this->attributes['sampletype'] = json_decode($value);
    }
}
