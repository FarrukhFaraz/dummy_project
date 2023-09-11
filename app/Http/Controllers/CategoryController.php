<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    function index(){
        $category = Categories::all();
        $response = [
            'status' => 200,
            'result' => true,
            'message' => 'Data found successfully',
            'data'=>$category,
        ];
        return response($response, 200);
    }
}
