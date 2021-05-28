<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'brand_id' => 1,
            'name' => 'Product 1',
            'price' => 1000
        ]);
        DB::table('products')->insert([
            'brand_id' => 2,
            'name' => 'Product 2',
            'price' => 2000
        ]);
        DB::table('products')->insert([
            'brand_id' => 2,
            'name' => 'Product 3',
            'price' => 3000
        ]);
        DB::table('products')->insert([
            'brand_id' => 1,
            'name' => 'Product 4',
            'price' => 4000
        ]);
        DB::table('products')->insert([
            'brand_id' => 1,
            'name' => 'Product 5',
            'price' => 5000
        ]);
    }
}