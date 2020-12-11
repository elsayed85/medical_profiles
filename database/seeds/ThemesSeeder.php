<?php

use App\Models\Themes\Theme;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class ThemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themes = collect(["default" , 'one' , "two" , "three"]);
        $themes->map(function($theme){
            Theme::create(['title' => $theme , 'is_available' => rand(0,1) , 'admin_id' => 1]);
        });
    }
}
