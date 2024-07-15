<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request){
        if($request->search){
            $categories = Category::where('name', 'Like', '%'.$request->search.'%')
                                    ->get();
        }else{
            $categories = Category::all();
        }
        
        return response()->json([
            'status' => 'success',
            'message' => 'Categories Fetched Successfully',
            'code' => 200,
            'data' => $categories,
        ]);
    }
}
