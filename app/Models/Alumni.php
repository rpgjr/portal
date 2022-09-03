<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $primaryKey = 'userID';

    protected $table = 'tbl_alumni';

    protected $fillable = [
        'studNumber',
        'lastName',
        'firstName',
        'middleName',
        'courseID',
        'batch',
        'gender',
        'bday',
        'age',
        'religion',
        'cityAddress',
        'provincialAddress',
        'email',
        'number',
        'username',
        'password',
        'accessType',
    ];
}
