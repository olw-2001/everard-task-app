<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parts;

use DB;

class PartsController extends Controller
{
    public function index() {
        $parts = DB::select('select * from parts');
        return view('parts/index', ['parts' => $parts]);
    }
}
