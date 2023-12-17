<?php

namespace Database\Seeders;

use App\Models\Sold_item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoldItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sold_item::factory(10)->create();
    }
}
