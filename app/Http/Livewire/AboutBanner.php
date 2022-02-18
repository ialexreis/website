<?php

namespace App\Http\Livewire;

use App\Models\HomeSetting;
use Livewire\Component;

class AboutBanner extends Component
{

    public HomeSetting $about;

    public function __construct()
    {
        $this->about = HomeSetting::where('code', 'about-me')->first();
    }

    public function render()
    {
        return view('livewire.about-banner');
    }
}
