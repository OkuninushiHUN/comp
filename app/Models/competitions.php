<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class competitions extends Model
{
    use HasFactory, SoftDeletes;
    public function matches(){
        return $this->hasMany(Games::class);
    }
}