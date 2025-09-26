<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class jobseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Job::factory(30)->create();
    }
}
