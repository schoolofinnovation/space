<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminProductDetailsComponent extends Component
{
    public $name;
    public $description;
    public $itemid;
    public $category;
    public $price;
    public $discount;
    public $salePrice;
    public $slug;
    public $image;

    public function mount($itemid)
    {
       $product = Product::find($itemid)->first();
       $this->itemid = $product->id;
       $this->name = $product->name;
       $this->slug = $product->slug;
       $this->description = $product->description;
       $this->price = $product->price;
       $this->discount = $product->discount;
       $this->salePrice = $product->salePrice;  
       $this->category = $product->category;
    }


    public function addProduct($itemid) 
    {
       $product = Product::find($itemid)->first();
        $product->name = $this->name;
        $product->description = $this->description;
        $product->slug = Str::slug($this->name,'-');
        $product->category = $this->category;
        $product->price = $this->price;
        $product->discount = $this->discount;
        $product->salePrice = $this->salePrice;
        $product->save();
        $this->reset();
    }

    public function image($itemid)
    {
        $product = Product::find($itemid)->first();
        $product->image = $this->image;
        $product->save();
        $this->reset();
    }

    public function render()
    {
        $catego = Category::where('status', '1' )->where('admstatus', '1' )->get();
        return view('livewire.admin.admin-product-details-component',['catego'=> $catego])->layout('layouts.knotse');
    }
}
