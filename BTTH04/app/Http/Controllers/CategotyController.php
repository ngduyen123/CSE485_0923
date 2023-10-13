<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategotyController extends Controller
{
    public function index(){
        //truy van du lieu
        $categories = Category::all();
        //do ra view
        return view('categories.index', compact('categories'));
        // return view(view:'categories.index', compact(var_name:'categories'));
        //echo "Index from Category Controller";
    }
    public function create(){
        echo"Create from Category Controller";

    }
    public function store(Request $request){

    }
    public function show(string $id){

    }
    public function edit(string $id)
    {

    }
    public function update(Request $request, string $id){

    }
    public function destroy(string $id){

    }
}
