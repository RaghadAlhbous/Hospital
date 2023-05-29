<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $fillable=['patient_name','number','status_patients'];
    public function payment(){

        return $this->hasMany(Payment::class);
    }
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function operation()
    {
        return $this->belongsTo(Operation::class);
    }
}
