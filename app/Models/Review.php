<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=['projectName','massage','rating'];
     // relateion
     public function projectfiles(){
        return $this->belongsTo(Projectfile::class,'projectName');
    }
}
