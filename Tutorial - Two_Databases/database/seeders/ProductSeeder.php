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
        
        if (!Product::where('name', 'Teclado')->first()) {
            Product::create([
                'name' => 'Teclado',
            ]);
        }

        if (!Product::where('name', 'Mouse')->first()) {
            Product::create([
                'name' => 'Mouse',
            ]);
        }
        
        if (!Product::where('name', 'Monitor')->first()) {
            Product::create([
                'name' => 'Monitor',
            ]);
        }
        
        if (!Product::where('name', 'Cadeira Gamer')->first()) {
            Product::create([
                'name' => 'Cadeira Gamer',
            ]);
        }
        
        if (!Product::where('name', 'Headset')->first()) {
            Product::create([
                'name' => 'Headset',
            ]);
        }
    }
}
