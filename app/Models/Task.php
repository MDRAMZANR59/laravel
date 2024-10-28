<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=['projectId', 'employeeId', 'note', 'task', 'assignDate', 'finishDate', 'actualDate'];

    // relateion 
    public function projectfiles(){
        return $this->belongsTo(Projectfiles::class);
    }
   //
}
