<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\EmployeeService;
use Illuminate\Support\Facades\DB;
use Mockery\Undefined;

class DemoCron extends Command
{
    public function __construct(EmployeeService $employeeService)
    {
        parent::__construct();
        $this->employeeService = $employeeService;
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
        $activeEmployeeDetails = $this->employeeService->activeEmployeelist(null, null, null, null);
        // dd( $activeEmployeeDetails);
        $data = [
            'activeEmployeeDetails' => $activeEmployeeDetails[0],
            'allCount' => $activeEmployeeDetails[1],
            'designationName' => $activeEmployeeDetails[2],
            'designationEmployeeCount' => $activeEmployeeDetails[3],
            'spanName' => $activeEmployeeDetails[4],
            'spanEmployeeCount' => $activeEmployeeDetails[5]

        ];

        DB::table('active_employee_log')->insert([
            "userId"=>1,
            "date"=>date("Y-m-d"),
            "dateLog"=>json_encode($data)
        ]);

        $this->info('Data inserted successfully.');
    }
}