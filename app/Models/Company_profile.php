<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_profile extends Model
{
    use HasFactory;


    protected $table = 'company_profiles';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'address',
    ];
}
