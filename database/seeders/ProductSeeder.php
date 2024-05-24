<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Ürün 1',
            'image' => 'images/shoe_1.jpg',
            'category_id' => 1,
            'short_text' => 'Kasabilgi',
            'price' => 100,
            'size' => 'Small',
            'color' => 'Beyaz',
            'quantity' => 10,
            'status' => '1',
            'content' => '<p>Ürün gayet güzel</p>'
        ]);

        {
            Product::create([
                'name' => 'Ürün 2',
                'image' => 'images/cloth_2.jpg',
                'category_id' => 2,
                'short_text' => 'Kasabilgi 2',
                'price' => 100,
                'size' => 'Large',
                'color' => 'Siyah',
                'quantity' => 5,
                'status' => '1',
                'content' => '<p>Ürün açıklama</p>'
            ]);
        }
    }
}
