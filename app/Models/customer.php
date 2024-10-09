<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=['fristName', 'lastName', 'email', 'phone', 'projectName', 'projectType', 'companyName', 'customerId', 'photo', 'country', 'districts', 'upozila', 'post', 'zipCode', 'state', 'houseNumber'];
}
