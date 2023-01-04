<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Categories::create([
            'CategoryID' => '1',
            'CategoryName' => 'women'
        ]);

        Categories::create([
            'CategoryID' => '2',
            'CategoryName' => 'men'
        ]);

        Products::factory(5)->create();
    }
}
