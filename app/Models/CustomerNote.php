<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerNote extends Model
{
    use HasFactory;
    protected $fillable=['customerId', 'employeeId', 'note', 'firstMeet', 'nextMeet', 'attachment', 'meetLocation'];

    public function customer(){
        return $this->belongsTo(Customer::class,'customerId');
    }
    public function employee(){
        return $this->belongsTo(User::class,'employeeId');
    }
}
