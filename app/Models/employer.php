<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    use HasFactory;

    public function joblists()
    {
       return $this->hasMany(joblist::class);
    }
    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
