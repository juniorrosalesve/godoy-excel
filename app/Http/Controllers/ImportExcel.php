<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BienesImport;

class ImportExcel extends Controller
{
    public function index() {
        return view('import_excel');
    }

    public function import(Request $request) 
    {
        $excel  =   Excel::import(new BienesImport, $request->file('import_file_excel'));
        return redirect()->route('Home');
    }
}
