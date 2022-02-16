<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NavigationBar extends Component
{
    public Collection $pages;

    public function __construct()
    {
        $this->pages = DB::table('app_pages')
            ->where('is_active', true)
            ->get();
    }

    public function render()
    {
        return view('livewire.navigation-bar');
    }
}
