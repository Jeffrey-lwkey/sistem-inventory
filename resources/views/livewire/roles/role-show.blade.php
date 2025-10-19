<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Roles') }}</flux:heading>
        <flux:separator variant="subtle" />
    </div>
    <div>

        <a href="{{ route("roles.index") }}"
            class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
            Back
        </a>

        <div class="w-150">
            <p class="mt-2"><strong>Item Code:</strong>{{ $role->name }}</p>
            <p class="mt-2"><strong>Permission:</strong>{{ $role->name }}</p>
            @if ($role->permissions)
                @foreach ($role->permissions as $permission)
                    <flux:badge size="sm" class="mr-2 mb-2" variant="solid" color="green">{{$permission->name}}</flux:badge>
                @endforeach
            @endif
        </div>
    </div>
</div>