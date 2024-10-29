<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name','nid','dob','email','phone','password','joiningDate','designation','expart','department','signature','photo','country','districts','upozila','post','zipCode','state'];
    // protected $fillable = ['role_id','name','nid','dob','email','phone','password','joiningDate','designation','expart','department','signature','photo','country','districts','upozila','post','zipCode','state','email_verified_at','remember_token'];
}
