<?php

namespace App\Http\Livewire;

use App\Models\FormationMail;
use Livewire\Component;

class FormationMailGetter extends Component {

	public $email;

	public function rules() {
		return [
			"email" => "required|email:rfc|unique:formation_mails"
		];
	}

	public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render() {
        return view('livewire.formation-mail-getter');
    }

    public function submit() {
    	// dd("hi");
    	$this->validate();
    	FormationMail::create(["email" => $this->email]);
    	return  $this->dispatchBrowserEvent('mail-created', ['message' => "Merci d'avoir enregistré votre e-mail, vous recevrez une notification lorsque nous avons commencé."]);
    }
}
