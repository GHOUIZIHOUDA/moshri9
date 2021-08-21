<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function save(Request $request){
        $statuses = Status::create([
        'status'=>$request->status,
        return view('pages.dashproj');
    ]);
    public function index(){
        $statuses = Status::all();
        return view('pages.dashproj');
    }
}
