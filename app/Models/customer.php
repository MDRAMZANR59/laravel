<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // protected $fillable=['name','nid',' email',' phone',' password',' photo',' companyName',' country',' districts',' upozila',' post',' zipCode',' state'];
    protected $fillable=['name','noteId','user_id','nid','email','phone','password','photo','companyName','country','districts','upozila','post','zipCode','state'];
}
