<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PricingComponent extends Component
{
    public function render()
    {
        return view('livewire.pricing-component')->layout('layouts.base');
    }
}
