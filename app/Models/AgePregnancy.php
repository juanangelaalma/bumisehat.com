<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgePregnancy extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'pregnancy_start', 'age_when_join'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
