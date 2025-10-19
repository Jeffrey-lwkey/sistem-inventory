<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProductCreate extends Component
{
    public $item_code, $item_name , $satuan, $stock, $category_id;
    public $categories = [];
    public function render()
    {
        return view('livewire.products.product-create');
    }
        public function mount()
    {
        $this->categories = Category::orderBy('category_name')->get();
    }
        public function submit()
    {


        $this->validate([
            
            "item_code" => "required",
            "item_name" => "required",
            "satuan" => "required",
            "stock" => "required",
            'category_id' => 'required|exists:categories,id',

        ]);

        Product::create([
            "item_code" => $this->item_code,
            "item_name" => $this->item_name,
            "satuan" => $this->satuan,
            "stock" => $this->stock,
            'category_id' => $this->category_id,
        ]);

        return to_route('products.index')->with("success", "Product Created.");
    }
}
