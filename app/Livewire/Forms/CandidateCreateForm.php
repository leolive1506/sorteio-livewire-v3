<?php

namespace App\Livewire\Forms;

use App\Models\Candidate;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CandidateCreateForm extends Form
{
    #[Rule(['required', 'min:3'])]
    public ?string $name;

    #[Rule(['required', 'email', 'min:3'])]
    public ?string $email;

    public ?string $github;

    public function save(): Candidate
    {
        return Candidate::query()->create($this->all());
    }
}
