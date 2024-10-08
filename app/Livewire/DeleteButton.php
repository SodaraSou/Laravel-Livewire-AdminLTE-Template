<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteButton extends Component
{
    public function test()
    {
        $this->dispatch(
            'alert',
            type: 'success',
            title: 'Test Alert',
            position: 'center',
        );
    }

    public function render()
    {
        return view('livewire.delete-button');
    }
}
