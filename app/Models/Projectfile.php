<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectfile extends Model
{
    use HasFactory;
    protected $fillable=['projectName',' projectType',' doHoPr',' frontLiAndFrame',' backLib',' frontEndLan',' backLang','database',' name',' phone','email',' companyName',' description',' estimatedBudget',' reciveDate',' eDuration',' eEndDate','projectLeader'];
}
