<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designations = [
            [
                'name' => 'Manager',
                'slug' => 'manager',
            ],
            [
                'name' => 'Team Lead',
                'slug' => 'team_lead',
            ],
            [
                'name' => 'SME',
                'slug' => 'sme',
            ],
            [
                'name' => 'TL',
                'slug' => 'tl',
            ],
            [
                'name' => 'Deputy Manager',
                'slug' => 'deputymanager',
            ],
            [
                'name' => 'Senior Manager',
                'slug' => 'seniormanager',
            ],
            [
                'name' => 'Assistant Manager',
                'slug' => 'assistantmanager',
            ],
            [
                'name' => 'Span Head',
                'slug' => 'spanhead',
            ],
        ];

        DB::table('designation')->insert($designations);
    }
}
