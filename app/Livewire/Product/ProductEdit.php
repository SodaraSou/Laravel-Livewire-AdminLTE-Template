<?php

namespace App\Livewire\Product;

use App\Livewire\Forms\ProductForm;
use App\Models\LegoSet;
use App\Models\Theme;
use Livewire\Component;

class ProductEdit extends Component
{
    public ProductForm $form;

    public function mount(LegoSet $product)
    {
        $this->form->setForm($product);
    }

    public function save()
    {
        $this->form->update();
        $this->redirect('/products');
    }

    public function render()
    {
        return view('livewire.product.product-edit', ['themes' => Theme::all()]);
    }
}
