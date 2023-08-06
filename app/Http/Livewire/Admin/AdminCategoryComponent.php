<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminCategoryComponent extends Component
{

    public $category;
    public $admstatus;
    public $status;
    public $slug;

    public function createCategory()
    {
        $category = new Category();
        $category->category = trim($this->category);
        $category->slug = Str::slug($this->category,'-');
        $category->status = '1';
        $category->admstatus = '1';
        $category->save();
    }




    public function render()
    {
        return view('livewire.admin.admin-category-component')->layout('layouts.knotse');
    }
}
