<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable=['name','address'];
    public function workday(){

        return $this->hasMany(Workday::class);
    }
    public function doctor(){

        return $this->hasMany(Doctor::class);
    }
    public function patient(){

        return $this->hasMany(Patient::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
