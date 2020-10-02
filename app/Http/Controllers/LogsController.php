<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $logs = Logs::all();
        return response()->json($logs);
    }

}
