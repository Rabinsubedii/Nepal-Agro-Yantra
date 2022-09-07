<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
     $about = About::all();
     return view('frontend.about.index',['about'=>$about]);


    }

    public function create()
    {
        return view ('frontend.about.create');
    }

    public function store(Request $request)
    {
        $about = new About;
        $about ->description = $request->input('description');
        if($request->hasfile('about_image'))
        {
            $file = $request->file('about_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/abouts/',$filename);
            $about->about_image=$filename;
        }
        $about->save();
        return redirect()->back()->with('status', 'About US Added Successfully');
    }

    public function edit ($id)
    {
        $about = About::find($id);
        return view('frontend.about.edit',compact('about'));
    }


    public function update(Request $request, $id)
    {
        $about = About::find($id);
         $about ->description = $request->input('description');
        if($request->hasfile('about_image'))
        {
             $destination = 'uploads/abouts/'.$about->about_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('about_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/abouts/',$filename);
            $about->about_image=$filename;
        }
        $about->update();
        return redirect()->back()->with('status', 'About US Updated Successfully');
    }
    
    public function destroy($id)
    {
        $about = About::find($id);
        $destination = 'uploads/abouts/'.$about->about_image;
        if(File::exists($destination))
        {
          File::delete($destination);
        }
        $about->delete();
          return redirect()->back()->with('status', 'About US Delete Successfully');
    }

    


}
