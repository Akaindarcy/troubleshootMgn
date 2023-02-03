<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable=['name_department','chief_id'];

    public function myUser(){

       return $this->hasOne('App\Models\User','id','chief_id');
    }
}
