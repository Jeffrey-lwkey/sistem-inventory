<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryEdit extends Component
{
    public $category_name;
    public Category $categories;


    public function render()
    {
        
        return view('livewire.categories.category-edit');
    }
    public function mount($id)
    {
        $this->categories=Category::findOrFail($id);
        $this->category_name= $this->categories->category_name;
    }

    public function submit()
    {
        $this->validate([
            "category_name" => "required",
        ]);

        $this->categories->category_name = $this->category_name;
        $this->categories->save();

        return to_route('categories.index')->with("success", "Category Updated.");
    }
}
