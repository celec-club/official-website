<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UsersAccept extends Component
{
    public function render()
    {
        return view('livewire.users-accept');
    }

    public function accept($id) {
    	dd($id);
    }
}
