<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Ubah ini menjadi 'use App\Models\Product;'

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan 5 produk jersey bola
        Product::create([
            'nama' => 'Jersey Real Madrid',
            'harga' => 1500000,
            'stok' => 30,
            'berat' => 0.5,
            'gambar' => 'public/images/real_madrid.jpg',
            'kondisi' => 'Baru',
            'deskripsi' => 'Jersey dengan kualitas terbaik dari produk lokal'
        ]);
        
        Product::create([
            'nama' => 'Jersey Paris Saint Germain',
            'harga' => 1200000,
            'stok' => 25,
            'berat' => 0.6,
            'gambar' => 'public/images/psg.jpg',
            'kondisi' => 'Baru',
            'deskripsi' => 'Jersey dengan kualitas terbaik dari produk lokal'
        ]);

        Product::create([
            'nama' => 'Jersey Borussia Dortmund',
            'harga' => 1190000,
            'stok' => 35,
            'berat' => 0.7,
            'gambar' => 'public/images/dortmund.jpg',
            'kondisi' => 'Baru',
            'deskripsi' => 'Jersey dengan kualitas terbaik dari produk lokal'
        ]);

        Product::create([
            'nama' => 'Jersey Bayern Munchen',
            'harga' => 1210000,
            'stok' => 40,
            'berat' => 0.8,
            'gambar' => 'public/images/bayern_munchen.jpg',
            'kondisi' => 'Baru',
            'deskripsi' => 'Jersey dengan kualitas terbaik dari produk lokal'
        ]);

        Product::create([
            'nama' => 'Jersey Manchester United',
            'harga' => 700000,
            'stok' => 45,
            'berat' => 0.9,
            'gambar' => 'public/images/manchester_united.jpg',
            'kondisi' => 'Bekas',
            'deskripsi' => 'Jersey dengan kualitas terbaik dari produk lokal'
        ]);
    }
}
