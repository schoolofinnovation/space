<?php

namespace App\Http\Livewire;

<<<<<<< HEAD
use App\Models\Birthday;
=======
>>>>>>> b389ea91d7a0cf2f883e09c20964f327a7c883a0
use Livewire\Component;

class GiftDateComponent extends Component
{
<<<<<<< HEAD
    public $Bdate;
    public $Adate;

    public $ido;
    public $board;

    public function mount ($ido)
    {
       $this->ido = $ido;
    }

   

    public function birthdadd()
    {
        $openknots = Birthday::find($this->ido);
        $openknots->Bdate = $this->Bdate;
        $openknots->save();
        return redirect()->route ('date.business', ['ido' => $openknots->id, 'board' => 'aniversary']);
    }

    public function anydadd()
    {
        $openknots = Birthday::find($this->ido);
        $openknots->Adate = $this->Adate;
        $openknots->save();
        return redirect()->route ('date.business', ['ido' => $openknots->id, 'board' => 'thank-you']);
    }

    public function render()
    {
        return view('livewire.gift-date-component')->layout('layouts.base');
=======
    public function render()
    {
        return view('livewire.gift-date-component');
>>>>>>> b389ea91d7a0cf2f883e09c20964f327a7c883a0
    }
}
