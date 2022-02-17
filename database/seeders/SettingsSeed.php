<?php

namespace Database\Seeders;

use App\Models\HomeSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeed extends Seeder
{

    private array $settings = [
        'banner-title'  => "I'm Alex Reis",
        'banner-sub'    => 'a backend software engineer 👨‍💻, developing software solutions in sectors like politics, automotive, travels and sports. Spending time between Aveiro & Porto.',
        'about-me'      => '',
        'profession'    => 'Backend Engineer @ <a href="https://7egend.cr" class="text-black font-bold hover:underline hover:underline-offset-8">7EGEND</a>.<br>Spend most of my time thinking about startups, developing, motorcycles and surfing.'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $code => $content){
            HomeSetting::create(['code' => $code, 'title' => $code, 'content' => $content, 'active' => true]);
        }
    }
}
