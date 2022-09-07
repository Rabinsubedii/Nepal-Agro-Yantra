<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\QuestionAnswer;
use App\Models\Settings;
use App\Models\Menu;
use App\Models\FooterMenu;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    //
     //
    public function index()
    {
     $service = Service::all();
     return view('frontend.service.index',['service'=>$service]);
    }


    public function allservice()
    {
      $question = QuestionAnswer::all();
      $service = Service::all();   
       $setting = Settings::all();  
       $product = Product::all();  
       $menu = Menu::all();  
        $footermenu = FooterMenu::all();
        $footerproduct = Product::limit(4)->get();
        $footerservice = Service::limit(4)->get();
      return view('frontend.service.allservice',compact(['question', 'service', 'setting','product','menu','footermenu','footerservice','footerproduct']));
    }

    public function create()
    {
        return view ('frontend.service.create');
    }

    public function store(Request $request)
    {
        $service = new Service;
        $service ->title = $request->input('title');
        if($request->hasfile('service_image'))
        {
            $file = $request->file('service_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/services/',$filename);
            $service->service_image=$filename;
        }
        $service->save();
        return redirect()->back()->with('status', 'Service Added Successfully');
    }

    public function edit ($id)
    {
        $service = Service::find($id);
        return view('frontend.service.edit',compact('service'));
    }
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
         $service ->title = $request->input('title');
        if($request->hasfile('service_image'))
        {
             $destination = 'uploads/services/'.$service->service_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('service_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/services/',$filename);
            $service->service_image=$filename;
        }
        $service->update();
        return redirect()->back()->with('status', 'Services Updated Successfully');
    }
    public function destroy($id)
    {
        $service = Service::find($id);
        $destination = 'uploads/services/'.$service->service_image;
        if(File::exists($destination))
        {
          File::delete($destination);
        }
        $service->delete();
          return redirect()->back()->with('status', 'Services Delete Successfully');
    }
}
