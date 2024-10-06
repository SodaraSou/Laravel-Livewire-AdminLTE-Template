<?php

namespace App\Livewire\Theme;

use App\Models\Theme;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class Index extends Component
{
    use WithPagination;

    #[Url]
    public $search = "";
    #[Url]
    public $perPage = 10;
    #[Url]
    public $sortBy = "created_at";
    public $sortDir = "desc";

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function setSortBy($sortBy)
    {
        if ($this->sortBy === $sortBy) {
            $this->sortDir = $this->sortDir === "desc" ? "asc" : "desc";
        } else {
            $this->sortBy = $sortBy;
            $this->sortDir = $this->sortDir === "desc" ? "asc" : "desc";
        }
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.theme.index', [
            'themes' => Theme::where('name', 'like', '%' . $this->search . '%')
                ->orderby($this->sortBy, $this->sortDir)
                ->paginate($this->perPage)
        ]);
    }
}
