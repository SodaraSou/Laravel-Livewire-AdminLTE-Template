<?php

namespace App\Livewire\Product;

use App\Models\LegoSet;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    #[Url]
    public $search = "";
    #[Url]
    public $perPage = 10;
    #[Url]
    public $sortBy = "created_at";
    public $sortDir = 'desc';

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

    public function delete(LegoSet $legoSet)
    {
        $legoSet->delete();
    }

    public function render()
    {
        return view('livewire.product.product-index', [
            'products' => LegoSet::with('theme')
                ->where('name', 'like', '%' . $this->search . '%')
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perPage),
        ]);
    }
}
