<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table ='clients';

    protected $fillable =[

        'first_name',
        'last_name',
        'contact',
        'email',
        'gender',
        'dob_year',
        'dob_month',
        'dob_date',
        'str_no',
        'str_add',
        'city',
        'status'

    ];
}
