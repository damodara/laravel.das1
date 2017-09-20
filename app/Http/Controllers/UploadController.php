<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
	public function index()
	{
		return view('upload.upload');
	}
	public function store(request $request)
	{
	    if ($request->hasFile('files'))
	    {
            $request->file('files');
            return Storage::putFile('public',$request->file('files'));
        }
        else
        {
            return "no file selected";
        }

	}
		
}
