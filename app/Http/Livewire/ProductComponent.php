<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductComponent extends Component
{
    public $name;
    public $description;
    public $price;
    public $discount;
    public $salePrice;
    public $image;
    public $brand_logo;
    public $status;

    use WithFileUploads;

   
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


    public function AddtoWishlist()
    {
       
    }

    //$bran = Event::find($this ->event_id);
            //$brand->event_id = $bran->id;
   //$brand->user_id = Auth::user()->id;
    public function render()
    {
        $datoJollyKnots = Product::orderBy('updated_at','desc')->get();
        return view('livewire.product-component',['datoJollyKnots' => $datoJollyKnots])->layout('layouts.knotse');
    }
}