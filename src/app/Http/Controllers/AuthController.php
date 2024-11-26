<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLogs;
use App\Models\WeightTarget;
use Illuminate\Http\Request\LoginRequest;


class AuthController extends Controller
{
    public function weight_logs()
    {
        $WeightLogs = WeightLog::all();
        return view('/weight_logs', ['WeightLogs' => $WeightLogs]);
    }

    public function create(Request $request)
    {
        $WeightLogs = $request->all();
        return view('/create');
    }

}
