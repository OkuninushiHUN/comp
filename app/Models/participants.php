<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\competitions;

class participants extends Model
{
    use HasFactory;
    public function competitions()
    {
        return $this->belongsto(competitions::class);
    }
    public function User(){
        return $this->hasMany(User::class);
    }
}
