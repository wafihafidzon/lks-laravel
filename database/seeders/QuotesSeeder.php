<?php

namespace Database\Seeders;

// use App\Models\Quotes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        App\Models\Quotes::factory(10)->create();
    }
}
