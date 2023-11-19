<div>
    {{-- In work, do what you enjoy. --}}
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <div class="grid grid-cols-5 gap-2">
            <div class="relative mt-2 col-span-4">
                <input type="{{ $visible ? 'text' : 'password' }}" name="password" id="password" wire:model="password" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full">
                <button class="absolute inset-y-0 right-0 pr-3 flex items-center" wire:click="togglePassword">
                    Show/Hide
                </button>
            </div>
        </div>
    </div>

    <div class="mt-2">
        <button type="button" wire:click="generatepassword">Generate</button>
    </div>
</div>
