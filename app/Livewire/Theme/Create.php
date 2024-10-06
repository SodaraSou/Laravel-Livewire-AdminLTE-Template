<?php

namespace App\Livewire\Theme;

use App\Models\Theme;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|min:3')]
    public $name = "";

    public function create()
    {
        $validated = $this->validate();

        Theme::create($validated);

        $this->redirect('/themes');
    }

    public function render()
    {
        return view('livewire.theme.create');
    }
}
