<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    protected $table = 'careers';

    protected $fillable = [
        'job_name',
        'company',
        'salary',
        'description',
        'category',
        'email',
        'number',
        'username',
        'carRequest',
    ];
}
