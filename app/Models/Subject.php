<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    
    protected $fillable = ['code', 'name', 'creditHours'];

    public function lecturer(){
        return $this->belongsTo(Lecturer::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
