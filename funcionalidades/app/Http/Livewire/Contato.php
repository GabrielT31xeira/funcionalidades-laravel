<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Contato extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
    ];

    public function create()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone
        ]);

        $this->name = $this->email = $this->phone =null;

        session()->flash('message','Contato criado');
    }

    public function render()
    {
        return view('livewire.contato');
    }
}
