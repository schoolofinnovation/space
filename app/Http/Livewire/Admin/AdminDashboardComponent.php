<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function addProduct() 
    {
       $product = new Product();
        $product->name = $this->name;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->discount = $this->discount;
        $product->salePrice = $this->salePrice;
        //$product->image = $this->image;
        $product->save();
    }

    public function multiImage()
    {
        $multiimage = $this->brand_logo;

        foreach($multiimage as $key => $imageso)
        {
            $brand = new Product();
            
            $newimage = Carbon::now()->timestamp. $key. '.'. $multiimage[$key]->extension();
            $multiimage[$key]->storeAs('exhibition', $newimage);
            $brand->image = $newimage;

            //$brand->status = '1';
           
            $brand->save();
        }
        //dd($multiimage, $brand);

    }

    public function render()
    {
        return view('livewire.admin.admin-dashboard-component')->layout('layouts.knotse');;
    }
}
