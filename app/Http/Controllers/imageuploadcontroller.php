<?php

namespace App\Http\Controllers;

use App\Models\image;
use Illuminate\Http\Request;

class imageuploadcontroller extends Controller
{
    public function index()
    {
        return view('image');
    }
    public function imageupload(Request $request)
    {
         
       //upload the image to storage 
        $imageName=time().'.'.$request->image->extension();
        $image=$request->image->storeAs('public/postsimages', $imageName);       
        //store image name 
        $imagedata = new image; 
        $imagedata->name = $imageName;
        $imagedata->save();
 
        session()->flash('success','image upload successfully');       
        return redirect('upload-image');
 
    }
}
