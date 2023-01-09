<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

use DB;

class PartController extends Controller
{
    public function index() {
        return part::all();
        // $part = DB::select('select * from parts');
        /*, ['parts' => $part]*/
        //return view('parts/index', ['part' => $part]);
    }

    public function retView() {
        return view('parts/index');
    }
}
