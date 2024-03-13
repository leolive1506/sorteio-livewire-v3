<?php

namespace App\Livewire;

use App\Models\Candidate;
use Livewire\Attributes\On;
use Livewire\Component;

class Sorteio extends Component
{
    public $winner = null;

    public function mount()
    {
        sleep(3);
    }

    public function placeholder(): string
    {
        return <<<'HTML'
            <div class="text-white bg-pink-500 font-bold rounded p-5 text-center">
                Carregando...
            </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.sorteio');
    }

    #[On('candidate::created')]
    public function run()
    {
        $this->winner = Candidate::query()->inRandomOrder()->first()?->name;
    }
}
