<div>
    <div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Show products') }}</flux:heading>
    <flux:separator variant="subtle" />
</div>
    <div>
        
        <a href="{{ route("products.index") }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
            Back
        </a>

        <div class="w-150">
            <p class="mt-2"><strong>Item Code:</strong>{{ $products->item_code }}</p>
            <p class="mt-2"><strong>Item Name:</strong>{{ $products->item_name }}</p>
            <p class="mt-2"><strong>Satuan:</strong>{{ $products->satuan }}</p>
            <p class="mt-2"><strong>Stock:</strong>{{ $products->stock }}</p>
            <p class="mt-2"><strong>Category:</strong>{{ $products->category->category_name ?? '-' }}</p>
        </div>
   </div>
</div>
