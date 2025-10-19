<?php

namespace App\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public $item_code, $item_name , $satuan, $stock, $category_id;
    public $categories = [];
    public Product $product;



    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
        $this->item_code = $this->product->item_code;
        $this->item_name = $this->product->item_name;
        $this->satuan = $this->product->satuan;
        $this->stock = $this->product->stock;
        $this->category_id = (string) $this->product->category_id;
        $this->categories = Category::orderBy('category_name')->get();
    }
    public function render()
    {
        return view('livewire.products.product-edit');
    }
   protected function rules(): array
    {
        return [
            'item_code'   => 'required',
            'item_name'   => 'required',
            'satuan'      => 'required',
            'stock'       => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function submit()
    {
        $this->validate();

        $this->product->update([
            'item_code'   => $this->item_code,
            'item_name'   => $this->item_name,
            'satuan'      => $this->satuan,
            'stock'       => $this->stock,
            'category_id' => (int) $this->category_id,
        ]);

        return to_route('products.index')->with('success', 'Product Updated.');
    }

}
