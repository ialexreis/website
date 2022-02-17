<?php

namespace App\Http\Livewire;

use App\Models\HomeSetting;
use Livewire\Component;

class AboutBanner extends Component
{

    public HomeSetting $content;

    public function __construct()
    {
        $this->content = HomeSetting::where('code', 'about-me')->get();
    }

    public function render()
    {
        return view('livewire.about-banner');
    }
}
