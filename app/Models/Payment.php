<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=['method','amount','date_payment','patient_name'];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }
}
