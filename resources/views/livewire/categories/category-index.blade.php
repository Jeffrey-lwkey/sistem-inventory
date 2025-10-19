<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Category') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage Category') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <div>
        @session('success')
            <div class="flex items">
                <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300"
                        xmlns="http://www.w3.org/2000/svg\" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                    </svg>
                    <span class="font-medium">{{ $value }} </span>
                </div>
            </div>
        @endsession
        @can('categories.create')
            <a href="{{ route("categories.create") }}"
                class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                Create Category
            </a>
        @endcan

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4">
            <thead class="text-xs text-white uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Category Name</th>
                    <th scope="col" class="px-6 py-3 w-80">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                        <td class="px-6 py-2 font-medium text-gray-900 dark:text-gray-950">{{$category->id}}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-950">{{$category->category_name}}</td>
                        <td class="px-6 py-2">
                            @can('categories.view')

                                <a href="{{ route("categories.show", $category->id) }}"
                                    class="mr-2 cursor-pointer px-3 py-2 text-xs font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Show
                                </a>
                            @endcan
                            @can('categories.edit')

                                <a href="{{ route("categories.edit", $category->id) }}"
                                    class="mr-2 cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Edit
                                </a>
                            @endcan
                            @can('categories.delete')
                                <button wire:click="delete ({{ $category->id }})"
                                    wire:confirm="Do you want to delete this Product?"
                                    class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                                    Delete
                                </button>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>