<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'address',
        'puskesmas'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pregnancy_statuses () {
        return $this->hasMany(PregnancyStatus::class);
    } 

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function age_pregnancy() {
        return $this->hasOne(AgePregnancy::class);
    }

    public function pregnancy_alerts() {
        return $this->belongsToManyThrough(PregnancyAlert::class, PregnancyStatus::class);
    }

    public function isAlreadyFilledOutQuiz() {
        return $this->answers()->where('type', 'quiz')->count() ? true : false;
    }

    public function isAlreadyFilledOutEvaluation() {
        return $this->answers()->where('type', 'evaluation')->count() ? true : false;
    }

    public function isAdmin() {
        return $this->role == 'admin';
    }

    public function getAgePregnancy() {
        return get_age_of_pregnancy($this->age_pregnancy->pregnancy_start);
    }
}
