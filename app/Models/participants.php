<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\competitions;

class participants extends Model
{
    use HasFactory;
    public function Competitions()
    {
        return $this->belongsTo(Competitions::class);
    }
}
