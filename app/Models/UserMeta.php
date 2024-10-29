<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    use HasFactory;
    protected $fillable=[ 'user_id', 'nid', 'dob', 'email', 'phone', 'employeId', 'designation', 'signature', 'photo', 'country', 'districts', 'upozila', 'post', 'zipCode', 'state'];
}
