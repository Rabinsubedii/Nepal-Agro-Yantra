<?php

namespace App\Http\Controllers;
use App\Models\Topcard;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class TopcardController extends Controller
{
    //
    public function index()
    {
     $topcard = Topcard::all();
     return view('frontend.topcard.index',['topcard'=>$topcard]);
    }
    
    public function create()
    {
        return view ('frontend.topcard.create');
    }
    
    public function store(Request $request)
    {
        $topcard = new Topcard;
        $topcard ->title = $request->input('title'); 
        $topcard ->description = $request->input('description'); 
        if($request->hasfile('icon'))
        {
            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/cardimg/',$filename);
            $topcard->icon=$filename;
        }
        $topcard->save();
        return redirect()->back()->with('status', 'Card Added Successfully');
    }
    
    public function edit ($id)
    {
        $topcard = Topcard::find($id);
        return view('frontend.topcard.edit',compact('topcard'));
    }
    
    public function update(Request $request, $id)
    {
        $topcard = Topcard::find($id);
         $topcard ->title = $request->input('title');
         $topcard ->description = $request->input('description');
        if($request->hasfile('icon'))
        {
             $destination = 'uploads/cardimg/'.$topcard->icon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/cardimg/',$filename);
            $topcard->icon=$filename;
        }
        $topcard->update();
        return redirect()->back()->with('status', 'Card Updated Successfully');
    }
    
    public function destroy($id)
    {
        $topcard = Topcard::find($id);
        $destination = 'uploads/cardimg/'.$topcard->icon;
        if(File::exists($destination))
        {
          File::delete($destination);
        }
        $topcard->delete();
        return redirect()->back()->with('status', 'Card Deleted Successfully');
    }


}
