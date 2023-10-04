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
        $arr = [];

        foreach ($activeEmployeeDetails[0] as $key => $value) {
                $arr[] = [
                    "userId"=>1,
                    "date"=>date('Y-m-d'),
                    "employeeId"=>isset($value['employee_id']) ? $value['employee_id'] : "",
                    "name"=>isset($value['name']) ? $value['name'] : "",
                    "skid"=>isset($value['skid']) ? $value['skid'] : "",
                    "email"=>isset($value['email']) ? $value['email'] : "",
                    "phone"=>isset($value['phone']) ? $value['phone'] : "",
                    "reportingManger"=>"",
                    "reportingId"=>isset($value['reportingId']) ? $value['reportingId'] : "",
                    "spanId"=>isset($value['spanId']) ? $value['spanId'] : "",
                    "spanName"=>isset($value['spanName']) ? $value['spanName'] : "",
                    "designationId"=>isset($value['designationId']) ? $value['designationId'] : "",
                    "designationName"=>isset($value['designationName']) ? $value['designationName'] : "",
                    "billable"=>isset($value['billableStatus']) ? $value['billableStatus'] : "",
                    "isTrainee"=>isset($value['istrainee']) ? $value['istrainee'] : "",
                    "UnderNotice"=>isset($value['noticeStatus']) ? $value['noticeStatus'] : "",
                    "Probation"=>isset($value['serviceStatus']) ? $value['serviceStatus'] : "",
                    "Revenue"=>"",
                ];

        }
        DB::table('active_employee_log')->insert($arr);

        $this->info('Data inserted successfully.');
    }
}