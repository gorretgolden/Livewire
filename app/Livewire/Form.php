<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Form extends Component
{
    public $name = 'name';
    public $email = 'email';
    public $password = 'password';

    public function createNewUser(){
        User::create([
            'name'=>$this->name,
            'email'=> $this->email,
            'password'=>$this->password
        ]);
        
    }

    public function render()
    {
        return view('livewire.form');
    }
}
