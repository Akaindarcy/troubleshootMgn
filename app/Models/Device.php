<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable=['name_device','model','system','type','ipAddress','property','service_id '];

    public function myService(){

        return $this->hasOne('App\Models\Service','id','service_id');
    }
}
