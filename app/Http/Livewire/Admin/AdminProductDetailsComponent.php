<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminProductDetailsComponent extends Component
{
    public $name;
    public $description;
    public $slug;
    public $category;
    public $price;
    public $discount;
    public $salePrice;
    public $id;

    public function mount($slug)
    {
       $product = Product::find($slug)->first();

    }


    public function addProduct() 
    {
       $product = new Product();
        $product->name = $this->name;
        $product->description = $this->description;
        $product->slug = Str::slug($this->name,'-');
        $product->category = $this->category;
        $product->price = $this->price;
        $product->discount = $this->discount;
        $product->salePrice = $this->salePrice;
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
        return view('livewire.admin.admin-product-details-component');
    }
}
