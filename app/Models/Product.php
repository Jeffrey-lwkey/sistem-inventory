<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=["item_code","item_name", "satuan","stock",'category_id'];
    protected $casts = ['category_id' => 'integer'];

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
