<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectfile extends Model
{
    use HasFactory;
    protected $fillable=['projectName', 'projectType', 'doHoPr', 'frontLiAndFrame', 'backLib', 'frontEndLan', 'backLang','database', 'firstName', 'lastName', 'phone', 'companyName', 'projectDes', 'badget', 'advance', 'duration', 'endDate'];
}
