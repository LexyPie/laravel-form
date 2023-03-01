<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function upload(Request $request) {
            //dd($request -> file('uploaded_img'));
            //$request -> file('uploaded_img');
            $preview_img = $request -> file('uploaded_img') ->getClientOriginalName();
            $request->uploaded_img->storeAs('public/images',$preview_img);
            return view('upload-status', compact('preview_img'));
        }
}
