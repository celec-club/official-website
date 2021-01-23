<?php

namespace App\Http\Livewire;

use App\Models\Trainer;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormationInscription extends Component {
	use WithFileUploads;

	public $fullname;
	public $birthday;
	public $email;
	public $university;
	public $study_year;
	public $study_field;
	public $study_level;
	public $motivation;
	public $comptence;
	public $type;
	public $duration;
	public $date;
	public $cv;

	public function rules() {
    	return [
			"fullname" => "required|min:3|max:200",
			"email" => "required|email:rfc",
			"birthday" => "required|date",
			"university" => "required|max:100",
			"study_level" => "required",
			"study_field" => "required",
			"motivation" => "required",
			"comptence" => "required",
			"type" => ['required', Rule::in(["fin_d'études", 'pratique', 'expérience'])],
			"duration" => "required|numeric",
			"date" => "required|date",
			"cv" => "required|mimes:pdf,doc|max:500"
    	];
    }

    public function updated($propertyName) {

        $this->validateOnly($propertyName);
    }

    public function render() {
        return view('livewire.formation-inscription');
    }

    public function submit() {
    	$this->validate();
    	$birthday 	=	Carbon::parse($this->birthday);
    	$now 		= 	Carbon::now();
    	if($birthday->greaterThan($now)) {
    		return  $this->dispatchBrowserEvent('birthday-error', ['message' => "nous n'acceptons pas les dates de naissance dans le futur -_-"]);
    	}

    	$user = Trainer::create([
    		"fullname" 		=> 		$this->fullname,
	        'email' 			=> 		$this->email,
	        "birthday" 			=> 		$birthday->toDateTimeString(),
	        "university" 		=> 		$this->university,
	        "study_level" 		=> 		$this->study_level,
	        "study_field" 		=> 		$this->study_field,
	        "motivation" 		=> 		$this->motivation,
	        "comptence" 		=> 		$this->comptence,
	        "type" 				=> 		$this->type,
	        'duration' 			=> 		$this->duration,
	        'date'				=>	 	Carbon::parse($this->date),
	        "activated"			=>		false,
    	]);	
    	$cvPath = $this->cv->store("cvs");
    	$user->cv()->create(["path" => $cvPath]);
    	return  $this->dispatchBrowserEvent('user-created', ['message' => "vous êtes inscrit à la formation!"]);
    }
}
