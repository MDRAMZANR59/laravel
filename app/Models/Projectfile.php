<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectfile extends Model
{
    use HasFactory;
    protected $fillable=['projectName','projectType','doHoPr','frontLiAndFrame','backLib','frontEndLan','backLang','database','customerNameP','phone','email','description','estimatedBudget','reciveDate','eDuration','eEndDate','projectLeader'];

    public function task(){
        return $this->hasMany(Task::class,'projectId');
    }
    public function comtask(){
        return $this->hasMany(Task::class,'projectId')->whereNotNull('actualDate');
    }
    public function prolider(){
        return $this->belongsTo(User::class,'projectLeader');
    }
    public function customer(){
        return $this->belongsTo(Customer::class,'customerNameP');
    }
}
