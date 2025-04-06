<?php

namespace Database\Seeders;

use App\Models\employee;
use App\Models\job;
use App\Models\tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = tag::factory(3)->create();
        job::factory(20)->hasAttached($tags)->create(new Sequence(['featured'=>false,'schedule'=>'Full Time'],['featured'=>true,'schedule'=>'Part Time']));
        employee::factory(20)->create();
    }
}
