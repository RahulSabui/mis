<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class dashboardController extends Controller
{
    public function dashboard(){
        return view('welcome');
    }
}
