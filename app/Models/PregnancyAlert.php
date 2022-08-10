<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PregnancyAlert extends Model
{
    use HasFactory;

    protected $fillable = ["title", "content", "weeks", "image"];

    public function pregnancy_statuses() {
        return $this->hasMany(PregnancyStatus::class);
    }
}
