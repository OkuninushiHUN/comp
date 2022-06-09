<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\competitions;

class games extends Model
{
    use HasFactory;
    public function Competitions(){
        return $this->belongsTo(Competitions::class);
    }
    public function User(){
        return $this->hasMany(User::class);
    }
}
