<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable=['name','phone_number','specialization','gender','address'];
    public function patient()
    {
        return $this->belongsToMany(Patient::class,'appointments','doctor_id','patient_id');
    }
    public function operation(){

        return $this->hasMany(Operation::class);
    }
    public function workday(){

        return $this->hasMany(Workday::class);
    }
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

}
