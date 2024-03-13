<?php

namespace App\Livewire;

use App\Models\Candidate;
use Livewire\Component;

class Sorteio extends Component
{
    public $winner = null;

    public function render()
    {
        return view('livewire.sorteio');
    }

    public function run()
    {
        $this->winner = Candidate::query()->inRandomOrder()->first()?->name;
    }
}
