<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
            'name' => 'Free standard',
        ]);
        DB::table('deliveries')->insert([
            'name' => 'Express 10 EUR',
        ]);
    }
}