<div class="p-6">
    <form wire:submit="save">
        <div>
            <x-input-label>Name</x-input-label>
            <x-text-input name="name" wire:model.live="name" />
            @error('name') <div class="text-red-100 text-bold text-sm">{{ $message }}</div> @enderror
        </div>
        <div>
            <x-input-label>E-mail</x-input-label>
            <x-text-input name="email" wire:model.live="email" />
            @error('email') <div class="text-red-100 text-bold text-sm">{{ $message }}</div> @enderror
        </div>
        <div>
            <x-input-label>Github</x-input-label>
            <x-text-input name="github" wire:model="github" />
            @error('github') <div class="text-red-100 text-bold text-sm">{{ $message }}</div> @enderror
        </div>

        <x-primary-button type="submit">Save</x-primary-button>
    </form>
</div>
