<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ProductListingComponent extends Component
{
    public $name;
    public $description;
    public $price;
    public $discount;
    public $salePrice;
    public $image;
    public $category;

    use WithFileUploads;

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
        $catego = Category::where('status', '1')->where('admstatus','1')->get();
        return view('livewire.admin.product-listing-component',[ 'catego' => $catego])->layout('layouts.knotse');
    }
}
