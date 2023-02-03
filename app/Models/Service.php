<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable=['name_service','department_id','chief_id'];


    public function myDepartment(){

        return $this->hasOne('App\Models\Department','id','department_id');
    }

    public function myUser(){

        return $this->hasOne('App\Models\User','id','chief_id');
    }
}
