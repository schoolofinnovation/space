<?php

namespace App\Http\Livewire\Career;

use Livewire\Component;

class DetailComponent extends Component
{
    public function render()
    {
        return view('livewire.career.detail-component')->layout('layouts.base');
    }
}
