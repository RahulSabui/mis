<?php

namespace App\Http\Controllers\Protect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\StreamOutput;


class ArtisanController extends Controller
{
    protected function runArtisan(Request $request)
    {
        try {
            $stream = fopen('php://temp', 'w+');
            $output = new StreamOutput($stream);
            $optimizeExitCode = Artisan::call('optimize', [], $output);
            rewind($stream);
            $combinedOutput = stream_get_contents($stream);

            if ($optimizeExitCode === 0) {
                echo "$combinedOutput";
            } else {
                echo "Optimize exit code: $optimizeExitCode";
            }
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    protected function runMigration(Request $request) {
        try {
            $stream = fopen('php://temp', 'w+');
            $output = new StreamOutput($stream);
            $seederClasses = ['DesignationSeeder', 'LocationSeeder', 'SpanSeeder', 'StateSeeder', 'UsersTableSeeder']; 
    
            foreach ($seederClasses as $seederClass) {
                $seederExitCode = Artisan::call('db:seed', ['--class' => $seederClass], $output);
                rewind($stream);
                $combinedOutput = stream_get_contents($stream);
    
                if ($seederExitCode === 0) {
                    echo "Seeder $seederClass executed successfully.\n";
                } else {
                    echo "Seeder $seederClass failed. Exit code: $seederExitCode\n";
                    echo "Output: $combinedOutput\n";
                }
            }
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    

}
