<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SASForm extends Model
{
    use HasFactory;

    protected $table = 'sas_form';

    protected $fillable = [
        'userID',
        'lastName',
        'firstName',
        'middleName',
        'gender',
        'age',
        'email',
        'stakeholder',
        'semesters',

        'sas_q1',
        'sas_q2',
        'sas_q3',
        'sas_q4',
        'sas_q5',
        'sas_q6',
        'sas_q7',
        'sas_q8',
        'sas_q9',
        'sas_q10',

        'sas_q11',
        'sas_q12',
        'sas_q13',
        'sas_q14',
        'sas_q15',
        'sas_q16',
        'sas_q17',
        'sas_q18',
        'sas_q19',
        'sas_q20',

        'sas_q21',
        'sas_q22',
        'sas_q23',
        'sas_q24',
        'sas_q25',
        'sas_q26',
        'sas_q27',
        'sas_q28',
        'sas_q29',
        'sas_q30',

        'sas_q31',
        'sas_q32',
        'sas_q33',
        'sas_q34',
        'sas_q35',
        'sas_q36',
        'sas_q37',
        'sas_q38',
        'sas_q39',
        'sas_q40',

        'sas_q41',
        'sas_q42',
        'sas_q43',
        'sas_q44',
        'sas_q45',
        'sas_q46',
        'sas_q47',
        'sas_q48',
        'sas_q49',
        'sas_q50',

        'sas_q51',
        'sas_q52',
        'sas_q53',
        'sas_q54',
        'sas_q55',
        'sas_q56',
        'sas_q57',
        'sas_q58',
        'sas_q59',
        'sas_q60',

        'sas_q61',
        'sas_q62',
        'sas_q63',
        'sas_q64',
        'sas_q65',
        'sas_q66',
        'sas_q67',
        'sas_q68',
        'sas_q69',
        'sas_q70',

        'sas_q71',
        'sas_q72',
        'sas_q73',
        'sas_q74',
    ];
}
