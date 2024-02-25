<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Dog::create([
            'breed_name' => 'West Highland Terrier (Westy)',
            'size' => 'Pequeño',
            'hair_color' => 'Blanco',
            'image_path' => null,
        ]);
    }
}
