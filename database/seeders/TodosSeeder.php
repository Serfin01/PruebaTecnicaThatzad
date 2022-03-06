<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'title' => '5240',
            'ciudad' => 'Madrid',
        ]);
        DB::table('todos')->insert([
            'title' => '5240',
            'ciudad' => 'Barcelona',
        ]);
    }
}
