<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;

class Search extends Component
{
    #[Url()]
    public $search;

    public function render()
    {
        $product = Product::orderByDesc('created_at')->where('name', 'like', "%{$this->search}%")->get();
        return view('livewire.search', compact('product'));
    }
}
