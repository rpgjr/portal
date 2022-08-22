<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracer extends Model
{
    use HasFactory;
    protected $table = 'tracer_form';

    protected $fillable = [
        'lastName',
        'firstName',
        'middleName',
        'courseID',
        'number',
        'email',
        'ff_firstEmployment',
        'cc_currentEmployment',
        'cc_company',
        'cc_typeOfWork',
        'cc_position',
        'cc_status',
        'cc_income',
        'relatedToCourse',
        'cc_email',
        'cc_number',
        'ff_company',
        'ff_position',
        'ff_email',
        'ff_number',
    ];
}
