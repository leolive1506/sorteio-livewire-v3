<div class="p-6">
    <div>
        <x-text-input name="serach" wire:model.live="search" />
    </div>

    <div class="text-blue-300">{{ $search }}</div>

    @foreach($this->candidates as $candidate)
        <div class="text-white">
            {{ $candidate->name }}
        </div>
    @endforeach
</div>
