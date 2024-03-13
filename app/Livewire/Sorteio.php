<?php

namespace App\Livewire;

use App\Models\Candidate;
use Livewire\Attributes\On;
use Livewire\Component;

class Sorteio extends Component
{
    public $winner = null;

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
