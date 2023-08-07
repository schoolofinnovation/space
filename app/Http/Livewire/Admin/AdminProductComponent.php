<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class AdminProductComponent extends Component
{

    public function Delete($id)
    {
      $product = Product::find($id);
      $product->delete();
    }

    public function render()
    {
        $monthwise = Product::orderBy('created_at','ASC')->get();

        return view ('livewire.admin.admin-product-component',['monthwise' => $monthwise])->layout('layouts.knotse');
    }
}
