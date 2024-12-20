<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerNote extends Model
{
    use HasFactory;
    protected $fillable=['customerName', 'employeeName', 'note', 'firstMeet', 'nextMeet', 'attachment', 'meetLocation'];
//rel
    public function customer(){
        return $this->belongsTo(Customer::class,'customerName'); // customer note e data astese customer theke
    }
    public function employee(){
        return $this->belongsTo(User::class,'employeeName');
    }
    //r
}
