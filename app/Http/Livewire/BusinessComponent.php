<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BusinessComponent extends Component
{
    public function render()
    {
        return view('livewire.business-component')->layout('layouts.base');
    }
}
