<?php

namespace Database\Seeders;

use App\Models\employer;
use App\Models\joblist;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class jobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        employer::factory()->count(10)->has(joblist::factory()->count(2))->create();
    }
}
