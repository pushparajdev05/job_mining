<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class joblist extends Model
{
    use HasFactory;

    public function employer()
    {
       return $this->belongsTo(employer::class);
    }

    public function tags()
    {
       return $this->belongsToMany(tag::class, "tag_joblist");
    }
}
