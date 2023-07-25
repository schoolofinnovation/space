<?php

namespace App\Http\Livewire;

<<<<<<< HEAD
use App\Models\Birthday;
=======
>>>>>>> b389ea91d7a0cf2f883e09c20964f327a7c883a0
use Livewire\Component;

class GiftBirthdayComponent extends Component
{
<<<<<<< HEAD
    public $name;
    public $phone;
    public $status;
    public $Atype;
    public $Adate;
    public $Btype;
    public $Bdate;
    public $board;


    public function jollyknotes()
    {
        $jollyknot = new Birthday();
        $jollyknot->name = $this->name;
        $jollyknot->phone = $this->phone;
        $jollyknot->save();

        //dd($jollyknot, $jollyknot->id );
        return redirect()->route('date.business', ['ido' => $jollyknot->id,'board' => 'birthday']);

    }


    public function render()
    {
        return view('livewire.gift-birthday-component')->layout('layouts.base');
=======
    public function render()
    {
        return view('livewire.gift-birthday-component');
>>>>>>> b389ea91d7a0cf2f883e09c20964f327a7c883a0
    }
}
