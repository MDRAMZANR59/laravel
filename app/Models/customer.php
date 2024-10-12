<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=['name', 'nid', 'dob','email','phone', 'joiningDate', 'employeId', 'designation', 'language', 'department', 'signature', 'password', 'photo', 'post', 'country', 'districts', 'upozila','post','zipCode','zipCode'];
}
