<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=['first_name','last_name','phone_number','age','marital_status','gender'];

    public function opreation()
    {
        return $this->hasMany(Operation::class);
    }
    public function doctor()
    {
        return $this->belongsToMany(Doctor::class,'appointments','patient_id','doctor_id');
    }
    public function payment(){

        return $this->hasMany(Payment::class);
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
