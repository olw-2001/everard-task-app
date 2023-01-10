<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

use DB;

class PartController extends Controller
{
    // Fetches the data from the database and returns the view with that data
    public function index() {
        $part = DB::select('select * from parts');
        return view('parts/index', ['parts' => $part]);
    }

    // Inserting data into the database
    public function insPart(Request $request) {

        $part = new Part;

        $part->part_number = $request->partNum;
        $part->stock_quantity = $request->partQuantity;
        $part->part_description = $request->partDesc;

        $part->save();
        return redirect()->back();
    }

    // Deleting data from database
    public function delete($id) {
        $parts = Part::find($id);
        $parts->delete();
        return redirect()->back();
    }

    public function update($id) {
        return redirect()->back();
    }
}
