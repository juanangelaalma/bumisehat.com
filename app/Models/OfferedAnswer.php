<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferedAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'answer'];

    public function question() {
        return $this->belongsTo(Question::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }
}
