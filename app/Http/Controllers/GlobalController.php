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

            $data = $this->GlobalService->state();

            return response()->json(['data'=>$data]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
}

public function designation(){
    try {

        $data = $this->GlobalService->designation();

        return response()->json(['data'=>$data]);
        
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
}

public function droplocation(){
    try {

        $data = $this->GlobalService->dropLocation();

        return response()->json(['data'=>$data]);
        
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
}

public function fileUpload(Request $request)
{
    try {
        if ($request->hasFile('image')) {

            $uploadedFile = $request->file('image');
            $imageUrl = $this->GlobalService->imageUrl($uploadedFile);

            return response()->json([
                'success' => true,
                'message' => 'Image uploaded successfully',
                'url' => $imageUrl,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'No file uploaded',
            ], 400);
        }
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'File upload error: ' . $e->getMessage(),
        ], 500);
    }
}

public function aadharUpload(Request $request)
{
    try {
        if ($request->hasFile('image')) {

            $uploadedFile = $request->file('image');
            $imageUrl = $this->GlobalService->aadharImageUrl($uploadedFile);

            return response()->json([
                'success' => true,
                'message' => 'Image uploaded successfully',
                'url' => $imageUrl,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'No file uploaded',
            ], 400);
        }
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'File upload error: ' . $e->getMessage(),
        ], 500);
    }
}

public function checkSkid(Request $request)
{
    try {
        $skid = $request->input('skid');
        $exists = $this->GlobalService->skidChecking($skid);

        return response()->json(['exists' => $exists]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
}
}
