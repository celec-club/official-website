<?php

namespace App\Models;

use App\Models\Cv;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        "birthday",
        "phone",
        "university",
        "study_year",
        "study_field",
        "motivation",
        "comptence",
        "knowing_the_club",
        'linked_in',
        'activated',
        "have_card"
    ];

    protected $casts = ['birthday' => "datetime", "comptence" => "collection"];

    protected $hidden = [
        'remember_token',
    ];

    public function setComptenceAttribute($value) {
        return $this->attributes["comptence"] = json_encode($value);
    }

    public function cv() {
        return $this->morphOne(Cv::class, "cvable");
    }

}
