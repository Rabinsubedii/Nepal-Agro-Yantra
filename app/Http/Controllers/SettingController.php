<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function index()

    {
        $setting = Settings::all();
        return view('frontend.setting.index',compact('setting'));    
    }
    
     public function create()
    {
        return view ('frontend.setting.create');
    }

    public function store(Request $request)
    {
        $setting = new Settings;
        $setting ->map = $request->input('map');
        if($request->hasfile('logo'))
        {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/logo/',$filename);
            $setting->logo=$filename;
        }

        if($request->hasfile('footerlogo'))
        {
            $file = $request->file('footerlogo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/footerlogo/',$filename);
            $setting->footerlogo=$filename;
        }
        $setting->save();
        return redirect()->back()->with('status', 'Setting Added Successfully');
    }

        public function edit ($id)
    {
        $setting = Settings::find($id);
        return view('frontend.setting.edit',compact('setting'));
    }

     public function update(Request $request, $id)
    {
        $setting = Settings::find($id);
         $setting ->map = $request->input('map');
        if($request->hasfile('logo'))
        {
             $destination = 'uploads/logo/'.$setting->logo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/logo/',$filename);
            $setting->logo=$filename;
        }

        if($request->hasfile('footerlogo'))
        {
            $destination = 'uploads/abouts/'.$setting->footerlogo;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file = $request->file('footerlogo');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/footerlogo/',$filename);
        $setting->footerlogo=$filename;
        }
        $setting->update();
        return redirect()->back()->with('status', 'Setting Updated Successfully');
    }

     public function destroy($id)
    {
        $setting = Settings::find($id);
        $destination = 'uploads/logo/'.$setting->logo;
        $destination = 'uploads/footerlogo/'.$setting->footerlogo;
        if(File::exists($destination))
        {
          File::delete($destination);
        }
        $setting->delete();
          return redirect()->back()->with('status', 'Settings Deleted Successfully');
    }

}
