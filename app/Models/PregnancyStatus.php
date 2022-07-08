<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PregnancyStatus extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'pregnancy_alert_id', 'done'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function pregnancy_alerts() {
        return $this->belongsTo(PregnancyAlert::class);
    }
}
