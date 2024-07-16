<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModuleData;

class ModuleDataController extends Controller
{
    public function index($module){
        $datas = ModuleData::where('module_id', $module)
                            ->get();

    return response()->json([
        'status' => 'success',
        'message' => 'Modules Fetched Successfully',
        'code' => 200,
        'data' => $datas,
    ]);
    }
}
