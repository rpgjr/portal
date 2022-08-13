<?php

namespace App\Imports;

use App\Models\AlumniList;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AlumniList([
            'lastname'      => $row['lastname'],
            'firstname'     => $row['firstname'],
            'middlename'    => $row['middlename'],
            'studNumber'    => $row['studnumber'],
            'course'        => $row['course'],
            'batch'         => $row['batch'],
            'byear'         => $row['birthyear'],
            'bmonth'        => $row['birthmonth'],
            'bday'          => $row['birthday'],
        ]);
    }
}
