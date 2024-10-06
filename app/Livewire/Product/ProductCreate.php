<?php

namespace App\Livewire\Product;

use App\Livewire\Forms\ProductForm;
use App\Models\LegoSet;
use App\Models\Theme;
use Livewire\Component;

class ProductCreate extends Component
{
    public ProductForm $form;

    public function create()
    {
        $this->validate();

        LegoSet::create($this->form->all());

        $this->redirect('/products');
    }

    public function render()
    {
        return view('livewire.product.product-create', [
            'themes' => Theme::all()
        ]);
    }
}
