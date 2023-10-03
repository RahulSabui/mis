<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spans = [];

        for ($i = 1; $i <= 10; $i++) {
            $spans[] = [
                'name' => "Span $i",
                'slug' => "span$i",
                'assignSpanHeadId' => null
            ];
        }

        DB::table('span')->insert($spans);
    }
}