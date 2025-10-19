<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductShow extends Component
{
    public $products;
    public function mount($id)
    {
        $this->products= Product::with('category')->findOrFail($id);
    }
    public function render()
    {
        return view('livewire.products.product-show');
    }
}
