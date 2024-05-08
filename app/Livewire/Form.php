<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Form extends Component
{
    
    public $name ;
    public $email ;
    public $password ;

    public function createNewUser(){

        $this->validate([
            'name'=>'required|string|min:5',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5,max:8'
        ]);
        User::create([
            'name'=>$this->name,
            'email'=> $this->email,
            'password'=>$this->password
        ]);

        #reset form
        $this->reset(['name','email','password']);

        #flash message
        request()->session()->flash('success','You registered successfully');

        
    }

    public function render()
    {
        return view('livewire.form');
    }
}
