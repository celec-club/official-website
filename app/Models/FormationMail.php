<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationMail extends Model {
    use HasFactory;
    protected $table = "formation_mails";
    protected $fillable = ["email"];
}
