<?php

namespace Database\Seeders;

use App\Models\Protfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProtfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Protfolio::factory(1)->create();
    }
}
