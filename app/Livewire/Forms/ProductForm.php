<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
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
}
