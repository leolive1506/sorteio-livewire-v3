<?php

namespace App\Livewire\Candidate;

use App\Models\Candidate;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule(['required', 'min:3'])]
    public string $name;

    #[Rule(['required', 'email', 'min:3'])]
    public string $email;

    public string $github;

    public function render()
    {
        $this->validate();
        return view('livewire.candate.create');
    }

    public function save()
    {
        $this->validate();

        Candidate::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'github' => $this->github
        ]);
    }
}
