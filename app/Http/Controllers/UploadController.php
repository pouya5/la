<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function choose() {
    	return view('upload.choose');
    }

    public function upload(Request $request) {
    	$supplier_name = $request->supplier_name;
		$extension = $request->file('file');
		$extension = $request->file('file')->getClientOriginalExtension(); // getting excel extension
		$dir = 'assets/files/';
		$filename = uniqid().'_'.time().'_'.date('Ymd').'.'.$extension;
		$request->file('file')->move($dir, $filename);
    }
}
