<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoForm extends Component

{

    
    public $name = '';
    public $is_done = '';

    #create todo

    public function createTodo()
    {

        sleep(2);
        
        #validate data
        $this->validate([
            'name'=>'required|string|max:100',
            'is_done'=>'nullable'
        ]);

        #create todo
        Todo::create([
            'name'=>$name,
             'is_done'=>$is_done
        ]);

        #reset form
        $this->reset(['name','is_done']);

        #flash message
        request()->session()->flash('success','Todo ' . $this->name. 'has been created successfully' );

           



        
    }

    public function render()
    {
        return view('livewire.todo-form');
    }
}
