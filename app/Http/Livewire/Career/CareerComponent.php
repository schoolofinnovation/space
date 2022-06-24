<?php

namespace App\Http\Livewire\Career;

use Livewire\Component;

class CareerComponent extends Component
{
    public function render()
    {
        return view('livewire.career.career-component')->layout('layouts.base');
    }
}
