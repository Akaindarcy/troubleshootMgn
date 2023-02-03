<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Troubleshoot extends Model
{
    use HasFactory;
    protected $fillable=['category_id','description','level','step','device_id'];

    public function myCategory(){

        return $this->hasOne('App\Models\Category', 'id','category_id');
    }
    public function myDevice(){

        return $this->hasOne('App\Models\Device', 'id','device_id');
    }
}
