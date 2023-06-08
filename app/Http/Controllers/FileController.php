<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function download($filename)
    {
        $file = storage_path('app/public/' . $filename . '.zip');
        if (file_exists($file)) {
            return response()->download($file);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }

}
