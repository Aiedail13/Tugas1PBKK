<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataController extends Controller
{
    
    public function index(){
        $users = DB::table('customers')
                    ->whereBetween('customer_id', [61, 80])->get();
        return view('welcome',['users'=>$users]);
    }
}
