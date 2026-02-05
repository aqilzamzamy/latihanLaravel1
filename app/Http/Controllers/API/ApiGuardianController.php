<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class ApiGuardianController extends Controller
{
    public function index()
    {
        $guardian = Guardian::all();

        return response()->json([
            'status' => true,
            'message' => 'Data ortu',
            'data' => $guardian
        ]);
    }
}
