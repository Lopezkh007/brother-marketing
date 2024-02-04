<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UploadFile;
use Illuminate\Http\Request;

class TinymceController extends Controller
{
    public function uploadContent(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = UploadFile::saveFile('/content', $request->file('file'), null);
            return response()->json(['location' => asset('uploads/content/' . $image)]);
        }
        return '';
    }
}
