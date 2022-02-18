<?php

namespace App\Http\Livewire;

use App\Models\Stack;
use Livewire\Component;

class StackBanner extends Component
{

    public $items;

    public function __construct()
    {
        $this->items = Stack::all();
    }

    public function render()
    {
        return view('livewire.stack-banner');
    }
}
