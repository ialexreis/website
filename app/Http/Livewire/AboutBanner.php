<?php

namespace App\Http\Livewire;

use App\Models\HomeSetting;
use Livewire\Component;

class AboutBanner extends Component
{
    public HomeSetting $title;
    public HomeSetting $subtitle;
    public HomeSetting $profession;

    public function __construct()
    {
        $settings = HomeSetting::whereIn('code', ['banner-title', 'banner-sub', 'profession'])
            ->where('active', 1)->get();
        foreach ($settings as $setting){
            if ($setting->code == 'banner-title')
                $this->title = $setting;
            elseif ($setting->code == 'banner-sub')
                $this->subtitle = $setting;
            elseif($setting->code == 'profession')
                $this->profession = $setting;
        }
    }

    public function render()
    {
        return view('livewire.about-banner');
    }
}
