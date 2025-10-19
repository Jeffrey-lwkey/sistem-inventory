<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryShow extends Component
{
    public $categories;
    public function mount($id)
    {
        $this->categories= Category::find($id);
    }
    public function render()
    {
        return view('livewire.categories.category-show');
    }
}
