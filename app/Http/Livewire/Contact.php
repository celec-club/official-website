<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Contact extends Component {

	public $name;
	public $email;
	public $message;
	public $ip;

	public function rules() {
		return [
			"name" => "required",
			"email" => "required|email:rfc",
			"message" => "required|max:5000",
		];
	}

	public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function mount($ip) {
    	$this->ip = $ip;
    }

    public function render() {
        return view('livewire.contact');
    }

    public function submit() {
    	$this->validate();
    	Message::create([
    		"name" 		=> 	$this->name,
    		"email" 	=> 	$this->email,
    		"message" 	=> 	$this->message,
    		"ip" 		=> 	$this->ip,
    	]);
    	$this->dispatchBrowserEvent(["message-sended"]);
    }
}
