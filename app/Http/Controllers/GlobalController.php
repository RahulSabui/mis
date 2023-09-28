<?php

namespace App\Http\Controllers;

use App\Services\GlobalService;
use Illuminate\Http\Request;
use App\Models\state;
use App\Models\Designation;


class GlobalController extends Controller
{
    protected $GlobalService;

    public function __construct(GlobalService $GlobalService)
    {
        $this->GlobalService = $GlobalService;
    }

    public function states(){
        try {

            $state = $this->GlobalService->state();

            $data = state::all();

            return response()->json($data);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
}

public function designation(){
    try {

        //$state = $this->GlobalService->state();

        $data = Designation::all();

        return response()->json(['data'=>$data]);
        
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
}
}
