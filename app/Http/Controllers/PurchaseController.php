<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store(Request $request){
        Purchase::Create([
            'user_id' => $request->user_id,
            'course_id' => $request->course_id
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Purchased Course Successfully',
            'code' => 200,
            'data' => null
        ]);
    }
}
