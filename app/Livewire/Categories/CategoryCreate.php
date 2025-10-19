<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryCreate extends Component
{
    public $category_name;
    public function render()
    {
        return view('livewire.categories.category-create');
    }

    public function submit()
    {
        $this->validate([
            "category_name" => "required",
        ]);

        Category::create([
            "category_name" => $this->category_name,
        ]);

        return to_route('categories.index')->with("success", "Category Created.");
    }
}
