<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;

class HomeController extends Controller
{
    public function index(){
    	return view('add-item');
    }

    public function viewDistrict(){
    	$districts=District::all();
    	return view('view-list',compact('districts'));
    }

    public function searchDistrict(Request $request){
    	$districts=District::where("name","LIKE","%{$request->input('query')}%")->get();
    	return response()->json($districts);
    }

    public function getDistrict($id){
    	$district=District::find($id);
    	return response()->json($district);
    }
}
