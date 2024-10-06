<?php

namespace App\Livewire\Theme;

use App\Models\Theme;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    #[Validate("required|min:2")]
    public $name = "";
    public $theme;

    public function mount(Theme $theme)
    {
        $this->name = $theme->name;
        $this->theme = $theme;
    }

    public function update()
    {
        $validated = $this->validate();
        $this->theme->update($validated);
        $this->redirect('/themes');
    }

    public function render()
    {
        return view('livewire.theme.edit');
    }
}
