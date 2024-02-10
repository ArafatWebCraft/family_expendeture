<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'degree_name',
        'institute',
        'passing_year',
        'cgpa',
        'created_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
