<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;

    protected $table = 'academic';

    protected $fillable = [
        
        'EmployeeID',
        'Photo',
        'Title',
        'FirstName',
        'LastName',
        'Gender',
        'DateOfBirth',
        'Designation',
        'AdminRole',
        'EmailID',
        'LinkedIn',
        'ContactNumber',
        'Faculty',
        'Department',
        'OfficialWebsite',
        'ResearchInterest',
        'FieldOfSpecialization',
        'ResearchID',
        'password',






    ];

    protected $hidden = [
        'password'
        
    ];

}
