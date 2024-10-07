<?php

namespace App\Livewire\Product;

use App\Livewire\Forms\ProductForm;
use App\Models\Theme;
use Livewire\Component;

class ProductCreate extends Component
{
    public ProductForm $form;

    public function save()
    {
        $this->form->create();
        return $this->redirect('/products');
    }

    public function render()
    {
        return view('livewire.product.product-create', [
            'themes' => Theme::all()
        ]);
    }
}
