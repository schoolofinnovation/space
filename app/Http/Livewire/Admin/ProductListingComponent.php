<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductListingComponent extends Component
{
    public $name;
    public $description;
    public $price;
    public $discount;
    public $salePrice;
    public $image;

    use WithFileUploads;

    public function addProduct() 
    {
       $product = new Product();
        $product->name = $this->name;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->discount = $this->discount;
        $product->salePrice = $this->salePrice;
        $product->image = $this->image;
        $product->save();
    }

    public function image()
    {
        $product = new Product();
        $product->image = $this->image;
        $product->save();
    }


    public function render()
    {
        return view('livewire.admin.product-listing-component');
    }
}
