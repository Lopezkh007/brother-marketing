<?php

namespace App\Http\Controllers;

use App\Models\UploadFile;
use Illuminate\Http\Request;

class FileStorageController extends Controller
{
    public function uploadImage(Request $request)
    {
        $image = UploadFile::saveFile('/' . $request->dir, $request->file('image'), null);
        if($request->hasFile("image2")){
            $image = UploadFile::saveFile('/' . $request->dir, $request->file('image2'), null);
        }
        if($request->hasFile("image3")){
            $image = UploadFile::saveFile('/' . $request->dir, $request->file('image3'), null);
        }
        if ($request->hasFile("image4")) {
            $image = UploadFile::saveFile('/' . $request->dir, $request->file('image4'), null);
        }
        if ($request->hasFile("image5")) {
            $image = UploadFile::saveFile('/' . $request->dir, $request->file('image5'), null);
        }
        if ($request->hasFile("image6")) {
            $image = UploadFile::saveFile('/' . $request->dir, $request->file('image6'), null);
        }
        return $image;
    }

    public function deleteImage(Request $request)
    {
        $fileName = strip_tags(file_get_contents("php://input"));
        UploadFile::deleteFile('/' . $request->dir, $fileName);
        return 'success';
    }

    public function uploadEditorImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = UploadFile::saveFile('/editor-image/' . $request->dir, $request->file('file'), null);
            return response()->json(['location' => asset('uploads/editor-image/' . $request->dir . '/' . $image)]);
        }
        return '';
    }
    
}
