<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CorporateComponent extends Component
{
    public function render()
    {
        return view('livewire.corporate-component')->layout('layouts.base');
    }
}
