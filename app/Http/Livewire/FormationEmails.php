<?php

namespace App\Http\Livewire;

use App\Models\FormationMail;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class FormationEmails extends LivewireDatatable {
	public $model = FormationMail::class;
}
