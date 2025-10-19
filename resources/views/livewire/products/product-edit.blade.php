<div>
    <div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Edit Products') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">{{ __('Edit your Products') }}</flux:subheading>
    <flux:separator variant="subtle" />
</div>
    <div>
        
        <a href="{{ route("products.index") }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
            Back
        </a>

        <div class="w-150">
                <form wire:submit.prevent="submit" class="mt-6 space-y-6">
                <flux:input wire:model="item_code" type="item_code" label="Item Code" placeholder="Item Code" />
                <flux:input wire:model="item_name" label="Item Name" placeholder="Item Name" />
                <flux:input wire:model="satuan" label="Satuan" placeholder="Satuan" />
                <flux:input wire:model="stock" label="Stock" placeholder="Stock" />
                <label class="block text-sm font-medium text-gray-300 mb-1">Category</label>
                <select wire:model="category_id" class="block w-full rounded-lg border border-gray-700 bg-gray-700 text-gray-100 px-3 py-2">
                <option class="text-sm" value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ (string) $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                <flux:button type="submit" variant="primary">Submit</flux:button>
            </form>
        </div>
    </div>

</div>
