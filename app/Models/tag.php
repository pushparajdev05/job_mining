<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;

    public function joblists()
    {
       return $this->belongsToMany(joblist::class,"tag_joblist");
    }

}
