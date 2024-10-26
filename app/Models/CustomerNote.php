<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerNote extends Model
{
    use HasFactory;
    protected $fillable=['customerId', 'employeeId', 'note', 'firstMeet', 'nextMeet', 'attachment', 'meetLocation'];
}