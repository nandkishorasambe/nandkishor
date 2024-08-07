<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Student as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'father_name',
        'mother_name',
        'phone',
        'dob',
        'gender',
        'blood_group',
         'marital_status',
         'cast',
       'aadhar_number',
        'family_income',
       'abc_identity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

  
}
