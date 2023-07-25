<?php

namespace App\Http\Livewire;

use App\Models\Birthday;
use Livewire\Component;

class GiftDateComponent extends Component
{
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
        return view('livewire.gift-date-component')->layout('layouts.knotse');
    }
}
