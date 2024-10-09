<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondaryUser extends Model
{
    use HasFactory;
    protected $fillable=['name', 'nid', 'dob', 'email', 'phone', 'employeId', 'designation', 'signature', 'password', 'photo', 'country', 'districts', 'upozila', 'post', 'zipCode', 'state'];
}
