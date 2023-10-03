<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DemoCron extends Command
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
            $spans = [
                'name' => "Span12",
                'slug' => "span1",
                'assignSpanHeadId' => null
            ];
        DB::table('span')->insert($spans);

        $this->info('Data inserted successfully.');
    }
}