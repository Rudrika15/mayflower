<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testhistory extends Model
{
    use HasFactory;
    protected $fillable = ['fname','lname','contact','email','height','age','weight','bmi','detail','status'];

    public function setCategoryAttribute($value)
    {
        $this->attributes['bmi'] = json_encode($value);
    }
    public function getCategoryAttribute($value)
    {
        return $this->attributes['bmi'] = json_decode($value);
    }
}
