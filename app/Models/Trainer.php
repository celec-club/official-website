<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable = [
			"fullname",
			"email",
			"birthday",
			"university" ,
			"study_level",
			"study_field",
			"motivation",
			"comptence",
			"type",
			"duration",
			"date",
			"cv" ,
			"activated"
    	];

   	protected $casts = ['birthday' => "datetime", "comptence" => "collection"];

    public function setComptenceAttribute($value) {
        return $this->attributes["comptence"] = json_encode($value);
    }

    public function cv() {
        return $this->morphOne(Cv::class, "cvable");
    }
}
