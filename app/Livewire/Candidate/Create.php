<?php

namespace App\Livewire\Candidate;

use App\Livewire\Forms\CandidateCreateForm;
use App\Models\Candidate;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    public CandidateCreateForm $form;

    public function render()
    {
        return view('livewire.candate.create');
    }

    public function save()
    {
        $this->validate();
        $this->form->save();
    }
}
