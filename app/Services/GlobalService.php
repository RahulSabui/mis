<?php
namespace App\Services;

use App\Models\state;
class GlobalService
{
    public function state(){
       return $data = state::all();
    }
}