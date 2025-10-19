<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryIndex extends Component
{
    public function render()
    {
        $categories=Category::get();
        return view('livewire.categories.category-index',compact("categories"));
    }
        public function delete($id)
    {
        $categories= Category::findOrFail($id);
        $categories->delete();

        session()->flash("success","Product Deleted");
    }
}
