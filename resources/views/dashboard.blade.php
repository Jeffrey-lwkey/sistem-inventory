<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">

            {{-- (Opsional) Users atau lainnya --}}
            <div class="relative rounded-xl border border-neutral-200 dark:border-neutral-700 p-5">
                <div class="text-sm text-neutral-500 dark:text-neutral-400">Welcome</div>
                <div class="mt-2 text-xl font-medium text-neutral-900 dark:text-neutral-100">
                    {{ auth()->user()->name }}
                </div>
            </div>
            
            <div class="relative rounded-xl border border-neutral-200 dark:border-neutral-700 p-5">
                <div class="text-sm text-neutral-500 dark:text-neutral-400">Total Products</div>
                <div class="mt-2 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">
                    {{ $productCount }}
                </div>
            </div>

            
            <div class="relative rounded-xl border border-neutral-200 dark:border-neutral-700 p-5">
                <div class="text-sm text-neutral-500 dark:text-neutral-400">Total Categories</div>
                <div class="mt-2 text-3xl font-semibold text-neutral-900 dark:text-neutral-100">
                    {{ $categoryCount }}
                </div>
            </div>

        </div>

    </div>
</x-layouts.app>