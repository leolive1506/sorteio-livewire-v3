<div>
    <div wire:stream="winner" class="rounded bg-green-200 border-2 border-green-600 text-center p-10 text-green-700 font-bold text-3xl">
        {{ $winner }}
    </div>
    <div class="flex gap-4">
        <button wire:click="run" class="w-full rounded bg-slate-500 text-center uppercase font-bold hover:bg-slate-900 transition">RUN</button>
        <button wire:click="stop" class="w-full rounded bg-red-500 text-white text-center uppercase font-bold hover:bg-red-600 transition">STOP</button>
    </div>
</div>
