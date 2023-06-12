<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Agama',
        ]);
        Category::create([
            'name' => 'Bahasa',
        ]);
        Category::create([
            'name' => 'IPA',
        ]);
        Category::create([
            'name' => 'MTK',
        ]);
        Category::create([
            'name' => 'Sejarah',
        ]);
        Category::create([
            'name' => 'Inggris',
        ]);
        Category::create([
            'name' => 'Fisika',
        ]);
        Category::create([
            'name' => 'Kimia',
        ]);
        Category::create([
            'name' => 'IPS',
        ]);
    }
}
