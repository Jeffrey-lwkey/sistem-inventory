<div>
    <div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Create Category') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">{{ __('Create Products Category') }}</flux:subheading>
    <flux:separator variant="subtle" />
</div>
    <div>
        
        <a href="{{ route("categories.index") }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
            Back
        </a>

        <div class="w-150">
            <form wire:submit="submit" class="mt-6 space-y-6">
                <flux:input wire:model="category_name" label="Category Name" placeholder="Category Name" />
                <flux:button type="submit" variant="primary">Submit</flux:button>
            </form>
        </div>



    </div>

</div>
