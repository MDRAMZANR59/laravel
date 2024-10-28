<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerNote extends Model
{
    use HasFactory;
    protected $fillable=['customerName','customerId', 'employeeId','phone', 'note', 'firstMeet', 'nextMeet', 'attachment', 'meetLocation'];
}
