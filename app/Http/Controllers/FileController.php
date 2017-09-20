<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function storeFile(request $request)
    {
        if ($request->hasFile('file'))
        {
            $filename = $request->file->getClientOriginalName();
            return $request->file->store('public/upload', $filename);
//            return 'file upload';
        }
        return $request->all();
    }
}
