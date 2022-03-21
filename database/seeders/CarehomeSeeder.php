<?php

namespace Database\Seeders;

use App\Models\Carehome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarehomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carehome::factory()->count(100)->create();
    }
}
