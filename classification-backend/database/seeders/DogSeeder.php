<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dog;

class DogSeeder extends Seeder
{
    public function run()
    {
        Dog::create([
            'breed_name' => 'Golden Retriever',
            'size' => 'Large',
            'hair_color' => 'Golden',
        ]);

    }
}
