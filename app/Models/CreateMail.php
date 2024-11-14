<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateMail extends Model
{
    use HasFactory;
    protected $fillable=['mailType', 'reciver', 'subject', 'bodyMassage', 'attachment'];
   //relation
    public function reciver(){
        return $this->belongsTo(User::class,'reciver');
    }
    //relation
}
