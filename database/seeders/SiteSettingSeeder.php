<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name' => 'adres',
            'data' => 'Sancaktepe ev adres bilgilerim burada',
        ]);

        SiteSetting::create([
            'name' => 'phone',
            'data' => '+90 545 466 1954',
        ]);

        SiteSetting::create([
            'name' => 'email',
            'data' => 'alptarik.salman@gmail.com',
        ]);

        SiteSetting::create([
            'name' => 'map',
            'data' => 'null',
        ]);
    }
}
