<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{   
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'birth',
        'lang',
        'citizenship',
        'namechange',
        'passportnumber',
        'dob',
        'gender',
        'marital',
        'skype',
        'address',
        'city',
        'country',
        'state',
        'post',
        'mobile',
        'email',
        'englishlevel',
        'score',
        'written',
        'reading',
        'spoken',
        'listen',
        'heightleveledu',
        'gradingscheme',
        'gradeoutof',
        'edulevel',
        'sscinst',
        'sscyear',
        'sscgroup',
        'sscresult',
        'hscinst',
        'hscyear',
        'hscgroup',
        'hscresult',
        'countryins',
        'institute',
        'primarylanguage',
        'attendedfrom',
        'attendedto',
        'degreeaward',
        'instituteaddress',
        'inscountry',
        'instzip',
        'insttown',
        'refused',
        'passport',
        'cv',
        'ref1',
        'ref2',
        'ssccer',
        'ssctrans',
        'hsccer',
        'hsctrns',
        'sop',
        'sign',
        'otherstrns',
        'otherscer',
        'photos',
        'status',
        'user'
    ];
}
