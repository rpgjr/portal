<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniList extends Model
{

    protected $fillable = [
        'lastName',
        'firstName',
        'middleName',
        'studNumber',
        'courseID',
        'batch',
        'gender',
        'byear',
        'bmonth',
        'bday',
        'email',
        'number',
        'address',
    ];

    use HasFactory;
}
