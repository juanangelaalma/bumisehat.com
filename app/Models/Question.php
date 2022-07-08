<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ["question", "true_answer", "point", "type"];

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function correct_answer() {
        return $this->belongsTo(OfferedAnswer::class, 'true_answer', 'id');
    }

    public function offered_answers() {
        return $this->hasMany(OfferedAnswer::class);
    }
}
