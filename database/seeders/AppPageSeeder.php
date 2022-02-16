<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppPageSeeder extends Seeder
{

    private array $pages = [
        'about-me'  => 'About me',
        'blog'      => 'Blog',
        'uses'      => 'Uses'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->pages as $slug => $description){
            DB::table('app_pages')->insert([
                'slug'          => $slug,
                'description'   => $description,
                'is_active'     => true,
                'created_at'    => Carbon::now(),
                'updated_at'     => Carbon::now()
            ]);
        }
    }
}
