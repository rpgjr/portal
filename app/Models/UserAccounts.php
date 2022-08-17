<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastName',
        'firstName',
        'middleName',
        'courseID',
        'batch',
        'gender',
        'bday',
        'studNumber',
        'email',
        'number',
        'address',
        'username',
        'password',
        'accessType',
    ];
}
