<?php

namespace App\Livewire;
use App\Models\User;

use Livewire\Component;

class Button extends Component

{  
    public $username = 'golden';
    
    public function createNewUser(){
        User::create([
            'name'=>'Gorret',
            'email'=>'gorret3@gmail.com',
            'password'=>'#golden'
        ]);
        
    }
    public function render()

    {
        $title = 'Livewire';
        $total = User::all();
        return view('livewire.button',
        [
            'title'=>$title,
            'total'=>$total
        ]
    );
    }
}
