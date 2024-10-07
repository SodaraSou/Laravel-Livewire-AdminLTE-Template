<?php

namespace App\Livewire\Forms;

use App\Models\LegoSet;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    public LegoSet $legoSet;

    #[Validate('required|min:1')]
    public $name = "";

    #[Validate('required|min:1')]
    public $set_number = "";

    #[Validate('required|min:1')]
    public $theme_id = null;

    #[Validate('required|min:1')]
    public $piece_count = null;

    #[Validate('required|min:1')]
    public $age_range = "";

    #[Validate('required|min:1')]
    public $price = null;

    #[Validate('required|min:1')]
    public $release_date = null;

    #[Validate('required|min:1')]
    public $stock_quantity = null;

    public function setForm(LegoSet $legoSet)
    {
        $this->legoSet = $legoSet;
        $this->name = $legoSet->name;
        $this->set_number = $legoSet->set_number;
        $this->theme_id = $legoSet->theme_id;
        $this->piece_count = $legoSet->piece_count;
        $this->age_range = $legoSet->age_range;
        $this->price = $legoSet->price;
        $this->release_date = $legoSet->release_date;
        $this->stock_quantity = $legoSet->stock_quantity;
    }

    public function create()
    {
        $this->validate();
        LegoSet::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $this->legoSet->update($this->all());
    }
}
