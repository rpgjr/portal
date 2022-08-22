<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDS extends Model
{
    use HasFactory;

    protected $table = 'pds';

    protected $fillable = [
        'pdsID',
        'userID',
        'lastName',
        'firstName',
        'middleName',
        'gender',
        'age',
        'bday',
        'number',
        'email',
        'religion',
        'courseID',
        'batch',
        'cityAddress',
        'provincialAddress',
        'fathersName',
        'fathersNumber',
        'mothersName',
        'mothersNumber',
        'office',
        'position',
        'officeDates',
        'seminar1',
        'seminar1Date',
        'seminar2',
        'seminar2Date',
        'seminar3',
        'seminar3Date',
        'submissionDate',
    ];
}
