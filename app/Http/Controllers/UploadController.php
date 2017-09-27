<?php

namespace App\Http\Controllers;

use App\File;
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
            $request->file->storeAs('public/upload', $filename);
            $file = new File();
            $file->name=$filename;
            $request->save();
        }
        else
        {
            return "no file selected";
        }
        return $request->all();

	}
		
}
