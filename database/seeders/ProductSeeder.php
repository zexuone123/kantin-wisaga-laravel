<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Barang::create([
            'name' => 'Risoles',
            'harga' => 100000,
        ]);

        Barang::create([
            'name' => 'Tahu',
            'harga' => 200000,
        ]);

        Barang::create([
            'name' => 'bakpao',
            'harga' => 100000,
            
        ]);
        Barang::create([
            'name' => 'brownies',
            'harga' => 100000,
            
        ]);
        Barang::create([
            'name' => 'putu',
            'harga' => 100000,
          
        ]);
        Barang::create([
            'name' => 'martabak',
            'harga' => 100000,
           
        ]);
        Barang::create([
            'name' => 'bakwan',
            'harga' => 100000,
           
        ]);
    }
}