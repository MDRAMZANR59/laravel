<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=['projectId','massage','rating'];
    //rel
    public function projectfiles(){
        return $this->belongsTo(Projectfile::class,'projectId'); // customer note e data astese customer theke
    }
}
